## Direction

**Heritage bottega editorial — cream paper, slow serifs, one good photograph per band.** The site should feel like the printed catalogue of an old Italian apothecary or florist that happens to also take phone orders: generous cream space, a Fraunces display set large and slightly italic in places, photographs treated as objects (full-bleed, no rounded corners, no shadows, no filters) and a single rosa-antica accent used sparingly enough that it actually means something. Touchstones: **Officine Universelle Buly 1803** for the "heritage shop with a date in the name" typographic posture and apothecary-label restraint; **Aesop** for product-grid quietness, hairline rules, and the discipline of never overdesigning; **Apartamento magazine** for the warm, slightly imperfect Italian editorial feel — paper grain, asymmetric columns, captions that look typeset rather than UI'd. Explicitly *not* "modern florist startup," not Mailchimp-pastel, not Squarespace-luxe.

## Type scale

Fraunces (display/headings) — weights 300, 400, 500; italic enabled at all three; optical size axis tuned high (90+) at display sizes. Inter (body/UI) — weights 400, 500, 600. Modular scale 1.25 from a 1.0625rem (17px) body base.

- **Display**: `4.5rem / 1.04 / 400` — Fraunces, optical-size 144, normal or soft italic; only used once per page (hero h1). On mobile collapses to `2.75rem / 1.08 / 400`.
- **H1**: `3rem / 1.08 / 400` — Fraunces, optical-size 96. Mobile `2.125rem`.
- **H2**: `2.125rem / 1.15 / 400` — Fraunces, optical-size 36. Mobile `1.625rem`.
- **H3**: `1.375rem / 1.3 / 500` — Fraunces, optical-size 18.
- **Body**: `1.0625rem / 1.62 / 400` — Inter. Long-form blocks max 62ch.
- **Small / meta**: `0.8125rem / 1.45 / 500` — Inter, letter-spacing `0.08em`, uppercase. Used for eyebrows, labels, opening-hours rows, footer column titles.

Numerals: Inter tabular-nums for prices, hours, phone. Fraunces oldstyle figures in body. The "1954" mark uses Fraunces 300 italic at H2 size whenever it appears in body copy.

## Spacing & rhythm

- **Container max-width**: 1240px content; 1440px for full-bleed image bands; gutters bleed beyond on Catalogo grid only.
- **Section vertical padding**: small `4rem` (64px) / large `8rem` (128px). Mobile small `3rem` / large `5rem`.
- **Grid gutters**: 24px desktop, 16px mobile. Catalog grid uses a wider 32px gutter to let cards breathe.
- **Baseline grid**: no strict baseline grid — use an 8px spacing scale (4, 8, 12, 16, 24, 32, 48, 64, 96, 128) and let Fraunces leading float naturally. Inter line-height locks to multiples of 4px.

## Components

