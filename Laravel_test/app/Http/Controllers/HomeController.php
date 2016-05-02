<?php  namespace App\Http\Controllers;
use App\Page;
use App\Article;

class HomeController extends Controller { 

public function index()
{ 
return view('home')->withPages(Page::all())->withArticles(Article::all());
}
}
?>