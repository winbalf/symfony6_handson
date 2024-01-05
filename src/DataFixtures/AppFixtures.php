<?php

namespace App\DataFixtures;

use App\Entity\MicroPost;
use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $userPasswordHasher
    ) {
    }

    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1->setEmail('test@test.com');
        $user1->setPassword(
            $this->userPasswordHasher->hashPassword(
                $user1,
                '12345678'
            )
        );
        $manager->persist($user1);

        $user2 = new User();
        $user2->setEmail('john@test.com');
        $user2->setPassword(
            $this->userPasswordHasher->hashPassword(
                $user2,
                '12345678'
            )
        );
        $manager->persist($user2);



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
