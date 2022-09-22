<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posiljka;

class Kurir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nazivFirme',
        'pib',
        'maticniBroj',
        'adresa',
        'website'
    ];


    public function posiljke()
    {
        return $this->hasMany(Posiljka::class);
    }
}
