<?php

namespace Notes\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;

/**
 * @ORM\Entity
 * @ORM\Table(name="notes")
 */
class NoteEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Annotation\Type("Zend\Form\Element\Hidden")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(name="note", type="text", length=1024)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Options({"label":"Note:"})
     * @var string
     */
    private $note;

    public function getId()
    {
        return $this->id;
    }

    public function getArrayCopy()
    {
        return [
            'id' => $this->id,
            'note' => $this->note,
        ];
    }

    public function exchangeArray(array $array)
    {
        $this->note = $array['note'];
        $this->id = $array['id'];
    }
}
