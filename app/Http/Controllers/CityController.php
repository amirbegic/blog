<?php

namespace App\Http\Controllers;

use App\cities;
use App\countries;
use App\Http\Requests\InsertCityRequest;
use App\Notifications\CityNotAdded;
use App\Notifications\CityAdded;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    public function index() {
        $cities = cities::all();
        $countries = countries::all();

        return view('pages.updateCity', compact('cities', $cities), compact('countries', $countries));
}
public function addCity(){
$user = Auth::User();
        $cities = cities::all();
        $countries = countries::all();
        return view('city.addCity', compact('cities', $cities))->with('countries',$countries)->with('user', $user);

}

    public function store(InsertCityRequest $request)
    {


            $countriesID = $request->post('countriesID');
            $name = $request->post('name');
            $user = Auth::user();

            $user->notify(new CityAdded());
            //dodajemo unutar da bi se notifikacija kreirala samo ako
            $cities = new \App\cities;
            $cities->countriesID = $countriesID;
            $cities->name = $name;
            $cities->save();


            return redirect(route('city.addCity'));


    }
    //
}
