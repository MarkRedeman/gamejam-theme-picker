<?php namespace GameJam\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	/**
	 * The event handler mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		'GameJam\Events\UserWasMadeAdmin' => [
			'GameJam\Handlers\Events\NotifyByEmail@userWasMadeAdmin',
			'GameJam\Handlers\Events\EventLogger@userWasMadeAdmin',
		],

		'GameJam\Events\UserWasRegistered' => [
			'GameJam\Handlers\Events\EventLogger@userWasRegistered',
		],
	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
	public function boot(DispatcherContract $events)
	{
		parent::boot($events);

		//
	}

}
