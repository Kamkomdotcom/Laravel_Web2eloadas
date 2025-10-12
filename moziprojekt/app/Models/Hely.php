<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hely extends Model
{
    use HasFactory;
    
    protected $table = 'hely';

    protected $fillable = ['fkod', 'moziazon'];

    //kapcsolatok
    public function film()
    {
        return $this->belongsTo(Film::class, 'fkod',
         'fkod');
    }
    public function mozi()
    {
        return $this->belongsTo(Mozi::class, 'moziazon',
         'moziazon');
    }
}
