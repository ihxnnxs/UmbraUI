  <p align="center">
  <img src="images/logo/LightLogo.png" alt="UmbraUI Light Theme" width="50">
</p>

<h1 align="center">UmbraUI</h1>

<p align="center">
  <a href="https://packagist.org/packages/ihxnnxs/umbra-ui"><img src="https://img.shields.io/packagist/v/ihxnnxs/umbra-ui.svg?style=flat-square" alt="Latest Version on Packagist"></a>
  <a href="https://github.com/ihxnnxs/UmbraUI/actions?query=workflow%3Arun-tests+branch%3Amain"><img src="https://img.shields.io/github/actions/workflow/status/ihxnnxs/UmbraUI/run-tests.yml?branch=main&label=tests&style=flat-square" alt="GitHub Tests Action Status"></a>
  <a href="https://github.com/ihxnnxs/UmbraUI/actions?query=workflow%3A%22Fix+PHP+code+style+issues%22+branch%3Amain"><img src="https://img.shields.io/github/actions/workflow/status/ihxnnxs/UmbraUI/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square" alt="GitHub Code Style Action Status"></a>
  <a href="https://packagist.org/packages/ihxnnxs/umbra-ui"><img src="https://img.shields.io/packagist/dt/ihxnnxs/umbra-ui.svg?style=flat-square" alt="Total Downloads"></a>
</p>

**Essential UI components library for Laravel applications with Tailwind CSS**

<p align="center">
  <img src="images/preview/previewLight.png" alt="UmbraUI Light Theme" width="250">
  <img src="images/preview/previewDark.png" alt="UmbraUI Dark Theme" width="250">
</p>

UmbraUI focuses on providing the most essential UI components for modern web applications. Built with
accessibility-first design, dark/light theme support, and seamless Laravel integration.

## Essential Components

UmbraUI focuses on the most critical components for modern web applications, based on industry standards and popular
libraries like shadcn/ui, Tailwind UI, and Chakra UI.

### Core Form Components ✅

| Component   | Status  | Description                            |
|-------------|---------|----------------------------------------|
| Button      | ✅ Ready | Primary, secondary, and variant styles |
| Input       | ✅ Ready | Text, email, password, number inputs   |
| Link        | ✅ Ready | Styled anchor elements                 |
| Textarea    | ✅ Ready | Multi-line text input                  |
| Select      | ✅ Ready | Dropdown selection                     |
| Checkbox    | ✅ Ready | Boolean selection                      |
| Radio       | ✅ Ready | Single choice selection                |
| Label       | ✅ Ready | Form field labels                      |
| Field       | ✅ Ready | Form field wrapper with validation     |
| Switch      | ✅ Ready | Toggle switch                          |
| Slider      | ✅ Ready | Range input                            |
| Date Picker | ✅ Ready | Date selection                         |

### Navigation & Layout ✅

| Component  | Status  | Description                         |
|------------|---------|-------------------------------------|
| Alert      | ✅ Ready | Success, error, warning, info       |
| Badge      | ✅ Ready | Status indicators and labels        |
| Avatar     | ✅ Ready | User profile pictures and initials  |
| Tabs       | ✅ Ready | Tabbed navigation interface         |
| Accordion  | ✅ Ready | Collapsible content sections        |
| Modal      | ✅ Ready | Dialog/popup overlay                |
| Card       | ✅ Ready | Universal card with image support   |
| Dropdown   | ✅ Ready | Context menus with nested submenus  |
| Popover    | ✅ Ready | Contextual overlay with click/hover |
| Tooltip    | ✅ Ready | Accessible hover/focus tooltip      |
| Spinner    | ✅ Ready | Loading animations and states       |
| Divider    | ✅ Ready | Content separators                  |
| Progress   | ✅ Ready | Progress indicators                 |
| Breadcrumb | ✅ Ready | Navigation breadcrumbs              |

### Data Display ✅

| Component | Status  | Description                                    |
|-----------|---------|------------------------------------------------|
| Table     | ✅ Ready | Data tables with sorting and selection support |

### Notifications ✅

| Component | Status  | Description                 |
|-----------|---------|-----------------------------|
| Toast     | ✅ Ready | Elegant notification system |

### Icons

