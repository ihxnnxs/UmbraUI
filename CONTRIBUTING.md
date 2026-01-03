# Contributing to UmbraUI

Thank you for considering contributing to UmbraUI! We welcome contributions from the community.

## Getting Started

### Development Setup

1. **Fork and clone the repository**

```bash
git clone https://github.com/YOUR_USERNAME/UmbraUI.git
cd UmbraUI
```

2. **Install dependencies**

```bash
composer install
npm install
```

3. **Run the development server**

```bash
composer serve
```

This starts the Laravel dev server with Vite hot reload at `http://127.0.0.1:8000`.

### Development Workflow

UmbraUI uses Orchestra Testbench for package development. All work should be done in the `workbench` directory:

- **Components**: `resources/views/components/`
- **Showcase**: `workbench/resources/views/showcase.blade.php`
- **Styles**: `workbench/resources/css/app.css`

#### Making Changes

1. **Initialize in dev mode**

```bash
php vendor/bin/testbench umbra:init --dev --force
```

2. **Sync components after changes**

```bash
composer sync
```

3. **Test your changes**

Visit `http://127.0.0.1:8000` to see components in the showcase.

## Contributing Guidelines

### Code Style

- Follow PSR-12 coding standards
- Use meaningful variable names
- Add comments for complex logic
- Keep components simple and focused

### Component Development

When creating or updating components:

1. **Use theme colors** - Always use CSS variables (`--primary`, `--background`, etc.) instead of hardcoded colors
2. **Support extensibility** - Use the `cn()` helper for class merging:

```php
$baseClasses = cn(
    'base classes here',
    $variants[$variant] ?? $variants['default']
);
```

3. **Make it accessible** - Include proper ARIA attributes and keyboard navigation
4. **Support dark mode** - Test in both light and dark themes
5. **Document props** - Add clear comments for available props/attributes

### Theme System

All color schemes use OKLCH color space. When adding or modifying themes:

1. Update `src/Services/ColorSchemeService.php`
2. Ensure both light and dark modes are defined
3. Test all components with the new theme

### Pull Request Process

1. **Create a feature branch**

```bash
git checkout -b feature/your-feature-name
```

2. **Make your changes** following the guidelines above

3. **Test thoroughly**
   - Visual test in showcase
   - Test both light/dark modes
   - Test all 4 color schemes
   - Check accessibility

4. **Commit with clear messages**

```bash
git commit -m "Add: new tooltip component"
git commit -m "Fix: button hover state in dark mode"
git commit -m "Update: table component theme colors"
```

5. **Push and create PR**

```bash
git push origin feature/your-feature-name
```

Then create a Pull Request on GitHub with:
- Clear title and description
- Screenshots/GIFs if visual changes
- List of changes made
- Any breaking changes

### Reporting Bugs

When reporting bugs, please include:

- UmbraUI version
- Laravel version
- PHP version
- Steps to reproduce
- Expected vs actual behavior
- Screenshots if applicable

Create an issue at: https://github.com/ihxnnxs/UmbraUI/issues

### Suggesting Features

We love feature suggestions! Please:

- Check existing issues first
- Describe the use case
- Explain why it's valuable
- Provide examples if possible

## Code of Conduct

- Be respectful and constructive
- Welcome newcomers
- Focus on what's best for the community
- Show empathy towards others

## Questions?

- Open a GitHub Discussion for questions
- Check existing issues and discussions
- Read the documentation in CLAUDE.md

## License

By contributing, you agree that your contributions will be licensed under the MIT License.

---

Thank you for making UmbraUI better! 🎉
