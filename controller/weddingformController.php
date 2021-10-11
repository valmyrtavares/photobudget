<?php



class weddingformController extends controller{

    public function index(){     

       $dados = array(          
           
       );       

       $this->loadTemplate('form',$dados);
    }





    public function insert(){
        $newCustomer = new Customer();
        
        $customer = $_POST;      

        if (!empty($customer)) {

          
            //TRATAMENTO DE IGREJAS
            if (!empty($customer['church'])) {
                $church = $customer['church'];
            } else {
                $church = $customer['churchlist'];
            }

            //TRATAMENTO DE SALÃO DE FESTAS

            if (!empty($customer['partyroom'])) {
                $partyroom = $customer['partyroom'];
            } else {
                $partyroom = $customer['partyroomlist'];
            }

            $token = md5(time()).rand(0, 9999);
            $_SESSION['customer'] = $token;

            //INSERINDO NO BANCO DE DADOS
            $newCustomer->mainCustomer = $customer['contractor'];
            $newCustomer->email = $customer['email'];
            $newCustomer->phone = $customer['phone'];
            $newCustomer->bride = $customer['bride'];
            $newCustomer->groom = $customer['groom'];
            $newCustomer->guestNumber = $customer['guestNumber'];
            $newCustomer->eventType = $customer['eventType'];
            $newCustomer->location = $customer['city'];
            $newCustomer->church =  $church;
            $newCustomer->partyroom = $partyroom;
            $newCustomer->token = $token;
            
            $res = $newCustomer->add($newCustomer);     
            $_SESSION['token'] = $token;
            $_SESSION['name'] =  $customer['contractor'];
        }

        //Zerando orçamento
        $_SESSION['prata'] = "";
        $_SESSION['ouro'] = "";
        $_SESSION['diamante'] = "";       

        if(empty($_SESSION['token'])){
            $_SESSION['token'] = $token;
        }       
       
        if(empty($_SESSION['name'])){
            $_SESSION['name'] =  $customer['contractor'];
        }      

        if(!empty($customer['guestNumber'])){
            $_SESSION['typebudget'] =  $customer['guestNumber'];
        }              
         
        $dados = array();      
        // echo $_SESSION['name']. '<br/>';
        // echo $customer['guestNumber']. '<br/>';
        // echo $_SESSION['typebudget'];
        // exit;
        
       if($_SESSION['typebudget'] < 100){
        $this->loadTemplate('low_budget', $dados);
       }else{
           $this->loadTemplate('high_budget', $dados);
        }      
    }   


    
    


    public function addbudget(){     

        $personalPhotographRequire = filter_input(INPUT_POST, 'personalPhotograph');
        $makingBrideRequire = filter_input(INPUT_POST, 'makingBride');
        $makingGroomRequire = filter_input(INPUT_POST, 'makingGroom');
        $albumRequire = filter_input(INPUT_POST, 'album');
        $initialValue = filter_input(INPUT_POST, 'initialValue');
        $brideValue = filter_input(INPUT_POST, 'brideValue');
        $groomValue = filter_input(INPUT_POST, 'groomValue');
        $PhotographyValue = filter_input(INPUT_POST, 'PhotographyValue');
        $AlbumValue = filter_input(INPUT_POST, 'AlbumValue');
        $budgetType = filter_input(INPUT_POST, 'budgetType');
        $albumPages = filter_input(INPUT_POST, 'albumPages');
        $albumPhotos = filter_input(INPUT_POST, 'albumPhotos');
        $category = filter_input(INPUT_POST, 'category');

        // echo 'personalPhotographRequire  ' .$personalPhotographRequire. '<br/>';
        // echo 'makingBrideRequire  ' .$makingBrideRequire. '<br/>';
        // echo 'makingGroomRequire  ' .$makingGroomRequire. '<br/>';
        // echo 'albumRequire  ' .$albumRequire. '<br/>';
        // echo 'initialValue  ' .$initialValue. '<br/>';
        // echo 'brideValue  ' .$brideValue. '<br/>';
        // echo 'groomValue  '  .$groomValue. '<br/>';
        // echo 'PhotographyValue  ' .$PhotographyValue. '<br/>';
        // echo 'AlbumValue  ' .$AlbumValue. '<br/>';
        // echo 'budgetType  ' .$budgetType. '<br/>';
        // exit;

        $AlbumValue = $albumRequire?$AlbumValue:0;
        $brideValue = $makingBrideRequire?$brideValue:0;
        $groomValue = $makingGroomRequire?$groomValue:0;
        $PhotographyValue = $personalPhotographRequire?$PhotographyValue:0;
        
        // echo 'Valor do Album  ' .$AlbumValue. '<br/>';
        // echo 'Valor do Making of noiva  ' .$bridelValue. '<br/>';
        // echo 'Valor do Making do noivo  ' .$groomlValue. '<br/>';
        // echo 'Valor da Fotógrafa  ' .$PhotographyValue. '<br/>';

        function addItens($a, $p, $g, $b, $i){
            return $a + $g + $b + $p + $i;
        }
        
        $finalValue = addItens($AlbumValue, $PhotographyValue, $groomValue, $brideValue, $initialValue);
        
        $_SESSION[$budgetType] = $finalValue ;
        
        $_SESSION['initialValue'] = $initialValue;

        $dados = array(            
        );      
        
        //UPDATE DB
        $newCustomer = new Customer();
        
        $newCustomer->makingBride = $brideValue;
        $newCustomer->makingGroom = $groomValue;
        $newCustomer->finalValue = $finalValue;
        $newCustomer->personalPhotograph = $PhotographyValue;
        $newCustomer->album = $AlbumValue;
        $newCustomer->budgetType = $budgetType;
        $newCustomer->albumPages = $albumPages;
        $newCustomer->albumPhotos = $albumPhotos;
        $newCustomer->albumPages = $albumPages;
        $newCustomer->albumPhotos = $albumPhotos;
        $newCustomer->token = $_SESSION['customer'];        
      
        $res = $newCustomer->update($newCustomer);   

        if($category=='low'){
            $this->loadTemplate('low_budget',$dados);
        }else{
            $this->loadTemplate('high_budget',$dados);
        }
    }




    
    
    public function estimate(){       

        $newCustomer = new Customer();
        $budgetCustomer = $newCustomer->get();

        $data = array(
            'budgetCustomer'=>   $budgetCustomer
        );

        $this->loadTemplate('budgetbrief',$data);        
    }
}