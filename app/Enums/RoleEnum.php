<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static PATIENT()
 * @method static static DOCTOR()
 * @method static static NURSE()
 * @method static static ADMIN()
 * @method static static MANAGER()
 */
final class RoleEnum extends Enum
{
    const PATIENT = 'PATIENT';
    const DOCTOR = 'DOCTOR';
    const NURSE = 'NURSE';
    const ADMIN = 'ADMIN';
    const MANAGER = 'MANAGER';


    public static function getPortugueseLabel(string $key): string
    {
        $translations = [
             Self::PATIENT => 'Paciente',
             Self::DOCTOR =>'Medico /a',
             Self::NURSE => 'Enfermeiro /a',
             Self::ADMIN => 'Administrador',
             Self::MANAGER => 'Manager',
        ];

        return $translations[$key] ?? $key;
    }

}
