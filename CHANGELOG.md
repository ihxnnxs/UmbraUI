# Changelog

All notable changes to `:package_name` will be documented in this file.

## UmbraUI v0.4 - Theme System & Component Extensibility - 2026-01-03

Hey everyone! We're excited to release UmbraUI v0.4 with some major improvements that make it way easier to customize and use.

🎨 What's New

Theme System

We've built a complete theming system with 4 beautiful color schemes (neutral, stone, zinc, gray). Each theme works perfectly in both light and dark modes, and switching between them is super smooth. All colors use the modern OKLCH color space for better consistency.

Component Extensibility

Every component is now fully customizable! We added a cn() helper function that intelligently merges Tailwind classes - no more fighting with class conflicts. Just pass your custom classes and they'll override the defaults exactly how you'd expect.

Example:
<x-umbra.button class="bg-purple-500">
My Custom Button
</x-umbra.button>

CLI Commands

Two new Artisan commands make setup a breeze:

- php artisan umbra:init - Set up UmbraUI and choose your theme interactively. Shows your current theme when re-running with --force.
- php artisan umbra:add <component> - Install components with automatic dependency resolution.

Both support a --dev flag for package developers working with Orchestra Testbench.

Component Updates

All components have been rewritten to work seamlessly with the theme system:

- Alert - Variants for success, error, warning, info with proper theming
- Badge - 8 variants including success, warning, info colors
- Button - 6 variants (default, destructive, outline, secondary, ghost, link)
- Table - Fully themed with hover states, striping, and empty states
- Input/Select/Textarea - Consistent styling with file input support
- Card, Avatar, Link, Label - All using theme colors

Everything looks great in both light and dark modes, no manual color adjustments needed!

🛠️ Developer Experience

Composer Commands

- composer serve - Starts dev server with Vite hot reload
- composer sync - Syncs components and CSS to workbench

Better Documentation

Added comprehensive CLAUDE.md with examples, architecture details, and best practices.

🔧 Breaking Changes

Color schemes reduced to 4: We removed the slate theme to focus on the most useful options (neutral, stone, zinc, gray).

Component structure: If you were using components directly from resources/views/components, they now use the cn() function. Update your custom classes accordingly.

🚀 Migration Guide

1. Run php artisan umbra:init --force to update your theme
2. Components automatically support custom classes via the class attribute
3. Remove any custom class merging logic - cn() handles it now


---

That's it! We think you're going to love how easy it is to customize UmbraUI now. As always, if you run into any issues or have suggestions, let us know!

Happy building! 🎉

> сделай меньше текста и не пиши от моего лица а пиши от лица команды umbra ui

● UmbraUI v0.4 - Theming & Extensibility

We're excited to announce UmbraUI v0.4 with major improvements to customization and developer experience.

🎨 What's New

Complete Theme System

4 color schemes (neutral, stone, zinc, gray) with automatic light/dark mode support. All components use CSS variables powered by OKLCH color space for consistent, beautiful colors across themes.

Component Extensibility

Every component now supports custom classes through our new cn() helper with intelligent Tailwind class merging:

<x-umbra.button class="bg-purple-500 hover:bg-purple-600">
Custom Styled Button
</x-umbra.button>

CLI Commands

- php artisan umbra:init - Interactive theme setup with current theme detection
- php artisan umbra:add <component> - Install components with auto dependency resolution
- Both support --dev flag for package development

Updated Components

All components rewritten to use the theme system:

- Alert, Badge, Button with multiple variants
- Table with theming, hover states, striping
- Input, Select, Textarea with consistent styling
- Card, Avatar, Link fully themed

Developer Tools

- composer serve - Dev server with Vite hot reload
- composer sync - Sync components to workbench
- Comprehensive documentation in CLAUDE.md

💥 Breaking Changes

- Removed slate theme (now 4 themes: neutral, stone, zinc, gray)
- Components now use cn() function - custom class merging logic should be removed

🚀 Upgrade

Run php artisan umbra:init --force to update your theme configuration.


---

Built with ❤️ by the UmbraUI team

**Full Changelog**: https://github.com/ihxnnxs/UmbraUI/compare/V0.3...V0.4
