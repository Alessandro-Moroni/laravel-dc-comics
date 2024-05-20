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


    <form action="{{route('comics.store')}}" method="POST">

        @csrf

        {{-- Autocompilazione --}}
        {{-- @php
            $status = 'test fillable';
            $title = 'title';
            $description = 'description';
            $thumb = 'thumb';
            $price = 'price';
            $series = 'series';
            $sale_date = 'sale_date';
            $type = 'type';
            $artists = 'artists';
            $writers = 'writers';

            if ($status === 'test fillable') {

                $title = 'Default title';
                $description = 'The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!';
                $thumb = 'https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY';
                $price = '$19.99';
                $series = 'Action Comics';
                $sale_date = '2018-10-02';
                $type = 'comic book';
                $artists = 'José Luis García-López-Clay Mann-Rafael Albuquerque-Patrick Gleason-Dan Jurgens-Joe Shuster-Neal Adams-Curt Swan-John Cassaday-Olivier Coipel-Jim Lee';
                $writers = 'Brad Meltzer-Tom King-Scott Snyder-Geoff Johns-Brian Michael Bendis-Paul Dini-Louise Simonson-Richard Donner-Marv Wolfman-Peter J. Tomasi-Dan Jurgens-Jerry Siegel-Paul Levitz';
            }
        @endphp --}}

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control @error('title') is-invalid @enderror " id="title" value="{{old('title')}}" aria-describedby="emailHelp">
          @error('title')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" id="description" value="" class="form-control @error('description') is-invalid @enderror" cols="50" rows="5">{{old('description')}}</textarea>
          @error('description')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">String URL for the image</label>
          <input type="text" name="thumb" class="form-control @error('thumb') is-invalid @enderror" id="thumb" value="{{old('thumb')}}" aria-describedby="emailHelp">
          @error('thumb')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" value="{{old('price')}}" aria-describedby="emailHelp">
          @error('price')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" name="series" class="form-control @error('series') is-invalid @enderror" id="series" value="{{old('series')}}" aria-describedby="emailHelp">
          @error('series')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label">Exit Date</label>
          <input type="text" name="sale_date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" value="{{old('sale_date')}}" aria-describedby="emailHelp">
          @error('sale_date')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="type" value="{{old('type')}}" aria-describedby="emailHelp">
          @error('type')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="artists" class="form-label">Artists</label>
          <input type="text" name="artists" class="form-control @error('artists') is-invalid @enderror" id="artists" value="{{old('artists')}}" aria-describedby="emailHelp">
          @error('artists')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>

        <div class="mb-3">
          <label for="writers" class="form-label">Writers</label>
          <input type="text" name="writers" class="form-control @error('writers') is-invalid @enderror" id="writers" value="{{old('writers')}}" aria-describedby="emailHelp">
          @error('writers')

          <small class="text-danger">
            {{ $message }}
          </small>

          @enderror
        </div>


        <button type="submit" class="btn btn-primary me-3">Add Comic</button>

        <button type="reset" class="btn btn-danger">Reset</button>

    </form>

</div>


@endsection
