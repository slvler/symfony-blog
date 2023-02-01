<?php

namespace App\DataFixtures;

use App\Entity\Blog;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BlogFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $blog = new Blog();
        $blog->setTitle('Lorem Ipsum');
        $blog->setDescription('Lorem Ipsum, kısaca Lipsum, masaüstü yayıncılık ve basın yayın sektöründe kullanılan taklit yazı bloğu olarak tanımlanır. ');
        $blog->setImagePath('https://cdn.pixabay.com/photo/2023/01/29/21/04/crushed-car-7754134_640.jpg');

        $manager->persist($blog);

        $blog1 = new Blog();
        $blog1->setTitle('Lorem Ipsum1');
        $blog1->setDescription('Lorem Ipsum, kısaca Lipsum, masaüstü yayıncılık.');
        $blog1->setImagePath('https://cdn.pixabay.com/photo/2023/01/29/11/34/great-tit-7753050_960_720.jpg');

        $manager->persist($blog1);

        $blog2 = new Blog();
        $blog2->setTitle('Lorem Ipsum2');
        $blog2->setDescription('Lorem Ipsum, kısaca Lipsum.');
        $blog2->setImagePath('https://cdn.pixabay.com/photo/2023/01/29/20/56/mandala-7754117_960_720.png');


        $manager->persist($blog2);
        $manager->flush();


        $this->addReference('blog',$blog);
        $this->addReference('blog_1',$blog1);
        $this->addReference('blog_2',$blog2);


    }
}
