<?php

namespace App\FirebaseNotfication\Services;

use App\FirebaseNotfication\Contract\FirebaseNotficationContract;
use Kreait\Firebase\Contract\Database;

class FirebaseNotficationsService implements FirebaseNotficationContract
{
    /**
     * Create a new class instance.
     */
    public $database;
    public function __construct()
    {
        $this->database = app('firebase.database');
    }
    public function sendNotfication(array $data)   :bool
    {
        $table_name = "notficationsTest";
        $post_data = [
            "title" => $data['title'],
            'des' => $data['desc']
        ];        
        $postRef = $this->database->getReference($table_name)->push($post_data);
        if($postRef){
            return true;
        }else{
            return false;
        }
    }
}
