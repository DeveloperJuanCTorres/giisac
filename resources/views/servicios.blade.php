@extends('layouts.app')
<!-- Material Symbols -->
<link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
<!-- Google Fonts: Hanken Grotesk -->
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&amp;display=swap"
    rel="stylesheet" />
<link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "surface-bright": "#f9f9ff",
                    "on-tertiary-container": "#afadad",
                    "inverse-on-surface": "#f0f0f6",
                    "error": "#ba1a1a",
                    "surface-container-low": "#f3f3f9",
                    "outline": "#72787f",
                    "on-tertiary-fixed": "#1c1b1b",
                    "on-error": "#ffffff",
                    "surface-container-high": "#e8e8ee",
                    "surface-variant": "#e2e2e8",
                    "on-secondary": "#ffffff",
                    "surface": "#f9f9ff",
                    "surface-container-lowest": "#ffffff",
                    "on-primary-container": "#81b2de",
                    "on-error-container": "#93000a",
                    "outline-variant": "#d5d5db",
                    "secondary": "#edb900",
                    "primary-container": "#1b2654",
                    "secondary-container": "#edb900",
                    "on-secondary-container": "#5e2b00",
                    "inverse-primary": "#9accf8",
                    "on-tertiary": "#ffffff",
                    "tertiary-container": "#424141",
                    "inverse-surface": "#2f3035",
                    "surface-tint": "#2e638a",
                    "error-container": "#ffdad6",
                    "on-primary-fixed-variant": "#0c4b71",
                    "primary-fixed": "#cce5ff",
                    "primary": "#1b2654",
                    "surface-container": "#eeedf3",
                    "primary-fixed-dim": "#9accf8",
                    "tertiary-fixed-dim": "#c8c6c5",
                    "tertiary": "#2b2b2b",
                    "surface-dim": "#d9d9df",
                    "on-surface": "#1a1c20",
                    "on-surface-variant": "#41474e",
                    "background": "#f9f9ff",
                    "tertiary-fixed": "#e5e2e1",
                    "on-background": "#1a1c20",
                    "secondary-fixed": "#ffdcc7",
                    "on-primary-fixed": "#001d31",
                    "on-secondary-fixed": "#311300",
                    "on-tertiary-fixed-variant": "#474746",
                    "on-secondary-fixed-variant": "#723600",
                    "surface-container-highest": "#e2e2e8",
                    "on-primary": "#ffffff",
                    "secondary-fixed-dim": "#ffb787"
                },
                "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
                },
                "spacing": {
                    "xl": "32px",
                    "gutter": "16px",
                    "xs": "4px",
                    "sm": "8px",
                    "lg": "24px",
                    "margin-desktop": "32px",
                    "space-unit": "4px",
                    "max-width": "1280px",
                    "xxl": "48px",
                    "md": "16px",
                    "margin-mobile": "16px"
                },
                "fontFamily": {
                    "body-md": ["Hanken Grotesk"],
                    "headline-lg": ["Hanken Grotesk"],
                    "body-sm": ["Hanken Grotesk"],
                    "headline-sm": ["Hanken Grotesk"],
                    "body-lg": ["Hanken Grotesk"],
                    "label-md": ["Hanken Grotesk"],
                    "headline-lg-mobile": ["Hanken Grotesk"],
                    "label-sm": ["Hanken Grotesk"],
                    "headline-md": ["Hanken Grotesk"]
                },
                "fontSize": {
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "letterSpacing": "0",
                        "fontWeight": "400"
                    }],
                    "headline-lg": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "600"
                    }],
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "letterSpacing": "0",
                        "fontWeight": "400"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
                        "letterSpacing": "0",
                        "fontWeight": "600"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "letterSpacing": "0",
                        "fontWeight": "400"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "16px",
                        "letterSpacing": "0.05em",
                        "fontWeight": "600"
                    }],
                    "headline-lg-mobile": ["24px", {
                        "lineHeight": "32px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "letterSpacing": "0.05em",
                        "fontWeight": "600"
                    }],
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }]
                }
            },
        },
    }
</script>
<style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        vertical-align: middle;
    }

    body {
        font-family: 'Hanken Grotesk', sans-serif;
    }

    .bento-grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 16px;
    }

    .service-card {
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-4px);
        box-shadow: 0px 4px 20px rgba(0, 69, 107, 0.08);
    }
</style>
@section('content')

