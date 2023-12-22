<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('UserRegisters', function () {
    return true;
});
// Broadcast::channel('UserRegisters', function ($user) {
//     return $user->hasRole('admin');
// });
Broadcast::channel('PostsUsers', function () {
    return true;
});
