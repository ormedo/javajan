<?php
namespace App\Repository;
use App\Tecnology;
class TecnologyRepository
{

    public function getTecnologies()
    {
        $tecnologies = Tecnology::all();
        return $tecnologies;
    }
    public function getAllActiveTecnologies()
    {
        $tecnologies =Tecnology::where('activo', 1)
            ->orderBy('nombre', 'desc')
            ->get();
        return $tecnologies;
    }
    public function exist($nombre)
    {
        $tecnologies =Tecnology::where('nombre', $nombre)
            ->orderBy('nombre', 'desc')
            ->get();

        return (count($tecnologies)>0);
    }


}