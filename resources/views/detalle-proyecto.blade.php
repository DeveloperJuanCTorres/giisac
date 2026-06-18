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
                    "on-secondary": "#ffffff",
                    "on-background": "#1a1c20",
                    "inverse-surface": "#2f3035",
                    "background": "#f9f9ff",
                    "surface-dim": "#d9d9df",
                    "surface-container-lowest": "#ffffff",
                    "outline": "#72787f",
                    "tertiary-fixed-dim": "#c8c6c5",
                    "primary-container": "#1b2654",
                    "on-secondary-fixed": "#311300",
                    "secondary": "#964900",
                    "on-tertiary": "#ffffff",
                    "on-surface-variant": "#41474e",
                    "surface-variant": "#e2e2e8",
                    "surface-container": "#eeedf3",
                    "on-primary-fixed-variant": "#0c4b71",
                    "on-error-container": "#93000a",
                    "tertiary-fixed": "#e5e2e1",
                    "on-error": "#ffffff",
                    "tertiary": "#2b2b2b",
                    "error": "#ba1a1a",
                    "tertiary-container": "#424141",
                    "on-primary": "#ffffff",
                    "primary": "#002e49",
                    "on-primary-fixed": "#001d31",
                    "surface-tint": "#2e638a",
                    "error-container": "#ffdad6",
                    "surface": "#f9f9ff",
                    "on-secondary-container": "#5e2b00",
                    "secondary-fixed": "#ffdcc7",
                    "outline-variant": "#c1c7cf",
                    "on-secondary-fixed-variant": "#723600",
                    "primary-fixed-dim": "#9accf8",
                    "surface-container-highest": "#e2e2e8",
                    "inverse-primary": "#9accf8",
                    "on-tertiary-fixed-variant": "#474746",
                    "secondary-fixed-dim": "#ffb787",
                    "surface-container-low": "#f3f3f9",
                    "on-tertiary-fixed": "#1c1b1b",
                    "primary-fixed": "#cce5ff",
                    "secondary-container": "#edb900",
                    "on-surface": "#1a1c20",
                    "on-primary-container": "#81b2de",
                    "inverse-on-surface": "#f0f0f6",
                    "surface-container-high": "#e8e8ee",
                    "on-tertiary-container": "#afadad",
                    "surface-bright": "#f9f9ff"
                },
                "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
                },
                "spacing": {
                    "xl": "32px",
                    "xxl": "48px",
                    "gutter": "16px",
                    "lg": "24px",
                    "margin-desktop": "32px",
                    "xs": "4px",
                    "max-width": "1280px",
                    "md": "16px",
                    "space-unit": "4px",
                    "margin-mobile": "16px",
                    "sm": "8px"
                },
                "fontFamily": {
                    "label-sm": ["Hanken Grotesk"],
                    "headline-lg": ["Hanken Grotesk"],
                    "headline-sm": ["Hanken Grotesk"],
                    "body-lg": ["Hanken Grotesk"],
                    "body-sm": ["Hanken Grotesk"],
                    "body-md": ["Hanken Grotesk"],
                    "headline-md": ["Hanken Grotesk"],
                    "headline-lg-mobile": ["Hanken Grotesk"],
                    "label-md": ["Hanken Grotesk"]
                },
                "fontSize": {
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "letterSpacing": "0.05em",
                        "fontWeight": "600"
                    }],
                    "headline-lg": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "600"
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
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "letterSpacing": "0",
                        "fontWeight": "400"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "letterSpacing": "0",
                        "fontWeight": "400"
                    }],
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "headline-lg-mobile": ["24px", {
                        "lineHeight": "32px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "16px",
                        "letterSpacing": "0.05em",
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
        -webkit-font-smoothing: antialiased;
        scroll-behavior: smooth;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    .technical-divider {
        background: linear-gradient(90deg, #d5d5db 0%, transparent 100%);
    }
</style>
@section('content')

<!-- Hero Section -->
<section class="relative w-full h-[600px] overflow-hidden">
    <img alt="Industrial Drilling Site" class="w-full h-full object-cover"
        data-alt="A wide-angle, cinematic photograph of an industrial drilling rig operating on a vast construction site in Callao, Peru. The scene is captured during the golden hour, with soft, directional light highlighting the technical details of the heavy machinery and the textured soil surface. The color palette is dominated by professional deep blues and earthy tones, maintaining a high-contrast, minimalist technical aesthetic. The atmosphere is industrious, precise, and highly professional, reflecting the engineering excellence of the project."
        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_0laWh3Z246PhIc-SVcM9-I0ETE1WcT2M649TlGpEpWA9HA1OsDMuaHxFYyffgxNALhP3Df4T7vFP5yajeW1qdagtb8DiLqJxa9Kv_OekbDEszkpFJ8GsxpURFX3RvQoYP31-8_DoqWHSEKJEOBpOXje81XYzBPXfaLAaNZ4VQVfU5BPyrvzopdeZfWBTQgoPIMqYQOQrncoOyk_tNF_G3Kf2glc9UIOg28hhn9CpoHr0um_V82plNqzoqHGomSPwzL7SPDeEwYDY" />
    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end">
        <div class="max-w-max-width mx-auto w-full px-margin-desktop pb-xxl">
            <div class="flex flex-col gap-sm">
                <span
                    class="bg-secondary-container text-on-secondary-container w-fit px-md py-xs rounded-lg font-label-sm text-label-sm">GEOTECNIA</span>
                <h1 class="font-headline-lg text-headline-lg text-white max-w-2xl">Estudio de Suelos Planta
                    Industrial</h1>
            </div>
        </div>
    </div>
</section>
<!-- Project Metadata -->
<section class="bg-surface-container-low py-lg border-b border-outline-variant">
    <div class="max-w-max-width mx-auto px-margin-desktop grid grid-cols-2 md:grid-cols-4 gap-lg">
        <div class="flex flex-col">
            <span class="font-label-sm text-label-sm text-on-surface-variant">UBICACIÓN</span>
            <span class="font-body-md text-body-md font-semibold text-primary">Callao, Perú</span>
        </div>
        <div class="flex flex-col">
            <span class="font-label-sm text-label-sm text-on-surface-variant">AÑO</span>
            <span class="font-body-md text-body-md font-semibold text-primary">2023</span>
        </div>
        <div class="flex flex-col">
            <span class="font-label-sm text-label-sm text-on-surface-variant">TIPO DE PROYECTO</span>
            <span class="font-body-md text-body-md font-semibold text-primary">Estudio Geotécnico</span>
        </div>
        <div class="flex flex-col">
            <span class="font-label-sm text-label-sm text-on-surface-variant">SOLICITANTE</span>
            <span class="font-body-md text-body-md font-semibold text-primary">Sector Industrial</span>
        </div>
    </div>
</section>
<!-- Main Content Grid -->
<section class="max-w-max-width mx-auto px-margin-desktop py-xxl grid grid-cols-1 lg:grid-cols-12 gap-xl">
    <!-- Technical Description -->
    <div class="lg:col-span-7 flex flex-col gap-lg">
        <div class="flex flex-col gap-md">
            <h2 class="font-headline-md text-headline-md text-primary">Descripción del Proyecto</h2>
            <div class="technical-divider h-[2px] w-48"></div>
        </div>
        <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
            El proyecto consistió en la ejecución integral del estudio de suelos para la futura ampliación de
            una planta de procesamiento industrial en la zona portuaria del Callao. Debido a la naturaleza de
            las cargas dinámicas de la maquinaria pesada y la proximidad al litoral, se requirió una
            investigación geotécnica de alta precisión para determinar la capacidad portante y los posibles
            riesgos de licuación.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-lg mt-md">
            <div class="p-lg border border-outline-variant rounded-lg bg-white">
                <span class="material-symbols-outlined text-secondary mb-sm"
                    style="font-size: 32px;">precision_manufacturing</span>
                <h3 class="font-headline-sm text-headline-sm mb-sm text-primary">Metodología</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Se realizaron perforaciones
                    mediante diamantina y calicatas a cielo abierto, permitiendo una visión estratigráfica
                    completa. El muestreo se ejecutó siguiendo protocolos internacionales para muestras
                    alteradas e inalteradas.</p>
            </div>
            <div class="p-lg border border-outline-variant rounded-lg bg-white">
                <span class="material-symbols-outlined text-secondary mb-sm"
                    style="font-size: 32px;">science</span>
                <h3 class="font-headline-sm text-headline-sm mb-sm text-primary">Análisis de Lab</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Ensayos de corte directo,
                    consolidación y análisis granulométrico realizados en nuestro laboratorio acreditado para
                    garantizar resultados de máxima fidelidad técnica.</p>
            </div>
        </div>
        <div class="mt-lg">
            <h4 class="font-label-md text-label-md text-primary mb-md">RESULTADOS CLAVE</h4>
            <ul class="flex flex-col gap-sm">
                <li class="flex items-center gap-md font-body-md text-body-md text-on-surface-variant">
                    <span class="material-symbols-outlined text-secondary"
                        style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    Determinación de perfil estratigráfico hasta los 15 metros.
                </li>
                <li class="flex items-center gap-md font-body-md text-body-md text-on-surface-variant">
                    <span class="material-symbols-outlined text-secondary"
                        style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    Cálculo exacto de asentamientos diferenciales para cimentaciones pesadas.
                </li>
                <li class="flex items-center gap-md font-body-md text-body-md text-on-surface-variant">
                    <span class="material-symbols-outlined text-secondary"
                        style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    Recomendaciones específicas de mejoramiento de suelo mediante gravas compactadas.
                </li>
            </ul>
        </div>
    </div>
    <!-- Ficha Técnica Sidecard -->
    <div class="lg:col-span-5">
        <div class="bg-primary p-xl rounded-lg text-white sticky top-24">
            <h3 class="font-headline-sm text-headline-sm mb-lg">Ficha Técnica</h3>
            <div class="flex flex-col gap-md">
                <div class="flex justify-between border-b border-primary-container pb-sm">
                    <span class="font-label-md text-label-md opacity-70">Área de intervención</span>
                    <span class="font-body-md text-body-md font-medium">12,500 m²</span>
                </div>
                <div class="flex justify-between border-b border-primary-container pb-sm">
                    <span class="font-label-md text-label-md opacity-70">Profundidad de muestreo</span>
                    <span class="font-body-md text-body-md font-medium">15.00 m</span>
                </div>
                <div class="flex justify-between border-b border-primary-container pb-sm">
                    <span class="font-label-md text-label-md opacity-70">Ensayos realizados</span>
                    <span class="font-body-md text-body-md font-medium">SPT, DPL, Triaxial</span>
                </div>
                <div class="flex justify-between border-b border-primary-container pb-sm">
                    <span class="font-label-md text-label-md opacity-70">Normativa aplicada</span>
                    <span class="font-body-md text-body-md font-medium">ASTM D1586 / NTP</span>
                </div>
                <div class="flex justify-between border-b border-primary-container pb-sm">
                    <span class="font-label-md text-label-md opacity-70">Equipamiento</span>
                    <span class="font-body-md text-body-md font-medium">Sonda Hidráulica T20</span>
                </div>
            </div>
            <div class="mt-xl flex flex-col gap-sm">
                <p class="font-body-sm text-body-sm opacity-80">Este estudio cumple con los estándares más
                    rigurosos de la ingeniería civil peruana e internacional.</p>
                <button
                    class="mt-md w-full bg-secondary text-white py-md rounded-lg font-label-md text-label-md hover:brightness-110 transition-all flex items-center justify-center gap-sm">
                    <span class="material-symbols-outlined">download</span>
                    Descargar Resumen Técnico (PDF)
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Project Gallery -->
<section class="bg-surface-container-highest py-xxl">
    <div class="max-w-max-width mx-auto px-margin-desktop">
        <div class="flex flex-col gap-sm mb-xl">
            <h2 class="font-headline-md text-headline-md text-primary text-center">Registro Fotográfico del
                Proyecto</h2>
            <p class="text-center font-body-md text-body-md text-on-surface-variant max-w-xl mx-auto">
                Documentación visual detallada de los procesos de campo y laboratorio realizados.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-lg h-[600px]">
            <div class="md:col-span-2 relative overflow-hidden rounded-lg group">
                <img alt="Laboratory Testing"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                    data-alt="A close-up, high-detail photograph of a materials testing laboratory. A clean, stainless steel compression machine is shown testing a soil core sample. The lighting is sterile and bright, typical of a professional lab environment, with a focus on precision instruments and clear technical gauges. The aesthetic is extremely clean and organized, utilizing a palette of cool grays and corporate blues, highlighting GI SAC's commitment to scientific rigor."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgZ0x_XNHkMpDUe3h_3HKV7k_yT5x6pyqN2I9z0Ng5GKSS88b8k5H4abpSYqf7f1WE7yscAa9XnqmK6HzNSeBZ5wNc2ED6FroMdTxvNZZTrVgde23hkRtFQ3Pf7GEySIr-V4flLJA1Z1eBBnKbV21jKZIXM9U0TOMoi-guRHrehqvq1-Qwb13bPu_QCBVLX7f8nNRNZjUUnWL2GPM0ReQt_CKDaYBpekjdnp0YMvcNDa7N9-VVf3IFwGAR_X5d1Mv4_Px0pi7yxEFZ" />
                <div
                    class="absolute bottom-0 left-0 right-0 p-lg bg-gradient-to-t from-black/60 to-transparent text-white">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider">Control de Calidad</span>
                    <h4 class="font-body-lg text-body-lg font-bold">Ensayos de Laboratorio Acreditados</h4>
                </div>
            </div>
            <div class="grid grid-rows-2 gap-lg">
                <div class="relative overflow-hidden rounded-lg group">
                    <img alt="Site Equipment"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        data-alt="A technical shot of advanced geotechnical equipment being deployed on site. The image shows a precision drilling rig's control panel and hydraulic systems against a background of a structured industrial construction site. The lighting is crisp daylight, emphasizing the mechanical complexity and clean maintenance of the gear. The color scheme features deep blue accents and metallic textures, conveying a sense of high-end engineering capability."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBoTD5PZL1nCoBIUGOimkcnELlwPChX4c0H052Cs7rI7RLm3Y3hqc2AclpKAmccJS2qpmJ4C3odQJDnrEfn2Thml2bK2nvEg8y0-j0Y5yq-2l_oKnLJw6FWeRt3YRkNsnqoObDNHEFtDdc7mas9aj0KYJvNPL59-wuK5qoPl_pIZgLj9dgObw7rAwekv6pWcxJuIJIihUYgeLX1uy-h1bLk7TMSGJwUNRV50wDQjioePqGla5HVaknkZQp6S1QlWQiJN73UrUX5xzP9" />
                    <div
                        class="absolute bottom-0 left-0 right-0 p-md bg-gradient-to-t from-black/60 to-transparent text-white">
                        <h4 class="font-label-md text-label-md font-bold">Equipamiento Moderno</h4>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img alt="Stratigraphy Core"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        data-alt="A top-down, structured photograph of soil core samples organized in a professional core box. Each sample shows distinct geological layers, clearly labeled with technical markers. The lighting is even and shadowless to ensure all textures are visible. The overall composition is grid-like and minimalist, echoing the engineering focus of GI SAC. The image uses natural earth tones framed by the clean white of the labeling, emphasizing technical clarity and data-driven results."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrxpjUSND7xw4vTJ3c1dju4V0_2wboExdFqKhvNpRvv2eSMYOift0K8zUuG7FwfdtYTySbmCLbkk2n8YhU88D5vU9fA3krtsfbdRWTgv7q0T8pDZ2BAsb3FYaAT4PZcddiKYgjzUkiClMR-w4STTbwvxtG98YYWZax3W00W7Tl1nuZwxUAuGjrC6tRtesSVUqfWOPqNisfulHaoEqb7tSCLeUB5AqENAk35JSRmpGEXTHwDfEpphCX6-Al7uNwtF1K6e_KVs45u71a" />
                    <div
                        class="absolute bottom-0 left-0 right-0 p-md bg-gradient-to-t from-black/60 to-transparent text-white">
                        <h4 class="font-label-md text-label-md font-bold">Registro de Muestreo</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Section -->
<section class="py-xxl">
    <div class="max-w-max-width mx-auto px-margin-desktop">
        <div
            class="bg-surface-container-low border border-outline-variant p-xxl rounded-xl text-center flex flex-col items-center gap-lg">
            <span class="material-symbols-outlined text-secondary"
                style="font-size: 48px; font-variation-settings: 'FILL' 1;">architecture</span>
            <div class="flex flex-col gap-sm">
                <h2 class="font-headline-lg text-headline-lg text-primary">¿Busca excelencia técnica para su
                    proyecto?</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Nuestros especialistas están listos para asesorarlo en estudios de suelos, geotecnia y
                    control de calidad de materiales.
                </p>
            </div>
            <div class="flex flex-col md:flex-row gap-md mt-md">
                <button
                    class="bg-primary text-on-primary px-xxl py-md rounded-lg font-label-md text-label-md hover:opacity-90 transition-all">
                    Cotizar un proyecto similar
                </button>
                <button
                    class="border border-outline text-primary px-xxl py-md rounded-lg font-label-md text-label-md hover:bg-surface-container-high transition-all">
                    Ver todos los servicios
                </button>
            </div>
        </div>
    </div>
</section>


<script>
    // Micro-interaction for gallery hover effects and smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Simple visibility effect on scroll for elements
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.p-lg, .lg\\:col-span-5').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });
</script>
@endsection