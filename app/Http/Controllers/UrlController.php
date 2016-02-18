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
        $urls = $this->url->orderBy('created_at', 'desc')->paginate(10);

        return view('url.index', compact('urls'));
    }

    public function create()
    {
        return view('url.create');
    }

    public function store(UrlRequest $request)
    {
        $data = $request->only(['original_url']);
        $originalUrl = $data['original_url'];

        if ($this->url->originalUrlExists($originalUrl)) {
            $url = $this->url->where('original_url', $originalUrl)->first();
            $shortUrl = $url->short_url;
        } else {
            $url = $this->url->create($data);
            $shortUrl = $url->short();
        }

        return view('url.store', compact('shortUrl'));
    }

    public function show($hash)
    {
        $url = $this->url->where('hash', $hash)->first();
        $url->clicks += 1;
        $url->save();

        return redirect()->to($url->destination_url);
    }
}
