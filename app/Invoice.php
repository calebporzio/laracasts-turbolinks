<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public static function all($columns = [])
    {
        sleep(2);

        return parent::all();
    }

    public function getAmountForHumansAttribute()
    {
        return '$'.number_format((number_format(($this->amount_in_cents/100), 2, '.', ' ')/100), 2, '.', ' ');
    }
}
