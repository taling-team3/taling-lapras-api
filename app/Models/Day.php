<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Day
 *
 * @property int $id
 * @property int $talent_id
 * @property string $days 강의 요일
 * @property int $is_show 공개 여부
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Day newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Day newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Day query()
 * @method static \Illuminate\Database\Eloquent\Builder|Day whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Day whereDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Day whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Day whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Day whereTalentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Day whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
