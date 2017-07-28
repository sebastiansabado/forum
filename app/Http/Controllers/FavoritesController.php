<?php

namespace App\Http\Controllers;


use App\Reply;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //

    /**
    *FavoritesController constructor
    */

    public function __construct()
    {

    	$this->middleware('auth');

    }

    public function store(Reply $reply)
    {

    	return \DB::table('favorites')->insert([

    		'user_id' => auth()->id(),

    		'favorited_id' => $reply->id,

    		'favorited_type' => get_class($reply)

    	]);

    }
}
