<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 */
final class Gender extends Enum
{
    const Male = 'masculino';
    const Female = 'feminino';
}
