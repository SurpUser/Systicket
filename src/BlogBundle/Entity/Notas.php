<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notas
 *
 * @ORM\Table(name="notas")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\NotasRepository")
 */
class Notas
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
     * @ORM\Column(name="id_notas", type="integer")
     */
    private $idNotas;

    /**
     * @var int
     *
     * @ORM\Column(name="ticket_id", type="integer")
     */
    private $ticketId;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario_id", type="integer")
     */
    private $usuarioId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_nota", type="string", length=255)
     */
    private $descripcionNota;


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
     * Set idNotas
     *
     * @param integer $idNotas
     *
     * @return Notas
     */
    public function setIdNotas($idNotas)
    {
        $this->idNotas = $idNotas;

        return $this;
    }

    /**
     * Get idNotas
     *
     * @return int
     */
    public function getIdNotas()
    {
        return $this->idNotas;
    }

    /**
     * Set ticketId
     *
     * @param integer $ticketId
     *
     * @return Notas
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;

        return $this;
    }

    /**
     * Get ticketId
     *
     * @return int
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return Notas
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return int
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Notas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set descripcionNota
     *
     * @param string $descripcionNota
     *
     * @return Notas
     */
    public function setDescripcionNota($descripcionNota)
    {
        $this->descripcionNota = $descripcionNota;

        return $this;
    }

    /**
     * Get descripcionNota
     *
     * @return string
     */
    public function getDescripcionNota()
    {
        return $this->descripcionNota;
    }
}

