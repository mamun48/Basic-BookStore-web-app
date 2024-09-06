<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        $books = Book::paginate(10);
        return view('books.index')
        ->with('books',$books);
    }
    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show')->with('book',$book);
    }

    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required|size:13',
            'stock' => 'required|numeric|integer|gte:0',
            'price' => 'required|numeric'
        ];
        $messeges = [
            'stock.gte' =>'Stock should be geater than or equal to 0',
        ];

        $request->validate($rules,$messeges);

        // Method -> 1

        // $book = new Book();
        // $book->title = $request->title;
        // $book->author = $request->author;
        // $book->isbn = $request->isbn;
        // $book->stock = $request->stock;
        // $book->price = $request->price;
        // Book::create($book);

        //Method ->2 
        // $data = [
        //     'title' => $request->title,
        //     'author' => $request->author,
        //     'isbn' => $request->isbn,
        //     'stock' => $request->stock,
        //     'price' => $request->price
        // ];
        // Book::create($data);

        //Mthod-> 3
        $book = Book::create($request->all());
        return redirect(route('books.show',$book));
        
    }
    public function destroy($id)
    {
       
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
