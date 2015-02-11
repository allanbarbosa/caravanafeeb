<?php namespace App\Http\Middleware;

use App\Http\Caravana as ModelCaravana;

class Caravana
{
    protected $caravana;

    public function __construct(ModelCaravana $caravana)
    {
        $this->caravana = $caravana;
    }

    public function save($input)
    {

        $this->caravana->part_nome_completo = $input['nome'];
        $this->caravana->part_email         = $input['email'];
        $this->caravana->part_telefone      = $input['telefone'];
        $this->caravana->part_instituicao   = $input['instituicao'];
        $this->caravana->part_area_atuacao  = $input['areaAtuacao'];

        $this->caravana->save();

        if(!$this->caravana->part_id){
            return false;
        }

        return true;
    }

}