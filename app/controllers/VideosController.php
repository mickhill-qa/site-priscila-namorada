<?php

class VideosController extends Controller
{
    public function Index()
    {
        if(@$_SESSION[$this->usuario_root->nome]['usuario-logado'] == true)
            $this->layout();
        
        else
            $this->pagina_erro('403');
    }
}