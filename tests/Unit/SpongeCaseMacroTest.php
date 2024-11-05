<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::spongeCase('Hello World'))->not()->toBe('Hello World');
});
