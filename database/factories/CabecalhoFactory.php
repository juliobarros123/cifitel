<?php

namespace Database\Factories;

use App\Models\Cabecalho;
use Illuminate\Database\Eloquent\Factories\Factory;

class CabecalhoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cabecalho::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
             'vc_ensignia'=>"logo", 
             'vc_logo'=>"logo",
             'vc_escola'=>"Escola de Formação de Técnicos de Saúde",
             'vc_acronimo'=>"EFTS",
             'vc_nif'=>"00454564568453132",
             'vc_republica'=>"República de Angola",
             'vc_ministerio'=>"Ministério da Educação",
             'vc_endereco'=>"Uige",
             'it_telefone'=>922555555,
             'vc_email'=>"tecni@te.com",
             'vc_nomeDirector'=>"Adalberto Cabenge",
        
                   ];
    }
}
