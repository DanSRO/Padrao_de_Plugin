<?php

namespace BotaoInscricao;

use MapasCulturais\App;
use MapasCulturais\Entities;
use MapasCulturais\i;

//PARA ESSE PLUGIN FUNCIONAR CADASTRE ELE NO ARQUIVO config.php na parte de plugins
//ex: para esse plugin o parametro de configuração será: 'BotaoInscricao' => ['namespace' => 'BotaoInscricao']

class Plugin extends \MapasCulturais\Plugin
{

    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    public function _init()
    {

        $app = App::i();

        //Hook para colocar o botão na parte de "inscritos" do menu de oportunidades
        $app->hook('template(opportunity.single.header-inscritos):end', function () use ($app) {

            /**
             * retorna o botão, a função "part" se refere a pasta "parts" onde está o botão,
             * isso é um padrão do sistema.
             * 
             * o nome "BotaoAcionar" é o nome do arquivo de botão.
             */
            return  $this->part('BotaoAcionar');
        });
    }

    public function register()
    {
        $app = App::i();

        //REGISTRANDO CONTROLLER
        /**
         * ID DA CONTROLLER = "acionar"(por padrão o nome do id precisa ser igual ao nome do arquivo controller)
         * 
         * caminho do arquivo = "BotaoInscricao\Controllers\Acionar(nome da controller)"
         * 
         */
        $app->registerController('acionar', 'BotaoInscricao\Controllers\Acionar');
    }
}
