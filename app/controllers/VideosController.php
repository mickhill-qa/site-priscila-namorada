<?php

class VideosController extends Controller
{
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