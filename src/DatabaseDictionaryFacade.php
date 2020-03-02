<?php

namespace Rakshitbharat\DatabaseDictionary;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rakshitbharat\DatabaseDictionary\Skeleton\SkeletonClass
 */
class DatabaseDictionaryFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'databasedictionary';
    }
}
