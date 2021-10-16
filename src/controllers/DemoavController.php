<?php

namespace Bytefum\Demoav\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Bytefum\Demoav\Models\Demoav;
// use Bytefum\Demoav\Models\Demoav;

class DemoavController extends Controller
{
    
  /**
   * List View 
   */
    public function index()
    {         
        $userData = Demoav::all();  
        return view('demoav::list',compact('userData'));  
    }

  /**
   * Add View 
   */
    public function addList()
    {            
        return view('demoav::add');  
    }

    /**
     * Create User 
     */
    public function create(Request $request)
    {         
        $input = $request->all();
        $userData = Demoav::create($input);  
        return redirect()->route('list-user');
    }

  /**
   * Update Users View 
   */
    public function view(Request $request,$id)
    {     
        $data = Demoav::find($id); 
        return view('demoav::edit',compact('data'));
    }

  /**
   * Update Users View 
   */
  public function update(Request $request,$id)
  {     
      $input = $request->all();
      $data = Demoav::find($id); 
      $data->update([
        'name' => $input['name']
      ]);  
      return redirect()->route('list-user');
  }

  /**
   * Update Users View 
   */
  public function deteleData(Request $request,$id)
  {   
      $data = Demoav::find($id); 
      $data->delete(); 
      return redirect()->route('list-user');
  }

}
