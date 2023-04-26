<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::camelCase('Hello World'))->toBe('helloWorld');
    expect(Str::of('Hello World')->camelCase()->toString())->toBe('helloWorld');
});
