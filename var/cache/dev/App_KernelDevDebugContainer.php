<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVIV2Uox\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVIV2Uox/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVIV2Uox.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVIV2Uox\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVIV2Uox\App_KernelDevDebugContainer([
    'container.build_hash' => 'VIV2Uox',
    'container.build_id' => '4e4a5b57',
    'container.build_time' => 1686138946,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVIV2Uox');
