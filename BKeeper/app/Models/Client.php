<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client';
    protected $primaryKey = 'client_id';
    public $timestamps = false; // si pas de colonnes created_at / updated_at

    protected $fillable = [
        'client_nom',
        'client_prenom',
        'client_tel',
        'client_club',
        'client_categorie',
    ];
}
