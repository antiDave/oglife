<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = ['user_id', 'title', 'subtitle', 'price', 'triggerprice', 'mileage_fee', 'trigger_miles'];

    public $timestamps = false;

}