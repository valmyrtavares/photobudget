<?php
class homeController extends controller{

    public function index(){

      

       $dados = array(          
          
           'testeNome' =>'Valmyr Tavares'
       );

       

       $this->loadTemplate('home', $dados);
    }
}