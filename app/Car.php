<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

	protected $fillable = ['mark', 'model', 'year', 'maxSpeed', 'isAutomatic', 'engine', 'numberOfDoors'];

    protected $casts = [
        'engine' => 'array',
    ]; 

    public static function search($term, $skip, $take)
   {
       return self::where('mark', 'LIKE', '%'.$term.'%')->skip($skip)->take($take)->get();
   }
}

