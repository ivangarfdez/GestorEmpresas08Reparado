<?php

namespace fctBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * profesor
 *
 * @ORM\Table(name="profesor")
 * @ORM\Entity(repositoryClass="fctBundle\Repository\profesorRepository")
 */
class profesor
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=255)
     */
    private $departamento;


    /**
     *@ORM\OneToMany(targetEntity="alumno", mappedBy="profesor")
     */
    private $alumno;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return profesor
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return profesor
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     *
     * @return profesor
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->alumno = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add alumno
     *
     * @param \fctBundle\Entity\alumno $alumno
     *
     * @return profesor
     */
    public function addAlumno(\fctBundle\Entity\alumno $alumno)
    {
        $this->alumno[] = $alumno;

        return $this;
    }

    /**
     * Remove alumno
     *
     * @param \fctBundle\Entity\alumno $alumno
     */
    public function removeAlumno(\fctBundle\Entity\alumno $alumno)
    {
        $this->alumno->removeElement($alumno);
    }

    /**
     * Get alumno
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlumno()
    {
        return $this->alumno;
    }
}
