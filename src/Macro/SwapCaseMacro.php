<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\StringPowerPack\Macro;

final class SwapCaseMacro implements MacroInterface
{
    public function run(string $string): string
    {
        return \implode('', \array_map(function (string $char): string {
            $charLower = \mb_strtolower($char);

            if ($char === $charLower) {
                return \mb_strtoupper($char);
            }

            return $charLower;
        }, \mb_str_split($string)));
    }

    public function names(): array
    {
        return [
            'swapCase',
        ];
    }
}
