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
    protected $pasta_uploads;
    public    $redes;

    public function __construct()
    {
        parent::__construct();



        // Cria objetos essenciais a essa aplicação...
        $this->site_session();
        $this->usuario       = $this->site_model('UsuarioRoot', $this->site_session_nome);
        $this->mensagem      = $this->site_model('MensagemAleraInforma', $this->site_session_nome);
        $this->pasta_uploads = $this->site_model('ArquivosMickHill',
                                                    $this->site_url,
                                                    $this->site_caminhos['PUBLIC']
                                                );

        if ($this->mensagem->status_exibicao())
            $this->pagina_add_js_footer('exec-notificacao');



        // Links dos menus: Topo e Rodapé
        $this->links_menu["Inicial"]   = $this->site_url;
        $this->links_menu["Imagens"]   = $this->site_url('imagens');
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
    
    public function pagina_erro($nomeArquivo = '', $tituloView = '')
    {
        if(($nomeArquivo == 404 || $nomeArquivo == 403) && $tituloView != '')
            exit("Para o erro $nomeArquivo o titulo é o padão do setup...");
        
        if($nomeArquivo == '' || $nomeArquivo == 404)
        {
            $nomeArquivo = 404;
            $tituloView  = $this->site_titulo_erros['404'];
        }

        elseif($nomeArquivo == 403)
            $tituloView = $this->site_titulo_erros['403'];
        
        $this->pagina_titulo = $tituloView;
        $this->layout('erros/' . $nomeArquivo);
    }
}