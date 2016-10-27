<?php

namespace App\Http\Controllers;

use App\Freelance;
use App\User;
use App\Mapper\FreelanceFormMapper;
use App\Repository\FreelanceRepository;
use App\Repository\HeaderRepository;
use Illuminate\Http\Request;
use App\Repository\TecnologyRepository;
use \Illuminate\Database\Eloquent\Collection;

class FreelanceRegistrationController extends Controller
{
    protected $tecnologyRepository;
    protected $freelanceRepository;
    protected $headerRepository;
    protected $mapper;
    protected $errors;
    protected $success;
    public function __construct(TecnologyRepository $repository,FreelanceRepository $freelanceRepository,
                                HeaderRepository $headerRepository,FreelanceFormMapper $mapper)
    {
        $this->mapper=$mapper;
        $this->errors=new Collection();
        $this->success=null;
        $this->tecnologyRepository=$repository;
        $this->freelanceRepository=$freelanceRepository;
        $this->headerRepository=$headerRepository;
    }

    public function index(){
        return view('freelance',[
                'tecnologies'=> $this->tecnologyRepository->getAllActiveTecnologies(),
                'headerContent'=>$this->headerRepository->getHeader(),
                'successList'=>$this->success
            ]
        );
    }
    public function create(Request $request){
        //return dd($request);
        $this->validate($request, [
            'firstName' => 'required',
            'location'=>'required',
            //'externalLink'=>'required',
            'country'=>'required',
            'birthDate'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'language'=>'required',
            'minprice'=>'required',

            'tecnologies_1'=>'required'
        ]);


        $freelance=$this->mapper->requestToMap($request);
        $freelance->save();

        $this->freelanceRepository->saveRelations( $freelance, $request);
       // mail ( User::find(1)->email, "New Registration!" , $freelance->name." has successfully registered;");
        return view('freelance',[
                'tecnologies'=> $this->tecnologyRepository->getAllActiveTecnologies(),
                'errorMessage'=>'',
                'headerContent'=>$this->headerRepository->getHeader(),
                'successList'=>"Registrado con exito"
            ]
        );

    }
}
