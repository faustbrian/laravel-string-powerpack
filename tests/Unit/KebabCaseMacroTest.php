<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::dashCase('Hello World'))->toBe('hello-world');
    expect(Str::of('Hello World')->dashCase()->toString())->toBe('hello-world');

    expect(Str::hyphenCase('Hello World'))->toBe('hello-world');
    expect(Str::of('Hello World')->hyphenCase()->toString())->toBe('hello-world');

    expect(Str::kebabCase('Hello World'))->toBe('hello-world');
    expect(Str::of('Hello World')->kebabCase()->toString())->toBe('hello-world');

    expect(Str::paramCase('Hello World'))->toBe('hello-world');
    expect(Str::of('Hello World')->paramCase()->toString())->toBe('hello-world');
});
