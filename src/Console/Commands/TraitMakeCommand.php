<?php

namespace Mtownsend\MakeTrait\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class TraitMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:trait';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new trait';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Trait';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('boot')) {
            return __DIR__ . '/stubs/boot-trait.stub';
        }

        if ($this->option('scope')) {
            return __DIR__ . '/stubs/scope-trait.stub';
        }

        return __DIR__ . '/stubs/trait.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Traits';
    }

    /**
     * Build the trait with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());

        return $this->replaceNamespace($stub, $name)->replaceTrait($stub, $name);
    }

    /**
     * Replace the trait name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceTrait($stub, $name)
    {
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);

        return str_replace('DummyTrait', $class, $stub);
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['boot', 'b', InputOption::VALUE_NONE, 'Indicates if the generated trait should contain an eloquent boot method'],
            ['scope', 's', InputOption::VALUE_NONE, 'Indicates if the generated trait should contain an eloquent query scope']
        ];
    }
}
