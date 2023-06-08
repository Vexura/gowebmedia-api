<?php


namespace GoWebMediaAPI;

class Credentials
{
    private $token;
    private $url;
    private $reseller_id;
    /**
     * Credentials constructor.
     * @param string $token api token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
        $this->url = 'https://reselling.gowebmedia.net/api/v1/';
    }

    public function __toString()
    {
        return sprintf(
            '[Host: %s], [Token: %s].',
            $this->url,
            $this->token
        );
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }


}
