<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBwppxf7\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBwppxf7/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBwppxf7.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBwppxf7\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerBwppxf7\appDevDebugProjectContainer([
    'container.build_hash' => 'Bwppxf7',
    'container.build_id' => '8f643109',
    'container.build_time' => 1695203582,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBwppxf7');
