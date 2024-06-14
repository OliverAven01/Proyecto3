<?php
// app/Models/Platillo.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    use HasFactory;

    protected $table = 'platillos';
    protected $primaryKey = 'idPlatillo';

    protected $fillable = [
        'nombre',
        'precio',
    ];
}
