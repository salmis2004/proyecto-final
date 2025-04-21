<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Option;
use App\Models\Word;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Option::insert([
            ['option_text'=> 'Dispositivo electronico que realiza tareas computacionales', 'word_id'=>Word::where('word','Computadora')->first()->id,'is_correct' =>true],
            ['option_text' => 'Dispositivo que solo almacena archivos','word_id'=>Word::where('word','Computadora')->first()->id,'is_correct' =>false],
            ['option_text' => 'Pantalla que muestra imagenes sin procesarla','word_id'=>Word::where('word','Computadora')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Ciencia que trabaja con cosas muy pequeñas', 'word_id'=>Word::where('word','Nanotecnologia')->first()->id,'is_correct' =>true],
            ['option_text' => 'Tecnología usada solo en computadoras', 'word_id'=>Word::where('word','Nanotecnologia')->first()->id,'is_correct' =>false],
            ['option_text' => 'Estudio de planetas y estrellas', 'word_id'=>Word::where('word','Nanotecnologia')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Red que conecta computadoras en todo el mundo', 'word_id'=>Word::where('word','Internet')->first()->id,'is_correct' =>true],
            ['option_text' => 'Programa para escribir documentos', 'word_id'=>Word::where('word','Internet')->first()->id,'is_correct' =>false],
            ['option_text' => 'Cable que da electricidad a la computadora', 'word_id'=>Word::where('word','Internet')->first()->id,'is_correct' =>false],
        ]);
                
        Option::insert([
            ['option_text'=> 'Conjunto de computadoras conectadas para compartir información', 'word_id'=>Word::where('word','Redes')->first()->id,'is_correct' =>true],
            ['option_text' => 'Programa para dibujar en la computadora', 'word_id'=>Word::where('word','Redes')->first()->id,'is_correct' =>false],
            ['option_text' => 'Dispositivo que enfría el procesador', 'word_id'=>Word::where('word','Redes')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Tecnología que permite a las máquinas imitar la inteligencia humana.', 'word_id'=>Word::where('word','IA')->first()->id,'is_correct' =>true],
            ['option_text' => 'Aplicación para limpiar virus de la computadora.', 'word_id'=>Word::where('word','IA')->first()->id,'is_correct' =>false],
            ['option_text' => 'Lenguaje de programación usado solo para videojuegos.', 'word_id'=>Word::where('word','IA')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'La unidad básica de la materia', 'word_id'=>Word::where('word','Atomo')->first()->id,'is_correct' =>true],
            ['option_text' => 'Una partícula visible que forma los pensamientos.', 'word_id'=>Word::where('word','Atomo')->first()->id,'is_correct' =>false],
            ['option_text' => 'Una célula diminuta que vive en el cuerpo humano.', 'word_id'=>Word::where('word','Atomo')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'La unidad básica de los seres vivos', 'word_id'=>Word::where('word','Celula')->first()->id,'is_correct' =>true],
            ['option_text' => 'Un órgano que se encuentra solo en el cerebro', 'word_id'=>Word::where('word','Celula')->first()->id,'is_correct' =>false],
            ['option_text' => 'Un átomo que forma parte del aire.', 'word_id'=>Word::where('word','Celula')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'La capacidad de mover, detener o cambiar el estado de un cuerpo', 'word_id'=>Word::where('word','Fuerza')->first()->id,'is_correct' =>true],
            ['option_text' => ' La capacidad de un objeto para cambiar de color', 'word_id'=>Word::where('word','Fuerza')->first()->id,'is_correct' =>false],
            ['option_text' => 'Un tipo de energía que solo existe en la electricidad.', 'word_id'=>Word::where('word','Fuerza')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Fuerza que hace que los objetos se atraigan hacia el centro de la Tierra', 'word_id'=>Word::where('word','Gravedad')->first()->id,'is_correct' =>true],
            ['option_text' => 'Fuerza que empuja los objetos hacia arriba.', 'word_id'=>Word::where('word','Gravedad')->first()->id,'is_correct' =>false],
            ['option_text' => 'Fuerza que solo afecta a los objetos flotantes en el aire', 'word_id'=>Word::where('word','Gravedad')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'La capacidad para realizar trabajo o producir cambios', 'word_id'=>Word::where('word','Energia')->first()->id,'is_correct' =>true],
            ['option_text' => 'La cantidad de materia que tiene un objeto', 'word_id'=>Word::where('word','Energia')->first()->id,'is_correct' =>false],
            ['option_text' => ' El proceso de crecimiento de las plantas', 'word_id'=>Word::where('word','Energia')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Deporte con balón y pies', 'word_id'=>Word::where('word','Futbol')->first()->id,'is_correct' =>true],
            ['option_text' => 'Deporte con canasta', 'word_id'=>Word::where('word','Futbol')->first()->id,'is_correct' =>false],
            ['option_text' => 'Juego de cartas', 'word_id'=>Word::where('word','Futbol')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Deporte con balón y canasta', 'word_id'=>Word::where('word','Baloncesto')->first()->id,'is_correct' =>true],
            ['option_text' => 'Deporte con red y raquetas', 'word_id'=>Word::where('word','Baloncesto')->first()->id,'is_correct' =>false],
            ['option_text' => 'Juego de cartas en equipo', 'word_id'=>Word::where('word','Baloncesto')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Deporte en el que se usan raquetas para golpear una pelota sobre una red', 'word_id'=>Word::where('word','Tenis')->first()->id,'is_correct' =>true],
            ['option_text' => 'Deporte con red y raquetas', 'word_id'=>Word::where('word','Tenis')->first()->id,'is_correct' =>false],
            ['option_text' => 'uego en el que se corren largas distancias con obstáculos', 'word_id'=>Word::where('word','Tenis')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Deporte que consiste en correr en bicicleta', 'word_id'=>Word::where('word','Ciclismo')->first()->id,'is_correct' =>true],
            ['option_text' => 'Carrera de autos en pista', 'word_id'=>Word::where('word','Ciclismo')->first()->id,'is_correct' =>false],
            ['option_text' => 'Deporte que se juega con raquetas', 'word_id'=>Word::where('word','Ciclismo')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> ' Deporte que se practica en el agua', 'word_id'=>Word::where('word','Natacion')->first()->id,'is_correct' =>true],
            ['option_text' => 'Juego con pelotas en tierra', 'word_id'=>Word::where('word','Natacion')->first()->id,'is_correct' =>false],
            ['option_text' => 'Carrera de bicicletas en grupo', 'word_id'=>Word::where('word','Natacion')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Arte de representar con colores sobre una superficie', 'word_id'=>Word::where('word','Pintura')->first()->id,'is_correct' =>true],
            ['option_text' => 'Técnica para hacer música con instrumentos.', 'word_id'=>Word::where('word','Pintura')->first()->id,'is_correct' =>false],
            ['option_text' => 'Juego de construir figuras con bloques', 'word_id'=>Word::where('word','Pintura')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Arte de modelar o tallar materiales para crear figuras', 'word_id'=>Word::where('word','Escultura')->first()->id,'is_correct' =>true],
            ['option_text' => 'Técnica para tomar fotos con una cámara', 'word_id'=>Word::where('word','Escultura')->first()->id,'is_correct' =>false],
            ['option_text' => 'Estilo de baile con pasos rápidos', 'word_id'=>Word::where('word','Escultura')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Conjunto de expresiones creativas como la pintura, música o escultura', 'word_id'=>Word::where('word','Arte')->first()->id,'is_correct' =>true],
            ['option_text' => 'Técnica para tomar fotos con una cámara', 'word_id'=>Word::where('word','Arte')->first()->id,'is_correct' =>false],
            ['option_text' => 'Método para construir edificios usando planos arquitectónicos', 'word_id'=>Word::where('word','Arte')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Representación de historias frente a un público mediante actuación', 'word_id'=>Word::where('word','Teatro')->first()->id,'is_correct' =>true],
            ['option_text' => 'Estilo de pintura que usa solo colores oscuros', 'word_id'=>Word::where('word','Teatro')->first()->id,'is_correct' =>false],
            ['option_text' => 'Lugar donde se exponen esculturas al aire libre.', 'word_id'=>Word::where('word','Teatro')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Arte de capturar imágenes con una cámara', 'word_id'=>Word::where('word','Fotografia')->first()->id,'is_correct' =>true],
            ['option_text' => ' Técnica para esculpir figuras en madera', 'word_id'=>Word::where('word','Fotografia')->first()->id,'is_correct' =>false],
            ['option_text' => 'Lugar donde se exponen esculturas al aire libre.', 'word_id'=>Word::where('word','Fotografia')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Cocinar alimentos en agua hirviendo', 'word_id'=>Word::where('word','Batir')->first()->id,'is_correct' =>true],
            ['option_text' => 'Calentar un líquido hasta que hierva a fuego alto', 'word_id'=>Word::where('word','Batir')->first()->id,'is_correct' =>false],
            ['option_text' => 'Acelerar el proceso de cocción al añadir agua.', 'word_id'=>Word::where('word','Batir')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Calentar un alimento hasta que adquiera un color dorado o marrón', 'word_id'=>Word::where('word','Tostar')->first()->id,'is_correct' =>true],
            ['option_text' => 'Cocinar un alimento al vapor hasta que se ablande', 'word_id'=>Word::where('word','Tostar')->first()->id,'is_correct' =>false],
            ['option_text' => 'Cocinar un alimento en aceite frío para que se conserve', 'word_id'=>Word::where('word','Tostar')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Romper o separar algo en pedazos pequeños, especialmente alimentos', 'word_id'=>Word::where('word','Desmenuzar')->first()->id,'is_correct' =>true],
            ['option_text' => 'Cocinar un alimento en grandes trozos', 'word_id'=>Word::where('word','Desmenuzar')->first()->id,'is_correct' =>false],
            ['option_text' => 'Sazonar un alimento con especias antes de cocinarlo', 'word_id'=>Word::where('word','Desmenuzar')->first()->id,'is_correct' =>false],
        ]);

        Option::insert([
            ['option_text'=> 'Cocinar un alimento en agua o líquido caliente.', 'word_id'=>Word::where('word','Cocer')->first()->id,'is_correct' =>true],
            ['option_text' => 'Cocinar un alimento a alta temperatura sin agua', 'word_id'=>Word::where('word','Cocer')->first()->id,'is_correct' =>false],
            ['option_text' => 'Freír un alimento en aceite caliente hasta que esté crujiente', 'word_id'=>Word::where('word','Cocer')->first()->id,'is_correct' =>false],
        ]);
        
        Option::insert([
            ['option_text'=> 'Agregar especias o condimentos para darle sabor a la comida', 'word_id'=>Word::where('word','Sazonar')->first()->id,'is_correct' =>true],
            ['option_text' => 'Cocinar un alimento a la parrilla sin usar ningún líquido', 'word_id'=>Word::where('word','Sazonar')->first()->id,'is_correct' =>false],
            ['option_text' => 'Cocinar un alimento con fuego muy bajo para que se conserve', 'word_id'=>Word::where('word','Sazonar')->first()->id,'is_correct' =>false],
        ]);
    }
}
