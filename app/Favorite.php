<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //

    use RecordsActivity;

    /**
	* Dont auto-apply mass assignment protection
	*
	*@var array
	*/
	protected $guarded = [];

	public function favorited()
	{

		return $this->morphTo();

	}
}

