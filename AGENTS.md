# Repository Guidelines

## Project Structure & Module Organization
- Root: static HTML pages (e.g., `index.html`, `company.html`).
- Assets: `assets/` contains `css/`, `js/`, `images/`, `animation/`, and `js/vendor/` for third‑party bundles.
- Templates: `templates/` for partials or future templating.
- WordPress: `wordpress-theme/cypress-wptheme/` holds a theme mirroring the site.
- Config/Tools: `bs-config.js` (BrowserSync), `sitemap-generator.js`, `update-cdn-to-local.js`.

## Build, Test, and Development Commands
- Install: `npm install` (Node 18+ recommended).
- Dev server: `npm run dev` — serves from the repo root via BrowserSync on `http://localhost:3000` (see `bs-config.js`).
- Sitemap: `npm run sitemap` — scans `.html` files and writes `sitemap.xml` in the project root.
- CDN → local scripts: `node update-cdn-to-local.js` — replaces known CDN script tags with files in `assets/js/vendor/`.

## Coding Style & Naming Conventions
- Indentation: 4 spaces for HTML/CSS/JS; keep lines readable and consistent with existing files.
- JavaScript: ES2015+ syntax, semicolons required; organize code into small modules under `assets/js/`.
- CSS/Class names: Prefer BEM‑style blocks/elements/modifiers (e.g., `l-header__logo`, `c-icon__arrow`).
- Third‑party: Place minified vendor files in `assets/js/vendor/`; reference with relative paths.

## Testing Guidelines
- Manual checks: run `npm run dev`, verify pages render without console errors, animations (GSAP/Lottie) run, and responsive behavior works.
- Visual/UI: include before/after screenshots for layout/UI changes.
- Generated files: after adding or renaming pages, run `npm run sitemap` and verify `sitemap.xml` includes expected URLs.

## Commit & Pull Request Guidelines
- Commits: write clear, descriptive messages (e.g., `feat: add recruit hero animation`, `fix: modal pinch-zoom on iOS`).
- Scope: group related changes; avoid unrelated file churn and large binary diffs.
- PRs must include: summary of changes, testing steps (`npm run dev`), affected pages, screenshots for UI, and any follow‑ups (e.g., regenerate sitemap, vendor updates).

## Security & Configuration Tips
- Do not introduce secrets into the repo. Keep environment‑specific config out of source.
- Prefer local vendor bundles over CDNs for offline/consistent builds; update via `assets/js/vendor/` and the helper script.
- Large media: optimize images/animations under `assets/` to keep page weight reasonable.

