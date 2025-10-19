<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $primaryKey = 'client_id';
    public $timestamps = true; // si pas de colonnes created_at / updated_at

    protected $fillable = [
        'client_nom',
        'client_prenom',
        'client_tel',
        'client_club',
        'client_categorie',
    ];
}
