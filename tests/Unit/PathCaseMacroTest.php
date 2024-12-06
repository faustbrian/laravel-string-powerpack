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
    expect(Str::pathCase('Hello World'))->toBe('hello/world');
    expect(Str::of('Hello World')->pathCase()->toString())->toBe('hello/world');
});
