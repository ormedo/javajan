<?php
namespace App\Mapper;
use App\Freelance;
use App\Tecnology;
use Illuminate\Http\Request;

class FreelanceFormMapper{

    public function requestToMap(Request $request)
    {

        $langs = "";
        if (is_array($request->language)) {

                $langs =implode(",",$request->language);

        }else{
            $langs=$request->language;
        }


        $freelanceMapped = new Freelance(['name' => $request->firstName,
            'dni' => $request->dni,
            'location' => $request->location,
            'country' => $request->country,
            'emails' => $request->email,
            'birthdate' => $request->birthDate,
            'phonenumbers' => $request->phone,
            'externallinks' => $request->externalLink,
            'birthdate' => $request->birthDate,
            'languages' => $langs,
            'priceperhourmin'=>$request->minprice,
            'priceperhournormal'=>$request->normalprice,
            'comments'=>$request->comments
        ]);
        if($request->has('id')) {
            $freelanceMapped = Freelance::find($request->id);
            $freelanceMapped->name = $request->firstName;
            $freelanceMapped->dni = $request->dni;
            $freelanceMapped->location=$request->location;
            $freelanceMapped->country = $request->country;
            $freelanceMapped->emails = $request->email;
            $freelanceMapped->birthdate = $request->birthDate;
            $freelanceMapped->phonenumbers = $request->phone;
            $freelanceMapped->externallinks = $request->externalLink;
            $freelanceMapped->birthdate = $request->birthDate;
            $freelanceMapped->languages = $langs;
            $freelanceMapped->priceperhourmin=$request->minprice;
            $freelanceMapped->priceperhournormal=$request->normalprice;
            $freelanceMapped->comments=$request->comments;
        }

        return $freelanceMapped;
    }
    public  function applyFilters(Request $filters)
    {

        $freelance = (new Freelance)->newQuery();

        if ($filters->has('firstName')) {
            $freelance->where('name', $filters->firstName);
        }

        if ($filters->has('dni')) {
            $freelance->where('dni', $filters->dni);
        }


        if ($filters->has('location')) {
            $freelance->where('location', $filters->location);
        }

        if ($filters->has('email')) {
            $freelance->where('emails', $filters->email);
        }

        if ($filters->has('tecnology')) {
            $freelance->whereHas('tecnologies',
                function ($query) use ($filters) {
                    $query->where('tecnologies.name',
                        $filters->tecnology);
                });
        }
        if ($filters->has('birthDate')) {
            $freelance->where('birthdate', $filters->birthDate);
        }
        if ($filters->has('language')) {
            $langs="";
            foreach ($filters->language as $language){
                $langs=$langs+","+$language;
            }
            $freelance->where('languages', $filters->$langs);
        }
        if ($filters->has('minprice')) {
            $freelance->where('priceperhourmin', $filters->minprice);
        }
        if ($filters->has('normalprice')) {
            $freelance->where('priceperhournormal', $filters->normalprice);
        }

        // Get the results and return them.
        return $freelance->get();
    }
}