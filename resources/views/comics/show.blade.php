@extends('layout.main')

@section('content')

<h2 class="text-center mb-5 ">{{$comic->title}}</h2>

<div class="row row-cols-2  my-5 ">

    <div class="col d-flex justify-content-center">
        <img src="{{$comic->thumb}}" class="rounded h-100 img-comic" style="width: 18rem;" alt="{{$comic->title}}">

    </div>

    <div class="col bc-text">
        <h3 class="">{{$comic->series}}</h3>

        <p class="">Exit date: {{$comic->sale_date}}</p>
        <p class="">Price: {{$comic->price}}</p>
        <p class="">Artists: {{$comic->artists}}</p>
        <p class="">Writers: {{$comic->writers}}</p>
        <p class="">Description: {{$comic->description}}</p>

        <div class="card-body float-end">

          <a href="{{route('comics.index')}}" class="btn btn-primary">Come back</a>

        </div>
    </div>

</div>

@endsection
