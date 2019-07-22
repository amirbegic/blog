<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\cities;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    //
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cityID' => ['required', 'integer', 'exists:cities,id'],

        ]);
    }

    public function index()
    {
        //$cities = cities::get()->where('name','Mostar');
        // $cities = DB::table('cities')->get();
        $users = User::all();
        return view('pages.users', compact('users'));
    }


    public function update()
    {

        $cities = cities::all();
        $user = Auth::user();

        return view('pages.users.updateCity')->with('cities', $cities)
            ->withUser($user);

    }

    public function storeCity(Request $request)
    {
        $this->validator($request->all())->validate();


        $cityID = $request->post('cityID');
        if (!empty($cityID)) {
            $user = Auth::user();
            $user->citiesID = $request->post('cityID');
            $user->save();
        }
        return redirect(route('users.updateCity'));
    }


}
