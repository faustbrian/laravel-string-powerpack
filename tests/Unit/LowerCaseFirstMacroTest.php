<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::lowerCaseFirst('Hello World'))->toBe('hello World');
    expect(Str::of('Hello World')->lowerCaseFirst()->toString())->toBe('hello World');
});
