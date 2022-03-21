<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    // Relations
    public function talent()
    {
        $this->belongsTo(Talent::class);
    }

    public function schedules()
    {
        $this->hasMany(Schedule::class);
    }
}
