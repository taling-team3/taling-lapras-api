<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    protected $table = 'talents';
    protected $primaryKey = 'talent_id';

    use HasFactory;

    // Relations
    public function tutor()
    {
        $this->belongsTo(Tutor::class);
    }

    public function category()
    {
        $this->belongsTo(Category::class);
    }

    public function talentType()
    {
        $this->belongsTo(TalentType::class);
    }

    public function application()
    {
        $this->hasMany(Application::class);
    }

    public function images()
    {
        $this->hasMany(Image::class);
    }

    public function days()
    {
        $this->hasMany(Day::class);
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