<div class="w-full max-w-max-width mx-auto px-margin-desktop py-xxl">
    <!-- Hero Section -->
    <section class="mb-xxl text-left border-l-4 border-secondary pl-lg">
        <h1 class="font-headline-lg text-headline-lg text-primary mb-sm md:text-5xl">Soluciones de Ingeniería y
            Laboratorio</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
            Excelencia técnica y precisión normativa para el desarrollo de infraestructuras sostenibles y seguras.
        </p>
    </section>
    <!-- Services Bento Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
        <!-- Service 1: Ingeniería -->
        <article class="service-card bg-surface border border-outline-variant p-lg flex flex-col gap-md h-full">
            <div class="aspect-video w-full overflow-hidden bg-surface-container-high mb-md">
                <img alt="Ingeniería de Suelos" class="w-full h-full object-cover"
                    data-alt="A professional engineer in a white hard hat examining a geological soil sample at a bright, sunlit construction site. The scene is captured in a clean, technical photography style with sharp focus on the soil layers and high-contrast blue and white tones. The atmosphere is industrious and precise, reflecting high-end engineering standards and modern light-mode aesthetics."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDigFvUQsE4ID0TJC6VhB1WKobKoIGmcdf5DG8EEJzr5hJh2FE_oR-zx6GyyWpZ39ygLpsclqDAZ692Dui3BGMZtLYqueG4uIOxVlG0phh2QqLnjh2m7bMc7EL3H00krJyQfVxGUHEZhgX2ur68y1NhYPatwYgjmlOQwyCPYhZSuMIrIEhBYYkGxuwxm-hxfhmsaeVUXhzUQQJVBxQg_VOeWAdWYS_l4FHXNhfTagxZ1tlVmnBCA2erPrSBSrBBebm6__yn_U0cGst7" />
            </div>
            <div class="flex items-center gap-sm text-primary">
                <span class="material-symbols-outlined" data-icon="architecture">architecture</span>
                <h2 class="font-headline-sm text-headline-sm uppercase tracking-tight">Ingeniería (Estudio de
                    Suelos)</h2>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant">
                Desarrollamos investigaciones geotécnicas rigurosas para determinar las propiedades mecánicas del
                terreno, garantizando la estabilidad de cualquier estructura civil.
            </p>
            <div class="flex-grow">
                <h3 class="font-label-md text-label-md text-primary mb-xs uppercase">Alcances Técnicos:</h3>
                <ul class="space-y-xs">
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        Perforaciones diamantinas y calicatas a cielo abierto.
                    </li>
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        Ensayos de penetración estándar (SPT) y capacidad portante.
                    </li>
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        Análisis de asentamientos y estabilidad de taludes.
                    </li>
                </ul>
            </div>
            <button
                class="mt-md bg-secondary text-primary font-bold py-sm px-lg rounded hover:opacity-90 transition-all font-label-md text-label-md w-full md:w-fit">
                Cotizar Servicio
            </button>
        </article>
        <!-- Service 2: Laboratorio -->
        <article class="service-card bg-surface border border-outline-variant p-lg flex flex-col gap-md h-full">
            <div class="aspect-video w-full overflow-hidden bg-surface-container-high mb-md">
                <img alt="Laboratorio de Materiales" class="w-full h-full object-cover"
                    data-alt="A high-tech laboratory environment featuring sterile white surfaces and professional scientific equipment for testing materials. A technician in a lab coat is carefully handling a sample under bright, cool-toned clinical lighting. The composition is minimalist and organized, emphasizing technical accuracy and high-fidelity scientific research with subtle deep blue accents in the equipment."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0JUFdvPSm5VmbtQ0fqz2jvTstZoKf1o6kpELoFdVLXp8z-0KbB7fkyWf7mkgUQ8S_EGB3NKRvye4EqnSechSmmmSG6y3U_Tv82dUMKOdfQed2f80y9YSHxUGDlP0SKzE4Bc-YBpMYyIxtFklQVUHhabDPAe0sriEgKRrRrbFcbnd8KZw_G-Ynkn88GsqOkIv-HJOjuiw926KaDeSrHUFSNAG_YlhtqlremMK_9AC_LeyAxt5sbcJEFepqcz8-WI_QdjDgLZWvuiBx" />
            </div>
            <div class="flex items-center gap-sm text-primary">
                <span class="material-symbols-outlined" data-icon="biotech">biotech</span>
                <h2 class="font-headline-sm text-headline-sm uppercase tracking-tight">Laboratorio (Ensayos Físicos
                    y Químicos)</h2>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant">
                Ejecutamos ensayos normalizados bajo estándares internacionales (ASTM, NTP) para validar la calidad
                de agregados, concreto, suelos y pavimentos.
            </p>
            <div class="flex-grow">
                <h3 class="font-label-md text-label-md text-primary mb-xs uppercase">Alcances Técnicos:</h3>
                <ul class="space-y-xs">
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        Análisis granulométrico y límites de Atterberg.
                    </li>
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        Compresión de probetas de concreto y diseño de mezclas.
                    </li>
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        Contenido de sales, cloruros y sulfatos en suelos y agua.
                    </li>
                </ul>
            </div>
            <button
                class="mt-md bg-secondary text-primary font-bold py-sm px-lg rounded hover:opacity-90 transition-all font-label-md text-label-md w-full md:w-fit">
                Cotizar Servicio
            </button>
        </article>
        <!-- Service 3: Verificación -->
        <article class="service-card bg-surface border border-outline-variant p-lg flex flex-col gap-md h-full">
            <div class="aspect-video w-full overflow-hidden bg-surface-container-high mb-md">
                <img alt="Calibración de Equipos" class="w-full h-full object-cover"
                    data-alt="A macro shot of a precision measurement device being calibrated by a technician in a clean industrial workshop. The lighting is crisp and detailed, highlighting the mechanical components and digital displays. The aesthetic is professional and corporate-modern, utilizing a palette of silver, cool gray, and deep blue. The mood is one of rigorous quality control and reliability."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRzw9TOBrQNEyfV-hbaHNIk6clSTYRaWGEssrk1CzV490l0E_nxMwaZFTZPZyo9Famy6jHq20ol5SkXVajBRY6IRneOhC8SOgIdb93epW354t1bZ8ddnCs3sPShwLmC03uWoSuK1IdR0nGchrXkU-qK9qpQZLvOMrHpcfWQ5PXbjDCNFS4P9HnrHNLinoDAaDwfJICUXpdIx0lUyuZCgWIchNAf-cMFFFQegzt3xmrXVhD0bNouMwmcnSoQqboTHqVTAj_EPB6hCOG" />
            </div>
            <div class="flex items-center gap-sm text-primary">
                <span class="material-symbols-outlined"
                    data-icon="precision_manufacturing">precision_manufacturing</span>
                <h2 class="font-headline-sm text-headline-sm uppercase tracking-tight">Verificación de Equipos
                    (INACAL)</h2>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant">
                Servicios de calibración y verificación de instrumentos de medición para garantizar la trazabilidad
                y exactitud en sus procesos operativos.
            </p>
            <div class="flex-grow">
                <h3 class="font-label-md text-label-md text-primary mb-xs uppercase">Alcances Técnicos:</h3>
                <ul class="space-y-xs">
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        Calibración de balanzas, prensas y equipos de laboratorio.
                    </li>
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        Verificación bajo lineamientos de la normativa INACAL.
                    </li>
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        Emisión de certificados de trazabilidad metrológica.
                    </li>
                </ul>
            </div>
            <button
                class="mt-md bg-secondary text-primary font-bold py-sm px-lg rounded hover:opacity-90 transition-all font-label-md text-label-md w-full md:w-fit">
                Cotizar Servicio
            </button>
        </article>
        <!-- Service 4: Capacitaciones -->
        <article class="service-card bg-surface border border-outline-variant p-lg flex flex-col gap-md h-full">
            <div class="aspect-video w-full overflow-hidden bg-surface-container-high mb-md">
                <img alt="Capacitación Técnica" class="w-full h-full object-cover"
                    data-alt="A modern corporate training room where a group of engineers is engaged in a technical seminar. The room is bright with natural light and features minimalist white furniture. A large screen displays technical engineering diagrams in blue and orange. The atmosphere is collaborative, focused, and professional, perfectly reflecting a high-end corporate learning environment with clean architectural lines."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-vD-h8CgFkt_rfo8yrg7G0DQYn-rh8taXchtycat_TZnJG8i8jQjXfMcSPFcFrLuVTZj-yF8lSuPpcWnhyAhJy20CGbbVf3_wxfPTDJxd2Ll9Vy47QSXptrLTgWAPl_jss8AaVzFEc7dFlhFOWNcL6pWXmKbBc45en6iNeVb80whCBgtz4HLAFHBxb9e-c38Nyt2fr2JbckBLDvMVXNH6Lhp6rwZiXslgk1y5Li8CJOqFbnOznJM-zO8snHr0lfbhxh7yDDYPBEyz" />
            </div>
            <div class="flex items-center gap-sm text-primary">
                <span class="material-symbols-outlined" data-icon="school">school</span>
                <h2 class="font-headline-sm text-headline-sm uppercase tracking-tight">Capacitaciones Especializadas
                </h2>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant">
                Formación técnica de alto nivel para personal de ingeniería y laboratorio, enfocada en la aplicación
                práctica de normativas vigentes.
            </p>
            <div class="flex-grow">
                <h3 class="font-label-md text-label-md text-primary mb-xs uppercase">Alcances Técnicos:</h3>
                <ul class="space-y-xs">
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        Cursos en control de calidad de materiales de construcción.
                    </li>
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        Interpretación de estudios de mecánica de suelos.
                    </li>
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        Actualización en normativas E.030 y E.050 del RNE.
                    </li>
                </ul>
            </div>
            <button
                class="mt-md bg-secondary text-primary font-bold py-sm px-lg rounded hover:opacity-90 transition-all font-label-md text-label-md w-full md:w-fit">
                Cotizar Servicio
            </button>
        </article>
    </div>
</div>


<script>
    // Micro-interaction for buttons
    document.querySelectorAll('button').forEach(button => {
        button.addEventListener('mousedown', function() {
            this.style.opacity = '0.7';
        });
        button.addEventListener('mouseup', function() {
            this.style.opacity = '1';
        });
    });
</script>
@endsection