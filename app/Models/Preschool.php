<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preschool extends Model
{
    use HasFactory;

    

    public function schoolimgs()
    {
        return $this->hasMany(Schoolimg::class,'preschool_id','id');
    }
}
