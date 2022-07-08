<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){

       if($request->query('search')){
        
        dd($request->query('search'));
       }
    }

}
