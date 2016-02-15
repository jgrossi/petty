<?php

namespace Petty\Models;

use Illuminate\Database\Eloquent\Model;
use Mremi\UrlShortener\Model\Link;
use Mremi\UrlShortener\Provider\Bitly\BitlyProvider;
use Mremi\UrlShortener\Provider\Bitly\OAuthClient;
use Petty\Support\Facades\Hashids;

class Url extends Model
{
    /**
     * @var string
     */
    protected $table = 'url';

    /**
     * @var string
     */
    protected $domain;

    /**
     * @var array
     */
    protected $fillable = ['original_url', 'destination_provider', 'destination_url', 'hash'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->setDomain(config('petty.domain'));

        parent::__construct($attributes);
    }

    /**
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->domain = trim($domain, '/').'/';
    }

    public function short()
    {
        $id = Hashids::encode($this->id);
        $this->hash = $id;
        $this->destination_provider = 'bitly';
        $this->destination_url = $this->getProviderLink();
        $this->save();

        return $this->domain.$id;
    }

    public function getShortUrlAttribute()
    {
        return $this->domain.$this->hash;
    }

    protected function getProviderLink()
    {
        $link = new Link();
        $link->setLongUrl($this->original_url);

        $provider = new BitlyProvider(
            new OAuthClient(config('petty.username'), config('petty.password')),
            array()
        );

        $provider->shorten($link);

        return $link->getShortUrl();
    }
}
