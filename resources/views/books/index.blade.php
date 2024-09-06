
@extends('layout')

@section('page-content')
    <p class="text-end">
        <a class="btn btn-primary" href="{{route('books.create')}}">Add Book</a>
    </p>
    <table class="table table-striped table-bordered">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Details</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>
                <a class="btn btn-outline-primary" href="{{route('books.show',$book->id)}}">Details</a>
                <form method="POST" action="{{route('books.destroy',$book->id)}}" onsubmit="return confirm('Sure?')">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-outline-primary" type="submit" value="delete">
                </form>
            </td>
            

        </tr>
            
        @endforeach
    </table>
    {{$books->links()}}
    
@endsection


















