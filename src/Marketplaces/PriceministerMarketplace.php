<?php
namespace PGrimaud\MarketplacesSearch\Marketplaces;

use Curl\Curl;

class PriceministerMarketplace extends Marketplaces implements MarketplacesInterface
{
    protected $searchTerm;
    protected $credentials;

    /**
     *
     * https://developer.priceminister.com/blog/fr/documentation/product-data/product-listing-secure
     *
     * @return mixed
     */
    public function callWebservice()
    {
        $urlToCall = 'https://ws.priceminister.com/listing_ssl_ws';

        $curl = new Curl();
        $curl->get($urlToCall,[
            'action' => 'listing',
            'login' => $this->credentials['login'],
            'pwd' => $this->credentials['password'],
            'version' => '2015-07-05',
            'scope' => 'PRICING',
            'kw' => $this->searchTerm,
            'refs' => '',
            'nbproductsperpage' => 20,
            'pagenumber' => 1
        ]);

        return $curl->response;

    }
}