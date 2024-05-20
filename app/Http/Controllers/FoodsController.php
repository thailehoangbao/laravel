<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;

class FoodsController extends Controller
{
    // @return \Illuminate\Http\Response

    public function index()
    {
        $foods = Food::all(); // Fetch all foods from database
        // dd($foods); // Dump and die
        // $food = Food::where('name','=','sasimi')
        //                 ->firstOrFail();
        // // dd($food);
        $foods = Food::all();
        return view('foods.index', [
            'foods' => $foods
        ]);
    }

    public function create()
    {
        $category = Category::all();
        return view('foods.create')->with('categories', $category);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $request->file('image')->guessExtension(); //jbg, png, jpg
        // dd($request->file('image')->getMimeType());// kiem tra dung file anhkg
        // dd($request->file('image')->getSize());
        // dd($request->file('image')->getClientOriginalName());
        // dd($request->file('image')->getError());
        // dd($request->file('image')->isValid());
        $request->validate([
            'name' => 'required',
            'count' => 'required|integer|min:0|max:200',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $generatedImageName = 'image'.time().'_'
                    .str_replace(' ','',$request->name).'_'
                    .$request->image->extension();
        //move folder
        $request->image->move(public_path('images'), $generatedImageName);
        // dd('123');
        // $food = new Food();
        // $food->name = $request->input('name');
        // $food->count = $request->input('count');
        // $food->description = $request->input('description');
        // $food->save();

        // $request->validate([
        //     'name' => new Uppercase(),
        //     'count' => 'required|integer|min:0|max:1000',
        //     'category_id' => 'required'
        // ]);
        // $request->validated();
        //if nhiều điều kiện khác nhau thì dùng array

        $food = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image_path' => $generatedImageName
        ]);

        return redirect('/foods');
    }

    public function edit($id)
    {
        $food = Food::where('id',$id)->first();
        // dd($food);
        return view('foods.edit')->with('food', $food);
    }

    public function update(CreateValidationRequest $request, $id)
    {
        $request->validated();
        $food = Food::where('id',$id)
            ->update([
                'name' => $request->input('name'),
                'count' => $request->input('count'),
                'description' => $request->input('description')
            ]);
        return redirect('/foods');
    }

    public function destroy($id)
    {
        $food = Food::where('id',$id)->delete();
        return redirect('/foods');
    }

    public function show($id)
    {
        $food = Food::where('id',$id)->first();
        $category = Category::where('id',$food->category_id)->first();
        return view('foods.show',[
            'food' => $food,
            'category' => $category
        ]);
    }
}
