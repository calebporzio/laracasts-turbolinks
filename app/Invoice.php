<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public static function boot()
    {
        parent::boot();

        sleep(1);
    }
}
