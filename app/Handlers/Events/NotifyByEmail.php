<?php namespace GameJam\Handlers\Events;

use GameJam\Events\UserWasMadeAdmin;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class NotifyByEmail implements ShouldBeQueued {

	use InteractsWithQueue;

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event that a use was made admin.
	 *
	 * @param  UserWasMadeAdmin  $event
	 * @return void
	 */
	public function userWasMadeAdmin(UserWasMadeAdmin $event)
	{
		//
	}

}
