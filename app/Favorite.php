<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //

    use RecordActivity;

    /**
	* Dont auto-apply mass assignment protection
	*
	*@var array
	*/
	protected $guarded = [];
}
