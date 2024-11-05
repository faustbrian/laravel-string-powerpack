<?php

declare(strict_types=1);

namespace BaseCodeOy\StringPowerPack\Macro;

final class SpongeCaseMacro implements MacroInterface
{
    public function run(string $string): string
    {
        $result = '';

        for ($i = 0; $i < \mb_strlen($string); $i++) {
            $result .= \mt_rand(0, 1) ? \mb_strtoupper($string[$i]) : \mb_strtolower($string[$i]);
        }

        return $result;
    }

    public function names(): array
    {
        return [
            'spongeCase',
            'spongeBobCase',
        ];
    }
}
