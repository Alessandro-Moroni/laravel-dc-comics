@extends('layout.main')

@section('content')

<div class="container form-container my-5 p-3">

    @if ($errors->any())

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif


    <form action="{{route('comics.update', $comic)}}" method="POST" class="mb-3">

        @csrf
        @method('PUT')

        <h1>{{$comic->title}}</h1>

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id="title" value="{{old('title', $comic->title)}}" aria-describedby="emailHelp">
          @error('title')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" id="description" value="" class="form-control @error('description') is-invalid @enderror" cols="50" rows="5">{{old('description', $comic->description)}}</textarea>
          @error('description')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">String URL for the image</label>
          <input type="text" name="thumb" class="form-control @error('thumb') is-invalid @enderror" id="thumb" value="{{old('thumb', $comic->thumb)}}" aria-describedby="emailHelp">
          @error('thumb')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" value="{{old('price', $comic->price)}}" aria-describedby="emailHelp">
          @error('price')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" name="series" class="form-control @error('series') is-invalid @enderror" id="series" value="{{old('series', $comic->series)}}" aria-describedby="emailHelp">
          @error('series')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label">Exit Date</label>
          <input type="text" name="sale_date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}" aria-describedby="emailHelp">
          @error('sale_date')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="type" value="{{old('type', $comic->type)}}" aria-describedby="emailHelp">
          @error('type')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="artists" class="form-label">Artists</label>
          <input type="text" name="artists" class="form-control @error('artists') is-invalid @enderror" id="artists" value="{{old('artists', $comic->artists)}}" aria-describedby="emailHelp">
          @error('artists')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="writers" class="form-label">Writers</label>
          <input type="text" name="writers" class="form-control @error('writers') is-invalid @enderror" id="writers" value="{{old('writers', $comic->writers)}}" aria-describedby="emailHelp">
          @error('writers')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>


        <button type="submit" class="btn btn-primary me-3">Update Comic</button>

        <button type="reset" class="btn btn-warning me-3">Reset</button>

    </form>
    @include('partials.form_delete')

</div>


@endsection
