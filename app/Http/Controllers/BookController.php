<?php

namespace App\Http\Controllers;

use App\Category;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();

        return view('Books.index', compact('books'));
    }
    public function create(){
        $categorys = Category::all();

        return view('Books.create', compact('categorys'));
    }

    public function store(Request $request){

        // $books = new Book;
        // $books->category_id = $request->category_id;
        // $books->name = $request->name;
        // $books->description = $request->description;
        // $books->penerbit = $request->penerbit;
        // $books->tanggal_terbit = $request->tanggal_terbit;
        // $books->stock = $request->stock;

        // $books->images = $request->file('images')->store('images');

        // $books->save();

        // return redirect('/books');

        $this->validate($request, [
            'category_id' => ['required'],
            'name' => ['required'],
            'description' => ['required'],
            'penerbit' => ['required'],
            'tanggal_terbit' => ['required'],
            'images' => ['required'],
            'stock' => ['required']
        ]);

//        TODO: Upload image to store file
        $photoName = time().'.'.$request->file('images')->getClientOriginalExtension();
        $request->file('images')->move(public_path('/storage/images'), $photoName);

//        TODO: Create inserted data to database
        Book::create([
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'penerbit' => $request->input('penerbit'),
            'tanggal_terbit' => $request->input('tanggal_terbit'),
            'images' => $photoName,
            'stock' => $request->input('stock')
        ]);

        return redirect('books')->with('insert-message', 'Data successfully inserted');


        // cek data
    //    return dd($_POST);
    }

    public function edit($id){
        $book = Book::all()->find($id);
        $categorys = Category::all();

        return view('Books.edit', compact('categorys', 'book'));
    }

    public function update(Request $request){
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'penerbit' => 'required',
            'tanggal_terbit' => 'required',
            'images' => 'required',
            'stock' => 'required'
        ]);

        //        TODO: Upload image to store file
        $photoName = time().'.'.$request->file('images')->getClientOriginalExtension();
        $request->hasFile('images')->move(public_path('/storage/images'), $photoName);

        $books = Book::where('id', $request->id)->update([
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'penerbit' => $request->input('penerbit'),
            'tanggal_terbit' => $request->input('tanggal_terbit'),
            'images' => $photoName,
            'stock' => $request->input('stock')
        ]);

        return redirect('books')->with('update-message', 'Data successfully updated');

    }

    public function destroy($id){
        $book = Book::all()->find($id)->delete();

        return redirect('books')->with('delete-message', 'Data successfully deleted');

    }
}
