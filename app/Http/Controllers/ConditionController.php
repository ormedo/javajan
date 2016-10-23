<?php

namespace App\Http\Controllers;

use App\Repository\ConditionRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class ConditionController extends Controller
{
    protected $headerRepository;

    public function __construct(ConditionRepository $repository)
    {
        $this->middleware('auth');
        $this->headerRepository=$repository;
    }

    public function  index(Request $request){
        return view('conditions', [
            'condition' => $this->headerRepository->getCondition(),
            'successList'=>null
        ]);
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'condition' => 'required',
        ]);

        $condition = $this->headerRepository->getCondition();
        $condition->conditionContent=$request->condition;
        $condition->save();

        return view('conditions', [
            'condition' => $this->headerRepository->getCondition(),
            'successList'=>'Actualizada Condiciones de uso correctame!'
        ]);
    }


}
