<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $fillable = [
        'student_id', 
        'tutor_id', 
        'day', 
        'start_time', 
        'end_time', 
        'subject', 
        'place'];

    public function student() 
    {
        return $this->belongsTo(Students::class, 'student_id');
    }
    
    public function tutor() 
    {
        return $this->belongsTo(User::class, 'tutor_id');
    }
}