<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('home', ['articles' => $this->getArticles()]);
    }

    public function gallery($id)
    {
        $articles = $this->getArticles();

        if (!isset($articles[$id])) {
            abort(404);
        }

        return view('gallery', ['article' => $articles[$id]]);
    }

    private function getArticles()
    {
        $json = file_get_contents(public_path('articles.json'));

        return json_decode($json, true);
    }
}