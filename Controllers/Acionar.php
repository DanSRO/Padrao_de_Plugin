<?php

/*
Aqui o namespace precisa se referir a pasta "Controllers" que está dentro da pasta do plugin
que se chama "BotaoInscricao". Assim o sistema reconherá os aquivos da pasta Controllers.

*/

namespace BotaoInscricao\Controllers;


use MapasCulturais\App;
use MapasCulturais\Entities;
use MapasCulturais\Controller;
use MapasCulturais\i;

//O NOME DA CLASSE SEMPRE É O MESMO DO ARQUIVO,ex:o nome da classe principal do aquivo Acionar.php será "Acionar".
class Acionar extends Controller
{

    //função principal da controller, que por padrão tem o mesmo nome da classe e do arquivo "acionar"
    //a diferença é que ela recebe a função tag "ALL_" que faz com que a função "acionar" manipule todos
    //os verbos HTTP(GET, PUT, DELETE, UPDAE, PATH)
    public function ALL_acionar()
    {
        echo "Olá mundo!";
    }
}
