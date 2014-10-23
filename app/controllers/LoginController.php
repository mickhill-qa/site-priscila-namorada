<?php

class LoginController extends Controller
{
    public function Index()
    {
        if(@$_SESSION[$this->usuario_root->nome]['usuario-logado'] == true)
            $this->pagina_redireciona();

        else
            $this->layout();
    }
    
    public function entrar()
    {
        if(@$_POST)
        {
            $logado = $this->usuario_root->logar();
            if ($logado)
            {
                $this->alerta('Obs:' , 'Humnn! Você ainda lembra da minha senha. kkkk');
                return $this->pagina_redireciona($_SERVER['HTTP_REFERER'], false);
            }
            else
            {
                $this->alerta('Oops!' , 'Senha incorreta, tente novamente.', 'danger');
                return $this->pagina_redireciona('login');
            }
        }
        $this->pagina_erro();
    }
    
    public function sair()
    {
        if(@$_SESSION[$this->usuario_root->nome]['usuario-logado'] == true)
        {
            $this->usuario_root->deslogar();
            $this->alerta('Até mais!', 'Me manda um feedback do que achou...');
            $this->pagina_redireciona($_SERVER['HTTP_REFERER'], false);
        }
        
        else $this->pagina_redireciona();
    }
}