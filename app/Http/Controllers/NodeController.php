<?php

namespace App\Http\Controllers;

use App\Models\Node;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NodeController extends Controller
{
    /**
     * Display a listing of all nodes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Node::all();
    }

    public function getFloorNodes($floor)
    {
        $nodes = Node::where('floor', $floor)->get();

        $nodeRouteController = new NodeRouteController;
        foreach($nodes as $node) {
            $routes = $nodeRouteController->index($node->id);
            $node->routes = $routes;
        }

        return $nodes;
    }

    /**
     * Store a newly created node in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request,[
                'name'=>'required',
                'area'=>'required',
                'floor'=>'required'
            ]);

            //Storing function should disabled at the end of development period

           /*
            * $node = new Node();
            *
            * $node->name = $request->name;
            * $node->area = $request->area;
            * $node->floor = $request->floor;
            *
            * $node->save();
            *
            *
            * return Node::find($node->id);
            */

            return Node::find(170);

        } catch (QueryException $ex) {
            return response([
                'message' => ['A node with this name is already registered in the system.']
            ]);
        }
    }

    /**
     * Display the specified node.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Node::find($id);
    }

    /**
     * Set number of users of the specified node in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setNumUsers(Request $request, $id)
    {
        $this->validate($request,[
            'num_users'=>'required',
        ]);

        $node = Node::find($id);

        if ($node) {
            $node->update(['num_users' => $request->num_users]);

            $userPerArea = $node->area / $node->num_users;

            switch ($userPerArea) {
                case $userPerArea >= 5.00:
                    $node->update(['crowd_status_id' => 1]);
                    break;
                case $userPerArea >= 3.00:
                    $node->update(['crowd_status_id' => 2]);
                    break;
                case $userPerArea >= 2.25:
                    $node->update(['crowd_status_id' => 3]);
                    break;
                case $userPerArea >= 2.00:
                    $node->update(['crowd_status_id' => 4]);
                    break;
                case $userPerArea >= 1.75:
                    $node->update(['crowd_status_id' => 5]);
                    break;
                case $userPerArea > 0:
                    $node->update(['crowd_status_id' => 6]);
                    break;
            }

            $node->update(['updated_at' => Carbon::now()]);

            return $node;
        } else {
            return response([
                'message' => ['There is no such node in the system.']
            ]);
        }
    }

    public function setCOtwo($id, Request $request) {

        $this->validate($request,[
            'co2'=>'required',
        ]);

        $node = Node::find($id);

        if ($node) {
            $node->update(['co2' => $request->co2]);

            switch ($request->co2) {
                case $request->co2 <= 500:
                    $node->update(['co2_crowd_level' => 1]);
                    break;
                case $request->co2 <= 800:
                    $node->update(['co2_crowd_level' => 2]);
                    break;
                case $request->co2 <= 1000:
                    $node->update(['co2_crowd_level' => 3]);
                    break;
                case $request->co2 <= 1200:
                    $node->update(['co2_crowd_level' => 4]);
                    break;
                case $request->co2 <= 1400:
                    $node->update(['co2_crowd_level' => 5]);
                    break;
                case $request->co2 > 1400:
                    $node->update(['co2_crowd_level' => 6]);
                    break;
            }

            $node->update(['updated_at' => Carbon::now()]);

            return $node;
        } else {
            return response([
                'message' => ['There is no such node in the system.']
            ]);
        }
    }

    public function setSimulation($id, Request $request)
    {
        $node = Node::find($id);

        if ($request->type == 1) $node->simulation_1 = $request->crowd_status;
        else if ($request->type == 2) $node->simulation_2 = $request->crowd_status;

        $node->updated_at = Carbon::now();
        $node->save();
    }

    /**
     * Remove the specified node and its routes from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nodeRouteController = new NodeRouteController;
        $routes = $nodeRouteController->getRoutes($id);

        foreach ($routes as $route) {
            $request = new Request();
            $request->node1 = $route->node1;
            $request->node2 = $route->node2;

            $nodeRouteController->destroy($request);
        }

        Node::find($id)->delete();
    }
}
