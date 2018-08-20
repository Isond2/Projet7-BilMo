<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Manufacturer;
use AppBundle\Entity\Phones;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class AppFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {


    //Manufacturers

        //Samsung
        $Samsung = new Manufacturer();
        $Samsung->setManufacturerName('Samsung');
        $manager->persist($Samsung);

        //Apple
        $Apple = new Manufacturer();
        $Apple->setManufacturerName('Apple');
        $manager->persist($Apple);

        //LG
        $LG = new Manufacturer();
        $LG->setManufacturerName('LG');
        $manager->persist($LG);


    //Telephones

        //Samsung

            //Samsung Galaxy Note 8
            $phone1 = new Phones();
            $phone1->setPhoneName('Samsung Galaxy Note 8');
            $phone1->setPhoneManufacturer($Samsung);
            $phone1->setPhonePrice('655');
            $phone1->setPhoneDescription('Le Samsung Galaxy Note 8 est alimenté par 2.35GHz octa core Qualcomm MSM8998 Snapdragon 835 et il est livré avec 6 Go de RAM. Le téléphone regroupe 64 Go de stockage interne pouvant être développé jusqu\'à 256 Go via une carte microSD.');
            $manager->persist($phone1);

            //Samsung Galaxy S8+
            $phone2 = new Phones();
            $phone2->setPhoneName('Samsung Galaxy S8+');
            $phone2->setPhoneManufacturer($Samsung);
            $phone2->setPhonePrice('809');
            $phone2->setPhoneDescription('Imaginez une fenêtre ouverte sur demain. Le Samsung Galaxy S8+ bouscule les codes esthétiques et repousse les limites des écrans tels que vous les connaissiez. Son écran Infinity sublime la richesse des images et offre une immersion spectaculaire. Un nouveau monde s\'ouvre au creux de votre main. Vous ne verrez plus jamais votre smartphone de la même manière');
            $manager->persist($phone2);

            //Samsung Galaxy S8
            $phone3 = new Phones();
            $phone3->setPhoneName('Samsung Galaxy S8');
            $phone3->setPhoneManufacturer($Samsung);
            $phone3->setPhonePrice('530');
            $phone3->setPhoneDescription('Le Samsung Galaxy S8 est alimenté par un processeur Samsung Exynos 8895 octa core de 1,9GHz et il est livré avec 4 Go de RAM. Le téléphone regroupe 64 Go de stockage interne pouvant être étendu jusqu\'à 256 Go via une carte microSD');
            $manager->persist($phone3);

        //Apple

            //iPhone X
            $phone4 = new Phones();
            $phone4->setPhoneName('iPhone X');
            $phone4->setPhoneManufacturer($Apple);
            $phone4->setPhonePrice('1075');
            $phone4->setPhoneDescription('Un iPhone si immersif qu\'il s\'efface au profit de la seule expérience. Un iPhone si intelligent qu\'il réponde à un geste, à la voix... et même à un regard. C\'est chose faite aujourd\'hui. Dites bonjour au futur.');
            $manager->persist($phone4);

            //iPhone 8
            $phone5 = new Phones();
            $phone5->setPhoneName('iPhone 8');
            $phone5->setPhoneManufacturer($Apple);
            $phone5->setPhonePrice('655');
            $phone5->setPhoneDescription('Un design tout de verre vêtu. L\'appareil photo encore amélioré. La puce plus puissante et plus intelligente. Le chargement sans fil et sans effort. Et des expériences de réalité augmentée inimaginables auparavant. Voici l\'iPhone 8.');
            $manager->persist($phone5);

            //iPhone 6
            $phone6 = new Phones();
            $phone6->setPhoneName('iPhone 6');
            $phone6->setPhoneManufacturer($Apple);
            $phone6->setPhonePrice('500');
            $phone6->setPhoneDescription('L\'iPhone 6 n\'est pas seulement plus grand en taille. Il est plus grand en tout. Plus large, mais beaucoup plus fin. Plus puissant, mais remarquablement économe en énergie. Sa surface lisse métallique épouse à merveille le nouvel écran Retina. Sous son design profilé s\'opère une fusion parfaite entre matériel et logiciel. Redessinée, affûtée, perfectionnée, une nouvelle génération d\'iPhone est née.');
            $manager->persist($phone6);

        //LG

            //LG G6
            $phone7 = new Phones();
            $phone7->setPhoneName('LG G6');
            $phone7->setPhoneManufacturer($LG);
            $phone7->setPhonePrice('379');
            $phone7->setPhoneDescription('Double SIM - 64 Go - FM radio - Port Micro SD - Double SIM - 64 Go - FM radio - Port Micro SD - Double SIM - 64 Go - FM radio - Port Micro SD - Double SIM - 64 Go - FM radio - Port Micro SD - mp3');
            $manager->persist($phone7);

            //LG G6+
            $phone8 = new Phones();
            $phone8->setPhoneName('LG G6+');
            $phone8->setPhoneManufacturer($LG);
            $phone8->setPhonePrice('430');
            $phone8->setPhoneDescription('L\'écran FullVision étonnamment grand dans un appareil élégant offre plus de place pour le texte, la navigation et une vue plus large lors de jeux. Le rapport d\'aspect 18: 9 et la résolution QHD Plus permettent également une qualité d\'image supérieure pour une expérience de visionnement plus engageante.');
            $manager->persist($phone8);

            //LG x Power 2
            $phone9 = new Phones();
            $phone9->setPhoneName('LG x Power 2');
            $phone9->setPhoneManufacturer($LG);
            $phone9->setPhonePrice('280');
            $phone9->setPhoneDescription('Parcourez le monde de la mobilité dans les meilleures conditions avec le smartphone LG X Power 2. Doté d\'une batterie de 4500 mAh, il vous offrira une belle autonomie pour découvrir toutes ses qualités : écran HD 5.5", double appareil photo 13 + 5 MP, processeur 8-Core 1.5 GHz et 2 Go de RAM.');
            $manager->persist($phone9);




        $manager->flush();
    }



    public function getOrder()
    {
         return 1;
    }
}
