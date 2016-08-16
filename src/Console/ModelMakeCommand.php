<?php

namespace Stillat\ModelCannon\Console;

use Illuminate\Support\Str;
use Illuminate\Foundation\Console\ModelMakeCommand as LaravelModelMakeCommand;

class ModelMakeCommand extends LaravelModelMakeCommand
{

	/**
	 * Parse the name and format according to the root namespace.
	 * 
	 * @param  string $name
	 * @return string
	 */
	protected function parseName($name)
	{
		$rootNamespace = $this->laravel->getNamespace();

		// If the name already begins with the root Laravel namespace,
		// we will not continue to process it any further. Instead,
		// we will just return it and replace the first instance
		// of the namespace with the namespace and 'Models\'.
		if (Str::startsWith($name, $rootNamespace)) {
			return substr_replace($name, $rootNamespace.'Models\\', 0, strlen($rootNamespace));
		}

		return parent::parseName($name);
	}

}