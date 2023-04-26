<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::snakeCase('Hello World'))->toBe('hello_world');
    expect(Str::of('Hello World')->snakeCase()->toString())->toBe('hello_world');
});
