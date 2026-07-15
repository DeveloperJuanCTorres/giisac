@extends('layouts.app')
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Hanken+Grotesk:wght@400;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap"
    rel="stylesheet" />
<!-- Material Symbols -->
<link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
<!-- Tailwind CSS -->
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
                    "stack-sm": "24px",
                    "stack-md": "64px",
                    "container-max": "1280px",
                    "margin-mobile": "20px",
                    "stack-xl": "120px",
                    "gutter": "32px"
                },
                "fontFamily": {
                    "body-md": ["Hanken Grotesk"],
                    "display-lg": ["Hanken Grotesk"],
                    "body-lg": ["Hanken Grotesk"],
                    "display-lg-mobile": ["Hanken Grotesk"],
                    "headline-md": ["Hanken Grotesk"],
                    "label-caps": ["JetBrains Mono"]
                },
                "fontSize": {
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "letterSpacing": "0",
                        "fontWeight": "400"
                    }],
                    "display-lg": ["72px", {
                        "lineHeight": "80px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "letterSpacing": "0",
                        "fontWeight": "400"
                    }],
                    "display-lg-mobile": ["40px", {
                        "lineHeight": "48px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "700"
                    }],
                    "headline-md": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "label-caps": ["12px", {
                        "lineHeight": "16px",
                        "letterSpacing": "0.1em",
                        "fontWeight": "500"
                    }]
                }
            },
        },
    }
