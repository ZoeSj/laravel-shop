<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class SendReviewRequest extends Request
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            'reviews' => ['required', 'array'],
            'reviews.*.id' => [
                'required',
                Rule::exists('order_items', 'id')->where('order_id', $this->route('order')->id)
            ],
            'reviews.*.rating' => ['required', 'integer', 'between:1,5'],
            'reviews.*.review' => ['required'],
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'reviews.*.rating' => '评分',
            'reviews.*.review' => '评价',
        ];
    }
}
