<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //下記コードの効果が不明。要確認。
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    
    public function logs()
    {
      return $this->hasMany('App\Log');
    }  
}
