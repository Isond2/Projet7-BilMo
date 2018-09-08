<?php
/**
 * This file is part of the Bilmo API.
 *
 * GOMEZ José-Adrian j.gomez.17.j@gmail.com
 *
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Manufacturer;
use AppBundle\Entity\Phones;
use AppBundle\Entity\Company;
use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

/** AppFixture */
class AppFixture extends Fixture
{
    /**
     * load
     *
     * @param  ObjectManager $manager
     *
     * @return fixtures
     */
    public function load(ObjectManager $manager)
    {


    //Manufacturers

        //Samsung
        $samsung = new Manufacturer();
        $samsung->setManufacturerName('Samsung');
        $manager->persist($samsung);

        //Apple
        $apple = new Manufacturer();
        $apple->setManufacturerName('Apple');
        $manager->persist($apple);

        //LG
        $LG = new Manufacturer();
        $LG->setManufacturerName('LG');
        $manager->persist($LG);


    //Telephones

        //Samsung

            //Samsung Galaxy Note 8
            $phone1 = new Phones();
            $phone1->setPhoneName('Samsung Galaxy Note 8');
            $phone1->setPhoneManufacturer($samsung);
            $phone1->setPhonePrice('655');
            $phone1->setPhoneDescription('Le Samsung Galaxy Note 8 est alimenté par 2.35GHz octa core Qualcomm MSM8998 Snapdragon 835 et il est livré avec 6 Go de RAM. Le téléphone regroupe 64 Go de stockage interne pouvant être développé jusqu\'à 256 Go via une carte microSD.');
            $manager->persist($phone1);

            //Samsung Galaxy S8+
            $phone2 = new Phones();
            $phone2->setPhoneName('Samsung Galaxy S8+');
            $phone2->setPhoneManufacturer($samsung);
            $phone2->setPhonePrice('809');
            $phone2->setPhoneDescription('Imaginez une fenêtre ouverte sur demain. Le Samsung Galaxy S8+ bouscule les codes esthétiques et repousse les limites des écrans tels que vous les connaissiez. Son écran Infinity sublime la richesse des images et offre une immersion spectaculaire. Un nouveau monde s\'ouvre au creux de votre main. Vous ne verrez plus jamais votre smartphone de la même manière');
            $manager->persist($phone2);

            //Samsung Galaxy S8
            $phone3 = new Phones();
            $phone3->setPhoneName('Samsung Galaxy S8');
            $phone3->setPhoneManufacturer($samsung);
            $phone3->setPhonePrice('530');
            $phone3->setPhoneDescription('Le Samsung Galaxy S8 est alimenté par un processeur Samsung Exynos 8895 octa core de 1,9GHz et il est livré avec 4 Go de RAM. Le téléphone regroupe 64 Go de stockage interne pouvant être étendu jusqu\'à 256 Go via une carte microSD');
            $manager->persist($phone3);

        //Apple

            //iPhone X
            $phone4 = new Phones();
            $phone4->setPhoneName('iPhone X');
            $phone4->setPhoneManufacturer($apple);
            $phone4->setPhonePrice('1075');
            $phone4->setPhoneDescription('Un iPhone si immersif qu\'il s\'efface au profit de la seule expérience. Un iPhone si intelligent qu\'il réponde à un geste, à la voix... et même à un regard. C\'est chose faite aujourd\'hui. Dites bonjour au futur.');
            $manager->persist($phone4);

            //iPhone 8
            $phone5 = new Phones();
            $phone5->setPhoneName('iPhone 8');
            $phone5->setPhoneManufacturer($apple);
            $phone5->setPhonePrice('655');
            $phone5->setPhoneDescription('Un design tout de verre vêtu. L\'appareil photo encore amélioré. La puce plus puissante et plus intelligente. Le chargement sans fil et sans effort. Et des expériences de réalité augmentée inimaginables auparavant. Voici l\'iPhone 8.');
            $manager->persist($phone5);

            //iPhone 6
            $phone6 = new Phones();
            $phone6->setPhoneName('iPhone 6');
            $phone6->setPhoneManufacturer($apple);
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


    //Companys

        //Bilmo
        $bilmo1 = new Company();
        $bilmo1->setCompanyName('Bilmo');
        $bilmo1->setAdress('605 S. Blue Spring Ave. Waterloo, IA 50701');
        $bilmo1->setSiret('80456448500123');
        $bilmo1->setUrl('https://bilmo.com/');
        $manager->persist($bilmo1);

        //retailer 1
        $retailer1 = new Company();
        $retailer1->setCompanyName('Retailer 2');
        $retailer1->setAdress('8993 Fairview Ave.Hobart, IN 46342');
        $retailer1->setSiret('89545258801478');
        $retailer1->setUrl('https://retailer1.com/');
        $manager->persist($retailer1);

        //retailer 2
        $retailer2 = new Company();
        $retailer2->setCompanyName('Retailer 1');
        $retailer2->setAdress('636 Smith Store St. Mcallen, TX 78501');
        $retailer2->setSiret('56957458911654');
        $retailer2->setUrl('https://retailer2.com/');
        $manager->persist($retailer2);


    //Users
        //Bilmo Super Admin
        $superAdmin = new User();
        $superAdmin->setUsername('BilmoSuperAdmin');
        $superAdmin->setPassword('$2b$10$C/CgWKNF1T4Tn6UtBf7n9O7.ZNdPhqj95OEKuDUDxuHv64bsLzFBi');
        $superAdmin->setEmail('jean.wood@gmail.com');
        $superAdmin->setFirstName('Jean');
        $superAdmin->setLastName('Wood');
        $superAdmin->setRoles(['ROLE_SUPER_ADMIN']);
        $superAdmin->setUserCompany($bilmo1);
        $manager->persist($superAdmin);

        //Retailer 1 Admin
        $retailer1Admin = new User();
        $retailer1Admin->setUsername('Retailer1');
        $retailer1Admin->setPassword('$2b$10$LbgJW7MpuOcrH.Fz13t3AOi/rQXD/yLFMyh2stQSJIuLmhbTxNCri');
        $retailer1Admin->setEmail('retail.1@gmail.com');
        $retailer1Admin->setFirstName('Pierre');
        $retailer1Admin->setLastName('Smith');
        $retailer1Admin->setRoles(['ROLE_ADMIN']);
        $retailer1Admin->setUserCompany($retailer1);
        $manager->persist($retailer1Admin);

        //Retailer 1 Edward
        $retailer1Edward = new User();
        $retailer1Edward->setUsername('Edward');
        $retailer1Edward->setPassword('$2b$10$bSeydm2WsDqzCpiuC/8/juadldr9s.Ky/Xx9ejiQZeusPIR493EBm');
        $retailer1Edward->setEmail('edward.Ikeda@gmail.com');
        $retailer1Edward->setFirstName('Edward');
        $retailer1Edward->setLastName('Ikeda');
        $retailer1Edward->setRoles(['ROLE_USER']);
        $retailer1Edward->setUserCompany($retailer1);
        $manager->persist($retailer1Edward);

        //Retailer 1 Thomas
        $retailer1Thomas = new User();
        $retailer1Thomas->setUsername('Thomas');
        $retailer1Thomas->setPassword('$2b$10$Qkesrl269tzcBcM3r9v1Weg1/z0w4QaM/Vqn/Bapn0s4yshlSf7kG');
        $retailer1Thomas->setEmail('thomas.slater@hotmail.fr');
        $retailer1Thomas->setFirstName('Thomas');
        $retailer1Thomas->setLastName('Slater');
        $retailer1Thomas->setRoles(['ROLE_USER']);
        $retailer1Thomas->setUserCompany($retailer1);
        $manager->persist($retailer1Thomas);

        //Retailer 2 Admin
        $retailer2Admin = new User();
        $retailer2Admin->setUsername('Retailer2');
        $retailer2Admin->setPassword('$2b$10$vVIuw7q6ttR5gU2bX7/yD.eklQAqkIlZXAHZXXbF85wDcLGZ1NH9O');
        $retailer2Admin->setEmail('retail.2@gmail.com');
        $retailer2Admin->setFirstName('Kaitlyn');
        $retailer2Admin->setLastName('Stevens');
        $retailer2Admin->setRoles(['ROLE_ADMIN']);
        $retailer2Admin->setUserCompany($retailer2);
        $manager->persist($retailer2Admin);

        //Retailer 2 Althea
        $retailer2Athela = new User();
        $retailer2Athela->setUsername('Althea');
        $retailer2Athela->setPassword('$2b$10$RCHPJVctcN/OXFmt5qDJQ.blxV/ZUwNP1sWERV5Sn3BcYJmOtOOOq');
        $retailer2Athela->setEmail('athela.brown@orange.fr');
        $retailer2Athela->setFirstName('Althea');
        $retailer2Athela->setLastName('Brown');
        $retailer2Athela->setRoles(['ROLE_USER']);
        $retailer2Athela->setUserCompany($retailer2);
        $manager->persist($retailer2Athela);

    $manager->flush();
    }


    /**
     * getOrder
     *
     * @return 1
     */
    public function getOrder()
    {
         return 1;
    }
}
