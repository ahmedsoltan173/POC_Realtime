<?php

namespace App\Http\Controllers;

use App\FirebaseNotfication\Facade\FireBaseNotficationFacade;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class notficationController extends Controller
{
    public $database;
    public function __construct(Database $database)
    {
        $this->database = $database;
    }


    public function __invoke(){
        $data=[
            "title"=>"hello",
            'desc'=>"descriptiondasdasdas"
        ];
        return FireBaseNotficationFacade::sendNotfication($data);
    }
}
