<?php

class IndexController extends Controller
{
    public function Index()
    {
        $this->pagina_add_css('jquery.countdown');
        $this->pagina_add_js_footer('jquery.countdown');
        $this->pagina_add_js_footer('exec-contador-regressivo');
        $this->layout();
    }
}