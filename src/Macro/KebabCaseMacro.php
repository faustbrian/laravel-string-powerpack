<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Stringy\Macro;

use Illuminate\Support\Str;

final class KebabCaseMacro implements MacroInterface
{
    #[\Override()]
    public function run(string $string): string
    {
        return Str::of($string)->kebab()->toString();
    }

    #[\Override()]
    public function names(): array
    {
        return [
            'dashCase',
            'hyphenCase',
            'kebabCase',
            'paramCase',
        ];
    }
}
