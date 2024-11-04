<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::swapCase('Hello World'))->toBe('hELLO wORLD');
    expect(Str::of('Hello World')->swapCase()->toString())->toBe('hELLO wORLD');
});
