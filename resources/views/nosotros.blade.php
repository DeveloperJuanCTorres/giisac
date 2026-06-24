@extends('layouts.app')
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&amp;display=swap"
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
    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    body {
        font-family: 'Hanken Grotesk', sans-serif;
        background-color: #f9f9ff;
    }

    .bento-grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 16px;
    }

    .hero-mask {
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0% 100%);
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


<!-- Hero Section -->
<section class="relative h-[716px] min-h-[500px] flex items-center overflow-hidden bg-primary">
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover opacity-40 mix-blend-overlay"
            data-alt="A professional engineering team in high-visibility safety vests and white hard hats conducting soil testing at a large-scale construction site. The lighting is bright and natural, capturing a professional and technical atmosphere. The composition is clean and focused, reflecting a high-end corporate identity with a cool blue color palette and sharp details. The environment is vast and organized, symbolizing efficiency and technical mastery in the field."
            src="{{asset('storage/' . $nosotros->banner)}}" />
    </div>
    <div class="relative z-10 w-full max-w-max-width mx-auto px-margin-desktop">
        <div class="max-w-2xl">
            <span
                class="inline-block px-md py-xs bg-secondary-container text-on-secondary-container rounded-full font-label-sm text-label-sm mb-md">
                {{$nosotros->titulo}}</span>
            <h1 class="font-headline-lg text-white text-5xl md:text-7xl mb-lg leading-tight">{{$nosotros->nombre}}
            </h1>
            <p class="font-body-lg text-primary-fixed-dim max-w-lg">{{$nosotros->descripcion}}</p>
        </div>
    </div>
    <div class="absolute bottom-0 right-0 p-xl hidden md:block">
        <div class="border-l-2 border-secondary-fixed-dim pl-md py-sm">
            <p class="font-label-sm text-white/60 tracking-widest uppercase">Estándar GI SAC</p>
            <p class="font-headline-sm text-white">Precisión Sin Compromiso</p>
        </div>
    </div>
