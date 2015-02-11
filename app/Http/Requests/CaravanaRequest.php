<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CaravanaRequest extends Request {

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
			'nome'			=> 'required',
			'telefone'		=> 'required',
			'email'			=> 'required',
			'instituicao'	=> 'required',
			'areaAtuacao'	=> 'required'
		];
	}

	public function messages()
	{
		return [
			'nome.required' 		=> 'O campo Nome é obrigatório',
			'telefone.required'		=> 'O campo Telefone é obrigatório',
			'email.required'		=> 'O campo E-mail é obrigatório',
			'instituicao.required'  => 'O campo Instituição é obrigatório',
			'areaAtuacao.required'  => 'O campo Área de Atuação é obrigatório'
		];
	}
}
