<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FurnitureController extends Controller
{
    public function list(){
        $list = DB::table('furniture')->get();
        return response()->json($list, 200);
    }
}
