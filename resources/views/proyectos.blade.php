@extends('layouts.app')
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&amp;display=swap"
    rel="stylesheet" />
<link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
<link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "outline": "#72787f",
                    "surface-variant": "#e2e2e8",
                    "on-surface": "#1a1c20",
                    "on-tertiary": "#ffffff",
                    "error-container": "#ffdad6",
                    "on-error": "#ffffff",
                    "on-tertiary-container": "#afadad",
                    "error": "#ba1a1a",
                    "on-primary-container": "#81b2de",
                    "surface-container-lowest": "#ffffff",
                    "primary-fixed": "#cce5ff",
                    "on-tertiary-fixed": "#1c1b1b",
                    "secondary-fixed-dim": "#ffb787",
                    "tertiary-fixed": "#e5e2e1",
                    "on-secondary-fixed": "#311300",
                    "secondary": "#964900",
                    "tertiary-container": "#424141",
                    "surface-dim": "#d9d9df",
                    "surface-container-low": "#f3f3f9",
                    "surface-container": "#eeedf3",
                    "outline-variant": "#c1c7cf",
                    "tertiary": "#2b2b2b",
                    "secondary-container": "#edb900",
                    "inverse-surface": "#2f3035",
                    "surface-container-high": "#e8e8ee",
                    "on-surface-variant": "#41474e",
                    "surface-container-highest": "#e2e2e8",
                    "on-background": "#1a1c20",
                    "on-primary-fixed-variant": "#0c4b71",
                    "surface": "#f9f9ff",
                    "on-primary-fixed": "#001d31",
                    "on-error-container": "#93000a",
                    "primary-fixed-dim": "#9accf8",
                    "on-tertiary-fixed-variant": "#474746",
                    "on-secondary": "#ffffff",
                    "inverse-on-surface": "#f0f0f6",
                    "on-primary": "#ffffff",
                    "secondary-fixed": "#ffdcc7",
                    "primary-container": "#1b2654",
                    "tertiary-fixed-dim": "#c8c6c5",
                    "surface-tint": "#2e638a",
                    "primary": "#002e49",
                    "background": "#f9f9ff",
                    "inverse-primary": "#9accf8",
                    "surface-bright": "#f9f9ff",
                    "on-secondary-fixed-variant": "#723600",
                    "on-secondary-container": "#5e2b00"
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
    body {
        font-family: 'Hanken Grotesk', sans-serif;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    .project-card:hover .project-overlay {
        opacity: 1;
        transform: translateY(0);
    }

    .filter-btn.active {
        background-color: #002e49;
        color: white;
    }

    .py-stack-md {
        padding-top: 64px;
        padding-bottom: 64px;
    }

    .gap-gutter {
        gap: 32px !important;
    }

    .max-w-container-max {
        max-width: 1280px;
    }
</style>
@section('content')

<div class="flex-grow">
    <!-- Hero Section -->
    <section class="py-xxl bg-surface-container-low">
        <div class="max-w-max-width mx-auto px-margin-desktop">
            <div class="max-w-3xl">
                <h1 class="font-headline-lg text-headline-lg text-primary mb-md">Portafolio de Proyectos</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    Explora nuestra trayectoria técnica en ingeniería civil, geotecnia y servicios especializados de
                    laboratorio a nivel nacional.
                </p>
            </div>
        </div>
    </section>
    <!-- Filters Section -->
    <section class="py-lg border-b border-outline-variant bg-surface sticky top-20 z-40">
        <div class="max-w-max-width mx-auto px-margin-desktop">
            <div class="flex flex-wrap items-center gap-md">

                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest mr-sm">
                    Filtrar por:
                </span>

                <a href="{{ route('proyectos') }}"
                class="filter-btn px-lg py-xs border rounded-full
                {{ empty(request('taxonomy')) ? 'active' : '' }}">
                    Todos
                </a>

                <a href="{{ route('proyectos',['taxonomy'=>'Geotecnia']) }}"
                class="filter-btn px-lg py-xs border rounded-full
                {{ request('taxonomy') == 'Geotecnia' ? 'active' : '' }}">
                    Geotecnia
                </a>

                <a href="{{ route('proyectos',['taxonomy'=>'Laboratorio']) }}"
                class="filter-btn px-lg py-xs border rounded-full
                {{ request('taxonomy') == 'Laboratorio' ? 'active' : '' }}">
                    Laboratorio
                </a>

                <a href="{{ route('proyectos',['taxonomy'=>'Calibración']) }}"
                class="filter-btn px-lg py-xs border rounded-full
                {{ request('taxonomy') == 'Calibración' ? 'active' : '' }}">
                    Calibración
                </a>

            </div>
        </div>
    </section>
    <!-- Projects Grid -->
    <section class="py-xxl">
        <div class="max-w-max-width mx-auto px-margin-desktop">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-xl">
                @foreach($projects as $project)
                <div
                    class="project-card relative group overflow-hidden bg-surface border border-outline-variant h-[450px]">
                    <div class="h-full w-full overflow-hidden">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 scale-105 group-hover:scale-100"
                            data-alt="A large-scale industrial construction site featuring heavy machinery and deep excavation for foundation work. The scene is captured in clear daylight with a focus on engineering precision and structural steel. The color palette is dominated by cool blues and metallic grays, reflecting a professional and reliable technical environment."
                            src="{{asset('storage/' . $project->imagen)}}" />
                    </div>
                    <div
                        class="absolute bottom-0 left-0 right-0 p-lg bg-surface/90 backdrop-blur-sm border-t border-outline-variant">
                        <div class="flex justify-between items-start mb-xs">
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase tracking-tighter">Geotecnia</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">{{$project->anio}}</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-xs">{{$project->nombre}}</h3>
                        <div class="flex items-center gap-xs text-on-surface-variant">
                            <span class="material-symbols-outlined text-[18px]">location_on</span>
                            <span class="font-body-sm text-body-sm">{{$project->ubicacion}}</span>
                        </div>
                    </div>
                    <!-- Hover Overlay -->
                    <div
                        class="project-overlay absolute inset-0 bg-primary/95 flex flex-col justify-center p-xl opacity-0 translate-y-4 transition-all duration-500 ease-out">
                        <h4 class="text-white font-headline-sm text-headline-sm mb-md">Detalles Técnicos</h4>
                        <p class="text-white/80 font-body-md text-body-md mb-lg">
                            {{$project->descripcion}}
                        </p>
                        <a href="{{route('detalle-proyecto')}}"
                            class="border border-secondary-fixed text-secondary-fixed self-start px-lg py-sm rounded-lg font-label-md text-label-md hover:bg-secondary-fixed hover:text-primary transition-colors">
                            Ver Expediente
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="py-xxl bg-primary text-on-primary">
        <div class="max-w-max-width mx-auto px-margin-desktop text-center">
            <h2 class="font-headline-lg text-headline-lg mb-md">¿Necesita soporte técnico para su próximo gran
                proyecto?</h2>
            <p class="font-body-lg text-body-lg text-primary-fixed mb-xl max-w-2xl mx-auto">
                Contamos con la tecnología y la experiencia necesarias para garantizar la integridad estructural de
                sus obras.
            </p>
            <div class="flex flex-col sm:flex-row gap-md justify-center">
                <a href="{{route('contactanos')}}"
                    class="bg-secondary-container text-on-secondary-container px-xl py-md rounded-lg font-label-md text-label-md uppercase tracking-widest hover:opacity-90 transition-opacity">
                    Contactar un Especialista
                </a>

                @php
                    $brochure = json_decode($company->brochure, true);
                    $urlBrochure = !empty($brochure)
                        ? asset('storage/' . str_replace('\\', '/', $brochure[0]['download_link']))
                        : null;
                @endphp

                @if($urlBrochure)
                    <a href="{{ $urlBrochure }}"
                    download
                    class="border border-white/30 text-white px-xl py-md rounded-lg font-label-md text-label-md uppercase tracking-widest hover:bg-white/10 transition-colors">
                        Descargar Brochure
                    </a>
                @endif
            </div>
        </div>
    </section>
</div>


<script>
    // Simple filter interaction logic
    const filterBtns = document.querySelectorAll('.filter-btn');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Add a small bounce/transition effect to the grid on filter
            const grid = document.querySelector('.grid');
            grid.style.opacity = '0.5';
            setTimeout(() => {
                grid.style.opacity = '1';
            }, 150);
        });
    });

    // Sticky Header Transparency Effect
    // window.addEventListener('scroll', () => {
    //     const header = document.querySelector('header');
    //     if (window.scrollY > 20) {
    //         header.classList.add('shadow-md');
    //         header.classList.add('bg-surface/95');
    //         header.classList.add('backdrop-blur-md');
    //     } else {
    //         header.classList.remove('shadow-md');
    //         header.classList.remove('bg-surface/95');
    //         header.classList.remove('backdrop-blur-md');
    //     }
    // });
</script>
@endsection