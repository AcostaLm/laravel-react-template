# MOB - Laravel React Starter Kit

Proyecto basado en [Laravel React Starter Kit](https://laravel.com/docs/starter-kits) con herramientas de calidad de código configuradas.

## Stack

- **Backend:** Laravel 13, PHP 8.3, PostgreSQL
- **Frontend:** React 19, TypeScript, Tailwind CSS 4, Inertia 3
- **Build:** Vite, Bun
- **Testing:** Pest

## Requisitos

- PHP 8.3+
- PostgreSQL
- Composer
- Bun

## Instalación

```bash
composer setup
```

Esto ejecuta: dependencias PHP, key, migraciones, dependencias JS y build.

## Flujo de Desarrollo

### Herramientas de Calidad (PHP)

| Herramienta | Qué hace | Comando |
|-------------|----------|---------|
| **Pint** | Formateo de código PHP | `composer lint` |
| **Larastan** | Análisis estático nivel 8 | `composer static:check` |
| **Rector** | Refactorización automatizada | `composer rector:check` |
| **TLint** | Linting específico Laravel | `composer tlint:check` |

### Herramientas de Calidad (JS/TS)

| Herramienta | Qué hace | Comando |
|-------------|----------|---------|
| **ESLint** | Linting React + TypeScript | `bun run lint:check` |
| **Prettier** | Formateo de código | `bun run format:check` |
| **TypeScript** | Chequeo de tipos | `bun run types:check` |

### Comando Único (PHP)

```bash
composer test
```

Ejecuta en orden: Pint, PHPStan, tests de Pest.

### Comando Único (JS/TS)

```bash
bun run check
```

Ejecuta en orden: ESLint, Prettier, TypeScript.

### Comando Full Check

```bash
composer full-check
```

Ejecuta todas las herramientas de calidad: PHP + JS/TS + tests.

### Pre-commit Hooks

Se ejecutan automáticamente antes de cada commit:
- **PHP:** Pint (auto-fix)
- **JS/TS:** ESLint (auto-fix) + Prettier (auto-fix)

### Servidor de Desarrollo

```bash
composer dev
```

Ejecuta Vite + artisan serve en paralelo.

## Scripts Composer

```bash
composer lint            # Auto-fix con Pint
composer lint:check      # Pint solo lectura
composer static:check    # PHPStan
composer rector:check    # Rector dry-run
composer tlint:check     # TLint
composer test            # Lint + PHPStan + Pest
composer full-check      # PHP + JS/TS + tests
composer dev             # Servidor de desarrollo
```

## Scripts NPM/Bun

```bash
bun run check            # ESLint + Prettier + TypeScript (solo lectura)
bun run fix              # ESLint + Prettier auto-fix
bun run lint             # ESLint auto-fix
bun run lint:check       # ESLint solo lectura
bun run format           # Prettier auto-fix
bun run format:check     # Prettier solo lectura
bun run types:check      # TypeScript
bun run build            # Build para producción
bun run dev              # Servidor de desarrollo
```

## Estructura del Proyecto

```
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│   └── Providers/
├── .github/workflows/
│   └── ci.yml                # GitHub Actions CI
├── resources/js/
│   ├── components/
│   ├── layouts/
│   ├── pages/
│   └── lib/
├── routes/
├── tests/
│   ├── Architecture/
│   ├── Feature/
│   └── Unit/
├── phpstan.neon              # Config PHPStan
├── rector.php                # Config Rector
├── pint.json                 # Config Pint
├── .tlint.json               # Config TLint
├── eslint.config.js          # Config ESLint
├── .prettierrc               # Config Prettier
├── .editorconfig             # Config editor unificada
├── tsconfig.json             # Config TypeScript
└── package.json              # Config lint-staged
```

## CI/CD

GitHub Actions ejecuta automáticamente en cada push/PR a `main`:

**Job PHP:**
- Pint, PHPStan, TLint, Rector
- Tests con Pest + PostgreSQL

**Job Frontend:**
- ESLint, Prettier, TypeScript

## Git

Cada cambio de configuración se hace en commits separados:

```bash
git log --oneline
```

## Despliegue

```bash
composer install --no-dev
bun run build
php artisan migrate --force
```
