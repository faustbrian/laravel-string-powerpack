<?php

declare(strict_types=1);

namespace BaseCodeOy\StringPowerPack\Macro;

use Illuminate\Support\Str;

final class ConstantCaseMacro implements MacroInterface
{
    public function run(string $string): string
    {
        return Str::of($string)->snake()->upper()->toString();
    }

    public function names(): array
    {
        return [
            'constantCase',
            'macroCase',
            'screamingSnakeCase',
        ];
    }
}
