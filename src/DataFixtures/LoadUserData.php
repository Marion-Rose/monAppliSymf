<?php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

use App\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


/**
 * Class LoadUserData
 * @extends Fixture
 * @implements FixtureGroupInterface
 */
class LoadUserData extends Fixture implements FixtureGroupInterface
{
    /**
     * @var UserPasswordHasherInterface
     */
    protected $encoder;

    /**
     * @param UserPasswordHasherInterface $encoder
     */
    public function __construct(UserPasswordHasherInterface $encoder )
    {
        $this->encoder=$encoder;

    }

    /**
     * @param ObjectManager $manager
     * @return void
     */
    public function load(ObjectManager $manager)
    {
        $users=[['username'=>'lucas','password'=>'adminpass','apitoken'=>
            '12345', 'roles'=>['ROLE_ADMIN']]];

        foreach($users as $key=> $user){
            $objUser = new User;
            $objUser->setUsername($user['username']);

            $objUser->setPassword($this->encoder->hashPassword(
                $objUser,
                $user['password']));
            $objUser->setapiToken($user['apitoken']);
            $objUser->setRoles($user['roles']);

            $manager->persist($objUser);
        }


        // mise à jour de la base avec tous les persists
        $manager->flush();


    }

    /**
     * @return string[]
     */
    public static function getGroups():array
    {

        return ['group4'];
    }
}