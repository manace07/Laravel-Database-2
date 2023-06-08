<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\CRUD;

class TodoListController extends Controller
{
    public function saveItem(Request $request){
        \Log::info(json_encode($request->all()));

        $newListItem = new CRUD;
        $newListItem->name = $request->ListItem;
        $newListItem->is_complete = 0;
        $newListItem->save();

        return view ('welcome');
    }
}
