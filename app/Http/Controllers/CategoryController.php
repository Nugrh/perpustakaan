<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Collection as update;


class CategoryController extends Controller
{
    // TODO Return category create page
    public function create(){
        $categorys = Category::all();
        return view('Category.create', compact('categorys'));
    }

    public function edit($id){
        $categorys = Category::all();
        $categoryId = $categorys->find($id);
        return view('Category.edit', compact('categorys', 'categoryId'));
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

        Category::all();

        $this->validate($request,[
            'no_rak' => [
                Rule::unique('categorys')->ignore($request->id)
                ]
        ]);

        Category::where('id', $request->id)->update([
            'name' => $request->input('name'),
            'no_rak' => $request->input('no_rak')
        ]);

        return redirect('category')->with('update-message', 'Data successfully updated');

    }

    public function destroy($id){
        Category::all()->find($id)->delete();

        return redirect('category')->with('delete-message', 'Data successfully deleted');
    }

}
