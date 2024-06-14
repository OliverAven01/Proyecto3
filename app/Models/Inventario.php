<?php
// app/Models/Inventario.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $table = 'inventarios';
    protected $primaryKey = 'idlngrediente';

    protected $fillable = [
        'nombre',
        'cantidad',
    ];
}
