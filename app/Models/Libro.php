<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $primaryKey = 'Libro';

    public function ejemplares()
    {
        return $this->hasMany(Ejemplar::class, 'libro_id', 'id');
    }
}
