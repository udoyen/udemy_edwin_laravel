<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    public $directory = "/images/";
    
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'title',
        'content',
        'path'
    ];
    
    
    // ting user to each post
    public function user(){
        
        return $this->belongsTo('App\User');
    }
    
    public function photos(){
        
         return $this->morphMany('App\Photo', 'imageable');
    }
    
    public function tags(){
        
        return $this->morphToMany('App\Tag', 'taggable');
    }
    
    /**
     * 
     * @param type $query
     * @return type
     */
    public static function scopeLatest($query){
        
       return $query->orderBy('id', 'asc')->get();
    }
    
    /**
     * 
     * @param type $value
     * @return type
     */
    public function getPathAttribute($value){
        
        // helps you get the path to the images dynamically
        // accessor
        return $this->directory . $value;
    }


}
