<?php namespace GameJam\Handlers\Events;

use GameJam\Events\UserWasMadeAdmin;
use GameJam\Events\UserWasRegistered;

use GameJam\User;
use Log;

class EventLogger {

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

}
