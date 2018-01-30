<?php namespace FlickerLeap\Generators;

use Illuminate\Support\ServiceProvider;

class CommandsServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->registerModelCommand();
        $this->registerControllerRestActionsCommand();
        $this->registerControllerCommand();
        $this->registerRouteCommand();
        $this->registerMigrationCommand();
        $this->registerResourceCommand();
        $this->registerResourcesCommand();
        $this->registerPivotTableCommand();
        $this->registerFactoryCommand();
        // registerSeederCommand
        // registerPivotSeederCommand
        // registerTestCommand
    }

    protected function registerModelCommand(){
        $this->app->singleton('command.flickerleap.model', function($app){
            return $app['FlickerLeap\Generators\Commands\ModelCommand'];
        });
        $this->commands('command.flickerleap.model');
    }

    protected function registerControllerRestActionsCommand(){
        $this->app->singleton('command.flickerleap.controller.rest-actions', function($app){
            return $app['FlickerLeap\Generators\Commands\ControllerRestActionsCommand'];
        });
        $this->commands('command.flickerleap.controller.rest-actions');
    }

    protected function registerControllerCommand(){
        $this->app->singleton('command.flickerleap.controller', function($app){
            return $app['FlickerLeap\Generators\Commands\ControllerCommand'];
        });
        $this->commands('command.flickerleap.controller');
    }

    protected function registerMigrationCommand(){
        $this->app->singleton('command.flickerleap.migration', function($app){
            return $app['FlickerLeap\Generators\Commands\MigrationCommand'];
        });
        $this->commands('command.flickerleap.migration');
    }

    protected function registerRouteCommand(){
        $this->app->singleton('command.flickerleap.route', function($app){
            return $app['FlickerLeap\Generators\Commands\RouteCommand'];
        });
        $this->commands('command.flickerleap.route');
    }

    protected function registerTestCommand(){
        $this->app->singleton('command.flickerleap.test', function($app){
            return $app['FlickerLeap\Generators\Commands\TestCommand'];
        });
        $this->commands('command.flickerleap.test');
    }

    protected function registerResourceCommand(){
        $this->app->singleton('command.flickerleap.resource', function($app){
            return $app['FlickerLeap\Generators\Commands\ResourceCommand'];
        });
        $this->commands('command.flickerleap.resource');
    }

    protected function registerResourcesCommand(){
        $this->app->singleton('command.flickerleap.resources', function($app){
            return $app['FlickerLeap\Generators\Commands\ResourcesCommand'];
        });
        $this->commands('command.flickerleap.resources');
    }

    protected function registerPivotTableCommand(){
        $this->app->singleton('command.flickerleap.pivot-table', function($app){
            return $app['FlickerLeap\Generators\Commands\PivotTableCommand'];
        });
        $this->commands('command.flickerleap.pivot-table');
    }

    protected function registerFactoryCommand(){
        $this->app->singleton('command.flickerleap.factory', function($app){
            return $app['FlickerLeap\Generators\Commands\FactoryCommand'];
        });
        $this->commands('command.flickerleap.factory');
    }

    protected function registerSeederCommand(){
        $this->app->singleton('command.flickerleap.seeder', function($app){
            return $app['FlickerLeap\Generators\Commands\SeederCommand'];
        });
        $this->commands('command.flickerleap.seeder');
    }

    protected function registerPivotSeederCommand(){
        $this->app->singleton('command.flickerleap.pivot.seeder', function($app){
            return $app['FlickerLeap\Generators\Commands\PivotSeederCommand'];
        });
        $this->commands('command.flickerleap.pivot.seeder');
    }

}
