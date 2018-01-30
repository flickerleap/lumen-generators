<?php namespace FlickerLeap\Generators\Commands;


use InvalidArgumentException;

class ControllerCommand extends BaseCommand {

	protected $signature = 'flickerleap:controller
        {model : Name of the model (with namespace if not App)}
		{--no-routes= : without routes}
        {--force= : override the existing files}
        {--laravel : Use Laravel style route definitions}
    ';

	protected $description = 'Generates RESTful controller using the RESTActions trait';

    public function handle()
    {
    	$model = $this->argument('model');
    	$name = '';
    	if(strrpos($model, "\\") === false){
    		$name = $model;
    		$model = "App\\" . $model;
    	} else {
    		$name = explode("\\", $model);
    		$name = $name[count($name) - 1];
    	}
        $controller = ucwords(str_plural($name)) . 'Controller';
        $content = $this->getTemplate('controller')
        	->with([
        		'name' => $controller,
        		'model' => $model
        	])
        	->get();

        $this->save($content, "./app/Http/Controllers/{$controller}.php", "{$controller}");
        if(! $this->option('no-routes')){
            $options = [
                'resource' => snake_case($name, '-'),
                '--controller' => $controller,
            ];

            if ($this->option('laravel')) {
                $options['--laravel'] = true;
            }

            $this->call('flickerleap:route', $options);
        }
    }

}
