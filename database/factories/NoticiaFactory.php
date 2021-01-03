<?php

namespace Database\Factories;

use App\Models\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticiaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Noticia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'autorId' => rand(1,5) , 
            'categoriaId' => rand(1,5),
            'titulo' => $this->faker->unique()->sentence(6, true) ,
            'imagenURL' => $this->faker->imageUrl($width=400, $height=300, 'cats'),  
            'contenido' => $this->faker->text(1500),   
            'F_Publicacion' => $this->faker->date($format = 'Y-m-d', $max = 'now')        
        ];
    }
}
