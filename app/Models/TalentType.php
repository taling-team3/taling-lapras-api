<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentType extends Model
{
    use HasFactory;

    // Relations
    public function talents()
    {
        $this->hasMany(Talent::class);
    }
}
