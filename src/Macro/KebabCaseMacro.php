<?php

declare(strict_types=1);

namespace BaseCodeOy\StringPowerPack\Macro;

use Illuminate\Support\Str;

final class KebabCaseMacro implements MacroInterface
{
    public function run(string $string): string
    {
        return Str::of($string)->kebab()->toString();
    }

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
