<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Thumbnail
 *
 * @property int $id
 * @property string $url 파일 경로
 * @property string $alt 파일 이름
 * @property string|null $href 클릭 시 이동할 페이지
 * @property int $is_order 공개 순서
 * @property int $is_show 공개 여부
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnail query()
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnail whereAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnail whereHref($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnail whereIsOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnail whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnail whereUrl($value)
 * @mixin \Eloquent
 */
class Thumbnail extends Model
{
    use HasFactory;
}
