<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class AppointmentType extends Enum
{
    const URGENT = 'urgent';
    const SCHEDULED = 'scheduled';
    const WALKIN = 'walkIn';

    /**
     * Get the Portuguese translation of the status.
     *
     * @param string $key
     * @return string
     */
    public static function getPortugueseLabel(string $key): string
    {
        $translations = [
            self::URGENT => 'urgente',
            self::SCHEDULED => 'agendada',
            self::WALKIN => 'espontânea',
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
