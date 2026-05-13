## Site map

- **Home** (`/`) — anchor the 1954 heritage + same-day Como delivery, surface the offering, route visitors to order or call — tap "Ordina ora" / call the shop
- **Catalogo** (`/catalogo`) — show the breadth of what Maspes actually makes (rose, bouquet, piante, orchidee, composizioni) beyond the rose-heavy Shopify grid — browse signature pieces and call/email to order
- **Su misura** (`/su-misura`) — convert high-value custom inquiries (matrimoni, funerali, eventi, grandi composizioni) tied to "Pagamento Personalizzato" — submit a tailored request form or phone the shop
- **Contatti** (`/contatti`) — give the shop a real, scannable contact surface (phone, email, hours, address, map) — call, write, or visit Via Leone Leoni

Heritage / "Chi siamo" content lives as a dedicated section on the Home page rather than its own URL — it is the spine of the brand, so it belongs on the page visitors actually land on.

## Navigation

- **Header nav**: Catalogo · Su misura · Contatti (logo lockup links to Home; the prominent phone number `031 27 11 36` and a "Ordina ora" button sit to the right of the nav)
- **Footer**: shop name + "Fioraio a Como dal 1954" tagline; address (Via Leone Leoni 2, 22100 Como); phone; email (`info@maspespiantefiori.it`); full opening hours; Instagram link [verify handle]; legal block with P.IVA, ragione sociale, PEC; secondary links to `/privacy` and `/nota-legale` (ancillary pages served via the `pages` collection, not part of the primary site map)

No blog. The brand is a neighborhood fiorista with a phone-first audience — there is no editorial cadence to support, and a stale blog would actively hurt the "still here, still working" signal we need.

## Page content briefs

### Home (`/`)
Must accomplish: in one screen, communicate "real florist in Como since 1954, we deliver today, here's how to order."
Sections in order:
1. **Hero** — full-width image of the shop or a signature arrangement (use `source/images/img-00.png` if it shows the shopfront or a bouquet; otherwise placeholder). Headline: *Fioraio a Como dal 1954, consegna in giornata.* Subhead from BRAND.md. Primary CTA "Ordina ora" → `/catalogo`; secondary CTA "Chiama 031 27 11 36" (tel link).
2. **Tre promesse** — three short tiles: "Consegna in giornata a Como e provincia", "Composizioni su misura per ogni occasione", "Dal 1954, una bottega di famiglia."
3. **Cosa facciamo** — four/five category cards (Rose, Bouquet, Piante, Orchidee, Composizioni) each linking to the relevant filter on `/catalogo`. Use `source/images/img-01.png` and `img-02.png` where they fit a category; placeholders for the rest.
4. **La nostra storia** — short heritage block (3–4 sentences) on the Maspes family, the shop on Via Leone Leoni, three generations of fioristi. Quiet, no marketing voice. Image of the shop or family if available, otherwise placeholder.
5. **Testimonianze** — three cards pulled from the `testimonials` collection (Jacopo Zuppati, Barbara Bertolini, Chiara Vincenzi).
6. **Occasioni speciali** — short band linking to `/su-misura` for matrimoni / eventi / funerali. CTA "Richiedi un preventivo".
7. **Visita la bottega** — address, hours, phone, small static map image (placeholder). CTA "Indicazioni" linking to a Google Maps URL.

### Catalogo (`/catalogo`)
Must accomplish: show the real range of the shop and route every interest to a phone call or email, since there is no working checkout on the static export.
Sections in order:
1. **Intro band** — one-line: *Le composizioni che facciamo ogni giorno in bottega. Per ordinare, chiamaci o scrivici — consegniamo a Como e provincia in giornata.*
2. **Category filter strip** — Tutti · Rose · Bouquet · Piante · Orchidee · Composizioni (anchor filters, not separate pages).
3. **Product grid** — cards from the `products` collection, each with image (url field), name, short description, indicative price ("da €X" or "su richiesta"), and a "Chiama per ordinare" / "Scrivici" CTA. Include the rose tiers (6/9/12/24/100), Bouquet vivace, and a handful of curated piante / orchidee / composizioni placeholders so the grid feels like a real shop, not a single-occasion gift page.
4. **Fascia CTA in fondo** — *Non trovi quello che cerchi?* → links to `/su-misura`.

