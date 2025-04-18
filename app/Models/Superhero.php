<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;

    protected $table = 'superheros';


    protected $fillable = [
        'name',
        'gender',
        'universe_id',
    ];    
    
    public function universe()
    {
        return $this->belongsTo(Universe::class);
    }
}
