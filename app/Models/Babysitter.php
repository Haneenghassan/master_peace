<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Babysitter extends Model
{
    use HasFactory;
    // protected $table ='babysitter';

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'description',
        'mobile',
        'img',
        'user_id'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class,'babysitter_id','id');
    }
}
