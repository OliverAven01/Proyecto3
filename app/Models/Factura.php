<?php
// app/Models/Factura.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'facturas';
    protected $primaryKey = 'idFactura';

    protected $fillable = [
        'fecha',
        'total',
    ];
}
