<?php

/**
 * Collections for Maspes Piante e Fiori.
 *
 * Routing notes:
 *   - `products` carries the catalog at `/catalogo` (list) and reserves
 *     `/catalogo/{slug}` for future product detail pages.
 *   - `su_misura` and `contatti` are list-only "single page" collections —
 *     their list_template renders the static page content; the `{slug}`
 *     route is never reached.
 *   - `pages` stays available for ancillary `/privacy` and `/nota-legale`
 *     content the shop can add later via the admin.
 *   - `contact` (form) backs the /su-misura request submission shape.
 */

return [

    'products' => [
        'label'          => 'Prodotti',
        'label_singular' => 'Prodotto',
        'icon'           => 'package',
        'route'          => '/catalogo/{slug}',
        'template'       => 'page.twig',
        'list_template'  => 'catalogo.twig',
        'order_by'       => 'updated_at DESC',
        'list_limit'     => 60,
        'fields' => [
            'title'    => ['type' => 'text', 'required' => true, 'label' => 'Nome'],
            'slug'     => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'category' => [
                'type'     => 'select',
                'required' => true,
                'label'    => 'Categoria',
                'options'  => ['rose', 'bouquet', 'piante', 'orchidee', 'composizioni'],
            ],
            'image'    => ['type' => 'url', 'required' => true, 'label' => 'Immagine', 'help' => 'URL da /admin/media.'],
            'summary'  => ['type' => 'text', 'required' => true, 'label' => 'Descrizione breve'],
            'price'    => ['type' => 'text', 'required' => true, 'label' => 'Prezzo', 'help' => 'Es. €84,00 oppure da €30,00 oppure su richiesta.'],
            'featured' => ['type' => 'boolean', 'label' => 'In evidenza'],
        ],
    ],

    'testimonials' => [
        'label'          => 'Testimonianze',
        'label_singular' => 'Testimonianza',
        'icon'           => 'message-square',
        'order_by'       => 'updated_at DESC',
        'fields' => [
            'title'    => ['type' => 'text', 'required' => true, 'label' => 'Autore'],
            'slug'     => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'quote'    => ['type' => 'textarea', 'required' => true, 'label' => 'Citazione'],
            'occasion' => ['type' => 'text', 'label' => 'Occasione', 'help' => 'Es. "Matrimonio, giugno 2023". Lascia vuoto se non noto.'],
            'order'    => ['type' => 'number', 'label' => 'Ordine'],
        ],
    ],

    'su_misura' => [
        'label'          => 'Su misura',
        'label_singular' => 'Pagina su misura',
        'icon'           => 'star',
        'route'          => '/su-misura/{slug}',
        'template'       => 'page.twig',
        'list_template'  => 'su-misura.twig',
        'fields' => [
            'title' => ['type' => 'text', 'required' => true, 'label' => 'Titolo'],
            'slug'  => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
        ],
    ],

    'contatti' => [
        'label'          => 'Contatti',
        'label_singular' => 'Pagina contatti',
        'icon'           => 'map-pin',
        'route'          => '/contatti/{slug}',
        'template'       => 'page.twig',
        'list_template'  => 'contatti.twig',
        'fields' => [
            'title' => ['type' => 'text', 'required' => true, 'label' => 'Titolo'],
            'slug'  => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
        ],
    ],

    'pages' => [
        'label'          => 'Pagine',
        'label_singular' => 'Pagina',
        'icon'           => 'file',
        'route'          => '/{slug}',
        'template'       => 'page.twig',
        'order_by'       => 'updated_at DESC',
        'fields' => [
            'title'            => ['type' => 'text', 'required' => true, 'label' => 'Titolo'],
            'slug'             => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'body'             => ['type' => 'markdown', 'label' => 'Corpo', 'help' => 'Markdown.'],
            'meta_description' => ['type' => 'textarea', 'label' => 'Meta description'],
        ],
    ],

    // /su-misura request form. Posts to /forms/contact when the Formspree
    // endpoint is left as REPLACE_ME — see su-misura.twig for the swap-in note.
    'contact' => [
        'label'          => 'Richieste su misura',
        'label_singular' => 'Richiesta',
        'is_form'        => true,
        'fields' => [
            'nome'            => ['type' => 'text',     'required' => true, 'label' => 'Nome'],
            'telefono'        => ['type' => 'text',     'required' => true, 'label' => 'Telefono'],
            'email'           => ['type' => 'text',     'required' => true, 'label' => 'Email'],
            'occasione'       => [
                'type'     => 'select',
                'required' => true,
                'label'    => 'Occasione',
                'options'  => ['matrimonio', 'evento', 'funerale', 'altro'],
            ],
            'data_desiderata' => ['type' => 'datetime', 'label' => 'Data desiderata'],
            'budget'          => ['type' => 'text',     'label' => 'Budget indicativo'],
            'messaggio'       => ['type' => 'textarea', 'required' => true, 'label' => 'Messaggio'],
        ],
    ],

];
