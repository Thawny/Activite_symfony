<?php

namespace OC\PlatformBundle\Purge;

use OC\PlatformBundle\Repository\AdvertRepository;

class Purge
{
    public function __construct(AdvertRepository $advertRepository)
    {
        $deprecatedAdverts = $advertRepository->getDeprecatedAdverts(6);

//         voila un commmentaire

    }
}