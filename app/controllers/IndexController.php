<?php

class IndexController extends Controller
{
    public function Index()
    {
        $this->pagina_add_css('jquery.countdown');
        $this->pagina_add_js('jquery.countdown');
        $this->layout();
        $this->contador_regressivo();
    }
    
    private function contador_regressivo()
    {
        echo "
        <script>
            $(function(){
                var note = 
                    $('#note'),
                    ts = new Date('2014/12/16 11:45:00')
                ;

                $('#countdown').countdown({
                    timestamp   : ts,
                    callback    : function(days, hours, minutes, seconds){

                        var message = '';

                        message += days    + ' dia'     + ( days==1 ? '':'s' )    + ', ';
                        message += hours   + ' hora'    + ( hours==1 ? '':'s' )   + ', ';
                        message += minutes + ' minuto'  + ( minutes==1 ? '':'s' ) + ' e ';
                        message += seconds + ' segundo' + ( seconds==1 ? '':'s' ) + '. <br />';

                        note.html(message);
                    }
                });
            });
        </script>";
    }
}