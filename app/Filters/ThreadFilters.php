<?php

namespace App\Filters;

use App\User;

Class ThreadFilters extends Filters
{

	protected $filters = ['by', 'popular'];

	/**
	*Filter the query by the given username
	*@param string $username
	*@return mixed
	*/

	protected function by($username)
	{

		$user = User::where('name', $username)->firstOrFail();

		return $this->builder->where('user_id', $user->id);

	}


	/**
	*Filter the Query according to the most popular
	*@return $this
	*/

	protected function popular()
	{

		$this->builder->getQuery()->orders = [];
		return $this->builder->orderBy('replies_count', 'desc');

	}

}