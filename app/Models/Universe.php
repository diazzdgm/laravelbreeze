<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    protected $fillable = ['name'];

    public function superheroes()
    {
        return $this->hasMany(Superhero::class);
    }
}
