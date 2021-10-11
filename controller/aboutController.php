<?php

class aboutController extends controller{

    public function index(){

        $dados =array(
            'nome'=> 'Valmyr Tavares Malta de Lima'
        );

        $this->loadTemplate('about',$dados);
    }
}