<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\TalingBestRequest;
use App\Http\Traits\ApiResponseTrait;
use App\Models\Talent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TalentController extends Controller
{
    /** string $message, JsonResource|null $data = null, int $statusCode = 200 */
    /** success, error, validation */
    use ApiResponseTrait;
    // 탈잉 Best
    public function getTalingBest()
    {
        try {
            $talent_best = Talent::whereIsShow(true)->orderByDesc('like_counts')->get();
            return $this->success('테스트 글들임', new TalingBestRequest($talent_best));
        } catch (\Exception $err) {
            return $this->error($err->getMessage());
        }
    }

    // 오늘 인기 원데이
    public function getTalentRecommend()
    {
        try {
            $talent_best = Talent::whereIsShow(true)->where('created_at', '>=', Carbon::today())->orderByDesc('like_counts')->get();
            return $this->success('테스트 글들임', new TalingBestRequest($talent_best));
        } catch (\Exception $err) {
            return $this->error($err->getMessage());
        }
    }

    // 클래스 상세
    public function getTalentDetail()
    {
        return [];
    }

    // 클래스와 관련된 다른 강의
    public function getTalentDetailRelated()
    {

        return [];
    }


}
