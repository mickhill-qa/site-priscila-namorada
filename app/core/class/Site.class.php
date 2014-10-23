<?php

abstract class Site
{
    protected $site_config;
    protected $site_url;
    protected $site_titulo;
    protected $site_copyright;
    protected $site_author;
    protected $site_versao;

    public function __construct()
    {
        $this->site_config    = default_config();
        $this->site_url       = $this->site_url();
        $this->site_titulo    = $this->site_config['TITULO_APLICACAO'];
        $this->site_copyright = $this->site_config['COPYRIGHT_APLICACAO'];
        $this->site_author    = $this->site_config['AUTOR_APLICACAO'];
        $this->site_versao    = $this->site_config['VERSAO_APLICACAO'];
    }
    
    protected function site_url($uri = '')
    {
        return $this->site_config['URL_BASE'] . $uri;
    }
    
    protected function site_model($model = '')
    {
        $arquivo = $this->site_config['CAMINHOS']['APLICACAO'] . 'models/' . $model . '.class.php';
        
        if ($model == '')
            exit('Erro!<br />Passe o nome do "model" no paramentro sem a extenção.');
        
        elseif(!file_exists($arquivo))
            exit('Erro!<br />O model "' . $model . '.class.php" não existe.<br />OBS.: Nome de classe com letra maiuscula.');
        
        else
        {
            include_once($arquivo);
            return new $model();
        }
    }
}