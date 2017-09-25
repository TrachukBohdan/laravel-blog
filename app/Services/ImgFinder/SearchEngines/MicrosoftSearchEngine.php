<?php

namespace App\Services\ImgFinder\SearchEngines;

use App\Services\ImgFinder\Contracts\ASearchEngine;
use App\Services\ImgFinder\Exceptions\ImgNotFoundException;
use GuzzleHttp\Client;

class MicrosoftSearchEngine extends ASearchEngine
{
    public function findImgByTitle(string $query): string
    {
        $client = new Client();

        $response = $client->request(
            'GET',
            $this->configs['query_url'] . $query,
            [
                'headers' => [
                    'Ocp-Apim-Subscription-Key' => $this->configs['client_key']
                ]
            ]
        );

        $err = new ImgNotFoundException('Microsoft can\'t find any img. Check your API credentials please');;

        if(200 != $response->getStatusCode())
        {
            throw $err;
        }

        $responseImgs = json_decode($response->getBody())->value;

        if(0 == count($responseImgs))
        {
            throw $err;
        }

        shuffle($responseImgs);
        return strval($responseImgs[0]->contentUrl);

    }
}