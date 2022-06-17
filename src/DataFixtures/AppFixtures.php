<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $userPasswordHasher) {

    }

    public function load(ObjectManager $manager): void
    {
        $test_password = 'tt';

        $user = (new User())
            ->setUsername('tt')
            ->setEmail('tt@survos.com')
            ->setPlainPassword($test_password);

        $user->setRoles(array('ROLE_SUPER_ADMIN', 'ROLE_ADMIN'));
        $password = $this->userPasswordHasher->hashPassword($user, $test_password);
        $user->setPassword($password);

        $manager->persist($user);
        $manager->flush();

    }
}
