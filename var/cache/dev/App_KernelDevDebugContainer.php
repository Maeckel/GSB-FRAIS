<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8IwMt64\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8IwMt64/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8IwMt64.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8IwMt64\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8IwMt64\App_KernelDevDebugContainer([
    'container.build_hash' => '8IwMt64',
    'container.build_id' => '60a02c97',
    'container.build_time' => 1681135328,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8IwMt64');