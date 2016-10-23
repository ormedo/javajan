<?php

namespace App\Http\Controllers;

use App\Repository\TecnologyRepository;
use App\Tecnology;
use Illuminate\Http\Request;
use \Illuminate\Database\Eloquent\Collection;
use App\Http\Requests;

class TecnologyController extends Controller
{
    protected $tecnologyRepository;
    protected $errors;
    protected $success;
    public function __construct(TecnologyRepository $repository)
    {
        $errors=new Collection();
        $success=null;
        $this->middleware('auth');
        $this->tecnologyRepository=$repository;
    }
    public function index(Request $request){

        return view('tecnology',[
            'tecnologies'=> $this->tecnologyRepository->getTecnologies(),
            'errorMessage'=>$this->errors,
            'successList'=>$this->success
        ]);

    }
    public function create(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
        ]);

        if($this->tecnologyRepository->exist($request->nombre)){
            $this->errors='La tecnología ya existe.';
        }else{
            $newTecnology=new Tecnology();
            $newTecnology->nombre=$request->nombre;
            $newTecnology->activo=1;
            $newTecnology->save();
            $this->success="Tecnología creada Correctamente";
        }

        return view('tecnology',[
            'tecnologies'=> $this->tecnologyRepository->getTecnologies(),
            'errorMessage'=>$this->errors,
            'successList'=>$this->success
        ]);

    }
    public function disable(Request $request){

        $tecnology=Tecnology::findOrFail($request->id);
        $tecnology->activo=0;
        $tecnology->save();

        return view('tecnology',[
            'tecnologies'=> $this->tecnologyRepository->getTecnologies(),
            'errorMessage'=>$this->errors,
            'successList'=>$this->success
        ]);

    }
    public function enable(Request $request){

        $tecnology=Tecnology::findOrFail($request->id);
        $tecnology->activo=1;
        $tecnology->save();

        return view('tecnology',[
            'tecnologies'=> $this->tecnologyRepository->getTecnologies(),
            'errorMessage'=>$this->errors,
            'successList'=>$this->success
        ]);

    }
}

