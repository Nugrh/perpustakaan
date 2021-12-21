<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */



    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }





    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::all();
        $categorys = Category::all();
        $users = User::all();
        $total = DB::table('books')->sum('stock');


        return view('home', compact('books', 'users', 'total', 'categorys'));
    }

    public function category(Request $request)
    {
        $categorys = Category::all();
        $users = User::all();
        $total = DB::table('books')->sum('stock');



        $category_id = $request->input('category');

        $books = Book::where('category_id', 'LIKE', "%{$category_id}%")->paginate();

        return view('home', compact('books', 'categorys', 'users', 'total' ));
    }
}
