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
        @foreach($services as $service)
        <article class="service-card bg-surface border border-outline-variant p-lg flex flex-col gap-md h-full">
            <div class="aspect-video w-full overflow-hidden bg-surface-container-high mb-md">
                <img alt="Ingeniería de Suelos" class="w-full h-full object-cover"
                    data-alt="A professional engineer in a white hard hat examining a geological soil sample at a bright, sunlit construction site. The scene is captured in a clean, technical photography style with sharp focus on the soil layers and high-contrast blue and white tones. The atmosphere is industrious and precise, reflecting high-end engineering standards and modern light-mode aesthetics."
                    src="{{asset('storage/' . $service->imagen)}}" />
            </div>
            <div class="flex items-center gap-sm text-primary">
                <img src="{{asset('storage/' . $service->icono)}}" width="50" alt="">
                <h2 class="font-headline-sm text-headline-sm uppercase tracking-tight">{{$service->nombre}}</h2>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant">
                {!! $service->descripcion !!}
            </p>
            <div class="flex-grow">
                <h3 class="font-label-md text-label-md text-primary mb-xs uppercase">Alcances Técnicos:</h3>
                <ul class="space-y-xs">
                    @if($service->alcance_1)
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        {{$service->alcance_1}}
                    </li>
                    @endif

                    @if($service->alcance_2)
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        {{$service->alcance_2}}
                    </li>
                    @endif

                    @if($service->alcance_3)
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        {{$service->alcance_3}}
                    </li>
                    @endif

                    @if($service->alcance_4)
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        {{$service->alcance_4}}
                    </li>
                    @endif

                    @if($service->alcance_5)
                    <li class="flex items-start gap-xs font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="check_circle">check_circle</span>
                        {{$service->alcance_5}}
                    </li>
                    @endif
                </ul>
            </div>
            <a href="{{ route('contactanos')}}"
                class="mt-md bg-secondary text-primary font-bold py-sm px-lg rounded hover:opacity-90 transition-all font-label-md text-label-md w-full md:w-fit">
                Cotizar Servicio
            </a>
        </article>
        @endforeach
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