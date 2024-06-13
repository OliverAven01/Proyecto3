<?php
// app/Models/Boleta.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    use HasFactory;

    protected $table = 'boletas';
    protected $primaryKey = 'idBoleta';

    protected $fillable = [
        'fecha',
        'total',
    ];
}
