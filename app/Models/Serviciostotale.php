<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serviciostotale extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'serviciostotales';

    protected $fillable = ['nombre','idarea'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasOne('App\Models\Area', 'id', 'idarea');
    }
    
}
