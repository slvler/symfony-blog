<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setTitle('Sports');
        $category->setDescription('Lorem Ipsum, kısaca Lipsum, masaüstü yayıncılık ve basın yayın sektöründe kullanılan taklit yazı bloğu olarak tanımlanır. ');
        $category->setOrders("1");

        $category->addBlog($this->getReference('blog'));
        $category->addBlog($this->getReference('blog_1'));

        $manager->persist($category);

        $category1 = new Category();
        $category1->setTitle('Romantic');
        $category1->setDescription('Lorem Ipsum, kısaca Lipsum, masaüstü yayıncılık ve basın yayın sektöründe kullanılan taklit yazı bloğu olarak tanımlanır. ');
        $category1->setOrders("2");


        $category1->addBlog($this->getReference('blog'));
        $category1->addBlog($this->getReference('blog_1'));
        $category1->addBlog($this->getReference('blog_2'));

        $manager->persist($category1);


        $category2 = new Category();
        $category2->setTitle('Action');
        $category2->setDescription('Lorem Ipsum, kısaca Lipsum, masaüstü yayıncılık ve basın yayın sektöründe kullanılan taklit yazı bloğu olarak tanımlanır. ');
        $category2->setOrders("3");
        $manager->persist($category2);


        $category3 = new Category();
        $category3->setTitle('Love');
        $category3->setDescription('Lorem Ipsum, kısaca Lipsum, masaüstü yayıncılık ve basın yayın sektöründe kullanılan taklit yazı bloğu olarak tanımlanır. ');
        $category3->setOrders("4");
        $manager->persist($category3);



        $manager->flush();


    }
}
