<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index(){
        $results = Result::all();
        return response($results);
    }
    public function add($score){
        $result = Result::create([
            'score' => $score,
        ]);
        return response($result);
    }
}
