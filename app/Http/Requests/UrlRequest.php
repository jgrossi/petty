<?php

namespace Petty\Http\Requests;

use Petty\Http\Requests\Request;

class UrlRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function all()
    {
        $data = parent::all();

        foreach ($data as &$input) {
            $input = trim($input);
        }

        return $data;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'original_url' => 'required|url',
        ];
    }

    public function response(array $errors)
    {
        if ($this->ajax()) {
            $content = view('url.store-error', compact('errors'));

            return response($content, 422);
        }

        return parent::response($errors);
    }

    public function messages()
    {
        return [
            'original_url.required' => 'The URL to be shortened is required',
        ];
    }
}
