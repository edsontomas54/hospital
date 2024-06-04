<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 * @method static static OptionFour()
 */
final class Status extends Enum
{
    const Requested = 'solicitada';
    const Marked = 'marcada';
    const Concluded = 'concluída';
    const Rejected = 'rejeitada';
}
