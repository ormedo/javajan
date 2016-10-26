<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\TecnologyRepository;
use App\Repository\FreelanceRepository;
use App\Mapper\FreelanceFormMapper;


class ProgrammersFilterController extends Controller
{
    protected $freelanceRepository;
    protected $mapper;
    protected $tecnologyRepository;
    public function __construct(TecnologyRepository $repository,FreelanceRepository $freelanceRepository,FreelanceFormMapper $mapper)
    {
        $this->mapper=$mapper;
        $this->tecnologyRepository=$repository;
        $this->freelanceRepository=$freelanceRepository;
        $this->middleware('auth');
    }
    public function index(){
        return view('programmers',
            [
                'tecnologies'=>$this->tecnologyRepository->getTecnologies(),
                'programmers'=>$this->freelanceRepository->getFreelances()
            ]);
    }

    public function search(Request $request){
          //return dd($request);
          return view('programmers',
              [
                  'tecnologies'=>$this->tecnologyRepository->getTecnologies(),
                  'programmers'=>$this->mapper->applyFilters($request)
              ]);
    }
}
