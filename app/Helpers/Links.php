<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Request;

function isLinkActive(string $href): bool {
    $path = Request::path();

    if ($path === $href) return true;

    $href = substr($href, 1, strlen($href));

    if ($path === $href) return true;

    return false;
}