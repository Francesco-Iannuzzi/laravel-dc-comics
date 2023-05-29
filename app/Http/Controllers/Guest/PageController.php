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
        $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
        $shopList = ['Shop DC', 'Shop DC Collectibles'];
        $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
        $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];
        return view('home', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
    }

    public function characters ()
    {
        $page_title = 'characters';
        $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
        $shopList = ['Shop DC', 'Shop DC Collectibles'];
        $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
        $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];
        return view('characters', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList'));
    }

    public function comics ()
    {
        $comics = Comic::all();
        $page_title = 'Comics';
        $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
        $shopList = ['Shop DC', 'Shop DC Collectibles'];
        $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
        $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];
        return view('comics',  compact('comics', 'page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList'));
    }

    public function movies ()
    {
        $page_title = 'Movies';
        $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
        $shopList = ['Shop DC', 'Shop DC Collectibles'];
        $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
        $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];
        return view('movies', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
    }

    public function tv ()
    {
        $page_title = 'TV';
        $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
        $shopList = ['Shop DC', 'Shop DC Collectibles'];
        $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
        $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];
        return view('tv', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
    }

    public function games ()
    {
        $page_title = 'Games';
        $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
        $shopList = ['Shop DC', 'Shop DC Collectibles'];
        $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
        $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];
        return view('games', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
    }

    public function collectibles ()
    {
        $page_title = 'Collectibles';
        $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
        $shopList = ['Shop DC', 'Shop DC Collectibles'];
        $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
        $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];
        return view('collectibles', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
    }

    public function videos ()
    {
        $page_title = 'Videos';
        $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
        $shopList = ['Shop DC', 'Shop DC Collectibles'];
        $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
        $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];
        return view('videos', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
    }

    public function fans ()
    {
        $page_title = 'Fans';
        $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
        $shopList = ['Shop DC', 'Shop DC Collectibles'];
        $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
        $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];
        return view('fans', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
    }

    public function news ()
    {
        $page_title = 'News';
        $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
        $shopList = ['Shop DC', 'Shop DC Collectibles'];
        $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
        $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];
        return view('news', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
    }

    public function shop ()
    {
        $page_title = 'Shop';
        $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
        $shopList = ['Shop DC', 'Shop DC Collectibles'];
        $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
        $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];
        return view('shop', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
    }
}