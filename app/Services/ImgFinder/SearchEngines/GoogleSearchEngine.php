<?php

    namespace App\Services\ImgFinder\SearchEngines;

    use App\Services\ImgFinder\Contracts\ASearchEngine;
    use App\Services\ImgFinder\Exceptions\ImgNotFoundException;

    class GoogleSearchEngine extends ASearchEngine
    {
        public function findImgByTitle(string $query): string
        {
            // TODO: Implement findImgByTitle() method.
            throw new ImgNotFoundException("Google API was not able to find images!");
        }
    }