<?php
namespace PGrimaud\MarketplacesSearch\Marketplaces;

abstract class Marketplaces
{
    protected $searchTerms;
    protected $credentials;

    /**
     * Marketplaces constructor.
     * @param $searchTerm
     */
    public function __construct($searchTerm, $credentials)
    {
        $this->searchTerm = $this->sanitizeSearchTerms($searchTerm);
        $this->credentials = $credentials;

        $this->callWebservice();
    }

    /**
     * @param $searchTerms
     * @return string
     */
    public function sanitizeSearchTerms($searchTerms)
    {
        return urlencode($searchTerms);
    }
}