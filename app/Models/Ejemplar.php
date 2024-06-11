<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    use HasFactory;

    protected $table = 'Ejemplares';

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'libro_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_ejemplars', 'ejemplar_id', 'user_id');
    }
}
