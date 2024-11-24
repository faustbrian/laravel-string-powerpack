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
    expect(Str::pascalCase('Hello World'))->toBe('HelloWorld');
    expect(Str::of('Hello World')->pascalCase()->toString())->toBe('HelloWorld');

    expect(Str::studlyCase('Hello World'))->toBe('HelloWorld');
    expect(Str::of('Hello World')->studlyCase()->toString())->toBe('HelloWorld');
});
