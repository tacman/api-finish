<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\Symfony\Set\SymfonySetList;
use Rector\Symfony\Set\SensiolabsSetList;
use Rector\Nette\Set\NetteSetList;
use Rector\Set\ValueObject\LevelSetList;


return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src'
    ]);

    // register a single rule
    $rectorConfig->ruleWithConfiguration(
        \Rector\Php80\Rector\Class_\AnnotationToAttributeRector::class,
        [
            new \Rector\Php80\ValueObject\AnnotationToAttribute('ApiPlatform\Core\Annotation\ApiFilter'),
            new \Rector\Php80\ValueObject\AnnotationToAttribute('ApiPlatform\Core\Annotation\ApiResource'),
            new \Rector\Php80\ValueObject\AnnotationToAttribute('ApiPlatform\Core\Annotation\ApiProperty'),
            new \Rector\Php80\ValueObject\AnnotationToAttribute('ApiPlatform\Core\Annotation\ApiSubresource'),
        ]
    );

    $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
    $rectorConfig->sets([

        DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES,
        SymfonySetList::SYMFONY_60,
        SymfonySetList::ANNOTATIONS_TO_ATTRIBUTES,
        NetteSetList::ANNOTATIONS_TO_ATTRIBUTES,
        SensiolabsSetList::FRAMEWORK_EXTRA_61,
    ]);
};

