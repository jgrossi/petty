<?php

namespace Petty\Http\Controllers;

use Petty\Http\Requests;
use Petty\Http\Controllers\Controller;
use Petty\Http\Requests\UrlRequest;
use Petty\Models\Url;

class UrlController extends Controller
{
    protected $url;

    public function __construct(Url $url)
    {
        $this->url = $url;
    }

    public function index()
    {
        $urls = Url::orderBy('created_at', 'desc')->paginate(10);

        return view('url.index', compact('urls'));
    }

    public function create()
    {
        return view('url.create');
    }

    public function store(UrlRequest $request)
    {
        $data = $request->only(['original_url']);
        $url = $this->url->create($data);
        $shortUrl = $url->short();

        return view('url.store', compact('shortUrl'));
    }
}
