<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6AKsTfF\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6AKsTfF/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6AKsTfF.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6AKsTfF\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container6AKsTfF\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => '6AKsTfF',
    'container.build_id' => 'c3a40aac',
    'container.build_time' => 1546968335,
), __DIR__.\DIRECTORY_SEPARATOR.'Container6AKsTfF');
