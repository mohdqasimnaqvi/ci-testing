<?php

namespace App;

class Mail {
    public function deliver(User $user) {
        if ($user->isSubscribed()) {
            var_dump("Sending email to {$user->name}");
        }
    }
}