<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index ()
    {
        $page_title = 'Home';
        return view('home', compact('page_title'));
    }

    public function characters ()
    {
        $page_title = 'characters';
        return view('characters', compact('page_title'));
    }

    public function comics ()
    {
        $comics = Comic::all();
        $page_title = 'Comics';
        return view('comics',  compact('comics', 'page_title'));
    }

    public function movies ()
    {
        $page_title = 'Movies';
        return view('movies', compact('page_title'));
    }

    public function tv ()
    {
        $page_title = 'TV';
        return view('tv', compact('page_title'));
    }

    public function games ()
    {
        $page_title = 'Games';
        return view('games', compact('page_title'));
    }

    public function collectibles ()
    {
        $page_title = 'Collectibles';
        return view('collectibles', compact('page_title'));
    }

    public function videos ()
    {
        $page_title = 'Videos';
        return view('videos', compact('page_title'));
    }

    public function fans ()
    {
        $page_title = 'Fans';
        return view('fans', compact('page_title'));
    }

    public function news ()
    {
        $page_title = 'News';
        return view('news', compact('page_title'));
    }

    public function shop ()
    {
        $page_title = 'Shop';
        return view('shop', compact('page_title'));
    }
}