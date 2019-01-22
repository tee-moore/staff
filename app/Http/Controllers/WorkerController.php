<?php

namespace App\Http\Controllers;

use App\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers  = Worker::where('parent_id', '=', 0)->get();
        return view('hierarchy',compact('workers'));
    }
}
