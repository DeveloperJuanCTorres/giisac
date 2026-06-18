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
                <span
                    class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest mr-sm">Filtrar
                    por:</span>
                <button
                    class="filter-btn active px-lg py-xs border border-outline font-label-md text-label-md rounded-full transition-all">Todos</button>
                <button
                    class="filter-btn px-lg py-xs border border-outline font-label-md text-label-md rounded-full hover:border-primary hover:text-primary transition-all">Geotecnia</button>
                <button
                    class="filter-btn px-lg py-xs border border-outline font-label-md text-label-md rounded-full hover:border-primary hover:text-primary transition-all">Laboratorio</button>
                <button
                    class="filter-btn px-lg py-xs border border-outline font-label-md text-label-md rounded-full hover:border-primary hover:text-primary transition-all">Calibración</button>
            </div>
        </div>
    </section>
    <!-- Projects Grid -->
    <section class="py-xxl">
        <div class="max-w-max-width mx-auto px-margin-desktop">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-xl">
                <!-- Project Item 1 -->
                <div
                    class="project-card relative group overflow-hidden bg-surface border border-outline-variant h-[450px]">
                    <div class="h-full w-full overflow-hidden">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 scale-105 group-hover:scale-100"
                            data-alt="A large-scale industrial construction site featuring heavy machinery and deep excavation for foundation work. The scene is captured in clear daylight with a focus on engineering precision and structural steel. The color palette is dominated by cool blues and metallic grays, reflecting a professional and reliable technical environment."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPaxPUHTIPzwJSHLKUKhRPIFcs-r-hXfazS2uGqhOBwO_XfQh9QsoJp6vO2WwNM4oqA5zlfaktcgfMK_sQ8Gn4gv-wKM3RTx4LZwzdOVL9Ey_RMRccufdLOfSbD9eEo83dAutyNPSRA8u3r5_NUZriA_WIjFd4OcBAjMARecYDV9YDzUCeevX1bjWKRkZk_igGcBSNkMzeS2kOdFe0lD0AuPh_U5GlAuYYKH_9o6l6pTKsFhnQBaqsHfLskCm9ZjdjksVGzJU_i8CA" />
                    </div>
                    <div
                        class="absolute bottom-0 left-0 right-0 p-lg bg-surface/90 backdrop-blur-sm border-t border-outline-variant">
                        <div class="flex justify-between items-start mb-xs">
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase tracking-tighter">Geotecnia</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">2023</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-xs">Estudio de Suelos Planta
                            Industrial</h3>
                        <div class="flex items-center gap-xs text-on-surface-variant">
                            <span class="material-symbols-outlined text-[18px]">location_on</span>
                            <span class="font-body-sm text-body-sm">Callao, Perú</span>
                        </div>
                    </div>
                    <!-- Hover Overlay -->
                    <div
                        class="project-overlay absolute inset-0 bg-primary/95 flex flex-col justify-center p-xl opacity-0 translate-y-4 transition-all duration-500 ease-out">
                        <h4 class="text-white font-headline-sm text-headline-sm mb-md">Detalles Técnicos</h4>
                        <p class="text-white/80 font-body-md text-body-md mb-lg">
                            Análisis de capacidad portante mediante ensayos SPT y calicatas a 15 metros de
                            profundidad para cimentación de naves logísticas pesadas.
                        </p>
                        <a href="{{route('detalle-proyecto')}}"
                            class="border border-secondary-fixed text-secondary-fixed self-start px-lg py-sm rounded-lg font-label-md text-label-md hover:bg-secondary-fixed hover:text-primary transition-colors">
                            Ver Expediente
                        </a>
                    </div>
                </div>
                <!-- Project Item 2 -->
                <div
                    class="project-card relative group overflow-hidden bg-surface border border-outline-variant h-[450px]">
                    <div class="h-full w-full overflow-hidden">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 scale-105 group-hover:scale-100"
                            data-alt="A clean, high-tech engineering laboratory where a technician is performing precision calibration on electronic sensors. The lighting is bright and sterile, emphasizing a modern scientific facility. The aesthetic is minimalist with white surfaces and deep blue accents, conveying accuracy and professional excellence in technical services."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkZTl3oHY-fZXverSYHAMRnkyHZHy1X3YYRK3SyZ0bQCt4t_uEBV7fICtiQ-mtnEJhbqNcrc9K46QIk8pJofdup-G0t_6-zxV-q9sCujsvOxmt1ZwY_7iwW8i1p99vLB8GByQcxZiXzRSFZLIt9eQH0FsvfuBPhRo6AU-l12vPQv_F6_bAMLhl9hG3grTkSzjKSoYPabl3QQAHh9jp0oj_hY0yh4Ynt1wWZSP-kpizrpjGx0Vhmyz_CTZoGIPTJ0rSlxXk1ep135lX" />
                    </div>
                    <div
                        class="absolute bottom-0 left-0 right-0 p-lg bg-surface/90 backdrop-blur-sm border-t border-outline-variant">
                        <div class="flex justify-between items-start mb-xs">
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase tracking-tighter">Calibración</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">2023</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-xs">Calibración Masiva de
                            Manómetros</h3>
                        <div class="flex items-center gap-xs text-on-surface-variant">
                            <span class="material-symbols-outlined text-[18px]">location_on</span>
                            <span class="font-body-sm text-body-sm">Pisco, Ica</span>
                        </div>
                    </div>
                    <div
                        class="project-overlay absolute inset-0 bg-primary/95 flex flex-col justify-center p-xl opacity-0 translate-y-4 transition-all duration-500 ease-out">
                        <h4 class="text-white font-headline-sm text-headline-sm mb-md">Detalles Técnicos</h4>
                        <p class="text-white/80 font-body-md text-body-md mb-lg">
                            Servicio integral de calibración para 150 equipos de presión bajo norma ISO/IEC 17025 en
                            planta de gas natural.
                        </p>
                        <button
                            class="border border-secondary-fixed text-secondary-fixed self-start px-lg py-sm rounded-lg font-label-md text-label-md hover:bg-secondary-fixed hover:text-primary transition-colors">
                            Ver Expediente
                        </button>
                    </div>
                </div>
                <!-- Project Item 3 -->
                <div
                    class="project-card relative group overflow-hidden bg-surface border border-outline-variant h-[450px]">
                    <div class="h-full w-full overflow-hidden">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 scale-105 group-hover:scale-100"
                            data-alt="Close-up of a concrete compression test being conducted in a structural engineering laboratory. The machine is crushing a concrete cylinder with high force, displaying technical measurement data. The lighting is focused and dramatic, highlighting the texture of the materials and the precision of the scientific process."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB45hyUfaPk42FIcpk1zVWim3z0RwlKgJ4a9U5Fou24MWi4qI5ZbGMHGuwXo_lJ_D54JP18yROuZ5MUqgt9QEe-AQOxjGmCsG7AIIYVY873z0Jutet9lb3i-sNzR6b_6pbMNTn7cFLgrAIqNNutlDDEofVi3E0A5zIk7dL9vtvfhgrpJ9M9G02wMUjSz40H5QiDnAi23EnRNEh0RSfWjU7CK-MBCewffMeMjO6vsQMtqjhdMfvb23Z0kM-IJuc3-IfTCC0Gp2BOFmId" />
                    </div>
                    <div
                        class="absolute bottom-0 left-0 right-0 p-lg bg-surface/90 backdrop-blur-sm border-t border-outline-variant">
                        <div class="flex justify-between items-start mb-xs">
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase tracking-tighter">Laboratorio</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">2024</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-xs">Control de Calidad de
                            Concreto</h3>
                        <div class="flex items-center gap-xs text-on-surface-variant">
                            <span class="material-symbols-outlined text-[18px]">location_on</span>
                            <span class="font-body-sm text-body-sm">Miraflores, Lima</span>
                        </div>
                    </div>
                    <div
                        class="project-overlay absolute inset-0 bg-primary/95 flex flex-col justify-center p-xl opacity-0 translate-y-4 transition-all duration-500 ease-out">
                        <h4 class="text-white font-headline-sm text-headline-sm mb-md">Detalles Técnicos</h4>
                        <p class="text-white/80 font-body-md text-body-md mb-lg">
                            Ensayos de resistencia a la compresión y diseño de mezclas especiales para edificio
                            multifamiliar de 25 pisos con sótanos profundos.
                        </p>
                        <button
                            class="border border-secondary-fixed text-secondary-fixed self-start px-lg py-sm rounded-lg font-label-md text-label-md hover:bg-secondary-fixed hover:text-primary transition-colors">
                            Ver Expediente
                        </button>
                    </div>
                </div>
                <!-- Project Item 4 -->
                <div
                    class="project-card relative group overflow-hidden bg-surface border border-outline-variant h-[450px]">
                    <div class="h-full w-full overflow-hidden">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 scale-105 group-hover:scale-100"
                            data-alt="Technical drawing and blueprints of a bridge structure laid out on a professional workstation with engineering tools. The focus is sharp on the complex geometric lines and measurements. The lighting is even and soft, providing a clean corporate modernist atmosphere with deep blue and white tones."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYxugUxMMFi5ula6uukXIQAHko6AdR9393GDfV9Hiic2GJDlVDax5h7Hw4eCVgD5nYQ1Gx1YRwKVJiE3_R9rvYrIFeeVwlDe0vQNaVeHQYBwqjxqbabJ3UPGbu3PAjckR6vzRpu4IlK9NoHJ3b8rpwfktfRQEDNBZjsjtJ6l2QbSleRqJ_E4AAlr_OF2gwkusVW8Y_m0PmBaC1DDrH3w531jsQmwKIH4vfT9CFUjaBqKQoRlawP_zRkqwmL2wzWhnAU5QQ4zTeGWie" />
                    </div>
                    <div
                        class="absolute bottom-0 left-0 right-0 p-lg bg-surface/90 backdrop-blur-sm border-t border-outline-variant">
                        <div class="flex justify-between items-start mb-xs">
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase tracking-tighter">Geotecnia</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">2022</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-xs">Cimentaciones Puente
                            Carretero</h3>
                        <div class="flex items-center gap-xs text-on-surface-variant">
                            <span class="material-symbols-outlined text-[18px]">location_on</span>
                            <span class="font-body-sm text-body-sm">Cajamarca, Perú</span>
                        </div>
                    </div>
                    <div
                        class="project-overlay absolute inset-0 bg-primary/95 flex flex-col justify-center p-xl opacity-0 translate-y-4 transition-all duration-500 ease-out">
                        <h4 class="text-white font-headline-sm text-headline-sm mb-md">Detalles Técnicos</h4>
                        <p class="text-white/80 font-body-md text-body-md mb-lg">
                            Perforación diamantina en roca y ensayos in-situ para el diseño de estribos y pilares
                            centrales de puente de 80 metros de luz.
                        </p>
                        <button
                            class="border border-secondary-fixed text-secondary-fixed self-start px-lg py-sm rounded-lg font-label-md text-label-md hover:bg-secondary-fixed hover:text-primary transition-colors">
                            Ver Expediente
                        </button>
                    </div>
                </div>
                <!-- Project Item 5 -->
                <div
                    class="project-card relative group overflow-hidden bg-surface border border-outline-variant h-[450px]">
                    <div class="h-full w-full overflow-hidden">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 scale-105 group-hover:scale-100"
                            data-alt="An industrial laboratory worker using advanced digital instrumentation to monitor soil stability and compression. The setting is clean, organized, and filled with modern technological equipment. The overall style is technical and reliable, with a high-key lighting scheme that highlights the accuracy of the work."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHx41Tw0AiExOXvVcbOEMhf4iIcGEVM_Wlc6X3M8158DQrN05UNOCq1yzk1UUiPYyiVX7vxrdIC7PTWSCyzd87p5NsCJbBQN4VuhSlOGmVqTUpqX97jp94vsk0Djwrl0HzaoVq75mpf3Ppaz1XlOvaxBmU8DU3Tw3ef0WPj7njCnujKLg21XCb1dev80jGYguQuW8Z7mn1D6n9S56qFjhQ5H779K-0SjLbGBVK_YZ-VGcSiiEIRXR0T_fTGFKmKHp6goEaZWYUWUc0" />
                    </div>
                    <div
                        class="absolute bottom-0 left-0 right-0 p-lg bg-surface/90 backdrop-blur-sm border-t border-outline-variant">
                        <div class="flex justify-between items-start mb-xs">
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase tracking-tighter">Laboratorio</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">2023</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-xs">Ensayos Triaxiales Represa
                        </h3>
                        <div class="flex items-center gap-xs text-on-surface-variant">
                            <span class="material-symbols-outlined text-[18px]">location_on</span>
                            <span class="font-body-sm text-body-sm">Arequipa, Perú</span>
                        </div>
                    </div>
                    <div
                        class="project-overlay absolute inset-0 bg-primary/95 flex flex-col justify-center p-xl opacity-0 translate-y-4 transition-all duration-500 ease-out">
                        <h4 class="text-white font-headline-sm text-headline-sm mb-md">Detalles Técnicos</h4>
                        <p class="text-white/80 font-body-md text-body-md mb-lg">
                            Caracterización avanzada de materiales de préstamo para el núcleo de presa mediante
                            ensayos de corte directo y triaxiales CU.
                        </p>
                        <button
                            class="border border-secondary-fixed text-secondary-fixed self-start px-lg py-sm rounded-lg font-label-md text-label-md hover:bg-secondary-fixed hover:text-primary transition-colors">
                            Ver Expediente
                        </button>
                    </div>
                </div>
                <!-- Project Item 6 -->
                <div
                    class="project-card relative group overflow-hidden bg-surface border border-outline-variant h-[450px]">
                    <div class="h-full w-full overflow-hidden">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 scale-105 group-hover:scale-100"
                            data-alt="Heavy civil engineering equipment working on a highway project. A large driller is boring into the ground for pile foundations. The environment is dusty but the equipment is pristine and powerful. The lighting is golden hour, creating strong shadows and emphasizing the scale of the machinery and the professional nature of the operation."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdJW28YRmEpDczt0JHx2wgBZW0R_GXxB1HRY0U9g0Ve2koke52TH4XKw20jLsNulZh_r4J137lkKotKe8saAyJUHNfREyEDz0orb76s6X4SR5FWBeehHQwvzBGVfE_gPchLxZqu09fbTzo4He-6KdHg7rsSp_2488HkLsJtkT_yeB-kVAbZiX0wQTwK1FRkGgQzD9uV2qpgtZhjjiNqdZyZCPMF-gNZirzoNyCUbdp21X765eq7nM0J-OOe0h4ds_rkYoIaWCfb0dm" />
                    </div>
                    <div
                        class="absolute bottom-0 left-0 right-0 p-lg bg-surface/90 backdrop-blur-sm border-t border-outline-variant">
                        <div class="flex justify-between items-start mb-xs">
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase tracking-tighter">Geotecnia</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">2024</span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-primary mb-xs">Estabilidad de Taludes
                            Minería</h3>
                        <div class="flex items-center gap-xs text-on-surface-variant">
                            <span class="material-symbols-outlined text-[18px]">location_on</span>
                            <span class="font-body-sm text-body-sm">Moquegua, Perú</span>
                        </div>
                    </div>
                    <div
                        class="project-overlay absolute inset-0 bg-primary/95 flex flex-col justify-center p-xl opacity-0 translate-y-4 transition-all duration-500 ease-out">
                        <h4 class="text-white font-headline-sm text-headline-sm mb-md">Detalles Técnicos</h4>
                        <p class="text-white/80 font-body-md text-body-md mb-lg">
                            Modelamiento numérico y propuesta de sostenimiento con pernos de roca y concreto lanzado
                            para accesos principales de tajo abierto.
                        </p>
                        <button
                            class="border border-secondary-fixed text-secondary-fixed self-start px-lg py-sm rounded-lg font-label-md text-label-md hover:bg-secondary-fixed hover:text-primary transition-colors">
                            Ver Expediente
                        </button>
                    </div>
                </div>
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
                <button
                    class="bg-secondary-container text-on-secondary-container px-xl py-md rounded-lg font-label-md text-label-md uppercase tracking-widest hover:opacity-90 transition-opacity">
                    Contactar un Especialista
                </button>
                <button
                    class="border border-white/30 text-white px-xl py-md rounded-lg font-label-md text-label-md uppercase tracking-widest hover:bg-white/10 transition-colors">
                    Descargar Brochure 2024
                </button>
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
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        if (window.scrollY > 20) {
            header.classList.add('shadow-md');
            header.classList.add('bg-surface/95');
            header.classList.add('backdrop-blur-md');
        } else {
            header.classList.remove('shadow-md');
            header.classList.remove('bg-surface/95');
            header.classList.remove('backdrop-blur-md');
        }
    });
</script>
@endsection