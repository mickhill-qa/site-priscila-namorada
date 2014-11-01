<?php

class IndexController extends Controller
{
    public $banners;
    
    public function Index()
    {
        $this->banners = $this->pasta_uploads->listar_pasta('banners');
        
        $this->pagina_add_css('jquery.countdown');
        $this->pagina_add_js_footer('jquery.countdown');
        $this->pagina_add_js_footer('exec-contador-regressivo');
        $this->layout();
    }
}