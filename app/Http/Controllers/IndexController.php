<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $ind = Http::get('https://api.kawalcorona.com/indonesia');
        $data = [
            'data' => $response->json(),
            'data_i'    => $ind->json(),
        ];
        return view('dashboard.index',compact('data'));
    }

}
