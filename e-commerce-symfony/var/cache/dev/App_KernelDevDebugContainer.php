<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJaTVtMg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJaTVtMg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJaTVtMg.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJaTVtMg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJaTVtMg\App_KernelDevDebugContainer([
    'container.build_hash' => 'JaTVtMg',
    'container.build_id' => '245f1580',
    'container.build_time' => 1578577751,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJaTVtMg');
