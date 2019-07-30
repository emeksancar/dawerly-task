<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use softDeletes;

    protected $guarded = ['id'];

    protected $table = 'reservations';
}
