<?php

namespace Bytefum\Demoav;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Bytefum\Demoav\Demoav;

class DemoavController extends Controller
{
    
    public function index()
    {         
        $data = Demoav::first();
          
        return view('demoav::index',compact('data'));
    }
}
