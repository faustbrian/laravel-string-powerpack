<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::lowerCase('Hello World'))->toBe('hello world');
    expect(Str::of('Hello World')->lowerCase()->toString())->toBe('hello world');
});
