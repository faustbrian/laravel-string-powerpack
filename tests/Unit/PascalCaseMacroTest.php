<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::pascalCase('Hello World'))->toBe('HelloWorld');
    expect(Str::of('Hello World')->pascalCase()->toString())->toBe('HelloWorld');

    expect(Str::studlyCase('Hello World'))->toBe('HelloWorld');
    expect(Str::of('Hello World')->studlyCase()->toString())->toBe('HelloWorld');
});
