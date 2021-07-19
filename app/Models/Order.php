<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // protected $table ='orders';
    
    use HasFactory;
		
	protected $fillable =['item'];

    public function quests(){
        return $this->hasMany(Quest::class);
    }
}
