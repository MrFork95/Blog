<?php

namespace App\DataFixtures\ORM;

use App\Entity\Author;
use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class Fixtures extends Fixture
{
    public function load(ObjectManager $manager) 
    {
        $faker= \Faker\Factory::create();
        for($i=0; $i<=50;$i++)
        {
        $author = new Author();
        $author
                ->setName($faker->name)
                ->setTitle($faker->text(10))
                ->setUsername($faker->userName(20))
                ->setCompany($faker->company(20))
                ->setShortBio($faker->text(255))
                ->setPhone($faker->phoneNumber)
                ->setFacebook($faker->firstName)
                ->setTwitter($faker->userName, $faker->randomDigit)
                ->setGithub($faker->userName, $faker->randomDigit);
        $manager->persist($author);
        
        $blogPost = new BlogPost();
        $blogPost
            ->setTitle($faker->text(10))
            ->setSlug($i,'#post')
            ->setDescription($faker->text(200))
            ->setBody($faker->realText(500))
            ->setAuthor($author);
        $manager->persist($blogPost);
        $manager->flush();
        }
    }
        
}
