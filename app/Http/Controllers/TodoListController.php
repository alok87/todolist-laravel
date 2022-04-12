<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function saveItem(Request $request) {
        \Log::info(json_encode($request->all()));

        $listItem = new ListItem;        
        $listItem->name = $request->listItem;
        $listItem->is_complete = 0;
        $listItem->save();

        return view('Welcome'); 
    }
}
