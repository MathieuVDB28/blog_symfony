<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMIybNp8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMIybNp8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMIybNp8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMIybNp8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMIybNp8\App_KernelDevDebugContainer([
    'container.build_hash' => 'MIybNp8',
    'container.build_id' => '4f08b8ba',
    'container.build_time' => 1596312206,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMIybNp8');
