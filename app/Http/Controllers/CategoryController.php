<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Sabberworm\CSS\Rule\Rule;

class CategoryController extends Controller
{
    // TODO Return category create page
    public function create(){
        $categorys = Category::all();
        return view('Category.create', compact('categorys'));
    }

    // TODO Return category store page
    public function store(Request $request){
        $this->validate($request, [
            'name' => ['required'],
            'no_rak' => ['required', 'unique:categorys', 'numeric']
        ]);

        $category = Category::create([
            'name' => $request->input('name'),
            'no_rak' => $request->input('no_rak')
        ]);

        $category->save();

        return redirect('category')->with('create-message', 'Data successfully created');
    }

    public function update(Request $request){

        $this->validate($request,[
            'name' => ['required'],
            'no_rak' => ['required',
                Rule::unique('categorys')->ignore($request->id)
                ]
        ]);

        Category::all()->where('id', $request->id)->update([

        ]);

    }

    public function destroy($id){
        Category::all()->find($id)->delete();

        return redirect('category')->with('delete-message', 'Data successfully deleted');
    }

}
