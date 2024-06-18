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
    const Pediatrician = 'Pediatrician';
    const Dentist = 'Dentist';
    const Psychologist = 'Psychologist';
    const GeneralPractitioner = 'GeneralPractitioner';
    const Obstetrician = 'Obstetrician';
    const Prenatal = 'Prenatal';



    public static function getPortugueseLabel(string $key): string
    {
        $translations = [

            Self::Pediatrician => 'Pediatra',
            Self::Dentist => 'Dentista',
            Self::Psychologist => 'Psicólogo',
            Self::GeneralPractitioner => 'Clínico geral',
            Self::Obstetrician => 'Obstetra',
            // Self::Prenatal => 'Consulta pré-natal',
        ];

        return $translations[$key] ?? $key;
    }
}

