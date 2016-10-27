<?php
namespace App\Repository;
use App\Freelance;
use App\Tecnology;
use App\FreelanceTecnology;
use Illuminate\Http\Request;

class FreelanceRepository{


    protected $tecnologyRepository;
    public function __construct(TecnologyRepository $repository)
    {

        $this->tecnologyRepository=$repository;
    }
    public function save(Freelance $freelance)
    {
        $freelance::create();
        return $freelance;
    }

    public function getFreelances(){
        $freelance2=new Freelance();
        return $freelance2::all();
    }

    public function getFreelance($id){

        $freelance = Freelance::find($id);
        return $freelance;
    }
    public function saveRelations(Freelance $freelance,Request $request){

        $tableIndex=$request->Tablelength;
        FreelanceTecnology::where( 'freelance_id',"=",$freelance->id)->delete();
        for($x=1;$x<=$tableIndex;$x++){
            $grade=$request["grades_".$x];
            $experience=$request["experiences_".$x];
            $freelance2=new Freelance();
            $tecnology=$this->tecnologyRepository->getOrCreate($request["tecnologies_".$x]);
           

            $freelance2->tecnologies()->save($tecnology,[
                'freelance_id'=>$freelance->id,
                'grade'=>$grade,
                'experience'=>$experience
            ]);
        }

    }


}