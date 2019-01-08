<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Artwork;
use App\Entity\Artist;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $faker = \Faker\Factory::create('fr_FR');

        for($j=1;$j <= 5; $j++){
            $artist = new Artist();
            $artist->setName($faker->name);            

            $manager->persist($artist);

            for($i=1;$i <= 10;$i++){
                $artwork = new Artwork();
                $artwork->setLink("http://lorempixel.com/150/150/")
                        ->setArtist($artist);
    
                $manager->persist($artwork);
            }

            
        }

        $manager->flush();
    }
}
