<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\HeaderRepository;


class HeaderController extends Controller
{
    protected $headerRepository;

    public function __construct(HeaderRepository $repository)
    {
        $this->middleware('auth');
        $this->headerRepository=$repository;
    }

    public function  index(Request $request){
        return view('header', [
            'header' => $this->headerRepository->getHeader(),
            'successList'=>null
        ]);
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'header' => 'required',
        ]);

        $header = $this->headerRepository->getHeader();
        $header->headerContent=$request->header;
        $header->save();

        return view('header', [
            'header' => $this->headerRepository->getHeader(),
            'successList'=>'Actualizada Cabecera correctame!'
        ]);
    }
}
