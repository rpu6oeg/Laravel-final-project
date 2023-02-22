<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{

    public function index()
    {

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'anons_title' => 'nullable',
            'description' => 'required|min:5',
            'file' => 'mimes:png,jpg,jpeg',
            'category_id' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $validated = $validator->validated();
        $validated['author_id'] = Auth::user()->getAuthIdentifier();

        if ($request->file('file')) {
            $validated['image_path'] = $request->file('file')->store('public/images');
        }

        Book::query()->create($validated);

        return redirect()->route('home');
    }


    public function show(string $id)
    {

    }


    public function update(Request $request, string $id)
    {

    }


    public function destroy(string $id)
    {

    }
}
