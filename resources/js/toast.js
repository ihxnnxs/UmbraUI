/**
 * UmbraUI Toast Notifications
 * Simple, elegant toast notifications with Alpine.js integration
 */
class UmbraToast {
    constructor() {
        this.init();
    }

    init() {
        // Auto-initialize when DOM is loaded
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.bindEvents());
        } else {
            this.bindEvents();
        }
    }

    bindEvents() {
        // Handle data-toast-trigger buttons
        document.addEventListener('click', (e) => {
            const button = e.target.closest('[data-toast-trigger]');
            if (button) {
                e.preventDefault();
                this.showFromButton(button);
            }
        });
    }

    showFromButton(button) {
        const type = button.dataset.toastType || 'default';
        const message = button.dataset.toastMessage || 'Notification';
        const title = button.dataset.toastTitle || null;
        const position = button.dataset.toastPosition || 'top-right';
        const duration = parseInt(button.dataset.toastDuration) || 5000;

        this.show(message, type, title, { position, duration });
    }

    show(message, type = 'default', title = null, options = {}) {
        const config = {
            position: options.position || 'top-right',
            duration: options.duration || 5000,
            dismissible: options.dismissible !== false,
            ...options
        };

        this._createToast(message, type, title, config);
    }

    _createToast(message, type, title, config) {
        const toastId = 'toast-' + Date.now() + '-' + Math.random().toString(36).substr(2, 9);
        const variant = this._getToastVariant(type);
        
        const isAssertive = ['error','warning'].includes(type);
        const role = isAssertive ? 'alert' : 'status';
        const ariaLive = isAssertive ? 'assertive' : 'polite';
        const toastHtml = `
            <div id="${toastId}" role="${role}" aria-live="${ariaLive}" aria-atomic="true" x-data="{
                show: false,
                init() {
                    this.addToStack();
                    this.$nextTick(() => {
                        this.show = true;
                        ${config.duration > 0 ? `setTimeout(() => this.hide(), ${config.duration});` : ''}
                    });
                },
                addToStack() {
                    let container = document.getElementById('toast-container-${config.position}');
                    if (!container) {
                        container = document.createElement('div');
                        container.id = 'toast-container-${config.position}';
                        container.className = 'fixed z-50 ${this._getPositionClass(config.position)} pointer-events-none flex flex-col ${config.position.includes('bottom') ? 'flex-col-reverse' : ''} gap-2 max-w-sm w-full';
                        document.body.appendChild(container);
                    }
                    container.appendChild(this.$el);
                },
                hide() {
                    this.show = false;
                    setTimeout(() => {
                        if (this.$el && this.$el.parentNode) {
                            const container = this.$el.parentNode;
                            this.$el.remove();
                            if (container && container.children.length === 0) {
                                container.remove();
                            }
                        }
                    }, 300);
                }
            }" x-show="show" 
               x-transition:enter="transform ease-out duration-500" 
               x-transition:enter-start="scale-95 translate-y-8" 
               x-transition:enter-end="scale-100 translate-y-0" 
               x-transition:leave="transform ease-in duration-300" 
               x-transition:leave-start="scale-100 translate-y-0" 
               x-transition:leave-end="scale-95 translate-y-4" 
               class="w-full pointer-events-auto">
                <div class="${variant.wrapper} rounded-lg p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <span class="${variant.icon}">
                                ${variant.iconSvg}
                            </span>
                        </div>
                        <div class="ml-3 w-0 flex-1">
                            ${title ? `<p class="text-sm font-medium text-neutral-900 dark:text-neutral-50">${title}</p>` : ''}
                            <div class="text-sm text-neutral-600 dark:text-neutral-300 ${title ? 'mt-1' : ''}">
                                ${message}
                            </div>
                        </div>
                        ${config.dismissible ? `
                        <div class="ml-4 flex-shrink-0">
                            <button type="button" @click="hide()" class="rounded-md inline-flex items-center justify-center w-6 h-6 ${variant.icon} hover:bg-black/5 dark:hover:bg-white/5 focus:outline-none focus:ring-2 focus:ring-neutral-400 dark:focus:ring-neutral-500">
                                <span class="sr-only">Close</span>
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        ` : ''}
                    </div>
                </div>
            </div>
        `;

        document.body.insertAdjacentHTML('beforeend', toastHtml);
    }

    _getPositionClass(position) {
        const positions = {
            'top-left': 'top-4 left-4',
            'top-right': 'top-4 right-4', 
            'top-center': 'top-4 left-1/2 transform -translate-x-1/2',
            'bottom-left': 'bottom-4 left-4',
            'bottom-right': 'bottom-4 right-4',
            'bottom-center': 'bottom-4 left-1/2 transform -translate-x-1/2'
        };
        return positions[position] || positions['top-right'];
    }

    _getToastVariant(type) {
        const variants = {
            success: {
                wrapper: 'bg-white dark:bg-neutral-950 border-l-4 border-l-emerald-500 border-2 border-neutral-200 dark:border-neutral-800 shadow-sm dark:shadow-neutral-900/10',
                icon: 'text-emerald-500 dark:text-emerald-400',
                iconSvg: '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>'
            },
            error: {
                wrapper: 'bg-white dark:bg-neutral-950 border-l-4 border-l-red-500 border-2 border-neutral-200 dark:border-neutral-800 shadow-sm dark:shadow-neutral-900/10',
                icon: 'text-red-500 dark:text-red-400',
                iconSvg: '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>'
            },
            warning: {
                wrapper: 'bg-white dark:bg-neutral-950 border-l-4 border-l-amber-500 border-2 border-neutral-200 dark:border-neutral-800 shadow-sm dark:shadow-neutral-900/10',
                icon: 'text-amber-500 dark:text-amber-400',
                iconSvg: '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>'
            },
            info: {
                wrapper: 'bg-white dark:bg-neutral-950 border-l-4 border-l-blue-500 border-2 border-neutral-200 dark:border-neutral-800 shadow-sm dark:shadow-neutral-900/10',
                icon: 'text-blue-500 dark:text-blue-400',
                iconSvg: '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" /></svg>'
            },
            default: {
                wrapper: 'bg-white dark:bg-neutral-950 border-l-4 border-l-neutral-400 dark:border-l-neutral-600 border-2 border-neutral-200 dark:border-neutral-800 shadow-sm dark:shadow-neutral-900/10',
                icon: 'text-neutral-500 dark:text-neutral-400',
                iconSvg: '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" /></svg>'
            }
        };
        return variants[type] || variants.default;
    }

    // Public API - Convenience methods
    success(message, title = null, options = {}) {
        this.show(message, 'success', title, options);
    }

    error(message, title = null, options = {}) {
        this.show(message, 'error', title, options);
    }

    warning(message, title = null, options = {}) {
        this.show(message, 'warning', title, options);
    }

    info(message, title = null, options = {}) {
        this.show(message, 'info', title, options);
    }

    loading(message = 'Processing...') {
        this.show(message, 'info', null, { duration: 0, dismissible: false });
    }
}

// Auto-initialize and expose globally
window.umbraToast = new UmbraToast();

// Export for module systems
if (typeof module !== 'undefined' && module.exports) {
    module.exports = UmbraToast;
}
