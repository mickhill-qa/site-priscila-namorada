<?php
/*
 *-------------------------------------------------------
 *              Simple MVC - Mick Hill
 *-------------------------------------------------------
 * 
 *  Controlador Central
 *
 */

class Controller extends Pagina
{
    public    $links_menu;
    public    $usuario;
    public    $mensagem;
    public    $redes;
    protected $titulo_403;
    protected $titulo_404;

    public function __construct()
    {
        parent::__construct();



        // Exclui o "/index" da uir...
        if($this->pagina_uri[0] == "index")
            $this->pagina_redireciona();

        elseif($this->pagina_uri[1] == "index")
            $this->pagina_redireciona($this->pagina_uri[0]);



        // Titulos das páginas de erro
        $this->titulo_403 = 'Acesso Negado!';
        $this->titulo_404 = 'Oops! 404 Not Found';



        // Cria objetos essenciais a essa aplicação...
        $this->site_session();
        $this->usuario  = $this->site_model('UsuarioRoot', $this->site_session_nome);
        $this->mensagem = $this->site_model('MensagemAleraInforma', $this->site_session_nome);

        if ($this->mensagem->status_exibicao())
            $this->pagina_add_js_footer('exec-notificacao');



        // Links dos menus: Topo e Rodapé
        $this->links_menu["Inicial"]   = $this->site_url;
        if(!$this->usuario->status_login())
        $this->links_menu["Login"]     = $this->site_url('login');
        $this->links_menu["Vídeos"]    = $this->site_url('videos');



        // Redes sociais do rodapé
        $this->redes = array(
            '<i class="glyphicon glyphicon-envelope"></i> E-mail Missão' => 'mailto:priscila.araujo@myldsmail.net?subject=Olá Sister!!!',
            '<i class="fa fa-facebook-square"></i> Facebook'             => 'https://www.facebook.com/priscila.lima.31586',
            '<i class="fa fa-google-plus-square"></i> Google+'           => 'https://plus.google.com/u/0/116213368272983215186/'
        );



        
    }

    protected function layout($view = "")
    {
        $this->pagina_html();
        $this->pagina_view('layout/topo');
        $this->pagina_view($view);
        $this->pagina_view('layout/rodape');
        die;
    }
    
    public function pagina_erro($tituloView = '', $nomeArquivo = '404')
    {
        if($tituloView == '')
            $tituloView = $this->titulo_404;

        $this->pagina_titulo = $tituloView;
        $this->layout('erros/' . $nomeArquivo);
        die;
    }
}