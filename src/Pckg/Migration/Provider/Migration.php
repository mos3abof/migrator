<?php namespace Pckg\Migration\Provider;

use Pckg\Framework\Provider;
use Pckg\Migration\Console\InstallMigrator;
use Pckg\Migration\Console\UpdateMigrator;

class Migration extends Provider
{

    public function consoles()
    {
        return [
            UpdateMigrator::class,
            InstallMigrator::class,
        ];
    }

}