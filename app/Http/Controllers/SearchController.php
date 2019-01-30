<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
use Illuminate\Support\Facades\Input;
use Session;


class SearchController extends Controller
{
    public function SearchResults()
    {
$text1 = Input::get( 'text1' );
   if($text1 !== ""){
     $user = books::where('Book_name','LIKE','%'. $text1 .'%')
     ->orWhere('Author','LIKE','%'. $text1 .'%')
     ->orWhere('categories','LIKE','%'. $text1 .'%')
     ->get();
     $books = \App\form::all();
     if(count($user) > 0)
         return view('search')->withDetails($user)->withQuery($text1)->with('allbooks',$books);
   }
     else return view ('search')->withMessage("No Details found. Try to search again !");

    }
}
