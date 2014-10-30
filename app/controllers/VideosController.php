<?php

class VideosController extends Controller
{
    public $videos_youtube;
    
    public function __construct()
    {
        parent::__construct();
        
        if(!$this->usuario->status_login())
            $this->pagina_erro($this->titulo_403, '403');
    }

    public function Index()
    {

        $this->videos_youtube = $this->site_model('VideosYouTube')->listar();
        $this->pagina_add_js_footer('bootstrap.youtubepopup.min');
        $this->pagina_add_js_footer('exec-youtube-modal');
        $this->layout();
    }
}