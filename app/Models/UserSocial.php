<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    use HasFactory;

    // Relations
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
