<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    
    // Returns all users in given role
    public function users(){
        
        return $this->belongsToMany('App\User')->withPivot('user_id');
        
    }
    
    
    public function user(){
        
        return $this->belongsTo('App\User');
    }
    
    
}




