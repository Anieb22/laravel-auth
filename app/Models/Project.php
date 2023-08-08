<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['azienda', 'nome_progetto', 'descrizione', 'passaggi', 'data_di_creazione'];
}
