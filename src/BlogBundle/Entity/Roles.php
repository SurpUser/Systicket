<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\RolesRepository")
 */
class Roles
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
     * @ORM\Column(name="id_rol", type="integer")
     */
    private $idRol;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento_Proyecto", type="string", length=255)
     */
    private $departamentoProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


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
     * Set idRol
     *
     * @param integer $idRol
     *
     * @return Roles
     */
    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;

        return $this;
    }

    /**
     * Get idRol
     *
     * @return int
     */
    public function getIdRol()
    {
        return $this->idRol;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Roles
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set departamentoProyecto
     *
     * @param string $departamentoProyecto
     *
     * @return Roles
     */
    public function setDepartamentoProyecto($departamentoProyecto)
    {
        $this->departamentoProyecto = $departamentoProyecto;

        return $this;
    }

    /**
     * Get departamentoProyecto
     *
     * @return string
     */
    public function getDepartamentoProyecto()
    {
        return $this->departamentoProyecto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Roles
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}

