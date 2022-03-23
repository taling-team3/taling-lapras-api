<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponseTrait;
use App\Models\Category;
use App\Models\Talent;
use App\Models\Thumbnail;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeController extends Controller
{
    use ApiResponseTrait;

    public function getThumbnails()
    {
        try {
            $thumbnails = Thumbnail::where('is_show', true)->orderBy('is_order', 'asc')->get();
            return $this->success('썸네일을 불러 왔습니다.', new JsonResource($thumbnails));
        } catch (\Exception $err) {
            return $this->error($err->getMessage(), $err->getCode());
        }
    }

    public function getCategories()
    {
        try {
            $thumbnails = Category::where('is_show', true)->orderBy('is_order', 'asc')->get();
            return $this->success('카테고리를 불러 왔습니다.', new JsonResource($thumbnails));
        } catch (\Exception $err) {
            return $this->error($err->getMessage(), $err->getCode());
        }
    }

    public function getRecommend()
    {
        try {
            /**
             * {
             *     'title': '지금 뜨고 있는 클래스',
             *     'body:: $data,
             * },
             * {
             *     'title': '함께 Live, 같이하면 더 쉬우니까',
             *     'body:: $data,
             * }
             */

            $talents = Talent::where('is_show', true)->get();

            if (!$talents->count()) {
                return $this->success("", new JsonResource($talents), 400);
            }
            $result = array_chunk($talents, $talents->count() / 6);
            $title = [
                "지금 뜨고 있는 클래스",
                "함께 Live, 같이하면 더 쉬우니까",
                "당장 들어야 할 라이브 클래스",
                "이번주 시작",
                "New 요즘 대세 VOD",
                "만원 이하 클래스",
                "다룬 분들이 이걸 많이 봤어요!"
            ];
            $recommendTalents = array();
            foreach ($result as $key => $value) {
                $recommendTalents['title'] = $title[$key];
                $recommendTalents['body'] = $value;
            }
            return $this->success('추천 강의 가졍모.', new JsonResource($recommendTalents));
        } catch (\Exception $err) {
            return $this->error($err->getMessage(), 500);
        }
    }

    public function getTalingBest()
    {
        try {
            $thumbnails = Talent::where('is_show', true)->orderBy('view_counts', 'asc')->get();
            return $this->success('인기 많은걸로 가져옴.', new JsonResource($thumbnails));
        } catch (\Exception $err) {
            return $this->error($err->getMessage(), $err->getCode());
        }
    }
}
