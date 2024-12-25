<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class Todos extends Model
{ 
     use HasFactory;

    // Définir les champs qui peuvent être remplis
    protected $fillable = ['title', 'task', 'description', 'status', 'due_date'];
}