@extends('layouts.app')

@section('content')

    <div class="header bg-gradient-primary pb-6 pt-5 pt-md-8" style="height:50px">

    </div>
  <div>
            <form method = 'POST' class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto" action="{{route('city.saveCity')}}">
{{csrf_field()}}
            <select name = "countriesID" class="btn btn-primary my-4" class="form-control-label">
                @foreach($countries as $country)
                    <option value="{{$country->id}}" > {{$country->name}}</option>
                @endforeach
            </select>
                <input class="form-control" placeholder="Add City" type="text" style = "color:rebeccapurple" name="name" value="" required="" autofocus="">
                <button class="btn btn-primary my-4" type="submit">Add City</button>
              {{--@if ($message = Session::get('message'))
                    <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif--}}

          {{-- moze i implode umjesto data[message], mora ispisati string, ne moze array --}}
            @foreach($user->unreadNotifications as $notifications)

                    {{--<li>{{$notifications->data['message']}}</li>--}}
                    <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $notifications->data['message'] }}</strong>
                    </div>
                {{$notifications->markAsRead()}}
                @endforeach
            </form>

        </div>



    @endsection