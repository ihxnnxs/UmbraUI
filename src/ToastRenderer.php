<?php

namespace Ihxnnxs\UmbraUI;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ToastRenderer
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     * @throws \Throwable
     */
    public function render(): string
    {
        $toasts = $this->getToasts();

        if (empty($toasts)) {
            return '';
        }

        $output = '';

        foreach ($toasts as $toast) {
            /** @var view-string $viewName */
            $viewName = 'umbra::components.toast.index';
            $output .= view($viewName, [
                'type' => $toast['type'] ?? 'default',
                'title' => $toast['title'] ?? null,
                'slot' => $toast['message'],
            ])->render();
        }

        return $output;
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    protected function getToasts(): array
    {
        $toasts = [];

        if (session()->has('umbra_toast')) {
            $toasts[] = session()->get('umbra_toast');
        }

        $supportedTypes = ['success', 'error', 'warning', 'info', 'message'];

        foreach ($supportedTypes as $type) {
            if (session()->has($type)) {
                $toasts[] = [
                    'type' => $type === 'message' ? 'default' : $type,
                    'message' => session()->get($type),
                    'title' => null,
                ];
            }
        }

        if (session()->has('toast_success')) {
            $toasts[] = [
                'type' => 'success',
                'message' => session()->get('toast_success'),
                'title' => session()->get('toast_success_title'),
            ];
        }

        if (session()->has('toast_error')) {
            $toasts[] = [
                'type' => 'error',
                'message' => session()->get('toast_error'),
                'title' => session()->get('toast_error_title'),
            ];
        }

        if (session()->has('toast_warning')) {
            $toasts[] = [
                'type' => 'warning',
                'message' => session()->get('toast_warning'),
                'title' => session()->get('toast_warning_title'),
            ];
        }

        if (session()->has('toast_info')) {
            $toasts[] = [
                'type' => 'info',
                'message' => session()->get('toast_info'),
                'title' => session()->get('toast_info_title'),
            ];
        }

        return $toasts;
    }
}
