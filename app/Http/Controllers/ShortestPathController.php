<?php

namespace App\Http\Controllers;

use App\Models\Node;
use Illuminate\Http\Request;

class ShortestPathController extends Controller
{
    // Array of elements, where each element is [visited_node, previous_node, distance]
    private $nodes_visited = array();

    // Array of elements, where each element is [next_priority_node, previous_node, distance]
    private $nodes_queue = array();

    public function getShortestPath(Request $request) {
        $this->validate($request,[
            'startId'=>'required',
            'endId'=>'required',
        ]);

        $startId = $request->startId;
        $endId = $request->endId;

        if ($startId == $endId) {
            return response([
                'message' => ['You are already at your destination.']
            ]);
        }

        if (!Node::find($startId) || !Node::find($endId) ) {
            return response([
                'message' => ['One or both nodes do not exist.']
            ]);
        }

        $this->dijkstra($startId, $endId);

        return $this->getPath();

        return $request;
    }

    private function getPath() {
        $nodeController = new NodeController;

        $path = array();

        $node = end($this->nodes_visited);

        while ($node['distance'] != 0) {
            array_unshift($path, $nodeController->show($node['nodeId']));

            $element = $this->searchNode($node['prevNodeId'],$this->nodes_visited);
            $node = $this->nodes_visited[$element];
        }

        // Add start node
        array_unshift($path, $nodeController->show($node['nodeId']));

        return $path;
    }

    // Generate shortest path according to Dijkstra's algorithm
    private function dijkstra($startId, $endId) {
        // Current node
        $curNode = array(
            'nodeId' => $startId,
            'prevNodeId' => 0,
            'distance' => 0
        );

        $nodeRouteController = new NodeRouteController();

        while($curNode['nodeId'] != $endId) {
            $curNodeRoutes = $nodeRouteController->index($curNode['nodeId']);

            foreach($curNodeRoutes as $curNodeRoute) {

                $distance = $curNodeRoute->crowd_status_id + $curNode['distance'];

                $newNode = array(
                    'nodeId' => $curNodeRoute->id,
                    'prevNodeId' => $curNode['nodeId'],
                    'distance' => $distance
                );

                if ($this->searchNode($curNodeRoute->id, $this->nodes_queue)) {
                    $tmpNode = $this->nodes_queue[$this->searchNode($curNodeRoute->id, $this->nodes_queue)];

                    if ($tmpNode['distance'] > $newNode['distance']) {
                        // Remove old node where the distance was longer
                        unset($this->nodes_queue[$this->searchNode($curNodeRoute->id, $this->nodes_queue)]);

                        $this->addNodeToQueue($newNode);
                    }
                }
                else $this->addNodeToQueue($newNode);
            }

            array_push($this->nodes_visited, $curNode);

            $curNode = array_pop($this->nodes_queue);
        }

        // Add end node
        array_push($this->nodes_visited, $curNode);
    }

    // Add node to queue according to its distance to start node
    private function addNodeToQueue($newNode) {
        if (empty($this->nodes_queue)) {
            array_push($this->nodes_queue, $newNode);
        }
        else {
            $tmpArray = array();

            for($i = (count($this->nodes_queue)-1); $i >= 0; $i--) {
                if ($newNode['distance'] >= $this->nodes_queue[$i]['distance']) {
                    $tmpNode = array_pop($this->nodes_queue);
                    array_push($tmpArray, $tmpNode);
                }
            }

            array_push($this->nodes_queue, $newNode);

            while (!empty($tmpArray)) {
                $tmpNode = array_pop($tmpArray);
                array_push($this->nodes_queue, $tmpNode);
            }
        }
    }

    // Search node in the queue
    private function searchNode($id, $nodes) {
        foreach ($nodes as $key => $node) {
            if ($node['nodeId'] === $id) {
                return $key;
            }
        }
        return null;
    }
}
