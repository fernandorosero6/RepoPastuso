<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users'; 
    public function ejemplars()
    {
        return $this->belongsToMany(Ejemplar::class, 'users_ejemplars', 'user_id', 'ejemplar_id');
    }
}
