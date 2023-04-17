<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schoolimg extends Model
{
    protected $fillable = [
       
        'image' , 'preschool_id'
    ];

    public function preschool(){
        return $this->belongsTo(Schoolimg::class);
    }
    use HasFactory;
}
