<?php namespace GameJam\Events;

use GameJam\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserWasMadeAdmin extends Event {

	use SerializesModels;

	private $userId;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($userId)
	{
		$this->userId = $userId;
	}

	/**
	 * Gets the ID of the user that was made admin
	 * @return int
	 */
	public function userId()
	{
		return $this->userId;
	}

}
