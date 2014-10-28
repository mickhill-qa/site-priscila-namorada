<?php

include_once 'Site.class.php';

abstract class Pagina extends Site
{
    protected $pagina_url;
    public    $pagina_titulo;
    public    $pagina_dados;
    private   $pagina_html;


    public function __construct()
    {
        parent::__construct();
        
        $this->pagina_url     = $this->pagina_url();
        $this->pagina_titulo  = $this->site_uri[0] == $this->site_homepage ? $this->site_titulo : $this->pagina_titulo();
        
        include_once           'Html.class.php';
        $this->pagina_html    = new Html();
    }
    
    protected function pagina_url($pg = '')
    {
        return $this->pagina_url = $this->site_url . @$_GET['uri'] . ($pg == '' ? '' : '/' . $pg);
    }

    public function pagina_titulo($tituloPagina = '')
    {
        if ($tituloPagina == '')
            $subTituloSite = default_trata_uri($this->site_uri[0], ' ');

        else
            $subTituloSite = $tituloPagina;
            
        return $this->pagina_titulo = $this->site_titulo . ' - ' . $subTituloSite;
    }

    protected function pagina_redireciona($pg = '', $interno = TRUE)
    {
        if ($interno == true)
            $pg = $this->site_url($pg);

        echo '<script>location.href="' . $pg . '";</script>';
    }
    
    protected function pagina_voltar($indice = 1)
    {
        echo "<script>location.href(history.go(-$indice));</script>";
    }

    public function pagina_erro($viewErro = '404')
    {
        $arquivo = $this->site_caminhos['APLICACAO'] . 'views/erros/' . $viewErro . $this->site_extencoes['Views'];
        
        if (file_exists($arquivo))
        {
            $this->pagina_html();
            return require_once $arquivo;
        }

        exit('Erro!<br>A view de erro "' . $viewErro . $this->site_extencoes['Views'] . '" não existe.');
    }
    
    
    protected function pagina_view($view = '')
    {
        if ($view == '')
        {
            $view[0] = $this->site_uri[0];
            $view[1] = $this->site_uri[1];
        }

        else
        {
            $view  = explode('/', $view);
            for($i = 0; $i < 2; $i++)
            {
                @$view[$i] = ((($view[$i] == NULL) || ($view[$i] == '')) ? $this->site_uri[$i] : $view[$i] );
            }
        }

        $view      = $view[0] . '/' . $view[1];
        $arquivo   = $this->site_caminhos['APLICACAO'] . 'views/' . $view .  $this->site_extencoes['Views'];

        if (file_exists($arquivo))
        {
            return require_once $arquivo;
        }

        exit('Erro!<br>A view "' . $view . $this->site_extencoes['Views'] . '" não existe.');
    }
    
    
    public function pagina_html()
    {
        $this->pagina_html->title($this->pagina_titulo);
        
        if ($this->site_cabecalho['favicon'])
            $this->pagina_html->favicon($this->site_url('img/favicon' . $this->site_extencoes['favicon']));
        
        foreach ($this->site_cabecalho['css'] as $arquivo)
            $this->pagina_html->css($this->site_url('css/' . $arquivo));
        
        foreach ($this->site_cabecalho['js'] as $arquivo)
            $this->pagina_html->js($this->site_url('js/' . $arquivo));
        
        $this->pagina_html->author($this->site_author);
        $this->pagina_html->contact($this->site_author_contato);
        $this->pagina_html->keywords($this->site_cabecalho['keywords']);
        $this->pagina_html->description($this->site_cabecalho['description']);
        $this->pagina_html->copyright($this->site_copyright);
        
        $this->pagina_html->inicio();
    }
    
    public function pagina_add_js($nomeJs = '')
    {
        return array_push($this->site_cabecalho['js'], $nomeJs);
    }
    
    public function pagina_add_css($nomeCss = '')
    {
        return array_push($this->site_cabecalho['css'], $nomeCss);
    }

    public function __destruct()
    {
        $this->pagina_html->fim();
    }
}