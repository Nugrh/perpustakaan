<?php

namespace App\Http\Controllers;

use App\Category;
use App\Book;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $books = Book::all();
        return view('Books.index', compact('books'));
    }

    public function create(){
        $categorys = Category::all();
        return view('Books.create', compact('categorys'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'category_id'       => ['required'],
            'name'              => ['required'],
            'description'       => ['required'],
            'penerbit'          => ['required'],
            'tanggal_terbit'    => ['required'],
            'images'            => ['required'],
            'stock'             => ['required']
        ]);

//        TODO: Upload image to store file
        $photoName = time().'.'.$request->file('images')->getClientOriginalExtension();
        $request->file('images')
            ->move(public_path('/storage/images'), $photoName);

//        TODO: Create inserted data to database
        Book::create([
            'category_id'       => $request->input('category_id'),
            'name'              => $request->input('name'),
            'description'       => $request->input('description'),
            'penerbit'          => $request->input('penerbit'),
            'tanggal_terbit'    => $request->input('tanggal_terbit'),
            'images'            => $photoName,
            'stock'             => $request->input('stock')
        ]);

        return redirect('books')
            ->with('insert-message', 'Data successfully inserted');

    }

    public function edit($id){
        $book = Book::all()->find($id);
        $categorys = Category::all();

        return view('Books.edit', compact('categorys', 'book'));
    }

    public function update(Request $request){
        $request->validate([
            'category_id'       => ['required'],
            'name'              => ['required'],
            'description'       => ['required'],
            'penerbit'          => ['required'],
            'tanggal_terbit'    => ['required'],
            'images'            => ['required'],
            'stock'             => ['required']
        ]);

        /**
         * upload foto
         */
        $photoName = time().'.'.$request->file('images')->getClientOriginalExtension();
        $request->file('images')
            ->move(public_path('/storage/images'), $photoName);

        $book = Book::where('id', $request->input('id'))->update([
            'category_id'       => $request->input('category_id'),
            'name'              => $request->input('name'),
            'description'       => $request->input('description'),
            'penerbit'          => $request->input('penerbit'),
            'tanggal_terbit'    => $request->input('tanggal_terbit'),
            'images'            => $photoName,
            'stock'             => $request->input('stock')
        ]);
        return redirect('book')
            ->with('update-message', 'Data successfully updated');
    }

    public function destroy($id){
        $book = Book::all()->find($id)->delete();

        return redirect('books')->with('delete-message', 'Data successfully deleted');

    }
}
