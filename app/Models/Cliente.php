<<<<<<< HEAD
namespace App\Models;

=======
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> c919c9c41018576999f097426834ada39c1dd9cc
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
<<<<<<< HEAD
    protected $fillable = ['nombre', 'email', 'telefono'];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
=======
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'idCliente';

    protected $fillable = [
        'direccion',
    ];
}
>>>>>>> c919c9c41018576999f097426834ada39c1dd9cc
