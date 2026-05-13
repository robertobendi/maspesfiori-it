# BUILD_BRIEF — what "done" means

You are building the public face of **robertobendi/maspesfiori-it** (modeled after https://maspesfiori.it/). Target: GitHub
Pages, served as a static export of this PebbleStack site.

## Hard requirements

1. **Single theme dir** — work inside `templates/theme/default/`. No new theme dirs.
2. **Inline CSS in layout.twig** — keep PebbleStack's pattern. Google Fonts via `<link>` in `<head>` for the typography from BRAND.md. Use the palette from BRAND.md and the type scale from DESIGN.md.
3. **No JavaScript frameworks**. Vanilla `<script>` only for tiny interactions (mobile menu). Site must render meaningfully with JS disabled.
4. **Discoverable nav** — every public page must be linked from header or footer. The crawler is link-driven; orphan pages won't export.
5. **Collections from PLAN.md** — implement in `config/collections.php`.
6. **No admin work** — never edit `templates/admin/`.
7. **Real content** — every page must have real, branded copy in BRAND.md's voice. No lorem ipsum. No "Coming soon".

## Imagery — REQUIRED, NOT OPTIONAL

Three sources, in priority:

### 1. Real photographs (Wikimedia Commons, no auth)

    bash scripts/fetch-image.sh "search query" [count] [dest_dir]

Examples — be specific and visual:

    bash scripts/fetch-image.sh "florist shop interior wood" 3 uploads/
    bash scripts/fetch-image.sh "rose bouquet pink white" 4 uploads/heroes

The script saves to `dest_dir` and prints paths. Reference as `/uploads/<name>`.
Generic queries return generic results. Include 2–3 modifiers (color, mood, material, setting).

### 2. source/images/

Anything pulled from the original site. Move into `uploads/`.

### 3. Inline SVG illustrations

For spot art, icons, decorative dividers.

### Hard rule

Every page must use REAL imagery somewhere — at minimum a hero image.
Color-block fallbacks are ONLY acceptable for small accent areas.

## Forms

Per PLAN.md's "Forms" decision. If Formspree placeholder, leave an HTML
comment next to the action telling the user to swap it.

## Build + verify command

Run the export with EXACTLY these credentials (Bismuth tracks them so the
user can log into the local admin later):

    ADMIN_EMAIL="admin@bismuth.local" \
    ADMIN_PASSWORD="bis-UvX8VUkaOd_vXx" \
    ADMIN_NAME="Admin" \
    SITE_NAME="Maspesfiori It" \
    bash scripts/export-static.sh

This boots `php -S`, runs the headless install with the creds above, and
mirrors the site to `docs/`. If it fails, fix the underlying issue (broken
template, dangling route, etc.) and re-run.

## QA pass — DO NOT SKIP

After `docs/index.html` exists, OPEN each `docs/*.html` file and audit:

1. **Contrast (WCAG AA)**
   - For every `<text>` / parent `background` pair, check the contrast ratio.
     Body text ≥ 4.5:1, large headings ≥ 3:1.
   - Look for "color-on-color" issues: button text matching the button bg,
     link color too close to body bg, muted text disappearing into surface.
   - Hover/focus states should remain legible.

2. **Spacing consistency**
   - Section vertical padding should match DESIGN.md's "Spacing & rhythm".
   - No section that's cramped vs others.
   - No collapsed margins between adjacent blocks (check `+`-selector
     adjacent siblings).
   - Mobile widths: nothing overflowing horizontally, body text not glued
     to the edges (≥ 16px gutter).

3. **Imagery present**
   - Every page has at least one real image. If not, fetch one and add it.

4. **Hierarchy**
   - One H1 per page (page title).
   - H2 used for sections, H3 within.
   - Type sizes follow DESIGN.md's scale — no orphan font sizes.

For each issue found, EDIT the relevant template, re-run the export, and
re-audit. Loop until the audit is clean.

Only declare done when the audit produces no findings.

## Tone

Use BRAND.md's voice. Don't invent features the source didn't have — write
copy that is recognizably about this business, but better written. The
"Hard facts to preserve" list in ANALYSIS.md is non-negotiable.
