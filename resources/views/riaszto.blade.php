@extends('layouts.master')
@section('title',"Főoldal")
@section('content')
<div>
    <h1>Riasztó</h1>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-danger w-100 my-3 gombok" onclick="kapcsolas(1);">Bekapcsolás</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-primary w-100 my-3 gombok" onclick="kapcsolas(0);">Kikapcsolás</button>
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
    function kapcsolas(allapot){
        $.ajax({
            url: "alertsenddata",
            method: 'POST',
            data:{allapot:allapot},
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            },
            beforeSend:()=>{
                //Küldés folyamatban
                $(".gombok").toggleClass('disabled');
            },
            success:function(data){
                //Megérkezett a válasz...
                $(".gombok").toggleClass('disabled');
            }
        });
    }
</script>
@endsection