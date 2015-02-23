<?php namespace GameJam\Events;

use GameJam\Events\Event;

use Illuminate\Queue\SerializesModels;

class VoteWasAdded extends Event {

    use SerializesModels;

    private $userId;
    private $themeId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($themeId, $userId)
    {
        $this->userId = $userId;
        $this->themeId = $themeId;
    }

    public function themeId()
    {
        return $this->themeId;
    }

    public function userId()
    {
        return $this->userId;
    }
}
