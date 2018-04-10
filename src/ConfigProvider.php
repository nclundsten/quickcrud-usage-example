<?php

namespace Notes;

use Notes\Form\NoteFormFactory;

class ConfigProvider
{
    public function __invoke() : array
    {
        return [
            'dependencies' => $this->getDependencies(),
            'doctrine' => [
                'driver' => [
                    'orm_default' => [
                        'drivers' => [
                            'Notes\Entity' => 'note',
                        ],
                    ],
                    'note' => [
                        'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                        'cache' => 'array',
                        'paths' => __DIR__ . '/../../src/Notes/Entity',
                    ],
                ],
            ],
        ];
    }

    public function getDependencies()
    {
        return [
            'factories'  => [
                NoteFormFactory::class => NoteFormFactory::class,
            ],
        ];
    }
}
