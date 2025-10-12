<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'fkod'; //Ea

    protected $fillable = ['filmcim', 'szines', 'szinkron', 'szarmazas', 'mufaj', 'hossz'];

    public function vetitesek()
    {
        return $this->hasMany(Hely::class, 'fkod', 
        'fkod');
    }
}
