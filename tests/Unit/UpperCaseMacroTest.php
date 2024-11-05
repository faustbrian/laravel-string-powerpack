<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::upperCase('Hello World'))->toBe('HELLO WORLD');
    expect(Str::of('Hello World')->upperCase()->toString())->toBe('HELLO WORLD');
});
