<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 * @method static static OptionFour()
 * @method static static OptionFive()
 * @method static static OptionSix()
 */
final class Specialty extends Enum
{
    const Pediatrician = 'pediatra';
    const Dentist = 'dentista';
    const Psychologist = 'psicólogo';
    const GeneralPractitioner = 'clínico geral';
    const Obstetrician = 'obstetra';
    const Prenatal = 'consulta pré-natal';
}

