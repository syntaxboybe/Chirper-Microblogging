<?php

namespace App\Events;

use App\Models\Chirp;

class ChirpCreated
{
    public function __construct(public Chirp $chirp)
    {
        //
    }
}
