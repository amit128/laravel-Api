<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\players;
use App\Http\Resources\Players as PlayersResource;

class ApiController extends Controller
{
    public function index()
    {
        $playerlist=players::all();
            $response = [
                'success' => true,
                'players'    => PlayersResource::collection($playerlist),
            ];
            return response()->json($response, 200);
    
     }
}
