<?php

declare(strict_types=1);

namespace Bratiask\GoPayPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class GoPayPlugin extends Bundle
{
    use SyliusPluginTrait;
}
