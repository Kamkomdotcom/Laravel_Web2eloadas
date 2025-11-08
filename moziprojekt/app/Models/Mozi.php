<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mozi extends Model
{
    use HasFactory;

    protected $table = 'mozi';
    protected $primaryKey = 'moziazon'; //Ea

    protected $fillable = ['mozinev', 'irszam', 'cim', 'telefon'];

    public function vetitesek()
    {
        return $this->hasMany(Hely::class, 
        'moziazon', 'moziazon');
    }
}
