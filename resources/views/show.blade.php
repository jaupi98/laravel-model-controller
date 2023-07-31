@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <img  class ="img-fluid" src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-8">
                <h2 class+="my-5">{{$comic->title}}</h2>
                <p>GENERE : {{$comic->type}}</p>
                <p>PREZZO : {{$comic->price}}</p>
                <p>SERIE : {{$comic->series}}</p>
                <p>DATA DI USCITA : {{$comic->sale_date}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <p>{{$comic->descrition }}</p>
            </div>
            <div class="col-12 col-md-6">
                @foreach($comic->writers as $writers)

                
            </div>
        </div>
    </div>
@endsection