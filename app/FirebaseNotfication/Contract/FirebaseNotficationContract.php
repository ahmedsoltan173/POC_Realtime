<?php


namespace App\FirebaseNotfication\Contract;

interface FirebaseNotficationContract 
{
    public function sendNotfication(Array $data);  
}