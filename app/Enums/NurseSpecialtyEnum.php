<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static PediatricNursing()
 * @method static static ObstetricNursing()
 * @method static static DentalNursing()
 * @method static static MentalHealthNursing()
 * @method static static GeneralClinicalNursing()
 * @method static static TriageAndEmergencyNursing()
 * @method static static HealthEducationAndPreventionNursing()
 */
final class NurseSpecialtyEnum extends Enum
{
    const PediatricNursing = 'PediatricNursing';
    const ObstetricNursing = 'ObstetricNursing';
    const DentalNursing = 'DentalNursing';
    const MentalHealthNursing = 'MentalHealthNursing';
    const GeneralClinicalNursing = 'GeneralClinicalNursing';
    const TriageAndEmergencyNursing = 'TriageAndEmergencyNursing';
    const HealthEducationAndPreventionNursing = 'HealthEducationAndPreventionNursing';



    public static function getPortugueseLabel(string $key): string
    {
        $translations = [
            Self::PediatricNursing => 'Enfermagem Pediátrica',
            Self::ObstetricNursing => 'Enfermagem Obstétrica',
            Self::DentalNursing => 'Enfermagem Odontológica',
            Self::MentalHealthNursing => 'Enfermagem em Saúde Mental',
            Self::GeneralClinicalNursing => 'Enfermagem Clínica Geral',
            Self::TriageAndEmergencyNursing => 'Enfermagem de Triagem e Urgência',
            Self::HealthEducationAndPreventionNursing => 'Enfermagem de Educação e Prevenção em Saúde',
        ];

        return $translations[$key] ?? $key;
    }
}
