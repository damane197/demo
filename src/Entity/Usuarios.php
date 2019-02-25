<?php
/**
 * Created by PhpStorm.
 * User: undanet
 * Date: 25/02/19
 * Time: 13:47
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="usuarios")
 */
class Usuarios
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    public $name;
    
     /**
     * @ORM\Column(type="string", length=100)
     */
    public $apellido;

    /**
     * @ORM\Column(type="integer")
     */
    public $edad;

}