UmbraUI uses **[Tabler Icons](https://tabler.io/icons)** - a beautiful set of 4,900+ free SVG icons designed for web
interfaces. All components that require icons come with pre-integrated Tabler icons support for consistency and visual
appeal.

```blade
{{-- Basic usage --}}
<x-umbra-ui::icons.home />
<x-umbra-ui::icons.user />
<x-umbra-ui::icons.heart />

{{-- Custom colors --}}
<x-umbra-ui::icons.heart class="text-red-500" />
<x-umbra-ui::icons.star class="text-yellow-400" />

{{-- Custom sizes --}}
<x-umbra-ui::icons.home class="w-4 h-4" />
<x-umbra-ui::icons.settings class="w-8 h-8" />

{{-- Combined customization --}}
<x-umbra-ui::icons.bell class="w-6 h-6 text-blue-600" />
```

## 🚀 Coming in v0.4

| Component      | Status     | Description              |
|----------------|------------|--------------------------|
| **Command**    | 🔄 Planned | Command palette/search   |
| **Pagination** | 🔄 Planned | Page navigation controls |

## Installation

You can install the package via composer:

```bash
composer require ihxnnxs/umbra-ui
```

### Publishing Assets

To use JavaScript toast notifications, you need to publish the assets:

```bash
php artisan vendor:publish --tag=umbra-ui-assets
```

This will publish the JavaScript files to `public/vendor/umbra-ui/js/`.

## Usage

### Basic Components

```blade
{{-- Buttons --}}
<x-umbra-ui::button>Primary Button</x-umbra-ui::button>
<x-umbra-ui::button type="submit" class="bg-blue-600">Custom Button</x-umbra-ui::button>

{{-- Form Inputs --}}
<x-umbra-ui::input type="email" placeholder="Enter email" />
<x-umbra-ui::textarea placeholder="Your message..." />
<x-umbra-ui::select>
    <option>Choose...</option>
    <option value="1">Option 1</option>
</x-umbra-ui::select>

{{-- Form Controls --}}
<x-umbra-ui::checkbox id="terms" />
<x-umbra-ui::label for="terms">Accept Terms</x-umbra-ui::label>

<x-umbra-ui::radio name="choice" value="a" id="choice-a" />
<x-umbra-ui::label for="choice-a">Choice A</x-umbra-ui::label>

<x-umbra-ui::switch id="notifications" />
```

### Advanced Components

```blade
{{-- Form Fields with Validation --}}
<x-field label="Email Address" error="Email is required">
    <x-input type="email" />
</x-field>

<x-field label="Message" helper="Maximum 500 characters">
    <x-textarea />
</x-field>

{{-- Navigation --}}
<x-tabs default-tab="overview">
    <x-tabs.nav>
        <x-tabs.tab value="overview">Overview</x-tabs.tab>
        <x-tabs.tab value="settings">Settings</x-tabs.tab>
    </x-tabs.nav>
    
    <x-tabs.panel value="overview">
        <p>Overview content...</p>
    </x-tabs.panel>
    
    <x-tabs.panel value="settings">
        <p>Settings content...</p>
    </x-tabs.panel>
</x-tabs>

{{-- Badges --}}
<x-umbra-ui::badge>Default</x-umbra-ui::badge>
<x-umbra-ui::badge variant="success">Success</x-umbra-ui::badge>
<x-umbra-ui::badge variant="error" removable="true">Removable</x-umbra-ui::badge>
<x-umbra-ui::badge variant="primary" dot="true">With Dot</x-umbra-ui::badge>
<x-umbra-ui::badge size="lg">Large Badge</x-umbra-ui::badge>

{{-- Avatars --}}
<x-umbra-ui::avatar src="/path/to/image.jpg" alt="User Name" />
<x-umbra-ui::avatar initials="JD" size="lg" />
<x-umbra-ui::avatar status="online" size="md" />
<x-umbra-ui::avatar shape="square" initials="AB" />

{{-- Interactive Components --}}
<x-accordion>
    <x-slot name="title">FAQ Item</x-slot>
    Answer content goes here...
</x-accordion>

<x-slider min="0" max="100" value="50" />
<x-date-picker value="2025-01-15" />
```

### Toast Notifications

Simple, elegant toast notifications for Laravel applications.

#### Installation

**For JavaScript toasts only:**

```html

<script src="{{ asset('vendor/umbra-ui/js/toast.js') }}"></script>
```

**For server-side toasts (redirect()->with()):**

```blade
<x-umbra-ui::toast-container />
```

**For both:**

```html

<x-umbra-ui::toast-container/>
<script src="{{ asset('vendor/umbra-ui/js/toast.js') }}"></script>
```

#### Usage

**Server-side (PHP):**

```php
// Using redirect()->with()
return redirect()->back()
    ->with('success', 'User created successfully!');
    // Supports: success, error, warning, info

// Using Toast Facade
use Ihxnnxs\UmbraUI\Facades\Toast;

Toast::success('User created successfully!', 'Success Title');
Toast::error('Something went wrong!');
Toast::warning('Please review your data');
Toast::info('New updates available');
```

**Client-side (JavaScript):**

```html
<!-- Data attributes on buttons -->
<button
    data-toast-trigger
    data-toast-type="success"
    data-toast-message="Operation completed!"
    data-toast-title="Success"
>
    Show Toast
</button>

<script>
    // Direct JavaScript calls
    umbraToast.success('Success message!', 'Title');
    umbraToast.error('Error message!');
    umbraToast.warning('Warning message!');
    umbraToast.info('Info message!');
</script>
```

#### Configuration Options

**Data Attributes:**

- `data-toast-type`: success, error, warning, info, default
- `data-toast-message`: Toast message text
- `data-toast-title`: Optional title
- `data-toast-position`: top-left, top-right, top-center, bottom-left, bottom-right, bottom-center
- `data-toast-duration`: Milliseconds (default: 5000, 0 = no auto-dismiss)

**JavaScript Options:**

```javascript
umbraToast.show('Message', 'success', 'Title', {
    position: 'top-right',
    duration: 5000,
    dismissible: true
});
```

### Cards

```blade
{{-- Simple Card --}}
<x-card>
    <h4>Card Title</h4>
    <p>Card content goes here...</p>
</x-card>

{{-- Card with Image --}}
<x-card>
    <x-slot name="image">
        <img src="image.jpg" alt="Description" class="w-full h-48 object-cover" />
    </x-slot>
    
    <x-slot name="header">
        <h4>Card with Image</h4>
    </x-slot>
    
    <p>Content with image and header.</p>
    
    <x-slot name="footer">
        <x-button>Action</x-button>
    </x-slot>
</x-card>
```

### Links

```blade
<x-link href="https://example.com">External Link</x-link>
<x-link href="/dashboard" class="text-blue-600">Custom Styled Link</x-link>
```

### Tables

```blade
{{-- Basic Table --}}
<x-umbra-ui::table>
    <x-umbra-ui::table.head>
        <x-umbra-ui::table.row>
            <x-umbra-ui::table.th>Name</x-umbra-ui::table.th>
            <x-umbra-ui::table.th>Email</x-umbra-ui::table.th>
            <x-umbra-ui::table.th align="right">Actions</x-umbra-ui::table.th>
        </x-umbra-ui::table.row>
    </x-umbra-ui::table.head>
    
    <x-umbra-ui::table.body>
        <x-umbra-ui::table.row>
            <x-umbra-ui::table.td>John Doe</x-umbra-ui::table.td>
            <x-umbra-ui::table.td>john@example.com</x-umbra-ui::table.td>
            <x-umbra-ui::table.td align="right">
                <x-button class="text-xs">Edit</x-button>
            </x-umbra-ui::table.td>
        </x-umbra-ui::table.row>
        
        <x-umbra-ui::table.row selected="true">
            <x-umbra-ui::table.td>Jane Smith</x-umbra-ui::table.td>
            <x-umbra-ui::table.td>jane@example.com</x-umbra-ui::table.td>
            <x-umbra-ui::table.td align="right">
                <x-button class="text-xs">Edit</x-button>
            </x-umbra-ui::table.td>
        </x-umbra-ui::table.row>
    </x-umbra-ui::table.body>
</x-umbra-ui::table>

{{-- Empty State Table --}}
<x-umbra-ui::table>
    <x-umbra-ui::table.head>
        <x-umbra-ui::table.row>
            <x-umbra-ui::table.th>Orders</x-umbra-ui::table.th>
            <x-umbra-ui::table.th>Customer</x-umbra-ui::table.th>
            <x-umbra-ui::table.th align="right">Total</x-umbra-ui::table.th>
        </x-umbra-ui::table.row>
    </x-umbra-ui::table.head>
    
    <x-umbra-ui::table.body>
        <x-umbra-ui::table.empty colspan="3">
            <x-slot name="title">No orders found</x-slot>
            You haven't received any orders yet.
            <x-slot name="action">
                <x-button class="text-sm">Create Order</x-button>
            </x-slot>
        </x-umbra-ui::table.empty>
    </x-umbra-ui::table.body>
</x-umbra-ui::table>
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ihxnnxs](https://github.com/ihxnnxs)
- [All Contributors](../../contributors)
- [Tabler Icons](https://tabler.io/icons) - Beautiful free SVG icons

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
