<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class AppointmentType extends Enum
{
    const urgent = 'urgent';
    const scheduled = 'scheduled';
    const walk_in = 'walk_in';

    /**
     * Get the Portuguese translation of the status.
     *
     * @param string $key
     * @return string
     */
    public static function getPortugueseLabel(string $key): string
    {
        $translations = [
            self::urgent => 'Urgente',
            self::scheduled => 'Marcação por horário',
            self::walk_in => 'Espontânea',
        ];

        return $translations[$key] ?? $key;
    }

    /**
     * Get the enum values as an array.
     *
     * @return array
     */
    public static function asArrayValues(): array
    {
        return self::getValues();
    }
}
