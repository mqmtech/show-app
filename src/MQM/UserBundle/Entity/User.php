<?php

namespace MQM\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\GroupInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name = "mqm_user")
 */
class User extends BaseUser
{
    /**
     * @var integer $id
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy = "AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }

    public function addRole($role)
    {
        return parent::addRole($role);
    }

    public function serialize()
    {
        return parent::serialize();
    }

    public function unserialize($serialized)
    {
        parent::unserialize($serialized);
    }

    public function eraseCredentials()
    {
        parent::eraseCredentials();
    }

    public function getId()
    {
        return parent::getId();
    }

    public function getUsername()
    {
        return parent::getUsername();
    }

    public function getUsernameCanonical()
    {
        return parent::getUsernameCanonical();
    }

    public function getSalt()
    {
        return parent::getSalt();
    }

    public function getEmail()
    {
        return parent::getEmail();
    }

    public function getEmailCanonical()
    {
        return parent::getEmailCanonical();
    }

    public function getPassword()
    {
        return parent::getPassword();
    }

    public function getPlainPassword()
    {
        return parent::getPlainPassword();
    }

    public function getLastLogin()
    {
        return parent::getLastLogin();
    }

    public function getConfirmationToken()
    {
        return parent::getConfirmationToken();
    }

    public function getRoles()
    {
        return parent::getRoles();
    }

    public function hasRole($role)
    {
        return parent::hasRole($role);
    }

    public function isAccountNonExpired()
    {
        return parent::isAccountNonExpired();
    }

    public function isAccountNonLocked()
    {
        return parent::isAccountNonLocked();
    }

    public function isCredentialsNonExpired()
    {
        return parent::isCredentialsNonExpired();
    }

    public function isCredentialsExpired()
    {
        return parent::isCredentialsExpired();
    }

    public function isEnabled()
    {
        return parent::isEnabled();
    }

    public function isExpired()
    {
        return parent::isExpired();
    }

    public function isLocked()
    {
        return parent::isLocked();
    }

    public function isSuperAdmin()
    {
        return parent::isSuperAdmin();
    }

    public function isUser(UserInterface $user = null)
    {
        return parent::isUser($user);
    }

    public function removeRole($role)
    {
        parent::removeRole($role);
    }

    public function setUsername($username)
    {
        return parent::setUsername($username);
    }

    public function setUsernameCanonical($usernameCanonical)
    {
        return parent::setUsernameCanonical($usernameCanonical);
    }

    public function setCredentialsExpireAt(\DateTime $date)
    {
        return parent::setCredentialsExpireAt($date);
    }

    public function setCredentialsExpired($boolean)
    {
        return parent::setCredentialsExpired($boolean);
    }

    public function setEmail($email)
    {
        return parent::setEmail($email);
    }

    public function setEmailCanonical($emailCanonical)
    {
        return parent::setEmailCanonical($emailCanonical);
    }

    public function setEnabled($boolean)
    {
        return parent::setEnabled($boolean);
    }

    public function setExpired($boolean)
    {
        return parent::setExpired($boolean);
    }

    public function setExpiresAt(\DateTime $date)
    {
        return parent::setExpiresAt($date);
    }

    public function setPassword($password)
    {
        return parent::setPassword($password);
    }

    public function setSuperAdmin($boolean)
    {
        return parent::setSuperAdmin($boolean);
    }

    public function setPlainPassword($password)
    {
        return parent::setPlainPassword($password);
    }

    public function setLastLogin(\DateTime $time)
    {
        return parent::setLastLogin($time);
    }

    public function setLocked($boolean)
    {
        return parent::setLocked($boolean);
    }

    public function setConfirmationToken($confirmationToken)
    {
        return parent::setConfirmationToken($confirmationToken);
    }

    public function setPasswordRequestedAt(\DateTime $date = null)
    {
        return parent::setPasswordRequestedAt($date);
    }

    public function getPasswordRequestedAt()
    {
        return parent::getPasswordRequestedAt();
    }

    public function isPasswordRequestNonExpired($ttl)
    {
        return parent::isPasswordRequestNonExpired($ttl);
    }

    public function setRoles(array $roles)
    {
        return parent::setRoles($roles);
    }

    public function getGroups()
    {
        return parent::getGroups();
    }

    public function getGroupNames()
    {
        return parent::getGroupNames();
    }

    public function hasGroup($name)
    {
        return parent::hasGroup($name);
    }

    public function addGroup(GroupInterface $group)
    {
        return parent::addGroup($group);
    }

    public function removeGroup(GroupInterface $group)
    {
        return parent::removeGroup($group);
    }


}
