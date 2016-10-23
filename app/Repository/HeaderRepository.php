<?php
/**
 * Created by PhpStorm.
 * User: Ormedo
 * Date: 23/10/2016
 * Time: 17:59
 * */
namespace App\Repository;

use App\Header;

class HeaderRepository
{

    public function getHeader()
    {
        $header = Header::find(1);;
        return $header;
    }


}