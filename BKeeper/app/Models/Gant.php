<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gant extends Model
{
    use HasFactory;

    protected $table = 'gant';
    protected $primaryKey = 'gant_id';
    public $timestamps = false; // si pas de colonnes created_at / updated_at

    protected $fillable = [
        'gant_nom',
        'gant_taille',
        'gant_prix_client',
        'gant_prix_revendeur',
    ];
}
