<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class querybuilderController extends Controller
{

    public function index(Request $request)
    {
        $data=DB::table('stu_mrk')->avg('marks');
        // where('age','>',20)->where('age','>',24)->get();
        dd($data);
            // [
            // "name"=>"anitha",
            // "age"=>24,
            // "marks"=>70
            // ],
            // [
            //     "name"=>"amrutha",
            //     "age"=>25,
            //     "marks"=>55

            // ]
            // ]);
            
    }
}
