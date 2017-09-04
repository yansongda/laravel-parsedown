<?php

namespace Yansongda\LaravelParsedown;

use Parsedown;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ParsedownServiceProvider extends ServiceProvider
{
    /**
     * delay to load service.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * boot a service.
     * 
     * @author yansongda <me@yansongda.cn>
     * 
     * @return  [type]     [description]
     */
    public function boot()
    {
        Blade::directive('parsedown', function ($expression) {
            return "<?php echo parsedown($expression); ?>";
        });
    }

    /**
     * registe the service.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Parsedown::class, function ($app) {
            return new Parsedown();
        });

        $this->app->alias(Parsedown::class, 'parsedown');
    }

    /**
     * providers.
     *
     * @return array
     */
    public function provides()
    {
        return [Parsedown::class, 'parsedown'];
    }
}
