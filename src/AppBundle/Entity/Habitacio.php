<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habitacio
 *
 * @ORM\Table(name="habitacio", indexes={@ORM\Index(name="id_tipo", columns={"id_tipo"}), @ORM\Index(name="id_hotel", columns={"id_hotel"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HabitacioRepository")
 */
class Habitacio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=50, nullable=false)
     */
    private $numero;

    /**
     * @var \TipoHabitacion
     *
     * @ORM\ManyToOne(targetEntity="TipoHabitacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo", referencedColumnName="id")
     * })
     */
    private $idTipo;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_hotel", referencedColumnName="id")
     * })
     */
    private $idHotel;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Habitacio
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Habitacio
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set idTipo
     *
     * @param \AppBundle\Entity\TipoHabitacion $idTipo
     *
     * @return Habitacio
     */
    public function setIdTipo(\AppBundle\Entity\TipoHabitacion $idTipo = null)
    {
        $this->idTipo = $idTipo;

        return $this;
    }

    /**
     * Get idTipo
     *
     * @return \AppBundle\Entity\TipoHabitacion
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * Set idHotel
     *
     * @param \AppBundle\Entity\Hotel $idHotel
     *
     * @return Habitacio
     */
    public function setIdHotel(\AppBundle\Entity\Hotel $idHotel = null)
    {
        $this->idHotel = $idHotel;

        return $this;
    }

    /**
     * Get idHotel
     *
     * @return \AppBundle\Entity\Hotel
     */
    public function getIdHotel()
    {
        return $this->idHotel;
    }
}
