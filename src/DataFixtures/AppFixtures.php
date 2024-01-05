<?php

namespace App\DataFixtures;

use App\Entity\MicroPost;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $micrPost1 = new MicroPost();
        $micrPost1->setTitle('Welcome to Poland!');
        $micrPost1->setText('Welcome to Poland!');
        $micrPost1->setCreated(new DateTime());
        $manager->persist($micrPost1);

        $micrPost2 = new MicroPost();
        $micrPost2->setTitle('Welcome to USA!');
        $micrPost2->setText('Welcome to USA!');
        $micrPost2->setCreated(new DateTime());
        $manager->persist($micrPost2);

        $micrPost3 = new MicroPost();
        $micrPost3->setTitle('Welcome to Germany!');
        $micrPost3->setText('Welcome to Germany!');
        $micrPost3->setCreated(new DateTime());
        $manager->persist($micrPost3);

        $manager->flush();
    }
}
