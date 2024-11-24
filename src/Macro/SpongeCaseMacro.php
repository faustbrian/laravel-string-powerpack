<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

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
