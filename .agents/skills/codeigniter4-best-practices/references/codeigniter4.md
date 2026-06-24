# CodeIgniter 4 Reference

Source basis: official CodeIgniter 4 User Guide concepts and related pages:
`concepts/index.html`, `concepts/structure`, `concepts/mvc`, `concepts/services`, `concepts/security`, `incoming/controllers`, `incoming/routing`, `models/model`, `outgoing/views`.

## Structure

- Keep the web root pointed at `public/`; it contains `index.php`, `.htaccess`, and browser assets.
- Keep application code in `app/`; default folders include `Config`, `Controllers`, `Database`, `Filters`, `Helpers`, `Language`, `Libraries`, `Models`, `ThirdParty`, and `Views`.
- Keep runtime-writable files in `writable/`, including cache, logs, uploads, and other generated files.
- Keep tests in `tests/`; do not deploy tests to production.
- Treat `system` or `vendor/codeigniter4/framework/system` as framework-owned. Extend framework classes instead of modifying them.
- Change relocated directory paths in `app/Config/Paths.php`.

## MVC Boundaries

- Models manage application data and data-related business rules.
- Views display data and should contain little logic.
- Controllers coordinate request handling, authorization, validation, model calls, redirects, response formatting, and view rendering.
- Add domain or service classes when controllers or models start mixing unrelated responsibilities.

## Routing

- Define routes in `app/Config/Routes.php` with HTTP verb methods like `get()`, `post()`, `put()`, `delete()`, or `match()`.
- Prefer defined routes for professional applications; CodeIgniter 4 disables auto-routing by default since v4.2.0.
- Avoid Auto Routing Legacy in new work. It can expose controller methods via unexpected HTTP methods and bypass intended route filters or CSRF assumptions.
- Avoid `add()` and `map()` for new HTTP routes because they register any-verb routes. Use verb-specific methods for security and performance.
- Prefer `(:segment)` over `(:any)` unless multiple URI segments are explicitly intended. Do not place placeholders after `(:any)`.
- Group routes to apply common filters, namespace, hostname, subdomain, or prefix options.
- Name routes when links or redirects should survive future URL changes.
- Run `php spark routes` after changing routes. Use `php spark filter:check` when filter coverage must be exact.

## Controllers

- Extend `BaseController` unless there is a clear reason to extend `CodeIgniter\Controller` directly.
- Use `initController()` for controller initialization, and always call `parent::initController($request, $response, $logger)` when overriding it.
- Do not attempt `return redirect()` from constructors; constructors cannot return responses.
- Use `$this->request`, `$this->response`, and `$this->logger` instead of creating new request/response/logger instances.
- Declare non-action helper methods as `private` or `protected` so they cannot be routed.
- Use `forceHTTPS()` or global secure configuration where HTTPS enforcement belongs in the application.
- Prefer `$this->validateData()` for explicit data validation. Avoid `$this->validate()` in new code because it uses broader request data sources through `getVar()`.

## Models

- Store models in `app/Models` with `namespace App\Models`, unless a module or custom namespace is intentional.
- Use `model(FooModel::class)` or instantiate explicitly according to local project style.
- For `CodeIgniter\Model`, define at least `$table`, `$primaryKey`, `$allowedFields`, and an intentional `$returnType`.
- Use `$DBGroup` per model when it should connect to a non-default database group.
- Use `$useTimestamps`, `$dateFormat`, `$createdField`, `$updatedField`, and `$deletedField` consistently with the database schema.
- Use `$useSoftDeletes` when records must be restorable or auditable; ensure the deleted field is nullable.
- Keep `$allowedFields` as an allowlist for client-writable fields. Never include `$primaryKey`.
- Use model validation for persistence constraints, but do not process unvalidated user input before validation.
- Remember that update validation may validate only provided fields by default due to `$cleanValidationRules`.
- Use Query Builder through a model cautiously. Do not chain builder methods that return results before model CRUD methods expecting model events/return types.
- Use `chunk()` for large record processing to avoid memory pressure.

## Views

- Store views in `app/Views` or module `Views` directories.
- Load views from controllers or view routes, not directly from the browser.
- Pass data as arrays from controllers; avoid hidden dependencies on retained view data.
- Use subdirectories and reusable partials/components for headers, footers, cards, forms, and repeated sections.
- Escape native PHP view output with `esc()`. For Twig, keep auto-escaping enabled and avoid `|raw` for user-supplied content.
- Cache views only for content that is safe to reuse for the chosen duration and cache key.

## Services and Dependencies

- Use `service('name')` for shared framework services, especially from controllers.
- Use `single_service('name')` or service factories with `$getShared = false` when a fresh instance is required.
- Do not request services repeatedly with different options and expect new options to apply to an already shared instance.
- In models, libraries, and domain classes, prefer constructor or setter injection over creating services internally.
- Define custom services in `app/Config/Services.php` or namespaced `Config/Services.php` files that extend `CodeIgniter\Config\BaseService`.
- Ensure services expose stable interfaces when replacing framework or application implementations.

## Security

- Keep `public/` as the only web root so source code, `.env`, `writable/`, tests, and vendor files are not browser-accessible.
- Enforce access control server-side, deny by default for non-public resources, and verify record ownership in models or domain logic.
- Use validation, query bindings, Query Builder, and escaping instead of concatenating untrusted input into SQL, shell commands, HTML, URLs, or headers.
- Use CSRF protection for state-changing browser forms, and do not assume CSRF protects GET requests.
- Use filters for authentication, authorization, CORS, secure headers, throttling, and request constraints.
- Use `Config\App::$forceGlobalSecureRequests` or `force_https()` for HTTPS enforcement when appropriate.
- Keep secrets out of source control; use environment configuration.
- Prefer CodeIgniter Shield or a proven authentication/authorization layer instead of inventing authentication primitives.
- Use `log_message()` for security-relevant failures without leaking sensitive details to users.
- For outbound URLs or API consumption, validate schemes, hosts, ports, redirects, and response handling to reduce SSRF and unsafe API consumption risks.

## Testing and Checks

- Use PHPUnit for controller, model, route, and integration behavior.
- Extend `CodeIgniter\Test\CIUnitTestCase` when using CodeIgniter test utilities.
- Add regression tests for authorization, validation, route filters, model allowed fields, and edge-case request methods.
- Run `php spark routes` after route changes.
- Run `php spark filter:check` for security-sensitive filter changes.
- Run `php spark config:check` and `php spark phpini:check` for deployment/security configuration work.
