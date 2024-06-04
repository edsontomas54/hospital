<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Pediatrician()
 * @method static static Obstetrician()
 * @method static static Dentist()
 * @method static static Psychologist()
 * @method static static GeneralPractitioner()
 */
final class DoctorSpecialtyEnum extends Enum
{
    const Pediatrician = 'Pediatra';
    const Obstetrician = 'Obstetra';
    const Dentist = 'Dentista';
    const Psychologist = 'Psicólogo';
    const GeneralPractitioner = 'Clínico Geral';
}
