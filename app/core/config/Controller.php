<?php

class Controller extends Pagina
{
    public $links_menu;
    public $usuario;
    public $mensagem;

    public function __construct()
    {
        parent::__construct();
        
        $this->site_session();
        $this->usuario  = $this->site_model('UsuarioRoot', $this->site_session_nome);
        $this->mensagem = $this->site_model('MensagemAleraInforma', $this->site_session_nome);
        
        $this->links_menu = array(
//            "Imagens" => $this->site_url('imagens'),
            "Vídeos"  => $this->site_url('videos')
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