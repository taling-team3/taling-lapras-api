<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    private function buildTree($data, $parent = 0)
    {
        $tree = array();
        foreach ($data as $d) {
            if ($d['parent'] === $parent) {
                // 재귀호출
                $children = $this->buildTree($data, $d['id']);

                if (!empty($children)) {
                    $d['children'] = $children;
                }
                $tree[] = $d;
            }
        }
        return $tree;
    }
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        try {
            Category::truncate();
        } catch (\Throwable $th) {
            //
        }

        // 더미 데이터
        $top = [
            ['parent' => 0, 'name' => '디자인 · 영상', 'slug' => '뷰티-헬스', 'is_order' => 1],
            ['parent' => 0, 'name' => '뷰티 · 헬스', 'slug' => '디자인-영상', 'is_order' => 2],
        ];

        $bottom = [
            ['parent' => 1, 'name' => '건축',       'slug' => '건축', 'is_order' => 1],
            ['parent' => 1, 'name' => '그래픽디자인', 'slug' => '그래픽디자인', 'is_order' => 2],
            ['parent' => 1, 'name' => 'UX/UI디자인', 'slug' => 'UX/UI디자인', 'is_order' => 3],
            ['parent' => 1, 'name' => '제품디자인','slug' => '제품디자인', 'is_order' => 4],
            ['parent' => 1, 'name' => '영상편집','slug' => '영상편집', 'is_order' => 5],
            ['parent' => 1, 'name' => '영상제작','slug' => '영상제작', 'is_order' => 6],

            ['parent' => 2, 'name' => '메이크업','slug' => '메이크업', 'is_order' => 1],
            ['parent' => 2, 'name' => '퍼스널컬러','slug' => '퍼스널컬러', 'is_order' => 2],
            ['parent' => 2, 'name' => '패션','slug' => '패션', 'is_order' => 3],
            ['parent' => 2, 'name' => '셀프케어','slug' => '셀프케어', 'is_order' => 4],
            ['parent' => 2, 'name' => 'PT/GX','slug' => 'PT/GX', 'is_order' => 5],
        ];

        $data = array_merge($top, $bottom);
        $result = Category::insert($data);

        if (!$result) {
            return response()->json(['message' => '데이터 추가에 실패함'], 500)->header('Content-Type', 'application/json');
        }

        $rows = Category::where('is_show', 1)->orderBy('parent', 'asc')->get();
        $tree = $this->buildTree($rows);

        Storage::disk('public')->put('/api/categories.json', json_encode($tree));
        return [
            'name' => $this->faker->randomElement(['디자인', '사진']),
            'slug' => $this->faker->randomElement(['영상', '편집', '툴']),
            'is_order' => 0, // $this->faker->numberBetween(),
            'is_show' => false, // $this->faker->randomElement([0, 1]),
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}
