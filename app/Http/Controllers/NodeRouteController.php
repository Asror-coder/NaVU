<?php

namespace App\Http\Controllers;

use App\Models\Node;
use App\Models\NodeRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NodeRouteController extends Controller
{
    /**
     * Display a listing of routes of specific node.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $routes = NodeRoute::where('node1', $id)->orWhere('node2', $id)->get();

        $nodeController = new NodeController;

        $fullInfoRoutes = [];

        foreach ($routes as $route) {
            if ($route->node1 == $id) $routeId = $route->node2;
            else $routeId = $route->node1;

            array_push($fullInfoRoutes, $nodeController->show($routeId));
        }

        return $fullInfoRoutes;
    }

    public function getRoutes($id)
    {
        return NodeRoute::where('node1', $id)->orWhere('node2', $id)->get();
    }

    /**
     * Store a newly created route between two nodes in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'node1'=>'required',
            'node2'=>'required',
        ]);

        if ($request->node1 == $request->node2) {
            return response([
                'message' => ['A node cannot be routed to itself.']
            ]);
        }

        if (!Node::find($request->node1) || !Node::find($request->node2) ) {
            return response([
                'message' => ['One or both nodes do not exist.']
            ]);
        }

        $tmpRoute1 = NodeRoute::where('node1', $request->node1)->where('node2', $request->node2)->get();
        $tmpRoute2 = NodeRoute::where('node1', $request->node2)->where('node2', $request->node1)->get();

        if (count($tmpRoute1) != 0 || count($tmpRoute2) != 0 ) {
            return response([
                'message' => ['This route is already registered in the system.']
            ]);
        }

        $nodeRoute = new NodeRoute();

        $nodeRoute->node1 = $request->node1;
        $nodeRoute->node2 = $request->node2;

        $nodeRoute->save();

        return $nodeRoute;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $tmpNode = nodeRoute::where('node1', $request->node1)->where('node2', $request->node2)->get();
        if(count($tmpNode) != 0)
            nodeRoute::where('node1', $request->node1)->where('node2', $request->node2)->delete();
        else
            nodeRoute::where('node2', $request->node1)->where('node1', $request->node2)->delete();
    }
}
