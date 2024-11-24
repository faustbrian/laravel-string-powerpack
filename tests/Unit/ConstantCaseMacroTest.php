<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

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
