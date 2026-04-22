<?php
/**
 * Legacy "Late\" namespace support.
 *
 * The SDK was originally published under the Late\ namespace and
 * later rebranded to Zernio\. This autoloader maps any Late\Foo
 * reference to Zernio\Foo at resolution time via class_alias().
 *
 * Loaded automatically via composer.json "autoload.files".
 */

spl_autoload_register(function (string $class): void {
    if (strncmp($class, 'Late\\', 5) !== 0) {
        return;
    }
    $zernioClass = 'Zernio\\' . substr($class, 5);
    if (class_exists($zernioClass, true)
        || interface_exists($zernioClass, true)
        || trait_exists($zernioClass, true)) {
        class_alias($zernioClass, $class);
    }
}, true, true);
