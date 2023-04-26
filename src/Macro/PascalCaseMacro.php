<?php

declare(strict_types=1);

namespace BombenProdukt\StringPowerPack\Macro;

use Illuminate\Support\Str;

final class PascalCaseMacro implements MacroInterface
{
    public function run(string $string): string
    {
        return Str::of($string)->studly()->toString();
    }

    public function names(): array
    {
        return [
            'pascalCase',
            'studlyCase',
        ];
    }
}
