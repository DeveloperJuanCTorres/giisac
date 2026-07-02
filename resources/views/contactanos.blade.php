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
<style>
    body {
        font-family: 'Hanken Grotesk', sans-serif;
        scroll-behavior: smooth;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    .form-input-focus:focus {
        border-color: #1b2654;
        box-shadow: 0 0 0 2px rgba(0, 69, 107, 0.1);
        outline: none;
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
            }
        }
    }
</script>
@section('content')

<!-- Hero Section -->
<section class="bg-surface py-xxl border-b border-outline-variant">
    <div class="max-w-max-width mx-auto px-margin-desktop">
        <div class="max-w-3xl">
            <h1 class="font-headline-lg text-headline-lg md:text-headline-lg text-primary mb-md">
                Hablemos de su próximo desafío técnico
            </h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant">
                Nuestra división de ingeniería y laboratorio está lista para proporcionar soluciones precisas y
                certificadas para sus requerimientos industriales.
            </p>
        </div>
    </div>
</section>
<!-- Contact Split Layout -->

<section class="max-w-max-width mx-auto px-margin-desktop py-xxl">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-xxl">
        <!-- Left Column: Contact Information -->
        <div class="lg:col-span-5 space-y-xl">
            <div class="space-y-lg">
                <h2 class="font-headline-sm text-headline-sm text-primary uppercase tracking-wider">Información
                    Corporativa</h2>
                <div class="space-y-md">
                    <!-- Address -->
                    <div class="flex items-start gap-md">
                        <span class="material-symbols-outlined text-primary mt-1">location_on</span>
                        <div>
                            <p class="font-label-md text-label-md text-primary">Dirección Central</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">{{$company->direccion}}</p>
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="flex items-start gap-md">
                        <span class="material-symbols-outlined text-primary mt-1">call</span>
                        <div>
                            <p class="font-label-md text-label-md text-primary">Teléfonos de Atención</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">{{$company->telefono}} / {{$company->whatsapp}}</p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="flex items-start gap-md">
                        <span class="material-symbols-outlined text-primary mt-1">mail</span>
                        <div>
                            <p class="font-label-md text-label-md text-primary">Correo Corporativo</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">{{$company->correo}}
                            </p>
                        </div>
                    </div>
                    <!-- RUC -->
                    <div class="flex items-start gap-md">
                        <span class="material-symbols-outlined text-primary mt-1">assignment_ind</span>
                        <div>
                            <p class="font-label-md text-label-md text-primary">RUC</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">{{$company->ruc}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Social Media Links -->
            <div class="space-y-md pt-md border-t border-outline-variant">
                <p class="font-label-md text-label-md text-primary">Nuestras Redes</p>
                <div class="flex gap-md">

                    <a href="{{ $company->link_facebook ?? '#' }}"
                    target="_blank"
                    class="w-10 h-10 rounded border border-outline-variant flex items-center justify-center hover:bg-surface-container-high transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="{{ $company->link_instagram ?? '#' }}"
                    target="_blank"
                    class="w-10 h-10 rounded border border-outline-variant flex items-center justify-center hover:bg-surface-container-high transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="{{ $company->link_linkedin ?? '#' }}"
                    target="_blank"
                    class="w-10 h-10 rounded border border-outline-variant flex items-center justify-center hover:bg-surface-container-high transition-colors">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a href="{{ $company->link_youtube ?? '#' }}"
                    target="_blank"
                    class="w-10 h-10 rounded border border-outline-variant flex items-center justify-center hover:bg-surface-container-high transition-colors">
                        <i class="fab fa-youtube"></i>
                    </a>

                    <a href="{{ $company->link_tiktok ?? '#' }}"
                    target="_blank"
                    class="w-10 h-10 rounded border border-outline-variant flex items-center justify-center hover:bg-surface-container-high transition-colors">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>
            <!-- Map Container -->
            <div
                class="aspect-video w-full bg-surface-container-high border border-outline-variant rounded overflow-hidden relative group">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.580039012134!2d-77.01907612517547!3d-12.003534388229887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cf7b844d5b27%3A0x9016d8f62470e2f2!2sAv.%20Canto%20Grande%201482%2C%20Lima%2015408!5e0!3m2!1ses!2spe!4v1782283676924!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                <div
                    class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-all pointer-events-none">
                </div>
                <div
                    class="absolute bottom-md left-md bg-surface p-sm border border-outline-variant shadow-sm rounded">
                    <p class="font-label-sm text-label-sm text-primary">Sede Central Lima</p>
                </div>
            </div>
        </div>
        <!-- Right Column: Advanced Contact Form -->
        <div class="lg:col-span-7">
            <div class="bg-surface-container-low border border-outline-variant p-xl rounded-lg">
                <form class="space-y-lg" id="contact-form">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                        <!-- Name -->
                        <div class="space-y-xs">
                            <label class="font-label-md text-label-md text-primary" for="name">Nombre
                                Completo</label>
                            <input
                                class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus"
                                id="name" name="name" placeholder="Ej. Juan Pérez" required="" type="text" />
                        </div>
                        <!-- Company -->
                        <div class="space-y-xs">
                            <label class="font-label-md text-label-md text-primary"
                                for="company">Empresa</label>
                            <input
                                class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus"
                                id="company" name="company" placeholder="Nombre de su organización" required=""
                                type="text" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                        <!-- Email -->
                        <div class="space-y-xs">
                            <label class="font-label-md text-label-md text-primary" for="email">Correo
                                Electrónico</label>
                            <input
                                class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus"
                                id="email" name="email" placeholder="ejemplo@empresa.com" required=""
                                type="email" />
                        </div>
                        <!-- Service Dropdown -->
                        <div class="space-y-xs">
                            <label class="font-label-md text-label-md text-primary" for="service">Servicio de
                                Interés</label>
                            <select
                                class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus appearance-none"
                                id="service" name="service" required="">
                                <option disabled="" selected="" value="">Seleccione un servicio</option>
                                <option value="ingenieria">Ingeniería Civil y Estructural</option>
                                <option value="laboratorio">Pruebas de Laboratorio</option>
                                <option value="supervision">Supervisión de Obra</option>
                                <option value="consultoria">Consultoría Técnica</option>
                                <option value="otros">Otros Requerimientos</option>
                            </select>
                        </div>
                    </div>
                    <!-- Message -->
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-primary" for="message">Mensaje
                            Detallado</label>
                        <textarea
                            class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus resize-none"
                            id="message" name="message"
                            placeholder="Describa brevemente su proyecto o consulta técnica..." required=""
                            rows="5"></textarea>
                    </div>
                    <!-- Terms -->
                    <div class="flex items-center gap-sm">
                        <input
                            class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-primary-container"
                            id="terms" name="terms" required="" type="checkbox" />
                        <label class="font-body-sm text-body-sm text-on-surface-variant" for="terms">
                            Acepto la política de tratamiento de datos personales de GI SAC.
                        </label>
                    </div>
                    <!-- Submit Button -->
                    <button
                        class="w-full bg-secondary-container text-on-secondary-container font-label-md py-md rounded hover:brightness-110 transition-all uppercase tracking-widest font-bold"
                        type="submit">
                        Enviar Solicitud de Consulta
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="max-w-max-width mx-auto px-margin-desktop py-xxl">
    <div class="max-w-max-width mx-auto px-margin-desktop">
        <div class="max-w-3xl">
            <h1 class="font-headline-lg text-headline-lg md:text-headline-lg text-primary mb-md">
                TRABAJA CON NOSOTROS
            </h1>
        </div>
    </div>
    <div class="bg-surface-container-low border border-outline-variant p-xl rounded-lg">
        <form class="space-y-lg" id="trabaja-form" enctype="multipart/form-data">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                <!-- Nombre -->
                <div class="space-y-xs">
                    <label class="font-label-md text-label-md text-primary" for="name">Nombre completo</label>
                    <input class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus" id="name" name="name" placeholder="Ej. Juan Pérez" required type="text">
                </div>
                <!-- Documento -->
                <div class="space-y-xs">
                    <label class="font-label-md text-label-md text-primary" for="document">Documento (DNI/RUC)</label>
                    <input class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus" id="document" name="document" placeholder="Ej. 12345678" required type="text">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                <!-- Teléfono -->
                <div class="space-y-xs">
                    <label class="font-label-md text-label-md text-primary" for="phone">Teléfono</label>
                    <input class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus" id="phone" name="phone" placeholder="Ej. +51 987 654 321" required type="tel">
                </div>
                <!-- Email -->
                <div class="space-y-xs">
                    <label class="font-label-md text-label-md text-primary" for="email">Correo</label>
                    <input class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus" id="email" name="email" placeholder="ejemplo@empresa.com" required type="email">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                <!-- Puesto deseado -->
                <div class="space-y-xs">
                    <label class="font-label-md text-label-md text-primary" for="position">Puesto deseado</label>
                    <input class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus" id="position" name="position" placeholder="Ej. Ingeniero Estructural" required type="text">
                </div>
                <!-- Años de experiencia -->
                <div class="space-y-xs">
                    <label class="font-label-md text-label-md text-primary" for="experience">Experiencia (años)</label>
                    <input class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus" id="experience" name="experience" placeholder="Ej. 3" required type="number" min="0">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                <!-- Educación -->
                <div class="space-y-xs">
                    <label class="font-label-md text-label-md text-primary" for="education">Educación</label>
                    <select class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus appearance-none" id="education" name="education" required>
                        <option value="">Seleccione</option>
                        <option value="secundaria">Secundaria</option>
                        <option value="tecnico">Técnico</option>
                        <option value="universitario">Universitario</option>
                        <option value="posgrado">Posgrado</option>
                    </select>
                </div>
                <!-- Disponibilidad -->
                <div class="space-y-xs">
                    <label class="font-label-md text-label-md text-primary" for="availability">Disponibilidad</label>
                    <select class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus appearance-none" id="availability" name="availability" required>
                        <option value="">Seleccione</option>
                        <option value="inmediata">Inmediata</option>
                        <option value="1-2_semanas">1-2 semanas</option>
                        <option value="1_mes">1 mes</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                <!-- Remuneración esperada -->
                <div class="space-y-xs">
                    <label class="font-label-md text-label-md text-primary" for="salary">Remuneración esperada (opcional)</label>
                    <input class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus" id="salary" name="salary" placeholder="S/. 3,000" type="text">
                </div>
                <!-- Ciudad / Región -->
                <div class="space-y-xs">
                    <label class="font-label-md text-label-md text-primary" for="location">Ciudad / Región</label>
                    <input class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus" id="location" name="location" placeholder="Ej. Lima" type="text">
                </div>
            </div>

            <!-- Enlace portfolio / LinkedIn -->
            <div class="space-y-xs">
                <label class="font-label-md text-label-md text-primary" for="portfolio">Enlace (LinkedIn / Portfolio) (opcional)</label>
                <input class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus" id="portfolio" name="portfolio" placeholder="https://" type="url">
            </div>

            <!-- Mensaje breve -->
            <div class="space-y-xs">
                <label class="font-label-md text-label-md text-primary" for="message">Mensaje breve (opcional)</label>
                <textarea class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus resize-none" id="message" name="message" placeholder="Resumen de experiencia en 1-2 líneas" rows="3"></textarea>
            </div>

            <!-- CV upload -->
            <div class="space-y-xs">
                <label class="font-label-md text-label-md text-primary" for="cv">Adjuntar CV (PDF) — máximo 5MB</label>
                <input class="w-full bg-surface border border-outline-variant px-md py-sm rounded font-body-md form-input-focus" id="cv" name="cv" type="file" accept="application/pdf" required>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Solo PDF. Nombre del archivo: <span id="cv-name" class="font-bold">—</span></p>
            </div>

            <!-- Terms -->
            <div class="flex items-center gap-sm">
                <input class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-primary-container" id="terms" name="terms" required type="checkbox">
                <label class="font-body-sm text-body-sm text-on-surface-variant" for="terms">Acepto la política de tratamiento de datos personales de GI SAC.</label>
            </div>

            <!-- Submit Button -->
            <button class="w-full bg-secondary-container text-on-secondary-container font-label-md py-md rounded hover:brightness-110 transition-all uppercase tracking-widest font-bold" type="submit">Enviar CV</button>
        </form>

        <script>
            // Validación cliente: tipo y tamaño del CV, mostrar nombre
            (function() {
                const form = document.getElementById('trabaja-form');
                const cvInput = document.getElementById('cv');
                const cvName = document.getElementById('cv-name');
                const MAX_BYTES = 5 * 1024 * 1024; // 5MB

                cvInput.addEventListener('change', function() {
                    const file = cvInput.files[0];
                    if (!file) {
                        cvName.textContent = '—';
                        return;
                    }
                    cvName.textContent = file.name;
                    if (file.type !== 'application/pdf') {
                        alert('El archivo debe ser PDF.');
                        cvInput.value = '';
                        cvName.textContent = '—';
                    } else if (file.size > MAX_BYTES) {
                        alert('El archivo supera 5MB. Por favor sube un archivo más pequeño.');
                        cvInput.value = '';
                        cvName.textContent = '—';
                    }
                });

                form.addEventListener('submit', function(e) {
                    const file = cvInput.files[0];
                    if (!file) {
                        e.preventDefault();
                        alert('Adjunta tu CV en formato PDF.');
                        return;
                    }
                    if (file.size > MAX_BYTES) {
                        e.preventDefault();
                        alert('El CV supera 5MB.');
                        return;
                    }

                    // Feedback micro-interaction (client-side only)
                    e.preventDefault();
                    const btn = form.querySelector('button[type="submit"]');
                    const original = btn.innerText;
                    btn.innerText = 'Enviando...';
                    btn.disabled = true;
                    setTimeout(() => {
                        alert('Gracias. Tu CV fue enviado (simulado).');
                        btn.innerText = original;
                        btn.disabled = false;
                        form.reset();
                        cvName.textContent = '—';
                    }, 1200);
                });
            })();
        </script>
    </div>
</section>


<script>
    // Simple form handling
    const form = document.getElementById('contact-form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerText;

        // Micro-interaction
        submitBtn.innerText = 'Enviando...';
        submitBtn.disabled = true;
        submitBtn.style.opacity = '0.7';

        setTimeout(() => {
            alert('¡Gracias por contactarnos! Su solicitud ha sido enviada con éxito.');
            submitBtn.innerText = originalText;
            submitBtn.disabled = false;
            submitBtn.style.opacity = '1';
            form.reset();
        }, 1500);
    });

    // Sticky Navbar subtle effect
    // window.addEventListener('scroll', () => {
    //     const header = document.querySelector('header');
    //     if (window.scrollY > 50) {
    //         header.classList.add('shadow-md');
    //     } else {
    //         header.classList.remove('shadow-md');
    //     }
    // });
</script>
@endsection