</section>
<!-- Historia y Valores Section -->
<section class="py-xxl bg-white">
    <div class="max-w-max-width mx-auto px-margin-desktop">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-xl items-center">
            <div class="md:col-span-5">
                <h2 class="font-headline-md text-headline-md text-primary mb-md">Excelencia desde el origen</h2>
                <div class="w-16 h-1 bg-secondary mb-lg"></div>
                <p class="font-body-md text-body-md text-on-surface-variant mb-md leading-relaxed">
                    {!! $nosotros->resenia !!}
                </p>
            </div>
            <div class="md:col-span-7 grid grid-cols-2 gap-md">
                <div
                    class="aspect-square bg-surface-container-low border border-outline-variant p-lg flex flex-col justify-end">
                    <span class="font-headline-lg text-primary text-5xl mb-sm">{{$nosotros->anios}}+</span>
                    <p class="font-label-md text-on-surface-variant">Años de Experiencia</p>
                </div>
                <div class="aspect-square bg-primary text-white p-lg flex flex-col justify-end">
                    <span class="font-headline-lg text-white text-5xl mb-sm">{{$nosotros->proyectos}}+</span>
                    <p class="font-label-md text-primary-fixed">Proyectos Exitosos</p>
                </div>
                <div
                    class="aspect-square bg-surface-container border border-outline-variant p-lg flex flex-col justify-end">
                    <span class="font-headline-lg text-primary text-5xl mb-sm">100%</span>
                    <p class="font-label-md text-on-surface-variant">Cumplimiento Normativo</p>
                </div>
                <div class="aspect-square bg-secondary-container p-lg flex flex-col justify-end">
                    <span class="font-headline-lg text-on-secondary-container text-5xl mb-sm">ISO</span>
                    <p class="font-label-md text-on-secondary-container">{{$nosotros->iso}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Misión y Visión Section (Bento Grid) -->
<section class="py-xxl bg-background">
    <div class="max-w-max-width mx-auto px-margin-desktop">
        <div class="text-center mb-xl">
            <h2 class="font-headline-md text-headline-md text-primary mb-sm">Nuestros Cimientos</h2>
            <p class="font-body-md text-on-surface-variant">La dirección estratégica que guía cada uno de
                nuestros ensayos y diseños.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
            <!-- Mission Card -->
            <div
                class="group bg-white border border-outline-variant p-xl hover:border-primary transition-all duration-300">
                <div
                    class="w-12 h-12 bg-surface-container rounded flex items-center justify-center mb-lg group-hover:bg-primary-container transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-primary-fixed"
                        data-icon="rocket_launch">rocket_launch</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm text-primary mb-md">Misión</h3>
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                    {!! $nosotros->mision !!}
                </p>
            </div>
            <!-- Vision Card -->
            <div
                class="group bg-white border border-outline-variant p-xl hover:border-primary transition-all duration-300">
                <div
                    class="w-12 h-12 bg-surface-container rounded flex items-center justify-center mb-lg group-hover:bg-primary-container transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-primary-fixed"
                        data-icon="visibility">visibility</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm text-primary mb-md">Visión</h3>
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                    {!! $nosotros->vision !!}
            </div>
        </div>
    </div>
</section>
<!-- Pilares de Calidad Section -->
<section class="py-xxl bg-surface-container-lowest border-t border-outline-variant">
    <div class="max-w-max-width mx-auto px-margin-desktop">
        <div class="flex flex-col md:flex-row justify-between items-end mb-xl gap-md">
            <div class="max-w-xl">
                <h2 class="font-headline-md text-headline-md text-primary mb-sm">Pilares de Calidad</h2>
                <p class="font-body-md text-on-surface-variant">Nuestro sistema de gestión garantiza resultados
                    trazables y exactos bajo normativas internacionales ASTM, NTP e ISO.</p>
            </div>
            <button class="flex items-center gap-sm text-primary font-label-md group">
                Ver certificaciones <span
                    class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-md">
            @foreach($pilares as $pilar)
            <div class="border border-outline-variant p-md bg-white">
                <div class="flex items-center gap-md mb-sm">
                    <img src="{{asset('storage/' . $pilar->icono)}}" width="30" alt="">
                    <h4 class="font-label-md text-primary">{{$pilar->nombre}}</h4>
                </div>
                <p class="font-body-sm text-on-surface-variant">{{$pilar->descripcion}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Technical Background / Decorative -->
<section class="py-xxl relative overflow-hidden bg-primary overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="grid grid-cols-12 h-full w-full">
            <div class="border-r border-white/20 h-full"></div>
            <div class="border-r border-white/20 h-full"></div>
            <div class="border-r border-white/20 h-full"></div>
            <div class="border-r border-white/20 h-full"></div>
            <div class="border-r border-white/20 h-full"></div>
            <div class="border-r border-white/20 h-full"></div>
            <div class="border-r border-white/20 h-full"></div>
            <div class="border-r border-white/20 h-full"></div>
            <div class="border-r border-white/20 h-full"></div>
            <div class="border-r border-white/20 h-full"></div>
            <div class="border-r border-white/20 h-full"></div>
            <div class="border-r border-white/20 h-full"></div>
        </div>
    </div>
    <div class="relative z-10 max-w-max-width mx-auto px-margin-desktop text-center">
        <h2 class="font-headline-lg text-white mb-lg">¿Listo para iniciar su próximo proyecto?</h2>
        <div class="flex flex-col sm:flex-row justify-center gap-md">
            <button
                class="bg-secondary-container text-on-secondary-container px-xl py-md font-label-md rounded-lg hover:scale-105 transition-transform">Solicitar
                Presupuesto</button>
            <a href="{{route('proyectos')}}"
                class="border border-white/30 text-white px-xl py-md font-label-md rounded-lg hover:bg-white/10 transition-colors">Ver
                Proyectos</a>
        </div>
    </div>
</section>

<script>
    // Simple scroll interaction for navbar
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        if (window.scrollY > 50) {
            nav.classList.add('shadow-sm');
            nav.classList.replace('h-20', 'h-16');
        } else {
            nav.classList.remove('shadow-sm');
            nav.classList.replace('h-16', 'h-20');
        }
    });
</script>

@endsection