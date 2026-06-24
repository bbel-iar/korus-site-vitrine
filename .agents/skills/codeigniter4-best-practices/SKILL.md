---
name: codeigniter4-best-practices
description: CodeIgniter 4 implementation and review guidance for PHP applications. Use when Codex works on CodeIgniter 4 controllers, routes, models, views, filters, services, validation, security configuration, tests, or project structure, especially when applying official CI4 MVC, routing, app/public/writable layout, and OWASP-aligned security practices.
---

# CodeIgniter 4 Best Practices

## Core Workflow

1. Inspect the local CodeIgniter version, `composer.json`, `app/Config`, routes, and nearby code before changing behavior.
2. Preserve the framework layout: application code in `app/`, browser assets and `index.php` in `public/`, runtime output in `writable/`, tests in `tests/`, dependencies in `vendor/`.
3. Keep MVC boundaries explicit: controllers handle HTTP flow, models handle persistence and data rules, views stay presentational with little logic.
4. Prefer defined HTTP-verb routes in `app/Config/Routes.php`; avoid legacy auto-routing and broad any-verb routes for new work.
5. Validate and authorize at server side before persistence or privileged actions.
6. Run the narrowest useful checks, then broaden when routing, security, shared models, or cross-page behavior changes.

## Read References

Read `references/codeigniter4.md` when implementing or reviewing non-trivial CI4 behavior. It contains concise rules for structure, routing, controllers, models, views, services, security, and verification based on the official CodeIgniter 4 User Guide.

## Implementation Rules

- Use `App\` PSR-4 namespaces matching paths under `app/`.
- Keep controllers thin; move reusable business logic into services, libraries, domain classes, or models as appropriate.
- In controllers, use `$this->request`, `$this->response`, and explicit `ResponseInterface` responses when status, redirects, downloads, or JSON matter.
- Prefer `$this->validateData($data, $rules)` over `$this->validate()` in new code.
- In models extending `CodeIgniter\Model`, define `$table`, `$primaryKey`, `$allowedFields`, and return types intentionally.
- Never include primary keys, timestamps controlled by the model, role flags, or ownership fields in `$allowedFields` unless the use case is explicitly trusted.
- Escape output in native views with `esc()`; in Twig projects, rely on auto-escaping where configured and avoid marking user content raw.
- Use filters for authentication, authorization, CSRF/CORS/security headers, throttling, and other request pipeline concerns.
- Use `service()` mainly from controllers; pass dependencies into models and libraries by constructor or setter.
- Do not edit framework files in `vendor/codeigniter4/framework/system`; extend or configure instead.

## Verification

Use checks appropriate to the change:

- `php spark routes` after route or filter changes.
- `php spark filter:check` when filter matching is security-sensitive.
- `php spark config:check` and `php spark phpini:check` for configuration/security hardening work.
- `vendor/bin/phpunit -c phpunit.dist.xml` or focused PHPUnit tests for behavior changes.
- `php -l <file>` for quick syntax checks on edited PHP files when full tests are not practical.
