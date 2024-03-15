<?php

declare(strict_types=1);

namespace MauticPlugin\MauticCheckerBundle\Integration\Support;

use Mautic\IntegrationsBundle\Integration\DefaultConfigFormTrait;
use Mautic\IntegrationsBundle\Integration\Interfaces\ConfigFormInterface;
use MauticPlugin\MauticCheckerBundle\Integration\MauticCheckerIntegration;

class ConfigSupport extends MauticCheckerIntegration implements ConfigFormInterface
{
    use DefaultConfigFormTrait;
}
