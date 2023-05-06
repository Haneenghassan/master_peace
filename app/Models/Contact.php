<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'subject',
        'massege',
        'user_id',
        'preschool_id',
        'babysitter_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function babysitter()
    {
        return $this->belongsTo(Babysitter::class);
    }
    
    public function preschool()
    {
        return $this->belongsTo(Preschool::class);
    }
    }

