@extends('layouts.master')
@section('title', "Főoldal")
@section('content')

<div>
    <h1>Távolság</h1>

    <div class="table-responsive">
        <table class="table table-primary table-stripped table-hover">
            <tr>
                <th>Id</th>
                <th>Távolság</th>
                <th>Mérés ideje</th>
            </tr>
            @foreach ($tavolsagok as $tav)
            <tr>
                <td>{{$tav->t_id}}</td>
                <td>{{$tav->tavolsag}} cm</td>
                <td>{{$tav->tavmeres_ideje}}</td>
            </tr>
            @endforeach

        </table>

        {{$tavolsagok->links() }}
    </div>
</div>

@endsection