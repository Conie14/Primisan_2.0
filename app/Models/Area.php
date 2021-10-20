<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'areas';

    protected $fillable = ['nombre'];
	
}
