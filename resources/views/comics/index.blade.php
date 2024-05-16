@extends('layout.main')

@section('content')

<h1 class="text-center">Comics</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Serie</th>
        <th scope="col">Tipo</th>
        <th scope="col">Data</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)

        <tr>
          <td>{{$product->title}}</td>
          <td>{{$product->series}}</td>
          <td>{{$product->type}}</td>
          <td>{{$product->sale_date}}</td>

        </tr>
        @empty

        <h3>Non è presente nessun comics</h3>

        @endforelse

  </table>

@endsection
