<?php
/**
 * Essa estrutura de vídeos aparentemente repetitiva é o que me possibilitará
 * em um futuro proximo guardar esse dados em um banco de dados sem mudar 
 * muito em minha estrutura padrão e  nada em minha view de videos, só o que 
 * precisarei fazer é passar uma conexão logo na "Instacia da classe" para que
 * esse modelo possa realizar as operações com o banco de dados.
 *
 * @author Mick Hill
 */

class VideosYouTube
{
    public $videos;
    
    public function __construct()
    {
        $this->videos = array(
            '1' => array(
                'titulo' => 'Primeiro Video',
                'data'   => 'Não lembro a data!',
                'link'   => 'http://www.youtube.com/watch?v=uQB7QRyF4p4',
                'texto'  => 'Acho que esse foi o primeiro vídeos que eu te mandei, é aquele do cachorrinho.'
            ),
            '2' => array(
                'titulo' => 'Segundo Video',
                'data'   => 'Não lembro a data!',
                'link'   => 'https://www.youtube.com/watch?v=yET4p-r2TI8',
                'texto'  => 'Esse é aquele que te mandei por último no antigo site - Story of My Life.'
            ),
            '3' => array(
                'titulo' => 'Video de teste',
                'data'   => '25/09/1995',
                'link'   => 'https://www.youtube.com/watch?v=yET4p-r2TI8',
                'texto'  => 'Esse é aquele que te mandei por último no antigo site - Story of My Life.'
            )
        );
    }
    
    public function listar()
    {
        return $this->videos;
    }
}
