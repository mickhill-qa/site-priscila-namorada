<?php

class VideosController extends Controller
{
    public $videos_youtube;
    public $videos_uploads;
    public $links_lateral;

    public function __construct()
    {
        parent::__construct();
        
        if(!$this->usuario->status_login())
            $this->pagina_erro('403');
        
        $this->links_lateral['<i class="fa fa-mail-reply-all"></i> Início']  = $this->site_url('videos');
        $this->links_lateral['<i class="fa fa-youtube-play"></i> YouTube']   = $this->site_url('videos/youtube');
        $this->links_lateral['<i class="fa fa-film"></i> Mick Hill']         = $this->site_url('videos/mick-hill');
        $this->links_lateral['<i class="fa fa-plus"></i> Outros']            = $this->site_url('videos/outros');        
    }

    public function Index()
    {
        $this->layout();
    }
    
    public function Youtube()
    {
        $this->pagina_titulo  = 'Vídeos do YouTube';
        $this->videos_youtube = $this->site_model('VideosYouTube')->listar();
        
        $this->pagina_add_js_footer('bootstrap.youtubepopup.min');
        $this->pagina_add_js_footer('exec-youtube-modal');
        $this->layout();
    }
    
    public function MickHill()
    {
        $this->pagina_titulo  = 'Vídeos de Mick Hill';
        $this->videos_uploads = $this->pasta_uploads->listar_pasta('videos/mick-hill');
        $this->layout("/uploads");
    }
    
    public function outros()
    {
        $this->pagina_titulo  = 'Outros vídeos';
        $this->videos_uploads = $this->pasta_uploads->listar_pasta('videos/outros');
        $this->layout('/uploads');
    }
}