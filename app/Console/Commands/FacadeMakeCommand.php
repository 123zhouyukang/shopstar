<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class FacadeMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:facade';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Facades';

    protected $type = 'Facade';

    protected function getStub()
    {
        return __DIR__.'Stub/CreateFacades.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'/Facades';
    }
}
