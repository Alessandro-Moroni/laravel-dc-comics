<form action="{{route('comics.destroy', $comic)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete {{$comic->title}}?')">
    @csrf
    @method('DELETE')


    <button type="submit" class="btn btn-danger">
        <i class="fa-solid fa-trash"></i>
    </button>
</form>
