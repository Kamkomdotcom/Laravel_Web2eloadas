<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    
    protected $table = 'film';
    protected $primaryKey = 'fkod'; //Ea

    protected $fillable = ['filmcim', 'szines', 'szinkron', 'szarmazas', 'mufaj', 'hossz'];

    public function vetitesek()
    {
        return $this->hasMany(Hely::class, 'fkod', 
        'fkod');
    }
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'fkod'; // Megmondja a Laravelnek, hogy az 'fkod'-ot használja ID helyett
    }
}
