<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Str;

it('should transform the given string', function (): void {
    expect(Str::acronym('Hello World'))->toBe('HW');
    expect(Str::of('Hello World')->acronym()->toString())->toBe('HW');
});
