<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class ContractsMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:contracts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Contracts';

    protected $type = 'Contracts';

    protected function getStub()
    {
        return __DIR__.'/Stub/CreateContracts.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'/Contracts';
    }
}
