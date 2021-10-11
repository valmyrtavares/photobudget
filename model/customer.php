<?php

class Customer extends model{
    public $id;
    public $mainCustomer;
    public $phone;
    public $email;
    public $bride;
    public $groom;
    public $guestNumber;
    public $eventType;
    public $budgetType;
    public $location;
    public $church;
    public $partyroom;
    public $album;
    public $makingBride;
    public $makingGroom;
    public $finalValue;
    public $personalPhotograph;
    public $albumPages;
    public $albumPhotos;
    public $token;




    public function add(Customer $c){
        
        $sql = ("INSERT INTO customer
            (mainCustomer, phone, email, bride, groom, guestNumber, eventType, 
            location, church, partyroom, token)
            VALUES
            (:mainCustomer, :phone, :email, :bride, :groom, :guestNumber, :eventType, 
            :location, :church, :partyroom, :token)"
        );

        $sql = $this->db->prepare($sql);

        $sql->bindValue(':mainCustomer', $c->mainCustomer);
        $sql->bindValue(':phone', $c->phone);
        $sql->bindValue(':email', $c->email);
        $sql->bindValue(':bride', $c->bride);
        $sql->bindValue(':groom', $c->groom);
        $sql->bindValue(':guestNumber', $c->guestNumber);
        $sql->bindValue(':eventType', $c->eventType);     
        $sql->bindValue(':location', $c->location);
        $sql->bindValue(':church', $c->church);
        $sql->bindValue(':partyroom', $c->partyroom);
        $sql->bindValue(':token', $c->token);      
        
        $res = $sql->execute();   
    }




    public function update(Customer $c){      

        $sql = ("UPDATE customer SET
        makingBride = :makingBride,
        makingGroom = :makingGroom,
        finalValue = :finalValue,
        personalPhotograph = :personalPhotograph,
        album = :album,
        albumPhotos = :albumPhotos,
        albumPages = :albumPages,
        budgetType = :budgetType
        WHERE token = :token");

        $sql = $this->db->prepare($sql);    

        $sql->bindValue(':token', $c->token);
        $sql->bindValue(':makingBride', $c->makingBride);
        $sql->bindValue(':makingGroom', $c->makingGroom);
        $sql->bindValue(':finalValue', $c->finalValue);
        $sql->bindValue(':album', $c->album);
        $sql->bindValue(':budgetType', $c->budgetType);
        $sql->bindValue(':personalPhotograph', $c->personalPhotograph);
        $sql->bindValue(':albumPages', $c->albumPages);
        $sql->bindValue(':albumPhotos', $c->albumPhotos);
        $sql->execute();

        return true;
    }



    public function get(){

        $t =  $_SESSION['token'];

        $sql = ("SELECT * FROM customer WHERE token = :token");
        $sql = $this->db->prepare($sql);    
        $sql->bindValue(':token',$t);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch(PDO::FETCH_ASSOC);
           return $data;
        }else{
           return false;
        }
    }

}