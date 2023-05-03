<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preschool extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'description',
        'mobile',
        'img',
        'manegerName',
        'user_id'
    ];

    public function schoolimgs()
    {
        return $this->hasMany(Schoolimg::class,'preschool_id','id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class,'preschool_id','id');
    }

    public function reviews()
{
    return $this->hasMany(Review::class,'preschool_id','id');
}
}