</script>
<style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        display: inline-block;
        vertical-align: middle;
    }

    .technical-grid {
        background-image: radial-gradient(circle, #d5d5db 1px, transparent 1px);
        background-size: 40px 40px;
    }
</style>
<style>
    .heroSwiper .swiper-button-next,
    .heroSwiper .swiper-button-prev{
        width:60px;
        height:60px;
        border:1px solid rgba(255,255,255,.25);
        backdrop-filter: blur(10px);
        background: rgba(255,255,255,.08);
    }

    .heroSwiper .swiper-button-next:after,
    .heroSwiper .swiper-button-prev:after{
        font-size:20px;
        font-weight:700;
    }

    .heroSwiper .swiper-pagination-bullet{
        width:12px;
        height:12px;
    }

    .heroSwiper .swiper-pagination-bullet-active{
        background:#edb900;
    }

 
</style>

<style>
    .projectSwiper .swiper-slide{
        height:auto;
    }

    .projectSwiper{
        overflow: hidden;
        padding-bottom: 10px;
    }
</style>
@section('content')

<!-- Hero Slider -->
<header class="relative overflow-hidden">

    <div class="swiper heroSwiper min-h-[819px]">

        <div class="swiper-wrapper">

            @foreach($banners as $banner)
            <div class="swiper-slide">
                <div class="relative min-h-[819px] flex items-center bg-primary-container">

                    <div class="absolute inset-0">
                        <img
                            src="{{ asset('storage/' . $banner->imagen) }}"
                            class="w-full h-full object-cover"
                            alt="">
                    </div>

                    <div class="absolute inset-0 bg-black/55"></div>

                    <div class="relative z-10 max-w-container-max mx-auto px-8 w-full">
                        <div class="max-w-3xl">

                            <span
                                class="font-label-caps text-label-caps text-secondary-fixed bg-secondary/20 px-3 py-1 mb-6 inline-block">
                                {{$banner->ttulo}}
                            </span>

                            <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-white mb-8">
                                {{$banner->descripcion}}
                            </h1>

                            <div class="flex flex-col sm:flex-row gap-4">
                                @php
                                    $brochure = json_decode($banner->brochure, true);
                                    $urlBrochure = !empty($brochure)
                                        ? asset('storage/' . str_replace('\\', '/', $brochure[0]['download_link']))
                                        : null;
                                @endphp

                                @if($urlBrochure)
                                    <a href="{{ $urlBrochure }}"
                                    download
                                    class="bg-secondary text-on-secondary px-8 py-4">
                                        Descargar Brochure
                                    </a>
                                @endif

                                <a href="{{route('servicios')}}"
                                    class="border border-white/50 text-white px-8 py-4 hover:bg-white hover:text-primary-container transition-all">
                                    Nuestros Servicios
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="absolute bottom-0 right-0 w-1/3 h-1/2 technical-grid opacity-20"></div>

                </div>
            </div>
            @endforeach

        </div>

        <!-- Flechas -->
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>

        <!-- Paginación -->
        <div class="swiper-pagination"></div>

    </div>

</header>

<!-- Stats Bar -->
<div class="bg-surface-container py-12 border-b border-outline-variant">
    <div class="max-w-container-max mx-auto px-8 grid grid-cols-2 md:grid-cols-4 gap-8">
        <div class="flex flex-col">
            <span class="font-display-lg text-headline-md text-primary">15+</span>
            <span class="font-label-caps text-label-caps text-on-surface-variant">Años de Experiencia</span>
        </div>
        <div class="flex flex-col">
            <span class="font-display-lg text-headline-md text-primary">ISO 17025</span>
            <span class="font-label-caps text-label-caps text-on-surface-variant">Acreditación Vigente</span>
        </div>
        <div class="flex flex-col">
            <span class="font-display-lg text-headline-md text-primary">500+</span>
            <span class="font-label-caps text-label-caps text-on-surface-variant">Proyectos Ejecutados</span>
        </div>
        <div class="flex flex-col">
            <span class="font-display-lg text-headline-md text-primary">100%</span>
            <span class="font-label-caps text-label-caps text-on-surface-variant">Precisión Técnica</span>
        </div>
    </div>
</div>
<!-- Services Section -->
<section class="py-stack-xl px-8 max-w-container-max mx-auto" id="servicios">
    <div class="mb-stack-md flex justify-between items-end border-l-4 border-secondary pl-6">
        <div>
            <span class="font-label-caps text-label-caps text-secondary block mb-2">ESPECIALIDADES</span>
            <h2 class="font-headline-md text-headline-md text-primary">Pilares de Servicio</h2>
        </div>
        <a class="hidden md:block font-label-caps text-label-caps text-on-surface-variant hover:text-secondary transition-colors underline underline-offset-4"
            href="{{route('servicios')}}">Ver Todos los Servicios</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
        @foreach($services as $service)
        <div
            class="group bg-surface-container-lowest border border-outline-variant p-8 hover:border-secondary transition-all duration-300 relative overflow-hidden">
            <div class="mb-8">
                <img src="{{asset('storage/' . $service->icono)}}" width="50" alt="">
            </div>
            <h3 class="font-headline-md text-xl mb-4 group-hover:text-secondary transition-colors">
                {{$service->nombre}}
            </h3>
            <p class="text-on-surface-variant text-body-md mb-8">{{$service->descripcion}}</p>
            <!-- <div class="flex justify-between items-center mt-auto">
                <span class="font-label-caps text-[10px] tracking-tighter text-outline">REF: ENG-001</span>
                <span
                    class="material-symbols-outlined transform translate-x-4 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all text-secondary"
                    data-icon="arrow_forward">arrow_forward
                </span>
            </div> -->
        </div>
        @endforeach
    </div>
</section>
<!-- Projects Portfolio -->
<section class="bg-primary-container text-on-primary-container pt-5" id="proyectos">
    <div class="max-w-container-max mx-auto px-8 pt-5">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-stack-md gap-6">
            <div class="max-w-xl">
                <span class="font-label-caps text-label-caps text-secondary block mb-2">PORTAFOLIO</span>
                <h2 class="font-headline-md text-headline-md text-white">Proyectos Destacados</h2>
                <p class="text-on-primary-container/80 mt-4 font-body-md">Evidencia de nuestra capacidad técnica
                    aplicada a grandes infraestructuras a nivel nacional.</p>
            </div>
            <div class="flex gap-2">
                <button
                    class="project-prev w-12 h-12 flex items-center justify-center border border-outline-variant/30 hover:bg-secondary transition-colors text-white">
                    <span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
                </button>
                <button
                    class="project-next w-12 h-12 flex items-center justify-center border border-outline-variant/30 hover:bg-secondary transition-colors text-white">
                    <span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
                </button>
            </div>
        </div>

        <div class="swiper projectSwiper">
            <div class="swiper-wrapper">
                @foreach($projects as $project)
                <div class="swiper-slide">
                    <div class="group cursor-pointer">
                        <div class="aspect-[4/5] overflow-hidden mb-6 relative">
                            <img alt="Proyecto Civil 01"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700"
                                src="{{asset('storage/' . $project->imagen)}}" />
                            <div
                                class="absolute top-4 left-4 bg-secondary px-3 py-1 font-label-caps text-[10px] text-on-secondary">
                                GEO-2024</div>
                        </div>
                        <div class="border-l border-outline-variant/30 pl-4">
                            <h4 class="font-headline-md text-lg text-white group-hover:text-secondary transition-colors">
                                {{$project->nombre}}</h4>
                            <div class="flex items-center gap-4 mt-2 text-white/60 font-label-caps text-[11px]">
                                <span class="flex items-center gap-1"><span class="material-symbols-outlined text-xs"
                                        data-icon="calendar_today">calendar_today</span> {{$project->mes}} {{$project->anio}}</span>
                                <span class="flex items-center gap-1"><span class="material-symbols-outlined text-xs"
                                        data-icon="location_on">location_on</span> {{$project->ubicacion}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
<!-- Documentation Section -->
<section class="py-stack-xl bg-surface">
    <div class="max-w-container-max mx-auto px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-stack-md items-center">
            <div>
                <span class="font-label-caps text-label-caps text-secondary block mb-2">{{$calidad->etiqueta}}</span>
                <h2 class="font-headline-md text-headline-md mb-8 text-primary">
                    {{$calidad->titulo}}
                </h2>
                <p class="text-on-surface-variant text-body-lg mb-stack-sm">
                    {{$calidad->descripcion}}
                </p>
                
                @php
                    $certificado = json_decode($calidad->certificado, true);
                    $acreditacion = json_decode($calidad->acreditacion, true);
                    $politicas = json_decode($calidad->politicas, true);

                    $urlCertificado = !empty($certificado)
                        ? asset('storage/' . str_replace('\\', '/', $certificado[0]['download_link']))
                        : null;
                    
                    $urlAcreditacion = !empty($acreditacion)
                        ? asset('storage/' . str_replace('\\', '/', $acreditacion[0]['download_link']))
                        : null;

                    $urlPoliticas = !empty($politicas)
                        ? asset('storage/' . str_replace('\\', '/', $politicas[0]['download_link']))
                        : null;
                @endphp
                <div class="space-y-4">
                    <a href="{{$urlCertificado}}" download="Certificado.pdf"
                        class="flex items-center p-4 bg-surface-container-lowest border border-outline-variant hover:border-primary transition-colors cursor-pointer group">
                        <span class="material-symbols-outlined text-primary mr-4"
                            data-icon="verified">verified</span>
                        <span class="flex-grow font-body-md font-semibold text-primary">Certificado ISO/IEC 17025</span>
                        <span class="material-symbols-outlined text-outline group-hover:text-primary"
                            data-icon="download">download</span>
                    </a>
                    <a href="{{$urlAcreditacion}}" download="Acreditacion.pdf"
                        class="flex items-center p-4 bg-surface-container-lowest border border-outline-variant hover:border-primary transition-colors cursor-pointer group">
                        <span class="material-symbols-outlined text-primary mr-4"
                            data-icon="assignment">assignment</span>
                        <span class="flex-grow font-body-md font-semibold text-primary">Alcance de
                            Acreditación</span>
                        <span class="material-symbols-outlined text-outline group-hover:text-primary"
                            data-icon="download">download</span>
                    </a>
                    <a href="{{$urlPoliticas}}" download="Politicas.pdf"
                        class="flex items-center p-4 bg-surface-container-lowest border border-outline-variant hover:border-primary transition-colors cursor-pointer group">
                        <span class="material-symbols-outlined text-primary mr-4" data-icon="policy">policy</span>
                        <span class="flex-grow font-body-md font-semibold text-primary">Política del Sistema de Gestión del Laboratorio</span>
                        <span class="material-symbols-outlined text-outline group-hover:text-primary"
                            data-icon="download">download</span>
                    </a>
                </div>
            </div>
            <div class="relative p-12 bg-surface-container flex items-center justify-center">
                <div class="absolute inset-0 border border-primary/10 m-6"></div>
                <div
                    class="bg-surface-container-lowest shadow-xl max-w-sm rotate-2 hover:rotate-0 transition-transform duration-500 border border-outline-variant">
                    <div class="w-16 h-1 w-full bg-primary mb-4"></div>
                    <!-- <h5 class="font-label-caps text-label-caps text-on-surface-variant mb-4">ACREDITADO POR INACAL</h5> -->
                    <img alt="Sello de Acreditación" class="w-full grayscale mb-6"
                        src="{{ asset('storage/' . $calidad->imagen)}}" />
                    <!-- <p class="text-[10px] font-label-caps text-outline leading-tight">
                        LAB-GI-0129-CERTIFICADO-INTERNACIONAL</p> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feedback & Contact Section -->
<section class="py-stack-xl border-t border-outline-variant" id="contacto">
    <div class="max-w-container-max mx-auto px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
            <div class="md:col-span-4">
                <span class="font-label-caps text-label-caps text-secondary block mb-2">CONTACTO</span>
                <h2 class="font-headline-md text-headline-md mb-8 text-primary">Hablemos de su próximo desafío</h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <span class="material-symbols-outlined text-primary" data-icon="phone">phone</span>
                        <div>
                            <p class="font-label-caps text-[10px] text-outline">LLÁMANOS</p>
                            <p class="font-body-md">{{$company->telefono}}</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <span class="material-symbols-outlined text-primary" data-icon="mail">mail</span>
                        <div>
                            <p class="font-label-caps text-[10px] text-outline">CORREO ELECTRÓNICO</p>
                            <p class="font-body-md">{{$company->correo}}</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <span class="material-symbols-outlined text-primary" data-icon="pin_drop">pin_drop</span>
                        <div>
                            <p class="font-label-caps text-[10px] text-outline">UBICACIÓN CENTRAL</p>
                            <p class="font-body-md">{{$company->direccion}}</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="mt-stack-sm p-6 bg-surface-container-low border border-outline-variant">
                    <h4 class="font-label-caps text-label-caps text-primary mb-4">CANALES DE ATENCIÓN</h4>
                    <ul class="space-y-3">
                        <li><a class="text-body-md text-secondary hover:underline flex items-center gap-2"
                                href="#"><span class="material-symbols-outlined text-sm"
                                    data-icon="forum">forum</span> Encuesta de Satisfacción</a></li>
                        <li><a class="text-body-md text-secondary hover:underline flex items-center gap-2"
                                href="#"><span class="material-symbols-outlined text-sm"
                                    data-icon="menu_book">menu_book</span> Libro de Reclamaciones</a></li>
                    </ul>
                </div> -->
            </div>
            <div class="md:col-span-8 bg-surface-container-lowest p-8 md:p-12 border border-outline-variant">
                <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <label class="font-label-caps text-label-caps text-on-surface-variant">NOMBRE
                            COMPLETO</label>
                        <input
                            class="bg-transparent border-0 border-b border-outline-variant focus:ring-0 focus:border-primary transition-all"
                            placeholder="Juan Pérez" type="text" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="font-label-caps text-label-caps text-on-surface-variant">EMPRESA</label>
                        <input
                            class="bg-transparent border-0 border-b border-outline-variant focus:ring-0 focus:border-primary transition-all"
                            placeholder="Constructora ABC" type="text" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="font-label-caps text-label-caps text-on-surface-variant">CORREO
                            CORPORATIVO</label>
                        <input
                            class="bg-transparent border-0 border-b border-outline-variant focus:ring-0 focus:border-primary transition-all"
                            placeholder="j.perez@empresa.com" type="email" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="font-label-caps text-label-caps text-on-surface-variant">SERVICIO DE
                            INTERÉS</label>
                        <select
                            class="bg-transparent border-0 border-b border-outline-variant focus:ring-0 focus:border-primary transition-all">
                            <option>Ingeniería de Suelos</option>
                            <option>Ensayos de Laboratorio</option>
                            <option>Calibración de Equipos</option>
                            <option>Capacitaciones</option>
                        </select>
                    </div>
                    <div class="md:col-span-2 flex flex-col gap-2">
                        <label class="font-label-caps text-label-caps text-on-surface-variant">MENSAJE
                            DETALLADO</label>
                        <textarea
                            class="bg-transparent border-0 border-b border-outline-variant focus:ring-0 focus:border-primary transition-all"
                            placeholder="Describa brevemente los requerimientos de su proyecto..."
                            rows="4"></textarea>
                    </div>
                    <div class="md:col-span-2 pt-6">
                        <button
                            class="w-full md:w-auto bg-primary text-white px-12 py-4 font-label-caps text-label-caps tracking-widest hover:brightness-125 transition-all active:scale-95"
                            type="submit">
                            ENVIAR SOLICITUD TÉCNICA
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    // Simple micro-interaction for scroll effects
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        if (window.scrollY > 50) {
            nav.classList.add('shadow-md');
        } else {
            nav.classList.remove('shadow-md');
        }
    });

    // Add smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

<script>
    new Swiper('.heroSwiper', {
        loop: true,

        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },

        speed: 1000,

        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }
    });
</script>

<script>
    const projectSwiper = new Swiper('.projectSwiper', {

        loop: true,

        spaceBetween: 32,

        slidesPerView: 1,

        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },

        navigation: {
            nextEl: '.project-next',
            prevEl: '.project-prev'
        },

        breakpoints: {
            768: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            }
        }

    });
</script>
@endsection