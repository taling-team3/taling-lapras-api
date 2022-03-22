<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TalentType
 *
 * @property int $id
 * @property string $type 공부 타입
 * @property int $is_show 공개 여부
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TalentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TalentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TalentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|TalentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TalentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TalentType whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TalentType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TalentType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TalentType extends Model
{
    use HasFactory;

    // Relations
    public function talents()
    {
        $this->hasMany(Talent::class);
    }
}
