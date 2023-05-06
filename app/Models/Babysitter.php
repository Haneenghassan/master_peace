<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Babysitter extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'description',
        'mobile',
        'img',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class,'babysitter_id','id');
    }

    public function reviews()
{
    return $this->hasMany(Review::class);
}

public function contacts()
{
    return $this->hasMany(Contact::class,'babysitter_id','id');
}

}
