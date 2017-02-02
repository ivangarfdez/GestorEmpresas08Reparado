<?php

namespace fctBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * alumno
 *
 * @ORM\Table(name="alumno")
 * @ORM\Entity(repositoryClass="fctBundle\Repository\alumnoRepository")
 */
class alumno
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
     * @ORM\Column(name="apellido1", type="string", length=255)
     */
    private $apellido1;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido2", type="string", length=255)
     */
    private $apellido2;

    /**
     * @var string
     *
     * @ORM\Column(name="ciclo", type="string", length=255)
     */
    private $ciclo;

    /**
     * @ORM\ManyToOne(targetEntity="empresa", inversedBy="alumno")
     * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     */
    private $empresa;

    /**
     * @ORM\ManyToOne(targetEntity="profesor", inversedBy="alumno")
     * @ORM\JoinColumn(name="profesor_id", referencedColumnName="id")
     */
    private $profesor;


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
     * @return alumno
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
     * Set apellido1
     *
     * @param string $apellido1
     *
     * @return alumno
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Get apellido1
     *
     * @return string
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set apellido2
     *
     * @param string $apellido2
     *
     * @return alumno
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Get apellido2
     *
     * @return string
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Set ciclo
     *
     * @param string $ciclo
     *
     * @return alumno
     */
    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;

        return $this;
    }

    /**
     * Get ciclo
     *
     * @return string
     */
    public function getCiclo()
    {
        return $this->ciclo;
    }


    /**
     * Set empresa
     *
     * @param \fctBundle\Entity\empresa $empresa
     *
     * @return alumno
     */
    public function setEmpresa(\fctBundle\Entity\empresa $empresa = null)
    {
        $this->empresa = $empresa;
        return $this;
    }
    /**
     * Get empresa
     *
     * @return \fctBundle\Entity\empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }


    /**
     * Set profesor
     *
     * @param \fctBundle\Entity\profesor $profesor
     *
     * @return alumno
     */
    public function setProfesor(\fctBundle\Entity\profesor $profesor = null)
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get profesor
     *
     * @return \fctBundle\Entity\profesor
     */
    public function getProfesor()
    {
        return $this->profesor;
    }
}
