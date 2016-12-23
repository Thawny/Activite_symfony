<?php
/**
 * Created by PhpStorm.
 * User: TonyMalto
 * Date: 22/12/2016
 * Time: 18:06
 */

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;


class LoadAdvert implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $x = 0;

        while($x <= 10)
        {
            $advert = new Advert();
            $advert->setTitle('Nous cherchons quelqu\'un');
            $advert->setAuthor('Pierre Dubuc');
            $advert->setContent('nous cherchons un développeur symfony dans la régions de Nantes');

            $manager->persist($advert);

            $x++;
        }

        $manager->flush();
    }
}