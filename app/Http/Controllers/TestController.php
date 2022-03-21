<?php

namespace App\Http\Controllers;

use App\Http\Requests\Test\CreateRequest;
use App\Http\Resources\Test\TestResource;
use App\Http\Traits\ApiResponseTrait;
use App\Models\Test;

class TestController extends Controller
{
    /** string $message, JsonResource|null $data = null, int $statusCode = 200 */
    /** success, error, validation */
    use ApiResponseTrait;

    public function index()
    {
        try {
            $articles = Test::get();
            return $this->success('테스트 글들임', new TestResource($articles));
        } catch (\Exception $err) {
            return $this->error($err->getMessage(), $err->getCode());
        }
    }

    public function create(CreateRequest $request)
    {
        try {
            $request->validated();
            $test = new Test();
            $test->body = $request->body;
            $test->save();
            return $this->success('테스트 데이터 추가 됨', new TestResource($test), 200);
        } catch (\Exception $err) {
            return $this->error($err->getMessage(), $err->getCode());
        }
    }
}
