<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tutor
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $career 경력(한개만)
 * @property string|null $license 자격증(한개만)
 * @property string|null $description 튜터 소개
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Tutor[] $talents
 * @property-read int|null $talents_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor whereCareer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor whereLicense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tutor whereUserId($value)
 * @mixin \Eloquent
 */
class Tutor extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function talents()
    {
        return $this->hasMany(Tutor::class);
    }
}
