<?php

namespace App\FirebaseNotfication\Facade;
use Illuminate\Support\Facades\Facade;

class FireBaseNotficationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "FirebaseNotficationsService";
    }

}