- **Header / nav** — 80px tall, transparent over hero (white text), solid `#F6F1E7` (Calce) with a 1px `#A39A8B` 20%-opacity bottom hairline after 80px scroll. Layout: logotype left ("Maspes" Fraunces 400 24px + "Piante e Fiori" Inter 500 small caps below), nav center on desktop (Catalogo · Su misura · Contatti, Inter 500, 0.875rem), phone + "Ordina ora" right. Mobile (<900px): logotype left, hamburger right; menu drops a full-screen Calce panel with nav links set in Fraunces H2 stacked and the phone number as a tap-target chip at the bottom.
- **Hero** — full-bleed photograph, ~78vh on desktop / 90vh on mobile, no carousel ever. Text overlays bottom-left in a single column max 540px: small uppercase eyebrow "Fioraio in Como dal 1954", Display headline in Fraunces, body subhead 17px, two stacked CTAs (primary + tel link). 30% black-to-transparent linear gradient anchored bottom-left only — never a flat tint over the whole image. The image must always feature one resolved subject (roses in paper, the shopfront door); no abstract texture heros.
- **Standard content section** — title + body + media. Default layout is asymmetric two-column: title in left column (4/12), body + media right column (7/12, offset by 1). Alternate sides per section so the page reads like a printed spread, not a stack of identical bands. Headings get an optional rosa-antica hairline 24px wide sitting 16px above them as a decorative cue (reuse, don't overuse — Home gets 2–3 max).
- **Card** (catalog + categories + testimonials) — 4:5 image on top, no rounded corners, no border, no shadow. Below image: category eyebrow (small caps tracked), product name (Fraunces 400 1.25rem), one-line description (Inter 400 0.9375rem, Salvia color), price (Inter 600 tabular, Inchiostro), CTA as a text link with serif underline ("Chiama per ordinare →"). On hover: image scales 1.02 over 400ms ease-out, underline thickens from 1px to 2px. Testimonial card variant: no image, large Fraunces 300 italic opening quote glyph, body in Fraunces 400 1.125rem italic, attribution in Inter small-caps below a 24px hairline.
- **Footer** — three-band on Calce surface darkened to `#EDE6D5`. Top band (large): shop name + "Fioraio a Como dal 1954." set in Fraunces Display-small (2.25rem) across the full width as an editorial sign-off. Middle band: four columns (Indirizzo + map link · Contatti · Orari · Seguici / Instagram). Bottom band: legal hairline row with P.IVA, ragione sociale, PEC, privacy + nota-legale links, all in tracked uppercase Small at 0.75rem, Salvia color. Dense but airy — 96px top padding, 48px bottom.
- **Buttons**
  - *Primary*: solid Bosco `#2E5339`, Calce text, no border-radius (or 2px max), 14px 28px padding, Inter 600 0.9375rem tracked 0.04em. Hover: background shifts to `#24412D`, no movement. Focus: 2px Rosa Antica outline offset 3px.
  - *Secondary / tel link*: transparent, 1px Inchiostro border, Inchiostro text, same metrics. Hover: background Inchiostro, text Calce. On hero over photo, swaps to 1px Calce border, Calce text.
  - *Link*: Inchiostro, 1px underline at 4px offset, hover thickens to 2px and shifts to Rosa Antica. Inline links in body copy use the same treatment without the offset.
- **Forms** — no boxed inputs. Labels in tracked uppercase Small above the input, sat in their own row. Input is a bare field over a 1px Inchiostro bottom hairline, 56px tall, Inter 400 1rem, transparent background. Focus: hairline thickens to 2px and shifts to Bosco. Select and date inputs use the same hairline treatment with a custom chevron in Salvia. Submit button uses the primary spec. Field error: Rosa Antica hairline + small Rosa Antica copy below, no icons. Generous 32px vertical gap between fields — this is a considered request, not a checkout.

## Per-page layout

### Home (`/`)
1. **Hero band** — full-bleed photo (roses in paper on a worn marble surface, or shopfront at dusk), overlay text bottom-left, two stacked CTAs.
2. **Tre promesse** — three equal columns on Calce, no cards, no icons; each column is a Fraunces H3 + one Inter body line + an optional tiny rosa-antica rule above. Tight section, `4rem` padding.
3. **Cosa facciamo** — five category cards in a 5-col grid on desktop, 2-col on tablet, 1-col mobile. Each card is photograph-led using the catalog card spec. Rose card slightly larger (spans 2 cols on desktop) so the grid is intentionally asymmetric, not uniform.
4. **La nostra storia** — asymmetric two-col: left column holds a single black-and-white archival photograph (full-bleed within the column, no caption styling); right column holds the heritage block — Fraunces H2 "*Dal 1954*" with the year in italic, then 3–4 sentences of body. No CTA. This is the quiet section.
5. **Testimonianze** — three testimonial cards in a single row on desktop, stacked on mobile. Set on Calce; uses the testimonial card variant. No carousel — they sit there and the reader reads them.
6. **Occasioni speciali** — full-bleed photographic band (subdued, white funeral lilies or a wedding tablescape, dim). Overlay: centered Fraunces H1 "*Per i momenti che contano.*" + Inter body + single CTA "Richiedi un preventivo". This is the ONE centered-text band on the site.
7. **Visita la bottega** — two-col: left half static map image, right half address + hours + phone + "Indicazioni" link. No overlay, no fanciness. Closes the page like a printed back cover.

### Catalogo (`/catalogo`)
1. **Intro band** — left-aligned, 7-col width. Small eyebrow "Catalogo", Fraunces H1 over 2 lines, Inter body. No image. `8rem` top padding to let the page breathe.
2. **Category filter strip** — sticky under header after scroll. Pill-free tabs: text links separated by a hairline middle-dot, current state underlined in Bosco. Inter 500 0.9375rem tracked. Sits on Calce.
3. **Product grid** — 3-col desktop / 2-col tablet / 1-col mobile. 32px gutter, 64px row gap. Catalog card spec. Rose tier cards (6/9/12/24/100) share the same hero photo treatment but the quantity is set in Fraunces Display-small inline with the product name — a small typographic flourish that turns "12 rose rosse" into "*12* rose rosse" with the numeral italicized.
4. **Fascia CTA in fondo** — full-bleed Bosco band with Calce text, Fraunces H2 "*Non trovi quello che cerchi?*" centered, single CTA "Composizioni su misura →" linking to `/su-misura`.

### Su misura (`/su-misura`)
1. **Hero compatto** — half-height hero (~50vh), single photograph (a quiet, low-saturation arrangement), overlay text follows hero spec but smaller (H1 instead of Display).
2. **Tre ambiti** — three stacked editorial bands, alternating photo-left / photo-right / photo-left. Each band is asymmetric two-col, with the photograph taking 6 cols and the copy taking 5 cols with a 1-col offset. Headings (Matrimoni / Eventi e cerimonie / Funerali e cordoglio) in Fraunces H2, the body considered and quiet. Funerali band shifts to a muted, near-grayscale photograph so it reads tonally different from the wedding band.
3. **Come funziona** — three-step horizontal explainer on Calce. Each step is a number set in Fraunces Display-small (e.g. "*01*"), a Fraunces H3 label, and an Inter body line. Hairline between steps on desktop.
4. **Modulo di richiesta** — single-column form, max 640px, centered on the page. Form follows the form spec (hairline inputs, generous gaps). Above the form: small Fraunces H2 "*Raccontaci l'occasione.*"
5. **Alternativa diretta** — closing band on Bosco background, Calce text, single Inter sentence with the phone number as a Fraunces inline emphasis.

### Contatti (`/contatti`)
1. **Header band** — left-aligned, 8-col. Fraunces H1 "*Via Leone Leoni 2, Como.*" with "Dal 1954." in Fraunces 300 italic on a second line. No image.
2. **Tre colonne** — three equal columns on Calce, separated by full-height 1px Salvia hairlines. Each column has a tracked-uppercase Small label (Telefono / Email / Indirizzo) and the value set in Fraunces H3 — phone and email as tel/mailto links with the link-state underline. No icons.
3. **Orari completi** — two-column table on desktop (days left, hours right) inside a 7-col container. Each row separated by a 1px Salvia hairline at 50% opacity. Set in Inter tabular-nums; current day row gets a Rosa Antica left-edge marker (4px wide) — the only Rosa Antica on the page.
4. **Mappa** — full-bleed static map image, ~520px tall, with a small floating "Apri in Google Maps" pill anchored bottom-right (Calce background, Inchiostro text, 1px hairline border).
5. **Dati fiscali** — small block centered, all Inter Small tracked, Salvia color. Three lines: ragione sociale / P.IVA / PEC. Closes the page quietly.

## Imagery plan — THIS IS NOT OPTIONAL

The engineer must inspect `source/images/img-00.png`, `img-01.png`, `img-02.png` first and slot them where they actually fit (shopfront → heritage block; bouquet → hero or category card). For every slot below where they do not fit, fetch via `bash scripts/fetch-image.sh "<query>"`.

| Page | Slot | Treatment | Source | Search query (if photo) | Aspect |
|------|------|-----------|--------|-------------------------|--------|
| Home | Hero | Full-bleed photo, bottom-left text overlay, soft gradient | Photograph | `red roses wrapped brown paper bouquet dark moody still life` | 16:9 (78vh crop) |
| Home | Tre promesse | No imagery — typographic only | — | — | — |
| Home | Cosa facciamo — Rose card (large) | 4:5 photo, full-bleed in card | `source/images/img-00.png` if it shows roses; else Photograph | `red roses bunch close up natural light` | 4:5 |
| Home | Cosa facciamo — Bouquet card | 4:5 photo | Photograph | `mixed flower bouquet wildflowers cream paper wrap` | 4:5 |
| Home | Cosa facciamo — Piante card | 4:5 photo | Photograph | `potted houseplant terracotta pot italian shop window` | 4:5 |
| Home | Cosa facciamo — Orchidee card | 4:5 photo | Photograph | `white phalaenopsis orchid plant natural light` | 4:5 |
| Home | Cosa facciamo — Composizioni card | 4:5 photo | `source/images/img-01.png` if floral composition; else Photograph | `floral arrangement vase italian still life dim` | 4:5 |
| Home | La nostra storia | Full-bleed within left column, no caption | Photograph | `florist shop interior italy vintage black and white` | 3:4 |
| Home | Testimonianze | None — typographic cards | — | — | — |
| Home | Occasioni speciali — band | Full-bleed dim photo with centered overlay | Photograph | `white lily wedding floral arrangement low light moody` | 21:9 |
| Home | Visita la bottega | Static map image, left half | SVG illustration | Inline-drawn minimal map: thin Salvia roads on Calce background, a single Rosa Antica dot marking Via Leone Leoni 2, no Google-Maps look. Engineer hand-draws as SVG sized 600×520. | 1.15:1 |
| Catalogo | Intro band | None | — | — | — |
| Catalogo | Rose tier cards (×5) | 4:5 photos — vary tightly so all 5 don't look identical | Photograph (×5) | `single red rose stem dark background`, `three red roses still life`, `dozen red roses paper wrap`, `large bouquet red roses wrapped`, `enormous bouquet hundred red roses florist` | 4:5 each |
| Catalogo | Bouquet vivace card | 4:5 photo | `source/images/img-02.png` if a bouquet; else Photograph | `colorful mixed flower bouquet bright wildflowers` | 4:5 |
| Catalogo | Piante / Orchidee / Composizioni placeholder cards (~3–4 each) | 4:5 photos | Photograph | `potted green plant italian interior`, `orchid plant in pot`, `funeral floral wreath white flowers`, `centerpiece flower arrangement table` | 4:5 each |
| Catalogo | Bottom CTA band | None — solid Bosco | Color block | — | — |
| Su misura | Hero compatto | Half-height photo | Photograph | `white wedding flower bouquet hand held natural light` | 21:9 |
| Su misura | Matrimoni band | 6-col photo, photo left | Photograph | `bride wedding bouquet white roses peonies italian` | 4:3 |
| Su misura | Eventi band | 6-col photo, photo right | Photograph | `event table floral centerpiece dinner candlelight` | 4:3 |
| Su misura | Funerali band | 6-col photo, photo left, near-grayscale treatment | Photograph | `white funeral flower arrangement lilies cross subdued` | 4:3 |
| Su misura | Come funziona | None — typographic numerals | — | — | — |
| Su misura | Form / closing band | None | — | — | — |
| Contatti | Header band | None | — | — | — |
| Contatti | Tre colonne | None — type only | — | — | — |
| Contatti | Orari | None | — | — | — |
| Contatti | Mappa | Full-bleed static map | SVG illustration | Same hand-drawn map approach as Home "Visita la bottega," scaled to 1440×520 with slightly more street context (label "Via Leone Leoni" inline). Engineer draws inline; do NOT embed Google Maps iframe. | 21:8 |
| Contatti | Dati fiscali | None | — | — | — |
| Header | Logo lockup | Tiny — text only, no logomark | — | — | — |
| Footer | Sign-off band | None — typographic | — | — | — |

If a photograph from Wikimedia returns badly (watermarks, busy backgrounds, weddings shot in a generic ballroom), re-query with stronger qualifiers: add `italian`, `natural light`, `marble surface`, `linen`, `paper wrap`, `low key`. The goal is photographs that feel like they could appear in *Apartamento* — slightly imperfect, materially textured, never stock-cheerful.

## Motion

Very little. 200ms cross-fades on image hover and underline thickening; 400ms ease-out subtle image scale (1.0 → 1.02) on card hover, no translation. Page transitions: instant — no fades. No parallax. No scroll-jacking. No reveal-on-scroll animations except the hero photograph, which fades from 0 to 1 over 300ms on first paint. The catalog filter strip transitions sticky-shadow in over 150ms when it pins. Forms: hairline underline color shift on focus is the only "interaction animation." Respect `prefers-reduced-motion: reduce` — disable all of the above, leave the focus underline shift in.

## What NOT to do

- **No carousels, sliders, or auto-playing hero videos.** A 70-year heritage florist does not need motion to prove itself; a single decisive photograph carries the hero.
- **No center-aligned body paragraphs and no "Welcome to our shop" homepage walls of text.** Body copy lives in measured 62ch columns on the left. The single exception is the "Per i momenti che contano" band.
- **No generic stock photography of smiling people holding flowers, no "florist with apron" portraits, no rose petals scattered on a wooden table cliché.** If the image looks like it could sell yoga mats too, throw it out.
- **No rounded cards, drop shadows, gradient buttons, pastel pinks, or icon-set decoration on the category cards.** This site reads as printed matter; UI ornament breaks the spell.
- **No newsletter signup modal, no "Order before 2pm for same-day delivery!" sticky banner, no cookie banner styled like a sales pop-up.** The single CTA is "Ordina ora" / call. Trust comes from restraint, not urgency.
- **Do not repeat "Dal 1954" in every section.** It appears in the hero eyebrow, the heritage block heading, the contatti header, and the footer sign-off — four uses, no more. Repetition kills the line.
