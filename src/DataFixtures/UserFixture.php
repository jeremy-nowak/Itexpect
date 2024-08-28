<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('exemple.test@mail.com');
        $user->setRoles(["ROLE_USER"]);
        $user->setPassword('passwordTest');

        $manager->persist($user);

        // add more products

        $manager->flush();
    }
}
