<?php

class MensagemAleraInforma
{    
    private $session;

    public function __construct($nome_sessio)
    {
        $this->session = $nome_sessio;
    }
    
    public function titulo()
    {
        return $_SESSION[$this->session]['msg']['titulo'];
    }
    
    public function texto()
    {
        $_SESSION[$this->session]['msg']['exibir'] = false;
        return $_SESSION[$this->session]['msg']['texto'];
    }
    
    public function tipo()
    {
        return $_SESSION[$this->session]['msg']['tipo'];
    }
    
    public function status_exibir()
    {
        return $_SESSION[$this->session]['msg']['exibir'];
    }
    
    public function exibir($titulo = 'Primeiro parametro: Titulo', $texto = 'Segundo parametro: Texto', $tipo = 'danger')
    {
        $_SESSION[$this->session]['msg']['titulo']  = $titulo;
        $_SESSION[$this->session]['msg']['texto']   = $texto;
        $_SESSION[$this->session]['msg']['tipo']    = $tipo;
        $_SESSION[$this->session]['msg']['exibir']  = true;
    }
    
    public function apagar()
    {
        unset($_SESSION[$this->session]['msg']);
    }
}