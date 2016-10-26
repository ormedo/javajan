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
        $tecnologies =Tecnology::where('active', 1)
            ->orderBy('name', 'desc')
            ->get();
        return $tecnologies;
    }
    public function getByName($name){
        return $tecnologies =Tecnology::where([
            'name'=> $name,
            'active'=>1,
        ])
            ->orderBy('name', 'desc')
            ->first();
    }


        public function getByFreelance($freelanceId)
        {
            $tec = Tecnology::whereHas('freelances', function($q) use($freelanceId)
            {
                $q->where('freelance_id', $freelanceId);
            })->get();
            return $tec;
        }
    public function getOrCreate($name){
        $resultTecnology=new Tecnology();
        if($this->exist($name)){
            $resultTecnology=$this->getByName($name);
        }else{

            $resultTecnology->name=$name;
            $resultTecnology->active=1;
            $resultTecnology->save();
        }

        return $resultTecnology;
    }
    public function exist($name)
    {
        $tecnologies =Tecnology::where([
            'name'=> $name,
            'active'=>1,
            ])
            ->orderBy('name', 'desc')
            ->get();

        return (count($tecnologies)>0);
    }


}