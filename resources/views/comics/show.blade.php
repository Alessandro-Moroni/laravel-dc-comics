@extends('layout.main')

@section('content')

<h1 class="text-center mb-5 ">{{$comic->title}}</h1>

<div class="row row-cols-2  my-3 ">

    <div class="col">
        <img src="{{$comic->thumb}}" class="rounded h-100" style="width: 18rem;" alt="{{$comic->title}}">

    </div>

    <div class="col">
        <h3 class="">{{$comic->series}}</h3>

        <span class="">Exit date: {{$comic->sale_date}}</span>
        <p class="">Price: {{$comic->price}}</p>
        <p class="">Artists: {{$comic->artists}}</p>
        <p class="">Writers: {{$comic->writers}}</p>
        <p class="">Description: {{$comic->description}}</p>

        <div class="card-body">

          <a href="#" class="btn btn-primary">Come back</a>
        </div>
    </div>

</div>

@endsection
