<?php

declare(strict_types=1);

namespace BaseCodeOy\StringPowerPack\Macro;

use Illuminate\Support\Str;

final class TitleCaseMacro implements MacroInterface
{
    public function run(string $string): string
    {
        return Str::of($string)->title()->toString();
    }

    public function names(): array
    {
        return [
            'capitalCase',
            'titleCase',
        ];
    }
}
