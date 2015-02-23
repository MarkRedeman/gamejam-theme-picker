<?php namespace GameJam\Events;

use GameJam\Events\Event;

use Illuminate\Queue\SerializesModels;

class ThemeWasSubmitted extends Event {

    use SerializesModels;

    private $userId;
    private $themeId;
    private $name;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($themeId, $name, $userId)
    {
        $this->userId = $userId;
        $this->themeId = $themeId;
        $this->name = $name;
    }

    public function themeId()
    {
        return $this->themeId;
    }

    public function userId()
    {
        return $this->userId;
    }

    public function name()
    {
        return $this->name;
    }
}
