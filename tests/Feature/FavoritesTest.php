<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FavoritesTest extends TestCase
{

	use DatabaseMigrations;

	/** @test */
	function guests_can_not_favorite_anything()
	{

		$this->post('replies/1/favorites')
			->assertRedirect('/login');

	}

	/** @test */

	public function an_authenticated_user_can_favorite_any_reply()
	{

		$reply = create('App\Reply');

		$this->post('replies/' . $reply->id . '/favorites');

		$this->assertCount(1, $reply->favorites);

	}

}