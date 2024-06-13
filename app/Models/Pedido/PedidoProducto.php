namespace App\Models\Pedido;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PedidoProducto extends Pivot
{
    protected $fillable = ['pedido_id', 'producto_id', 'cantidad', 'precio'];
}