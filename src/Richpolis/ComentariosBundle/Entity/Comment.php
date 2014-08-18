<?php
// src/MyProject/MyBundle/Entity/Comment.php

namespace Richpolis\ComentariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;
use FOS\CommentBundle\Model\ThreadInterface;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Comment extends BaseComment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Thread of this comment
     *
     * @var Thread
     * @ORM\ManyToOne(targetEntity="Richpolis\ComentariosBundle\Entity\Thread")
     */
    protected $thread;
    
    /**
     * Author of the comment
     *
     * @ORM\ManyToOne(targetEntity="Richpolis\BackendBundle\Entity\Usuario")
     * @var Usuario
     */
    protected $author;

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
     * Set thread
     *
     * @param ThreadInterface $thread
     * @return Comment
     */
    public function setThread(ThreadInterface $thread = null)
    {
        $this->thread = $thread;

        return $this;
    }

    /**
     * Get thread
     *
     * @return ThreadInterface 
     */
    public function getThread()
    {
        return $this->thread;
    }
}
