<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\NotificationRepository")
 */
class Notification
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
     * @ORM\Column(name="sender", type="integer")
     */
    private $sender;

    /**
     * @var int
     *
     * @ORM\Column(name="reciever", type="integer")
     */
    private $reciever;
    /**
     * @var string
     *
     * @ORM\Column(name="reciever_type", type="string", length=255)
     */
    private $recieverType;
    /**
     * @var int
     *
     * @ORM\Column(name="vu", type="integer")
     */
    private $vu;
    /**
     * @var string
     *
     * @ORM\Column(name="titre_notification", type="string", length=50)
     */
    private $titreNotification;
    /**
     * @var datetime
     *
     * @ORM\Column(name="date_notification", type="datetime")
     */
    private $dateNotification;
    /**
     * @var string
     *
     * @ORM\Column(name="texte_notification", type="string", length=255)
     */
    private $texteNotification;

    /**
     * @return string
     */
    public function getSenderType()
    {
        return $this->senderType;
    }

    /**
     * @param string $senderType
     */
    public function setSenderType($senderType)
    {
        $this->senderType = $senderType;
    }

    /**
     * @return int
     */
    public function getVu()
    {
        return $this->vu;
    }

    /**
     * @param int $vu
     */
    public function setVu($vu)
    {
        $this->vu = $vu;
    }

    /**
     * @return string
     */
    public function getRecieverType()
    {
        return $this->recieverType;
    }

    /**
     * @param string $recieverType
     */
    public function setRecieverType($recieverType)
    {
        $this->recieverType = $recieverType;
    }

    /**
     * @return int
     */
    public function getReciever()
    {
        return $this->reciever;
    }

    /**
     * @param int $reciever
     */
    public function setReciever($reciever)
    {
        $this->reciever = $reciever;
    }

    /**
     * @return int
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param int $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return datetime
     */
    public function getDateNotification()
    {
        return $this->dateNotification;
    }

    /**
     * @param datetime $dateNotification
     */
    public function setDateNotification($dateNotification)
    {
        $this->dateNotification = $dateNotification;
    }

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
     * Get titreNotification
     *
     * @return string
     */
    public function getTitreNotification()
    {
        return $this->titreNotification;
    }

    /**
     * Set titreNotification
     *
     * @param string $titreNotification
     * @return Notification
     */
    public function setTitreNotification($titreNotification)
    {
        $this->titreNotification = $titreNotification;

        return $this;
    }

    /**
     * Get texteNotification
     *
     * @return string
     */
    public function getTexteNotification()
    {
        return $this->texteNotification;
    }

    /**
     * Set texteNotification
     *
     * @param string $texteNotification
     * @return Notification
     */
    public function setTexteNotification($texteNotification)
    {
        $this->texteNotification = $texteNotification;

        return $this;
    }
}
