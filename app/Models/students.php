<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Students extends Model
{
    protected $fillable = [
        'nama_students',
        'no_hp',
        'preferref_schedule',
        'rank_id',
        'goals',
    ];
    public function rank(): BelongsTo
    {
        return $this->belongsTo(Ranks::class, 'rank_id');
    }
}
