<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posiljka;

class Primalac extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'brojTelefona',
        'adresa',
    ];

    public function posiljke()
    {
        return $this->hasMany(Posiljka::class);
    }
}
