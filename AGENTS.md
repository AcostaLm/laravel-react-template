# AGENTS.md

## Project Overview

Laravel React Starter Kit with PostgreSQL, using Bun as package manager.

## Commands

### Quality Checks (PHP)
```bash
composer lint:check      # Pint formatting check
composer static:check    # PHPStan level 8
composer rector:check    # Rector dry-run
composer tlint:check     # TLint linting
composer test            # Pint + PHPStan + Pest
composer full-check      # All PHP + JS/TS + tests
```

### Quality Checks (JS/TS)
```bash
bun run check            # ESLint + Prettier + TypeScript
bun run fix              # ESLint + Prettier auto-fix
```

### Development
```bash
composer dev             # Vite + artisan serve
bun run dev              # Vite only
```

## Code Style

### PHP
- PSR-12 via Pint (Laravel preset)
- `declare(strict_types=1)` required
- Use `import type` for type-only imports
- 4 spaces indentation

### JS/TS
- ESLint with React, TypeScript, import ordering
- Prettier with Tailwind CSS plugin
- `import type` enforced
- Alphabetical import ordering
- Curly braces always required
- 4 spaces indentation

## Architecture

- Controllers: `App\Http\Controllers`
- Models: `App\Models` (must extend `Illuminate\Database\Eloquent\Model`)
- Tests: `tests/Architecture`, `tests/Feature`, `tests/Unit`
- Frontend: `resources/js` (pages, components, layouts, lib)

## Pre-commit Hooks

Husky + lint-staged runs automatically:
- `*.php` → Pint
- `*.{ts,tsx}` → ESLint + Prettier

## Database

PostgreSQL with credentials: `homestead` / `secret`

## Key Conventions

- Use Pest for tests, not PHPUnit
- Use Inertia for frontend-backend communication
- Use shadcn/ui components (resources/js/components/ui)
- Path alias: `@/*` → `resources/js/*`
