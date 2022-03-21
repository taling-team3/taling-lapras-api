<?php

namespace App\Http\Requests\Test;

use App\Http\Traits\ApiResponseTrait;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateRequest extends FormRequest
{
    use ApiResponseTrait;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            "*.required" => '빈칸을 채워주세요',

        ];
    }

    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException($this->validation('뭐가 잘못 되었습니다.', $validator->errors(), 400));
    }
}
