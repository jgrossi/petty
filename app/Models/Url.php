<?php

namespace Petty\Models;

use Illuminate\Database\Eloquent\Model;
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
        $this->save();

        return $this->domain.$id;
    }

    public function getShortUrlAttribute()
    {
        return $this->domain.$this->hash;
    }
}
