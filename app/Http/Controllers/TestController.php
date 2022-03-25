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
            return $this->error($err->getMessage());
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
            return $this->error($err->getMessage());
        }
    }

    public function getRecommendTest()
    {
        $getRecommendTest = array();

        $recommend_1 = array(
            'no' => 1,
            'thumbUrl' => 'https://img.taling.me/Content/Uploads/Cover/6a1b476e8e2a220fe04a4aa3aeb24b7816c7ad3d.png',
            'badge' => 'LIVE',
            'talentTitle' => '우리는 밥의 민족! 야밤에 영어로\n먹부심 부리기',
            'category' => '영어회화',
            'tutor' => '서원',
            'price' => 40000,
            'classDetail' => '(총 10시간/시간당 4,000원)',
            'userCount' => 34,
        );
        $recommend_2 = array(
            'no' => 2,
            'thumbUrl' => 'https://img.taling.me/Content/Uploads/Cover/f47bffd0bbef1c1c14b1957c613c0fac79641396.jpg',
            'badge' => 'LIVE',
            'talentTitle' => '오픽토스 만점자랑 실생활 영어문장\n만들고 피드백받기 3',
            'category' => '영어회화',
            'tutor' => '최화영 Jenn',
            'price' => 40000,
            'classDetail' => '(총 10시간/시간당 4,000원)',
            'userCount' => 136,
        );
        $recommend_3 = array(
            'no' => 3,
            'thumbUrl' => 'https://img.taling.me/Content/Uploads/Cover/7a8cff1cd358975c2bdefb8219fbbe1fbccb1fe7.jpg',
            'badge' => 'LIVE',
            'talentTitle' => '미국 유학생 맞춤 피드백으로 레쥬메/\n영어면접 뽀개기',
            'category' => '영어회화',
            'tutor' => '조승욱',
            'price' => 40000,
            'classDetail' => '(총 10시간/시간당 4,000원)',
            'userCount' => 107,
        );
        $recommend_4 = array(
            'no' => 4,
            'thumbUrl' => 'https://img.taling.me/Content/Uploads/Cover/0a518d098df89e71f25e9039196cdf7f0b2ac92f.jpg',
            'badge' => 'LIVE',
            'talentTitle' => '6년차 번역가랑 소개팅 대화 주제로\n일본어 문장 만들기',
            'category' => '일본어회화',
            'tutor' => '한구루기',
            'price' => 40000,
            'classDetail' => '(총 10시간/시간당 4,000원)',
            'userCount' => 30,
        );
        array_push($getRecommendTest, $recommend_1, $recommend_2, $recommend_3, $recommend_4);


        return response()->json(['recommend' => $getRecommendTest]);
    }

    public function getTalingbestTest()
    {

        $getTalingbestTest = array();

        $talingbest_1 = array(
            'no' => 1,
            'thumbUrl' => 'https://img.taling.me/Content/Uploads/Images/49694c43c249c03d3ff2c19a8aba780b06a24a68.png',
            'badge' => '오리지널',
            'talentTitle' => '실무에 진짜 필요한\n엑셀 노하우',
            'category' => '엑셀',
            'tutor' => '쏘피',
            'price' => 119000,
            'classDetail' => '(총 8시간 3분)',
            'userCount' => 9373,
        );
        $talingbest_2 = array(
            'no' => 2,
            'thumbUrl' => 'https://img.taling.me/Content/Uploads/Images/2ba2306733b73146631a9ec853a56c22463d0bfa.png',
            'badge' => '오리지널',
            'talentTitle' => '팔로워와 수익화를 부르는\n인스타그램 운영 전략',
            'category' => '마케팅',
            'tutor' => '엠마',
            'price' => 139000,
            'classDetail' => '(총 10시간 14분)',
            'userCount' => 3128,
        );
        $talingbest_3 = array(
            'no'=> 3,
            'thumbUrl'=> 'https://s3.ap-northeast-2.amazonaws.com/taling.me/…r/s_3b01a17f86f0663c8197c4fc85bab02e907e6324.jpeg',
            'badge'=> 'LIVE',
            'talentTitle'=> '2022 사주&자미두수로 보는\n타고난 운',
            'category'=> '사주/타로',
            'tutor'=> '치타',
            'price'=> 28500,
            'classDetail'=> '(총 1시간/시간당 28,500원)',
            'userCount'=> 993
        );
        $talingbest_4 = array(
            'no' => 4,
            'thumbUrl' => 'https://img.taling.me/Content/Uploads/Images/6bfd15fec5b3bf59aab071ef351e4ea272fb5d09.png',
            'badge' => '오리지널',
            'talentTitle' => '대충 익힌 코딩 바로잡는\n파이썬 데이터 분석의 정석',
            'category' => '데이터분석',
            'tutor' => '나성호',
            'price' => 90000,
            'classDetail' => '(총 4시간 3분)',
            'userCount' => 250,
        );

        array_push($getTalingbestTest, $talingbest_1, $talingbest_2, $talingbest_3, $talingbest_4);
    }
}
