<?php

use MapasCulturais\App;
use MapasCulturais\i;

/*
    A variavel "$route" está recenbendo a criação de uma url.
    nessa funcao "createUrl" vc passa 3 parametros:
    1- id da controller(o mesmo que foi criado no arquivo Plugin.php)

    2 - nome da função principal da controller, por padrão colocamos o mesmo nome do controller,
    no caso "acionar".

    3 - dados de parametros - opcional se vc quiser passar algo por parametro na url.
*/

$route = App::i()->createUrl('acionar', 'acionar');


?>

<!--Botão simples com o href chamando a url que foi criada rota.-->
<a class="btn btn-primary" href="http://localhost:8080/acionar/acionar">Clique Aqui!</a>