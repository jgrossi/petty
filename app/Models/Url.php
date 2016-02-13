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

    public function __construct(array $attributes)
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

    public function short($url)
    {
//        Hashids::encode()

        return $this->domain.$id;
    }
}
