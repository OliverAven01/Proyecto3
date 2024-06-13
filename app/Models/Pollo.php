namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pollo extends Model
{
    protected $fillable = ['nombre', 'raza', 'peso'];
}