<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerR2smRWz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerR2smRWz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerR2smRWz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerR2smRWz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerR2smRWz\App_KernelDevDebugContainer([
    'container.build_hash' => 'R2smRWz',
    'container.build_id' => '45b2225b',
    'container.build_time' => 1659707740,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerR2smRWz');
