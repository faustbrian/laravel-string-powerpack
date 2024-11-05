<?php

declare(strict_types=1);

namespace BaseCodeOy\StringPowerPack\Macro;

use Illuminate\Support\Str;

final class LowerCaseMacro implements MacroInterface
{
    public function run(string $string): string
    {
        return Str::of($string)->lower()->toString();
    }

    public function names(): array
    {
        return [
            'lowerCase',
        ];
    }
}
