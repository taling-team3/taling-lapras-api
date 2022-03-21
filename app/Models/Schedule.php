<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $dates = ['started_at', 'finished_at'];

    // Relations
    public function day()
    {
        $this->belongsTo(Day::class);
    }
}
