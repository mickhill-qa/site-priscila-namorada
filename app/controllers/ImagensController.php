<?php

class ImagensController extends Controller
{
    public $imagens;
    
    public function Index()
    {
        $this->pagina_add_css('blueimp-gallery.min');
        $this->pagina_add_css('bootstrap-image-gallery');
        $this->pagina_add_js_footer('jquery.blueimp-gallery.min');
        $this->pagina_add_js_footer('bootstrap-image-gallery');
        $this->imagens = $this->pasta_uploads->listar_pasta('imagens');
        $this->layout();
    }
}