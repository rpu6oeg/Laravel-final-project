<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\CategoryBook;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $books = Book::query()->where('status', '=', 'published')->get();
        return view ('index', compact('books'));
    }

    public function user(User $user)
    {
        if($user === null) {
            return redirect()->route('home');
        }
    }

    public function register()
    {
        return view('registration');
    }

    public function auth()
    {
        return view('auth');
    }

    public function add()
    {
        $categories = CategoryBook::all();
        return view('add', [
            'categories' => $categories
        ]);
    }





}
