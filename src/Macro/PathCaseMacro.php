<?php

declare(strict_types=1);

namespace BaseCodeOy\StringPowerPack\Macro;

use Illuminate\Support\Str;

final class PathCaseMacro implements MacroInterface
{
    public function run(string $string): string
    {
        return Str::of($string)->snake()->lower()->replace('_', '/')->toString();
    }

    public function names(): array
    {
        return [
            'pathCase',
        ];
    }
}
