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
    const PediatricNursing = 'Enfermagem Pediátrica';
    const ObstetricNursing = 'Enfermagem Obstétrica';
    const DentalNursing = 'Enfermagem Odontológica';
    const MentalHealthNursing = 'Enfermagem em Saúde Mental';
    const GeneralClinicalNursing = 'Enfermagem Clínica Geral';
    const TriageAndEmergencyNursing = 'Enfermagem de Triagem e Urgência';
    const HealthEducationAndPreventionNursing = 'Enfermagem de Educação e Prevenção em Saúde';
}
