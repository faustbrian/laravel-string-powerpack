<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::constantCase('Hello World'))->toBe('HELLO_WORLD');
    expect(Str::of('Hello World')->constantCase()->toString())->toBe('HELLO_WORLD');

    expect(Str::macroCase('Hello World'))->toBe('HELLO_WORLD');
    expect(Str::of('Hello World')->macroCase()->toString())->toBe('HELLO_WORLD');

    expect(Str::screamingSnakeCase('Hello World'))->toBe('HELLO_WORLD');
    expect(Str::of('Hello World')->screamingSnakeCase()->toString())->toBe('HELLO_WORLD');
});
