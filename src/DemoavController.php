<?php

namespace Bytefum\Demoav;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Bytefum\Demoav\Demoav;

class DemoavController extends Controller
{
    
    public function index()
    {         
        $data['name'] = 'Users';
          
        return view('demoav::index',compact('data'));
    }
}
