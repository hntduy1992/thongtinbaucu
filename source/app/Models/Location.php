<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'slug', 'file', 'img', 'latitude', 'longitude', 'phone', 'address', 'scope', 'region', 'qr', 'unit_id'];
}
