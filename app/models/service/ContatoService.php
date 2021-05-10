<?php
namespace app\models\service;

use app\models\validacao\ContatoValidacao;
use app\util\UtilService;

class ContatoService{
    public static function salvar($contato, $campo, $tabela){
        global $config_upload;
        $validacao = ContatoValidacao::salvar($contato);
        if($validacao->qtdeErro() <= 0){
            //fazendo upload da foto
            if($_FILES["arquivo"]["name"]){
                $contato->foto = UtilService::upload("arquivo", $config_upload);
                if(!$contato->foto){
                    return false;
                }
            }
        }
        return Service::salvar($contato, $campo, $validacao->listaErros(), $tabela);
    } 
}