<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('displayBook', [
            'books' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addBook');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        if(csrf_token() !== $request['_token']){
            return self::index();
        }
        else{
            $book = new Book();
            $book->name = strip_tags($request['name']);
            $book->price = floatval($request['price']);
            $book->summary = strip_tags($request['summary']);
            $book->save();
        }
        return self::index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('show', ['book' => Book::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit', ['book' => Book::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('books')
        ->where('id', '=', $request['id'])
        ->update(['name' => strip_tags($request['name']),
        'price' => floatval($request['price']),
        'summary' => strip_tags($request['summary'])]);
        return self::index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('books')->where('id', '=', $id)->delete();
        return self::index();
    }
}
