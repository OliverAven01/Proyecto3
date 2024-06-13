namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock'];

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'pedido_producto')
                    ->withPivot('cantidad', 'precio');
    }
}