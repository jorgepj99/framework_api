<?php
namespace A4\App\Controllers;

use A4\Sys\Controller;
//use A4\Sys\View;
use A4\App\Views\vHome;
use A4\App\Models\mHome;
use A4\Sys\Session;

/**
 *
 *
 * @author Jorgepj99 <jorge.pablo.9@gmail.com>
 */
class Home extends Controller {
    function __construct($params) {
        parent::__construct($params);
        $message=Session::get('message');
        $typeMessage=Session::get('typeMessage');

        if(is_null($typeMessage)){
            $typeMessage="";
        }else{
            Session::del('typeMessage');
        }

        if(is_null($message)){
            $message="";
        }else{
            Session::del('message');
        }
        if(env=='pro'){
            $pro="/A4/";
        }else{
            $pro="/index.php/";
        }
        $this->addData([
            'page'=>'Home',
            'title'=>'To do',
            'message'=>$message,
            'typeMessage'=>$typeMessage,
            'pro'=>$pro
        ]);
        $this->model=new mHome();
        $this->view=new vHome($this->dataView, $this->dataTable);
    }
    
    function home(){
        $this->view->show();
    }
    
}
