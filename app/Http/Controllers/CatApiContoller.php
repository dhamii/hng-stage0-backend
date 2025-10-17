<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class CatApiContoller extends Controller
{
    public function index(){
        $response = Http::get('https://catfact.ninja/fact');
        $data = $response->json ();
        if(!$data['fact']){
            return response()->json([
                'status' => 'error',
                'message'=>'Could not fetch facts'
            ], 500);
        }
        $data = $data['fact'];
        return response()->json([
            'status' => 'success',
            'user'=>[
                'email'=>"teddydhamivee@gmail.com",
                'name'=>'Tedunjaye Oluwadamilola Joseph',
                'stack'=>'PHP'
            ],
            'timestamp'=> now(),
            'fact'=>$data
        ], 200)->header('content-type', 'application/json');
    }
}
