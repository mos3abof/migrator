<?php namespace Pckg\Migration\Console;

use Pckg\Framework\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class UpdateMigrator extends Command
{

    protected function configure()
    {
        $this->setName('migrator:update')
             ->setDescription('Install not installed migrations listed in migrations.php in app config')
             ->addArguments(
                 [
                     'app' => 'Application name',
                 ],
                 InputArgument::REQUIRED
             );
    }

    /**
     * We
     */
    public function handle()
    {
        $this->app = $this->argument('app');
        dd("UpdateMigrator::handle", $this->app, $this->getAppMigrationPath());
    }

    private function getAppMigrationPath()
    {
        return path('root') . 'storage' . path('ds') . 'environment' . path('ds') . 'migrator' . path(
            'ds'
        ) . $this->app . path('ds');
    }

}