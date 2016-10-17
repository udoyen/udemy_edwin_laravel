<?php

use App\Post;
use App\User;
use App\Role;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//
//    return view('welcome');
//});


//Route::get('/post/{id}', 'PostsController@index');

//Route::resource('posts', 'PostsController');

Route::get('/contact', 'PostsController@contact');
//
//Route::get('/post/{id}/{name}/{password}', 'PostsController@show_post');

//Route::get('/about', function () {
//    return "Hi about";
//});
//
//
//Route::get('/contact', function () {
//    return "Hi Contact";
//});
//
//Route::get('/post/{id}', function ($id) {
//
//    return 'This is post number ' . $id;
//});



/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
|
*/




//Route::get('/delete', function(){
//
//    $deleted = DB::delete('delete from posts where id = ?', [1]);
//
//    return $deleted;
//
//});




//Route::get('/update', function(){
//
//    $updated = DB::update('update posts set title="Update title" where id = ?', [1]);
//
//    return $updated;
//});
//;
//Route::get('/read', function(){
//
//    $results = DB::select('select * from posts where id = ?', [1]);
//
//    return var_dump($results);

    // returns an array of results
//    foreach($results as $posts){
//
//        return $posts->title;
//
//    }

//});

Route::get('/insert', function(){

    DB::insert('insert into posts(title, content) values(?, ?)', ['Laravel is awesome with edwin', 'Laravel is the best thing that has happened to PHP, PERIOD.']);

});


/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
|
*/
//
//Route::get('/read', function(){
//
//    $posts = Post::all();
//
//    foreach($posts as $post){
//        return $post->title;
//    }
//
//
//});

//Route::get('/find', function(){
//
//    $posts = Post::find(2);
//
//    return $posts->title;
//
//
////    foreach ($posts as $post){
////        return $post->title;
////    }
//
//});

/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
|
*/

//Route::get('/findwhere', function(){
//
//    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//
//    return $posts;
//
//
//
//});


//Route::get('/findmore', function(){
//
////    $posts = Post::findOrFail(1);
////
////    return $posts;
//
//
//    $posts = Post::where('users_count', '<', 50)->firstOrFail();
//    
//    return $posts;
//
//});

//Route::get('/basicinsert', function(){
//    
//    $post = new Post;
//    
//    $post->title = 'new ORM title erere 231 ginger';
//    
//    $post->content = "Woah Eloquent is really cool fee ivsdjkz";
//    
//    $post->save();
//    
//    // updating    
//    //$post = Post::find(2);
//    
//    
//});


//Route::get('/basicinsert', function(){
//    
//    $post = Post::find(2);
//    
//    $post->title = 'new Eloquent title insert number 2';
//    
//    $post->content = "Woah Eloquent is really cool";
//    
//    $post->save();
//    
//    // updating    
//    //$post = Post::find(2);
//    
//    
//});

//Route::get('/create', function(){
//
//    Post::create([
//        
//        'title'=> 'The create method',
//        'content' => 'WOW I am learning a lot with PHP with Edwin'
//        
//        ]);
//    
//});

//Route::get('/update', function(){
//    
//    Post::where('id', 2)->where('is_admin', 0)->update(['title' => 'NEW PHP TITLE', 'content' => 'I love my instructor']);
//    
//});

//Route::get('/delete', function(){
//    
//    $post = Post::find(2);
//    
//    $post->delete();
//    
//});

//Route::get('/delete2', function(){
//    
//    Post::destroy([4, 5]);
//    
//    //Post::where('is_admin', 0)->delete();
//    
//    
//    
//    
//});

//Route::get('/softdelete', function(){
//    
//    Post::find(12)->delete();
//    
//});

//Route::get('/readsoftdelete', function(){
//    
////    $post = Post::find(7);
////    
////    return $post;
//    
//    $post = Post::withTrashed()->where('is_admin', 0)->get();
//    
//    return $post;
//    
////    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
////    
////    return $post;
//    
//});

//Route::get('/restore', function(){
//    
//    Post::withTrashed()->where('is_admin', 0)->restore();
//    
//    
//    
//    
//});

//Route::get('/forcedelete', function(){
//    
//    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//    
//});


/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
|
*/

// Has One to one relationship
//Route::get('user/{id}/post', function($id){
//    
//    return User::find($id)->post->title;
//    
//    
//});
//
//Route::get('/post/{id}/user', function($id){
//    
//    
//    return Post::find($id)->user->name;
//    
//});


Route::get('/posts', function(){
    
    $user = User::find(1);
    
    foreach($user->posts as $posts){
        
        echo $posts->title . "<br>";
    }
});

// Many To Many Relationship
Route::get('/roles/{id}', function($id){
    
    $role = Role::find($id);
    
    foreach($role->users as $name){
        echo $name->name . "<br>";
    }
    
    
    
});


Route::get('/user/{id}/role', function($id){
    
    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
    
    echo $user;

//    $user = User::find($id);
//    
//    foreach ($user->roles as $role){
//        
//        return $role->name;
//    }
    
    
});