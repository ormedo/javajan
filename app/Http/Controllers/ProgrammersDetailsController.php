<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\TecnologyRepository;
use App\Repository\FreelanceRepository;
use App\Mapper\FreelanceFormMapper;
use \Illuminate\Database\Eloquent\Collection;

class ProgrammersDetailsController extends Controller
{
    protected $freelanceRepository;
    protected $mapper;
    protected $tecnologyRepository;
    protected $errors;
    protected $success;
    public function __construct(TecnologyRepository $repository,FreelanceRepository $freelanceRepository,FreelanceFormMapper $mapper)
    {
        $errors=new Collection();
        $success=null;
        $this->mapper=$mapper;
        $this->tecnologyRepository=$repository;
        $this->freelanceRepository=$freelanceRepository;
        $this->middleware('auth');
    }
    public function index(Request $request){

        $programmer=$this->freelanceRepository->getFreelance($request->id);
        return view('programmersDetails',
            [
                'tecnologies'=>$this->tecnologyRepository->getAllActiveTecnologies(),
                'programmerTecnologies'=>$programmer->tecnologies,
                'programmer'=>$programmer,
                'errorMessage'=>$this->errors,
                'successList'=>$this->success
            ]);
    }

    public function update(Request $request){
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

        return view('programmers',
            [
                'tecnologies'=>$this->tecnologyRepository->getTecnologies(),
                'programmers'=>$this->freelanceRepository->getFreelances()
            ]);
    }
}
