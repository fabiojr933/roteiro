<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\ContatoService;
use app\models\service\Service;
use app\util\UtilService;

class ContatoController extends Controller
{
    private $tabela = "contato";
    private $campo = "id_contato";

    public function __construct()
   {
      $this->login = UtilService::getUsuario();
      if(!$this->login){
         $this->redirect(URL_BASE."login");
         exit;
      }
   }


    public function index(){
        $dados["lista"] = Service::lista($this->tabela);       
        $dados["view"] = "Contato/index";
        $this->load("template", $dados);

        i($dados["max"] = Service::getMaximo($this->tabela, "id_contato"));
    }
    public function create(){
        $dados["contato"] = Flash::getForm();
        $dados["view"] = "Contato/create";
        $this->load("template", $dados);
    }
    public function edit($id){
        $contato = Service::get($this->tabela, $this->campo, $id);
        if(!$contato){
            $this->redirect(URL_BASE."contato");
        }
        $dados["contato"] = $contato;
        $dados["view"] = "contato/create";
        $this->load("template", $dados);
    }
    public function salvar(){
        $contato = new \stdClass();
        $contato->id_contato = $_POST["id_contato"];
        $contato->cep = $_POST["cep"];
        $contato->contato = $_POST["contato"];
        $contato->endereco = $_POST["endereco"];
        $contato->complemento = $_POST["complemento"];
        $contato->numero = $_POST["numero"];
        $contato->bairro = $_POST["bairro"];
        $contato->cidade = $_POST["cidade"];
        $contato->uf = $_POST["uf"];
        $contato->cpf = $_POST["cpf"];
        $contato->sexo = $_POST["sexo"];
        $contato->data_cadastro = date("Y-m-d");
        $contato->email = $_POST["email"];
        $contato->site = $_POST["site"];
        $contato->observacao = $_POST["observacao"];
        $contato->login = $_POST["login"];
        $contato->senha = $_POST["senha"];

        Flash::setForm($contato);
        if(ContatoService::salvar($contato, $this->campo, $this->tabela)){
            $this->redirect(URL_BASE."contato");
        }else{
            if(!$contato->id_contato){
                $this->redirect(URL_BASE."contato/create");
            }else{
                $this->redirect(URL_BASE."contato/edit".$contato->id_contato);
            }
        }
    }
    public function excluir($id){
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE."contato");
    }
    public function filtro(){
        $campo = $_GET["campo"];
        $valor = $_GET["valor"];
        $dados["lista"] = Service::getLike($this->tabela, $campo, $valor, true);
        $dados["view"] = "contato/index";
        $this->load("template", $dados);
    }   

}
