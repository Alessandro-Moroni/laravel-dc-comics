@extends('layout.main')

@section('content')

<h2 class="text-center mb-5 ">{{$comic->title}}</h2>

<div class="row row-cols-2  my-5 ">

    <div class="col d-flex justify-content-center">
        <img src="{{$comic->thumb}}" class="rounded h-100" style="width: 18rem;" alt="{{$comic->title}}">

    </div>

    <div class="col bc-text">
        <h3 class="">{{$comic->series}}</h3>

        <span class="">Exit date: {{$comic->sale_date}}</span>
        <p class="">Price: {{$comic->price}}</p>
        <p class="">Artists: {{$comic->artists}}</p>
        <p class="">Writers: {{$comic->writers}}</p>
        <p class="">Description: {{$comic->description}}</p>

        <div class="card-body">

          <a href="{{route('comics.index')}}" class="btn btn-primary">Come back</a>
        </div>
    </div>

</div>

@endsection
