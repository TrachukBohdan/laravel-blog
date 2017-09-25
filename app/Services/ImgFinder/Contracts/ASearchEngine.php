<?php

    namespace App\Services\ImgFinder\Contracts;

    abstract class ASearchEngine
    {
        protected $configs = [];

        /**
         * Find img by $query string
         * @param string $query
         * @return string
         */
        abstract public function findImgByTitle(string $query):string;

        public function __construct(array $configs)
        {
            $this->configs = $configs;
        }
    }