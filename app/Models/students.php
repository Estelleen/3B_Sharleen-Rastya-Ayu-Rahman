<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Students extends Model
{
    protected $fillable = [
        'nama_students',
        'no_hp',
        'preferred_schedule',
        'rank_id',
        'goals',
        'tutor_id'
    ];
    public function rank(): BelongsTo
    {
        return $this->belongsTo(Ranks::class, 'rank_id');
    }

    public function tutor()
    {
        return $this->belongsTo(User::class, 'tutor_id');
    }

    public function schedules() 
    {
        return $this->hasMany(Schedule::class, 'student_id');
    }
}
