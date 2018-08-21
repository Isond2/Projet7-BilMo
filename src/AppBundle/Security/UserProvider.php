<?php
/**
 * This file is part of the Bilmo API.
 *
 * GOMEZ José-Adrian j.gomez.17.j@gmail.com
 *
 */

namespace AppBundle\Security;

use AppBundle\Entity\User;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\Common\Persistence\ObjectManager;

/** UserProvider */
class UserProvider implements UserProviderInterface
{
    private $em;

    /**
     * __construct
     *
     * @param ObjectManager $em
     */
    public function __construct(ObjectManager $em)
    {
        $this->em = $em;
    }

    /**
     * loadUserByUsername
     *
     * @param username $username
     *
     * @return $user
     */
    public function loadUserByUsername($username)
    {
        $user = $this->em->getRepository('AppBundle:User')->findOneByUsername($username);
        if ($user) {
            return $user;
        }
        throw new UsernameNotFoundException(
            sprintf('Username "%s" does not exist.', $username)
        );
    }

    /**
     * refreshUser
     *
     * @param  UserInterface $user
     *
     * @return $user username
     */
    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    /**
     * supportsClass
     *
     * @param  class $class
     *
     * @return class
     */
    public function supportsClass($class)
    {
        return User::class === $class;
    }
}
