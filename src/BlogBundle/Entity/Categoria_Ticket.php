<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria_Ticket
 *
 * @ORM\Table(name="categoria__ticket")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\Categoria_TicketRepository")
 */
class Categoria_Ticket
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
     * @var int
     *
     * @ORM\Column(name="id_categoria", type="integer")
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_categoria", type="string", length=255)
     */
    private $nombreCategoria;


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
     * Set idCategoria
     *
     * @param integer $idCategoria
     *
     * @return Categoria_Ticket
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return int
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set nombreCategoria
     *
     * @param string $nombreCategoria
     *
     * @return Categoria_Ticket
     */
    public function setNombreCategoria($nombreCategoria)
    {
        $this->nombreCategoria = $nombreCategoria;

        return $this;
    }

    /**
     * Get nombreCategoria
     *
     * @return string
     */
    public function getNombreCategoria()
    {
        return $this->nombreCategoria;
    }
}

