<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::capitalCase('hello world'))->toBe('Hello World');
    expect(Str::of('hello world')->capitalCase()->toString())->toBe('Hello World');

    expect(Str::titleCase('hello world'))->toBe('Hello World');
    expect(Str::of('hello world')->titleCase()->toString())->toBe('Hello World');
});
