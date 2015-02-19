<?php namespace GameJam\Events;

use GameJam\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserWasRegistered extends Event {

	use SerializesModels;

	private $userId;
	private $email;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($userId, $email)
	{
		$this->userId = $userId;
		$this->email = $email;
	}

	public function userId()
	{
		return $this->userId;
	}

	public function email()
	{
		return $this->email;
	}

}
