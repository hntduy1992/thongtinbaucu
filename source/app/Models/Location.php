<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /*
     *  $table->string('name');
            $table->string('slug')->unique();
            $table->string('file')->nullable();
            $table->string('img')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->unsignedInteger('unit_id');
     */
    protected $fillable = ['name', 'slug', 'file', 'img', 'latitude', 'longitude', 'unit_id'];
}
