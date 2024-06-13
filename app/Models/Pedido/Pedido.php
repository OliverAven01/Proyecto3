namespace App\Models\Pedido;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Producto;

class Pedido extends Model
{
    protected $fillable = ['cliente_id', 'fecha', 'estado', 'total'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'pedido_producto')
                    ->withPivot('cantidad', 'precio');
    }
}