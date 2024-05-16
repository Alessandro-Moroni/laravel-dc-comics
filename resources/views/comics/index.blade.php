@extends('layout.main')

@section('content')



{{-- <table class="table mt-5 ">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Series</th>
        <th scope="col">Type</th>
        <th scope="col">Exit Date</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)

        <tr>
          <td>{{$product->title}}</td>
          <td>{{$product->series}}</td>
          <td>{{$product->type}}</td>
          <td>{{$product->sale_date}}</td>
          <td>
            <a href="{{route('comics.show', $product->id)}}" class="btn btn-primary">
                <i class="fa-solid fa-eye"></i>
            </a>
          </td>
          <td>
            <a href="" class="btn btn-warning">
                <i class="fa-solid fa-pen"></i>
            </a>
          </td>
          <td>
            <a href="" class="btn btn-danger">
                <i class="fa-solid fa-trash"></i>
            </a>
          </td>

        </tr>
        @empty

        <h3>Non è presente nessun comics</h3>

        @endforelse

  </table> --}}

  <div class="container row row-cols-3 ">

      @foreach ($products as $product)

        <div class="col mb-5 ">


            <div class="card" style="width: 18rem;">
                <img src="{{$product->thumb}}" class="card-img-top img-list" alt="{{$product->title}}" >
                <div class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>

                <p class="card-text">Type: {{$product->type}}</p>

                <span class="card-text">{{$product->series}}</span>

                <p class="card-text">{{$product->sale_date}}</p>

                <a href="{{route('comics.show', $product->id)}}" class="btn btn-primary">
                    <i class="fa-solid fa-eye"></i>
                </a>

                <a href="" class="btn btn-warning">
                    <i class="fa-solid fa-pen"></i>
                </a>

                <a href="" class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                </a>

                </div>
            </div>


        </div>

        @endforeach

  </div>

@endsection
