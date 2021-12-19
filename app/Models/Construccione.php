<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construccione extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'construcciones';

    protected $fillable = ['nombre','email','telefono','servicio','mensaje','idservicio'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function serviciostotale()
    {
        return $this->hasOne('App\Models\Serviciostotale', 'id', 'idservicio');
    }
    
}
