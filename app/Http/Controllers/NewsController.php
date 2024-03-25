<?php

namespace App\Http\Controllers;

use App\Services\BingNewsService;

class NewsController extends Controller
{
    protected $bingNewsService;

    public function __construct(BingNewsService $bingNewsService)
    {
        $this->bingNewsService = $bingNewsService;
    }

    public function indexNews()
    {
        $query = 'website security vulnerabilities';
        $news = $this->bingNewsService->getNews($query);
        return view('index-news', ['news' => $news['value']]);
    }
    
}
