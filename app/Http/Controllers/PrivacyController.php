<?php
namespace App\Http\Controllers;

use App\Repository\ConditionRepository;


class PrivacyController extends Controller
{
    protected $conditionRepository;

    public function __construct(ConditionRepository $repository)
    {

        $this->conditionRepository=$repository;
    }
    public function show(){
        return view('privacy', [
            'condition' => $this->conditionRepository->getCondition(),
        ]);
}}