<?php

namespace Notes\Form;

use Notes\Entity\NoteEntity;
use Zend\Form\Annotation\AnnotationBuilder;
use Zend\Form\FormInterface;

class NoteFormFactory
{
    public function __invoke() : FormInterface
    {
        $builder = new AnnotationBuilder();
        return $builder->createForm(NoteEntity::class);
    }
}