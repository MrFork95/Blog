<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 * 
 * @ORM\Table(name="author")
 * @ORM\Entity(repositoryClass="App\Repository\AuthorRepository")
 */
class Author
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @var string
     * 
     * @ORM\Column(name="company", type="string", length=255)
     */
    private $company;

    /**
     * @var string
     * 
     * @ORM\Column(name="short_bio", type="string", length=500)
     */
    private $shortBio;

    /**
     * @var string
     * 
     * @ORM\Column(name="phone",type="string", length=255, unique=true, nullable=true)
     */
    private $phone;

    /**
     * @var string
     * 
     * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     * 
     * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     * 
     * @ORM\Column(name="github", type="string", length=255, nullable=true)
     */
    private $github;

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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     *
     * @param string $name
     *
     * @return Author
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Author
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Author
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return Author
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get shortBio
     *
     * @return string
     */
    public function getShortBio()
    {
        return $this->shortBio;
    }

    /**
     * Set shortBio
     *
     * @param string $shortBio
     *
     * @return Author
     */
    public function setShortBio($shortBio)
    {
        $this->shortBio = $shortBio;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone() 
    {
        return $this->phone;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Author
     */
    public function setPhone($phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Author
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return Author
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

     /**
     * Get github
     *
     * @return string
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * Set github
     *
     * @param string $github
     *
     * @return Author
     */
    public function setGithub($github)
    {
        $this->github = $github;

        return $this;
    }
}
