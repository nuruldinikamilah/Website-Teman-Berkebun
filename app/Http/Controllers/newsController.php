<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class newscontroller extends Controller
{
    public function news()
    {
        $newskey=env('NEWS_API_KEY');
        $response = Http::get('https://newsapi.org/v2/everything?q=plants&apiKey=2efb5734ec4d4009a45bf31bf2fb9fda');
        $news = $response->json();
        //dd($news);
        $newsdata = $news['articles'];
        return view('/news',compact('newsdata'));
    }
}