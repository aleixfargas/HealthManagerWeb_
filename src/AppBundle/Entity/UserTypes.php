<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTypes
 *
 * @ORM\Table(name="user_types")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserTypesRepository")
 */
class UserTypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, unique=true)
     */
    private $type;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUserType
     *
     * @param integer $idUserType
     *
     * @return UserTypes
     */
    public function setIdUserType($idUserType)
    {
        $this->idUserType = $idUserType;

        return $this;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return UserTypes
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

