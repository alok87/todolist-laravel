<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    // GET todo
    public function index() {
        return view('welcome', ['listItems' => ListItem::where('is_complete', 0)->get()]);
    }

    // CREATE todo
    public function saveItem(Request $request) {
        // \Log::info(json_encode($request->all()));

        $listItem = new ListItem;        
        $listItem->name = $request->listItem;
        $listItem->is_complete = 0;
        $listItem->save();

        return redirect('/'); 
    }

    // Mark Done
    public function markDone($id) {
        \Log::info(json_encode($id));

        $listItem = ListItem::find($id);        
        $listItem->is_complete = 1;
        $listItem->save();

        return redirect('/'); 
    }
}
