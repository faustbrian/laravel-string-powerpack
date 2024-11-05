<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::upperCaseFirst('hello world'))->toBe('Hello world');
    expect(Str::of('hello world')->upperCaseFirst()->toString())->toBe('Hello world');
});