### Su misura (`/su-misura`)
Must accomplish: capture wedding / funeral / event / large-composition inquiries with low friction, framed in the right tone for each occasion.
Sections in order:
1. **Hero compatto** — *Composizioni su misura per i momenti che contano.* Short intro acknowledging that matrimoni, eventi and funerali are different conversations — and that Maspes handles all three.
2. **Tre ambiti** — three blocks (Matrimoni, Eventi e cerimonie, Funerali e cordoglio), each 2–3 sentences in the warm/considered voice from BRAND.md. Imagery: placeholder for each — these need real photography from the shop.
3. **Come funziona** — 3-step explainer: 1) ci scrivi o ci chiami, 2) concordiamo composizioni e budget, 3) consegniamo nel giorno e nel luogo. Anchors trust without overselling.
4. **Modulo di richiesta** — contact form: nome, telefono, email, occasione (select: matrimonio / evento / funerale / altro), data desiderata (datetime), budget indicativo (text), messaggio (textarea). CTA: "Invia richiesta". Backed by Formspree placeholder (see Forms).
5. **Alternativa diretta** — *Preferisci sentirci subito? Chiama 031 27 11 36 — risponde il negozio negli orari di apertura.*

### Contatti (`/contatti`)
Must accomplish: make every contact path one tap away and remove any doubt that the shop is real and open.
Sections in order:
1. **Header band** — *Via Leone Leoni 2, Como. Dal 1954.*
2. **Tre colonne** — Telefono (031 27 11 36, tel link) · Email (`info@maspespiantefiori.it`, mailto) · Indirizzo (Via Leone Leoni 2, 22100 Como, with "Apri in Google Maps" link).
3. **Orari completi** — full weekly table from ANALYSIS.md (Lun–Dom).
4. **Mappa** — embedded static map image of the shop location (placeholder image — needs a real screenshot or static Mapbox tile).
5. **Dati fiscali** — small block: ragione sociale, P.IVA, PEC.

## Collections

### `pages` (default — kept)
- For ancillary pages: `/privacy`, `/nota-legale`, plus the four primary pages above if the template structure routes them as `pages` entries rather than dedicated templates. No new fields needed.

### `contact` (default — kept, expanded)
- The default `contact` form drives the `/su-misura` request form. Extend its fields to match the brief (see Forms).

### `products` (new)
- Why: the catalog page needs typed, repeatable entries so categories, prices, and CTAs render consistently. Building it from raw markdown would not scale past a handful.
- name: `products`
- label: `Prodotti`
- route: `/catalogo/{slug}` (individual product detail pages are optional — for the static rebuild they can be single-page anchors on `/catalogo` instead; keep the route reserved)
- template: `product.html`
- list_template: `catalogo.html`
- Fields:
  - `title` (text, required) — product name, e.g. "12 rose rosse"
  - `slug` (slug, required) — URL slug
  - `category` (select: rose, bouquet, piante, orchidee, composizioni, required) — filters the catalog grid
  - `image` (url, required) — main product photo (url field since PebbleStack has no image type)
  - `summary` (text, required) — one-line description shown on the card
  - `description` (markdown, optional) — longer copy for the detail view
  - `price` (text, required) — display string, e.g. "€84,00" or "da €30,00" or "su richiesta" (free-text avoids forcing numeric formatting on bespoke items)
  - `featured` (boolean, optional) — surfaces on the Home page "Cosa facciamo" band

### `testimonials` (new)
- Why: three testimonials exist on file (Jacopo Zuppati, Barbara Bertolini, Chiara Vincenzi) and they are the single strongest trust signal we are recovering from the old site. A typed collection makes them reusable on Home and easy to extend.
- name: `testimonials`
- label: `Testimonianze`
- route: none (rendered inline only)
- template: none
- list_template: partial included in `home.html`
- Fields:
  - `author` (text, required) — name as it should display
  - `quote` (textarea, required) — the testimonial body
  - `occasion` (text, optional) — short context, e.g. "Matrimonio, giugno 2023" — leave blank if unknown rather than inventing
  - `order` (number, optional) — display order

No `services`, `team_members`, or `case_studies` collection — the site does not have a roster of named staff, a service catalog distinct from products, or shippable case studies, and inventing those would feel inflated for a single-shop family business.

## Forms

**Formspree placeholder.** The `/su-misura` request form is the highest-value conversion path on the site (custom quotes for matrimoni / eventi / funerali) and a long-form mailto link would lose the structured fields (occasione, data, budget) that let the shop triage incoming requests. Set the form's `action` to `https://formspree.io/f/REPLACE_ME` with an HTML comment in the template:

```html
<!-- TODO: replace REPLACE_ME with the real Formspree form ID once the account is provisioned.
     Endpoint receives: nome, telefono, email, occasione, data_desiderata, budget, messaggio.
     Until then, the form will POST to a non-existent endpoint and fail — keep the "Chiama 031 27 11 36"
     fallback prominent directly beneath the submit button. -->
<form action="https://formspree.io/f/REPLACE_ME" method="POST">
```

The footer email address (`info@maspespiantefiori.it`) and phone number stay as `mailto:` and `tel:` links throughout the site, so visitors always have a working contact path even if the Formspree endpoint is not yet wired.
