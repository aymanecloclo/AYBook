<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable; // Pour activer les notifications si nécessaire
use Illuminate\Database\Eloquent\Factories\HasFactory; // Pour utiliser des usines de modèles (optionnel)

class User extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Définir les attributs protégés si vous souhaitez les masquer lors de la conversion en tableau ou JSON
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    // Défini le nom de la table si elle est différente du nom par défaut
    protected $table = 'users'; 

    // Si vous souhaitez ne pas utiliser les timestamps automatiques
    public $timestamps = true; 
}
