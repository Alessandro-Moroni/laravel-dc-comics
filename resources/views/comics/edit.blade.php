@extends('layout.main')

@section('content')

<div class="container form-container my-5 p-3">


    <form action="{{route('comics.update', $comic)}}" method="POST">

        @csrf
        @method('PUT')

        <h1>{{$comic->title}}</h1>

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title" value="{{$comic->title}}" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" id="description" value="" class="form-control" cols="50" rows="5">{{$comic->description}}</textarea>
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">String URL for the image</label>
          <input type="text" name="thumb" class="form-control" id="thumb" value="{{$comic->thumb}}" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" name="price" class="form-control" id="price" value="{{$comic->price}}" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" name="series" class="form-control" id="series" value="{{$comic->series}}" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label">Exit Date</label>
          <input type="text" name="sale_date" class="form-control" id="sale_date" value="{{$comic->sale_date}}" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" name="type" class="form-control" id="type" value="{{$comic->type}}" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="artists" class="form-label">Artists</label>
          <input type="text" name="artists" class="form-control" id="artists" value="{{$comic->artists}}" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="writers" class="form-label">Writers</label>
          <input type="text" name="writers" class="form-control" id="writers" value="{{$comic->writers}}" aria-describedby="emailHelp">
        </div>


        <button type="submit" class="btn btn-primary me-3">Update Comic</button>

        <button type="reset" class="btn btn-warning me-3">Reset</button>

        @include('partials.form_delete')
    </form>

</div>


@endsection
