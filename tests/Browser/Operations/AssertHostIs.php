<?php

declare(strict_types=1);

test('assert host is', function () {
    $this
        ->visit(playgroundUrl())
        ->assertHostIs(
            str_replace('http://', '', playgroundUrl())
        );
});
