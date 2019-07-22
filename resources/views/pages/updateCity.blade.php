@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-6 pt-5 pt-md-8" style="height:50px">

    </div>
<form method="POST" action="{{route('city.storeCity')}}">
    {{ csrf_field() }}
<h3>AddCity</h3>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">

                    <div class="col-12">
                        <select name="countriesID">
                            @foreach($countries as $country)
                                <option value="{{$country->id}}" > {{$country->name}} </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <input class="form-control" placeholder="Add City" type="text" name="name" value="" required="" autofocus="">
            <button type="submit">Add</button>

        </footer>
    </div>
</form>

        @foreach($cities as $city)

         <li>{{  $city->name }}  ({{ $city->country->name }})</li>

        @endforeach


    @endsection