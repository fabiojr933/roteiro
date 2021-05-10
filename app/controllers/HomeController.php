<?php
namespace app\controllers;
use app\core\Controller;
use app\models\service\Service;
use app\util\UtilService;

class HomeController extends Controller{  
   
   public function __construct()
   {
      $this->login = UtilService::getUsuario();
      if(!$this->login){
         $this->redirect(URL_BASE."login");
         exit;
      }
   }

   public function index(){       
      $tabela = "contato";
      $dados["view"]       = "home";       
      $dados["countContato"] = Service::getTotal($tabela, "id_contato");
	   $this->load("template", $dados);
   } 
}
