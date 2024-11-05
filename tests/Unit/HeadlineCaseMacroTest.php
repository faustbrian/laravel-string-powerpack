<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::headlineCase('hello world'))->toBe('Hello World');
    expect(Str::of('hello world')->headlineCase()->toString())->toBe('Hello World');
});
