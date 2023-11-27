@extends('layouts.master')
@section('title', "Főoldal")
@section('content')

<div>
    <h1>Légminőség</h1>

    <div class="table-responsive">
        <table class="table table-primary table-stripped table-hover">
            <tr>
                <th>Id</th>
                <th>Légminőség</th>
                <th>Mérés ideje</th>
            </tr>
            @foreach ($legminosegek as $leg)
            <tr>
                <td>{{$leg->l_id}}</td>
                <td>{{$leg->legminoseg}}</td>
                <td>{{$leg->legmeres_ideje}}</td>
            </tr>
            @endforeach

        </table>

        {{$legminosegek->links() }}
    </div>
</div>

@endsection