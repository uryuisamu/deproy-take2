<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profiles;
use App\Log;

use Carbon\Carbon;

class ProfileController extends Controller 
{
    public function add(){
        return view('admin.profile.create');
    }
    
    public function create(Request $request){
        $this->validate($request, Profiles::$rules);
        $profiles = new Profiles;
        $form = $request->all();
        
        unset($form['_token']);
        
        $profiles->fill($form);
        $profiles->save();
        
        return redirect('admin/profile/create');
    }
    
    public function edit(){
        return view('admin.profile.edit');
    }
    
    //update action 
    //bug fix
    public function update(Request $request){
      $this->validate($request, Profiles::$rules);
      $profiles = Profiles::find($request->id);
      $form = $request->all();
      
      unset($profiles_form['_token']);
      
      $profiles->fill($profiles_form)->save();
      
      
        
      return redirect('admin/profile/edit');
    }
}
