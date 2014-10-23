<?php

class Controller extends Pagina
{
    public      $links_menu;
    protected   $usuario_root;


    public function __construct()
    {
        parent::__construct();
        
        $this->usuario_root = $this->site_model('UsuarioRoot');
        $this->usuario_root->session();
        
        $this->links_menu = array(
            "Imagens" => $this->site_url('imagens'),
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
    
    protected function alerta($titulo = 'Titulo alerta!', $msg = 'Corpo Mensagem', $tipo = 'info')
    {
        $_SESSION[$this->usuario_root->nome]['msg']['titulo']  = $titulo;
        $_SESSION[$this->usuario_root->nome]['msg']['texto']   = $msg;
        $_SESSION[$this->usuario_root->nome]['msg']['tipo']    = $tipo;
        $_SESSION[$this->usuario_root->nome]['msg']['exibir']  = true;
    }
}