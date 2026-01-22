<?php

namespace Ihxnnxs\UmbraUI;

use Ihxnnxs\UmbraUI\Commands\InitCommand;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class UmbraUIServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('umbra-toast', function ($app) {
            return new Toast;
        });

        $this->app->singleton('umbra-toast-renderer', function ($app) {
            return new ToastRenderer;
        });
    }

    public function boot(): void
    {
        // Load views from package
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'umbra');

        // Register anonymous Blade components
        Blade::anonymousComponentPath(__DIR__.'/../resources/views/components', 'umbra');

        // Register commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                InitCommand::class,
            ]);

            // Publish components
            $this->publishes([
                __DIR__.'/../resources/views/components' => resource_path('views/components/umbra'),
            ], 'umbra-ui-components');

            // Publish JavaScript assets (toast, etc.)
            $this->publishes([
                __DIR__.'/../resources/js' => public_path('vendor/umbra-ui/js'),
            ], 'umbra-ui-assets');
        }

        // Toast blade directive for server-side toasts
        Blade::directive('umbraToasts', function () {
            return "<?php app('umbra-toast-renderer')->render(); ?>";
        });
    }
}
