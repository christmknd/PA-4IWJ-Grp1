<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0lsxbVP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0lsxbVP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0lsxbVP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0lsxbVP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0lsxbVP\App_KernelDevDebugContainer([
    'container.build_hash' => '0lsxbVP',
    'container.build_id' => 'f8658efd',
    'container.build_time' => 1637066113,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0lsxbVP');
