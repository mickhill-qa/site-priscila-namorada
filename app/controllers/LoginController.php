<?php

class LoginController extends Controller
{
    public function Index()
    {
        if($this->usuario->status_login())
            $this->pagina_erro();

        else
            $this->layout();
    }
    
    public function entrar()
    {
        if(@$_POST)
        {
            $this->usuario->logar();

            if ($this->usuario->status_login())
            {
                $this->mensagem->exibir('Bem vinda meu amor!' , 'Humnn, Você ainda lembra da minha senha. kkkk', 'info');
                return $this->pagina_voltar(2);
            }
            else
            {
                $this->mensagem->exibir('Oops!' , 'Senha incorreta, tente novamente.');
                return $this->pagina_voltar();
            }
        }
        $this->pagina_erro();
    }
    
    public function sair()
    {
        if($this->usuario->status_login())
        {
            $this->usuario->deslogar();
            $this->mensagem->exibir('Até mais!', 'Me manda um feedback do que achou do site...', 'info');
            $this->pagina_voltar();
        }
        else $this->pagina_erro();
    }
}