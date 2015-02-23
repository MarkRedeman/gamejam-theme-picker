<?php namespace GameJam\Http\Requests;

use GameJam\Http\Requests\Request;

class SubmitThemeRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
	        'name' => 'required|unique:themes'
		];
	}

}
