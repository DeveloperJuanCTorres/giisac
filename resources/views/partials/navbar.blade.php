@php
    $brochure = json_decode($company->brochure, true);
    $urlBrochure = !empty($brochure)
        ? asset('storage/' . str_replace('\\', '/', $brochure[0]['download_link']))
        : null;
@endphp

<nav class="mc-navbar" id="mcNavbar">

    <div class="mc-navbar-container">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="mc-navbar-logo">
            <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}">
        </a>

        {{-- Menú Desktop --}}
        <ul class="mc-navbar-menu">

            <li>
                <a href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Inicio
                </a>
            </li>

            <li>
                <a href="{{ route('nosotros') }}"
                    class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">
                    Nosotros
                </a>
            </li>

            <li>
                <a href="{{ route('servicios') }}"
                    class="{{ request()->routeIs('servicios') ? 'active' : '' }}">
                    Servicios
                </a>
            </li>

            <li>
                <a href="{{ route('proyectos') }}"
                    class="{{ request()->routeIs('proyectos') ? 'active' : '' }}">
                    Proyectos
                </a>
            </li>

            <li>
                <a href="{{ route('contactanos') }}"
                    class="{{ request()->routeIs('contactanos') ? 'active' : '' }}">
                    Contáctanos
                </a>
            </li>

        </ul>

        {{-- Botón derecha --}}
        <div class="mc-navbar-actions">

            @if($urlBrochure)
                <a href="{{ $urlBrochure }}"
                   download="Brochure.pdf"
                   class="mc-btn-primary">
                    <span>Descargar Brochure</span>
                </a>
            @endif

            {{-- Hamburguesa --}}
            <button class="mc-hamburger"
                    id="mcHamburger"
                    aria-label="Abrir menú">

                <span></span>
                <span></span>
                <span></span>

            </button>

        </div>

    </div>

</nav>

{{-- ===========================
        OVERLAY
============================ --}}

<div class="mc-overlay" id="mcOverlay"></div>

{{-- ===========================
        OFFCANVAS
============================ --}}

<aside class="mc-drawer" id="mcDrawer">

    <div class="mc-drawer-header">

        <img src="{{ asset('storage/' . $company->logo) }}"
             alt="Logo">

        <button class="mc-close"
                id="mcClose">

            <svg width="24"
                 height="24"
                 viewBox="0 0 24 24"
                 fill="none">

                <path d="M18 6L6 18"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"/>

                <path d="M6 6L18 18"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"/>

            </svg>

        </button>

    </div>

    <div class="mc-drawer-body">

        <a href="{{ route('home') }}"
           class="{{ request()->routeIs('home') ? 'active' : '' }}">
            Inicio
        </a>

        <a href="{{ route('nosotros') }}"
           class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">
            Nosotros
        </a>

        <a href="{{ route('servicios') }}"
           class="{{ request()->routeIs('servicios') ? 'active' : '' }}">
            Servicios
        </a>

        <a href="{{ route('proyectos') }}"
           class="{{ request()->routeIs('proyectos') ? 'active' : '' }}">
            Proyectos
        </a>

        <a href="{{ route('contactanos') }}"
           class="{{ request()->routeIs('contactanos') ? 'active' : '' }}">
            Contáctanos
        </a>

    </div>

    @if($urlBrochure)

        <div class="mc-drawer-footer">

            <a href="{{ $urlBrochure }}"
               download="Brochure.pdf"
               class="mc-btn-primary mc-btn-full">

                Descargar Brochure

            </a>

        </div>

    @endif

</aside>