<?php

class UsuarioRoot
{
    private $session;
    private $senha;
    
    public function __construct($nome_sessio_atual)
    {
        $this->session = $nome_sessio_atual;
        $this->senha   = '03a19dc32dd105eebdcb1701777925bc';
    }

    public function logar()
    {
        if (@$_POST['senha'])
        {
            $senhaDigitada = md5(base64_encode(@$_POST['senha']));
            
            if ($senhaDigitada == $this->senha)
            {
                $_SESSION[$this->session]['usuario']['status-login'] = true;
                return true;
            }
        }
        return false;
    }
    
    public function status()
    {
        return $_SESSION[$this->session]['usuario'];
    }
    
    public function status_login()
    {
        return $_SESSION[$this->session]['usuario']['status-login'];
    }
    
    public function deslogar()
    {
        unset($_SESSION[$this->session]['usuario']);
    }
}