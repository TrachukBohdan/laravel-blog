<?php

    namespace App\Services\ImgFinder;

    use App\Services\ImgFinder\Contracts\ASearchEngine;
    use App\Services\ImgFinder\Exceptions\EngineWasNotFoundException;

    /**
     * Factory of Img search engines
     * Class ImgFinder
     * @package App\Services\ImgFinder
     */
    abstract class ImgFinder
    {
        private static $imgSearchEngine = null;

        /**
         * Create default img engine
         * @return ASearchEngine
         */
        public static function create(): ASearchEngine
        {
            if(is_null(self::$imgSearchEngine))
            {
                $defaultImgEngine = config('blog.default_img_search_driver');
                return self::getImgSearchEngine($defaultImgEngine);
            }

            return self::$imgSearchEngine;
        }

        /**
         * Return an instance of $engineName
         * @param string $engineName
         * @return ASearchEngine
         * @throws EngineWasNotFoundException
         */
        public static function getImgSearchEngine(string $engineName): ASearchEngine
        {
            $engineName = strtolower($engineName);
            $imgSearchEngines = config('blog.img_search_engine_drivers');

            if(!key_exists($engineName, $imgSearchEngines))
            {
                throw new EngineWasNotFoundException("$engineName engine was not found");
            }

            $imgFinderClass = config("blog.img_search_engine_drivers.{$engineName}.class");
            $imgFinderClassConfigs = config("blog.img_search_engine_drivers.{$engineName}.configs");

            return new $imgFinderClass($imgFinderClassConfigs);
        }
    }