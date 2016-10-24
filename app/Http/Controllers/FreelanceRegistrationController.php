<?php

namespace App\Http\Controllers;

use App\Repository\TecnologyRepository;
use \Illuminate\Database\Eloquent\Collection;
class FreelanceRegistrationController extends Controller
{
    protected $tecnologyRepository;
    protected $errors;
    protected $success;
    public function __construct(TecnologyRepository $repository)
    {
        $this->errors=new Collection();
        $this->success=null;
        $this->tecnologyRepository=$repository;
    }
    public function index(){
        return view('freelance',[
                'tecnologies'=> $this->tecnologyRepository->getAllActiveTecnologies(),
                'errorMessage'=>$this->errors,
                'successList'=>$this->success
            ]
        );
    }
}
