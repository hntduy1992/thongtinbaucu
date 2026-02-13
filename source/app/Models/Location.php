<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'slug', 'file', 'img', 'latitude', 'longitude', 'phone', 'address', 'scope', 'region', 'qr', 'unit_id', 'place','info'];

    public function unit(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }
}
