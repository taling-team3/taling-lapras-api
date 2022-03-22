<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Talent
 *
 * @property int $id
 * @property int $tutor_id
 * @property int $category_id
 * @property int $talent_type_id
 * @property string $name 강의 이름
 * @property string $msg_notice 클래스 전 숙지
 * @property string $msg_summary 클래스 요약
 * @property string $msg_target 이런 분들이 들으면 좋아요.
 * @property string $msg_tutor 튜터님을 소개합니다.
 * @property string $msg_description 어떤 클래스 인가요?
 * @property string $msg_caution 클래스 유의사항
 * @property string $msg_progress 클래스는 이렇게 진행됩니다.
 * @property int $view_counts 조회수 수
 * @property int $like_counts 찜/좋아요 수
 * @property int $is_show 공개 여부
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read int|null $likes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Talent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Talent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Talent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereLikeCounts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereMsgCaution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereMsgDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereMsgNotice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereMsgProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereMsgSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereMsgTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereMsgTutor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereTalentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereTutorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereViewCounts($value)
 * @mixin \Eloquent
 */
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
