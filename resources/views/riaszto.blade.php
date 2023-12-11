@extends('layouts.master')
@section('title', "Főoldal")
@section('content')

<div>
    <h1>Riasztó</h1>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-warning w-100 my-3" onclick="riasztoKapcsolas;">Bekapcsolás</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-dark w-100 my-3">Kikapcsolás</button>
                    </div>    
                </div>
            </div>
            <div class="col-6">
                <div></div>
            </div>
        </div>
    </div>

</div>

<script>
    function riasztoKapcsolas{
        $.ajax({
            url: "riasztosenddata",
            method: 'POST',
            data:{},
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            },
            beforeSend:()=>{
                //Küldés folyamatban
            },
            success:function(data){
                //Megérkezett a válasz...
            }
        });
    }
</script>
@endsection