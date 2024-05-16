@extends('layout.main')

@section('content')

<div class="container form-container my-5 p-3">


    <form action="{{route('comics.store')}}" method="POST">

        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">description</label>
          <textarea name="description" id="description" class="form-control" cols="30" rows="5"></textarea>
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">thumb</label>
          <input type="text" name="thumb" class="form-control" id="thumb" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">price</label>
          <input type="text" name="price" class="form-control" id="price" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="series" class="form-label">series</label>
          <input type="text" name="series" class="form-control" id="series" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label">sale_date</label>
          <input type="text" name="sale_date" class="form-control" id="sale_date" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">type</label>
          <input type="text" name="type" class="form-control" id="type" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="artists" class="form-label">artists</label>
          <input type="text" name="artists" class="form-control" id="artists" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="writers" class="form-label">writers</label>
          <input type="text" name="writers" class="form-control" id="writers" aria-describedby="emailHelp">
        </div>


        <button type="submit" class="btn btn-primary me-3">Add Comic</button>

        <button type="reset" class="btn btn-danger">Reset</button>

    </form>

</div>


@endsection
