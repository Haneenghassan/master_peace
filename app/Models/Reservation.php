<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Carbon\Carbon;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
       
        'first_name' , 'last_name','email','mobile','start_time','end_time','child_firstname','child_lastname','child_age','babysitter_id','user_id','preschool_id',
    ];



    // public function babysitter() :BelongsTo{
    //     return $this->belongsTo(Babysitter::class);
    // }

    
    public function babysitter() {
        return $this->belongsTo(Babysitter::class);
    }

    public function preschool() {
        return $this->belongsTo(Preschool::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function  setStartTimeAttribute($value){
    //     $this->attributes['start_time'] = Carbon::createFromFormat('Y-m-d\TH:i', $value);
    // }

    // public function setEndTimeAttribute($value)
    // {
    //     $this->attributes['end_time'] = Carbon::createFromFormat('Y-m-d\TH:i', $value);
    // }

    // public function getStartTimeAttribute($value)
    // {
    //     return Carbon::parse($value)->format('Y-m-d\TH:i');
    // }

    // public function getEndTimeAttribute($value)
    // {
    //     return Carbon::parse($value)->format('Y-m-d\TH:i');
    // }
}
