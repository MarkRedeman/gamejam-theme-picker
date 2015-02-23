<?php namespace GameJam\Handlers\Events;

use GameJam\Events\UserWasMadeAdmin;
use GameJam\Events\UserWasRegistered;
use GameJam\Events\UserWasConfirmed;

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
        $events->listen('App\Events\UserWasMadeAdmin', 'EventLogger@userWasMadeAdmin');
        $events->listen('App\Events\UserWasRegistered', 'EventLogger@userWasRegistered');
        $events->listen('App\Events\UserWasConfirmed', 'EventLogger@userWasConfirmed');
        $events->listen('App\Events\ThemeWasSubmitted', 'EventLogger@themeWasSubmitted');
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
        var_dump('logging stuff that dont get logged');
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
        var_dump('logging stuff that dont get logged');
        Log::info('Theme was submitted', [
            'theme_id' => $event->themeId(),
            'user_id' => $event->userId(),
            'name' => $event->name()
        ]);
    }



}
