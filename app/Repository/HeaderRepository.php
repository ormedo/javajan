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
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User $user
     * @return Collection
     */
    public function getHeader()
    {
        $header = Header::find(1);;
        return $header;
    }


}