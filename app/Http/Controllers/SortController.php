<?php

namespace App\Http\Controllers;
use Request;
use App\Models\Book;
// use Illuminate\Http\Request;

class SortController extends Controller
{
    //
    function index()
    {
       if( Request::get('sort')=='price_asc.'){
         $books=Book::all()
         ->sortBy('price');
        //  dd($books);
      }else if(Request::get('sort')=='price_desc.'){
        $books=Book::all()
         ->sortByDesc('price');
      }else if(Request::get('sort')=='newest.'){
        $books=Book::all()
         ->sortByDesc('created_at');
      }else if(Request::get('sort')=='oldest'){
        $books=Book::all()
         ->sortBy('created_at');
      } 
      else{
        $books=Book::all();
      }
     
        return view('books',compact('books'));
    }
}
