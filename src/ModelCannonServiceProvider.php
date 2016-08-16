<?php

namespace Stillat\ModelCannon;

use Stillat\ModelCannon\Console\ModelMakeCommand;
use Illuminate\Foundation\Providers\ArtisanServiceProvider;

class ModelCannonServiceProvider extends ArtisanServiceProvider
{

	/**
	 * Override Laravel's make:model command.
	 *
	 * @return void
	 */
	protected function registerModelMakeCommand()
	{
		$this->app->singleton('command.model.make', function ($app) {
			return new ModelMakeCommand($app['files']);
		});
	}

}