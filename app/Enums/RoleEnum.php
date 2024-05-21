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
    const PATIENT = 'Paciente';
    const DOCTOR = 'Medico /a';
    const NURSE = 'Enfermeiro /a';
    const ADMIN = 'Administrador';
    const MANAGER = 'Manager';
}
