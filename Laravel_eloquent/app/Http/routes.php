<?php
use App\Bear;
use App\Fish;
use App\Tree;
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


 // create our route,return a view file (app/views/eloquent.blade.php)
 // we will also send the records we want to the view
 
Route::get('/', function () {
    return view('eloquent')->withBears(Bear::all())
    	          ->withFish(Fish::all())
    	          ->withTrees(Tree::all());
});
