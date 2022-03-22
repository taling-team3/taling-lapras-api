<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponseTrait;
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
}
