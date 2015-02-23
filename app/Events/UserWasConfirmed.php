<?php namespace GameJam\Events;

use GameJam\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserWasConfirmed extends Event {

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

    public function userId()
    {
        return $this->userId;
    }

}
