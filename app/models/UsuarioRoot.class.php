<?php

class UsuarioRoot
{
    public  $nome  = 'sister-araujo';
    private $senha = '95c206e43fbaae287519c79b14c1dd33';
    
    public function session()
    {
        session_name($this->nome);
        @session_start();
    }
    
    public function logar()
    {
        if (@$_POST['senha'])
        {
            $senhaDigitada = md5(@$_POST['senha']);
            
            if ($senhaDigitada == $this->senha)
            {
                $this->session();
                $_SESSION[$this->nome]['usuario-logado'] = true;
                return true;
            }
        }
        return false;
    }
    
    public function deslogar()
    {
        session_destroy();
        $this->session();
    }
}