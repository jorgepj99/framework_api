<?php
namespace A4\App\Controllers;

use A4\Sys\Controller;
use A4\App\Views\vError;

/**
 * Errores de controller
 *
 * @author Jorgepj99 <jorge.pablo.9@gmail.com>
 */
class Error extends Controller{
    private $message;
    
    function __construct($params) {
        parent::__construct($params);
        if(isset($params['message'])){
            $this->message=$params['message'];
        }else{
            $this->message="Se ha producido un error";
        }
        
    }

    function home(){
        if(env=='pro'){
            $pro="/A4/";
        }else{
            $pro="/index.php/";
        }
        $this->addData([
            'page'=>'Error',
            'title'=>'To do',
            'messageError'=> $this->message,
            'pro'=>$pro
        ]);
        $this->view=new vError($this->dataView, $this->dataTable);
        $this->view->show();
    }
    
    function setMensaje($textoMensaje){
        $this->message=$textoMensaje;
    }
    
}
