<?php

class VideosController extends Controller
{
    public $videos_youtube;
    
    public function __construct()
    {
        parent::__construct();
        
        if(!$this->usuario->status_login())
        {
            $this->pagina_erro('403');
            die;
        }
    }

    public function Index()
    {
        $this->videos_youtube = array(
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
            )
        );
        
        $this->pagina_add_js('bootstrap.youtubepopup.min');
        $this->layout();
        $this->exibir_videos_youtube();
    }
    
    private function exibir_videos_youtube()
    {
        echo '
        <script>
            $(function () {
                $(".youtube").YouTubeModal({autoplay:0, width:640, height:480});
            });
        </script>';
    }
}