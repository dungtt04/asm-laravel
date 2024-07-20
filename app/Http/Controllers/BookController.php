<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //ds
    public function index(){
        $books = DB::table('books')
        ->join('categories', 'category_id', '=', 'categories.id')
        ->select('books.*', 'name')
        ->orderByDesc('id')
        ->get();
        return view('home', compact('books'));
    }
    public function shop(){
        $books = DB::table('books')
        ->join('categories', 'category_id', '=', 'categories.id')
        ->select('books.*', 'name')
        ->orderByDesc('id')
        ->get();
        return view('list-book', compact('books'));
    }

    //hien thi
    public function create(){
            $categories = DB::table('categories')->get();
        return view('admin.books.create', compact('categories'));
    }
    //luu du lieu
    public function store(Request $request){
        // $data = $request->except('_token');
        // dd($request->toArray());
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id'],
        ];
        // dd($data);
        DB::table('books')->insert($data);
        return redirect()->route('admin.book.index');
    }
    // xoas
   public function destroy($id){
     DB::table('books')->delete($id);
     return redirect()->route('admin.book.index');
   }
   public function show($id){
    $books= DB::table('books')
        -> where('id', '=', $id)
       -> get();

    return view('book-detail', compact('books'));
   }

    //sua view
    public function edit($id){
        $book = DB::table('books')
        ->where('id', $id)
        ->first();
        $categories = DB::table('categories')->get();
        return view('admin.books.edit', compact('book', 'categories'));
    }
    //cap nhat
    public function update(request $request){
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id'],
        ];
        
      DB::table('books')->where('id', $request['id'])->update($data);
      return redirect()->route('admin.book.index');  
    }
}