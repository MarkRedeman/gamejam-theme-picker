<?php namespace GameJam\Handlers\Events;

use GameJam\Events\UserWasMadeAdmin;
use GameJam\Events\UserWasRegistered;
use GameJam\Events\UserWasConfirmed;
use GameJam\Events\ThemeWasSubmitted;
use GameJam\Events\VoteWasAdded;
use GameJam\Events\VoteWasRemoved;

use GameJam\User;
use Log;

class EventLogger {

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     * @return array
     */
    public function subscribe($events)
    {
        $events->listen('GameJam\Events\UserWasMadeAdmin', 'GameJam\Handlers\Events\EventLogger@userWasMadeAdmin');
        $events->listen('GameJam\Events\UserWasRegistered', 'GameJam\Handlers\Events\EventLogger@userWasRegistered');
        $events->listen('GameJam\Events\UserWasConfirmed', 'GameJam\Handlers\Events\EventLogger@userWasConfirmed');
        $events->listen('GameJam\Events\ThemeWasSubmitted', 'GameJam\Handlers\Events\EventLogger@themeWasSubmitted');
        $events->listen('GameJam\Events\VoteWasAdded', 'GameJam\Handlers\Events\EventLogger@voteWasAdded');
        $events->listen('GameJam\Events\VoteWasRemoved', 'GameJam\Handlers\Events\EventLogger@voteWasRemoved');
    }

    /**
     * Handle the event that a use was made admin.
     *
     * @param  UserWasMadeAdmin  $event
     * @return void
     */
    public function userWasMadeAdmin(UserWasMadeAdmin $event)
    {
        $user = User::find($event->userId());
        Log::info('User was made admin', [
            'user_id' => $user->id,
            'email' => $user->email
        ]);
    }

    /**
     * @param  UserWasRegistered $event
     * @return void
     */
    public function userWasRegistered(UserWasRegistered $event)
    {
        Log::info('User was registered', [
            'user_id' => $event->userId(),
            'email' => $event->email()
        ]);
    }

    /**
     * @param  UserWasConfirmed $event
     * @return void
     */
    public function userWasConfirmed(UserWasConfirmed $event)
    {
        Log::info('User was confirmed', [
            'user_id' => $event->userId(),
        ]);
    }


    /**
     * @param  ThemeWasSubmitted $event
     * @return void
     */
    public function themeWasSubmitted(ThemeWasSubmitted $event)
    {
        Log::info('Theme was submitted', [
            'theme_id' => $event->themeId(),
            'user_id' => $event->userId(),
            'name' => $event->name()
        ]);
    }

    /**
     * @param  ThemeWasSubmitted $event
     * @return void
     */
    public function voteWasAdded(VoteWasAdded $event)
    {
        Log::info('Vote was added', [
            'theme_id' => $event->themeId(),
            'user_id' => $event->userId(),
        ]);
    }

    /**
     * @param  ThemeWasSubmitted $event
     * @return void
     */
    public function voteWasRemoved(VoteWasRemoved $event)
    {
        Log::info('Vote was removed', [
            'theme_id' => $event->themeId(),
            'user_id' => $event->userId(),
        ]);
    }



}
