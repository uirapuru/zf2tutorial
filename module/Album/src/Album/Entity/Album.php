<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class Album
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $fullName;

}
