<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUOb5pSv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUOb5pSv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUOb5pSv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUOb5pSv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUOb5pSv\App_KernelDevDebugContainer([
    'container.build_hash' => 'UOb5pSv',
    'container.build_id' => 'bcbc4131',
    'container.build_time' => 1616519557,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUOb5pSv');
