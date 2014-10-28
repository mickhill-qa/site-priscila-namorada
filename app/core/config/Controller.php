<?php

class Controller extends Pagina
{
    public $links_menu;
    public $usuario;
    public $mensagem;
    public $redes;

    public function __construct()
    {
        parent::__construct();
        
        $this->site_session();
        $this->usuario  = $this->site_model('UsuarioRoot', $this->site_session_nome);
        $this->mensagem = $this->site_model('MensagemAleraInforma', $this->site_session_nome);



        $this->links_menu["Inicial"]   = $this->site_url;
        
        if(!$this->usuario->status_login())
            $this->links_menu["Login"] = $this->site_url('login');
        
        $this->links_menu["Vídeos"]    = $this->site_url('videos');
        
        
        $this->redes = array(
            '<i class="glyphicon glyphicon-envelope"></i> E-mail Missão'    => 'mailto:priscila.araujo@myldsmail.net?subject=Olá Sister!!!',
            '<i class="fa fa-facebook-square"></i> Facebook'                => 'https://www.facebook.com/priscila.lima.31586',
            '<i class="fa fa-google-plus-square"></i> Google+'              => 'https://plus.google.com/u/0/116213368272983215186/'
        );
    }

    protected function layout($view = "")
    {
        $this->pagina_html();
        $this->pagina_view('layout/topo');
        $this->pagina_view($view);
        $this->pagina_view('layout/rodape');
    }
    
    public function pagina_erro($viewErro = '404')
    {
        $this->layout('erros/' . $viewErro);
    }
}