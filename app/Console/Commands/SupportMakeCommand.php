<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class SupportMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:support';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Support';

    protected $type = 'Support';

    protected function getStub()
    {
        return __DIR__.'/Stub/CreateSupport.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'/Support';
    }
}
