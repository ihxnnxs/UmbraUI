<?php

namespace Ihxnnxs\UmbraUI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class UmbraUIServiceProvider extends ServiceProvider
{
    protected array $components = [
        'accordion',
        'alert',
        'avatar',
        'badge',
        'button',
        'card',
        'checkbox',
        'date-picker',
        'dropdown',
        'field',
        'input',
        'label',
        'link',
        'modal',
        'radio',
        'select',
        'slider',
        'switch',
        'table',
        'tabs',
        'textarea',
        'toast',
        'progress',
        'divider',
        'icons',
        'breadcrumb',
        'spinner',
        'popover',
    ];

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
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'umbra-ui');

        foreach ($this->components as $component) {
            $this->publishes([
                __DIR__."/../resources/views/components/{$component}" => resource_path("views/components/{$component}"),
            ], $component);
        }

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/umbra-ui'),
        ], 'umbra-ui-views');

        $this->publishes([
            __DIR__.'/../resources/js' => public_path('vendor/umbra-ui/js'),
        ], 'umbra-ui-assets');

        Blade::directive('umbraToasts', function () {
            return "<?php app('umbra-toast-renderer')->render(); ?>";
        });
    }
}
