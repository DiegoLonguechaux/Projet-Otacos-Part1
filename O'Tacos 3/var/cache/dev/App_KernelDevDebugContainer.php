<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMOkN6oj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMOkN6oj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMOkN6oj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMOkN6oj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMOkN6oj\App_KernelDevDebugContainer([
    'container.build_hash' => 'MOkN6oj',
    'container.build_id' => 'c4415402',
    'container.build_time' => 1673630603,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMOkN6oj');
