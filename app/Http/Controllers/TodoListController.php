<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function saveItem(Request $request) {
        \Log::info(json_encode($request->all()));
        view('Welcome'); 
    }
}
