<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class SerciceMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:service';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Service';

    protected $type = 'Service';

    protected function getStub()
    {
        return __DIR__.'/Stub/CreateServices.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'/Services';
    }
}
