@extends('layout')

@section('page-content')
    <a class = "btn btn-primary" href="{{route('books.index')}}">Back</a> 
    <legend>New Book</legend>
    <form method="POST" action="{{route('books.store')}}">
      {{ csrf_field() }}
        <div class="mb-2">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" value="{{old('title')}}">
          <div> {{$errors->first('title')}}</div>
        </div>
        <div class="mb-2">
          <label for="author" class="form-label">Author</label>
          <input type="text" class="form-control" name="author" value="{{old('author')}}">
          <div> {{$errors->first('author')}}</div>
        </div>
        <div class="mb-2">
          <label for="isbn" class="form-label">Isbn</label>
          <input type="text" class="form-control" name="isbn" value="{{old('isbn')}}">
          <div> {{$errors->first('isbn')}}</div>
        </div>
        <div class="mb-2">
          <label for="stock" class="form-label">Stock</label>
          <input type="text" class="form-control" name="stock" value="{{old('stock')}}">
          <div> {{$errors->first('stock')}}</div>
        </div>
        <div class="mb-2">
          <label for="price" class="form-label">Price</label>
          <input type="text" class="form-control" name="price" value="{{old('price')}}">
          <div> {{$errors->first('price')}}</div>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection