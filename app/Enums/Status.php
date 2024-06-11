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
    const requested = 'requested';
    const marked = 'marked';
    const concluded = 'concluded';
    const rejected = 'rejected';


    /**
     * Get the localized name of the status.
     *
     * @param string $status
     * @return string
     */
    public static function getLocalizedName(string $status): string
    {
        return __('statuses.' . $status);
    }

        /**
     * Get the Portuguese translation of the status.
     *
     * @param string $key
     * @return string
     */
    public static function getPortugueseLabel(string $key): string
    {
        $translations = [
            self::requested => 'Solicitada',
            self::marked => 'Marcada',
            self::concluded => 'Concluída',
            self::rejected => 'Rejeitada',
        ];

        return $translations[$key] ?? $key;
    }
}
