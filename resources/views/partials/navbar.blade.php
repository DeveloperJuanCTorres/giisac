<nav class="docked full-width top-0 sticky z-50 bg-surface/90 backdrop-blur-md border-b border-outline-variant/30">
    <div class="flex justify-between items-center px-8 py-4 max-w-container-max mx-auto w-full">

        <div class="text-body-lg font-display-lg font-bold tracking-tight text-primary">
            <a href="{{ route('home') }}">
                <img src="{{asset('storage/' . $company->logo)}}" width="150" alt="">
            </a>
        </div>

        <div class="hidden md:flex items-center space-x-8">

            <a href="{{ route('home') }}"
                class="font-label-caps text-label-caps pb-1 transition-all duration-200
                {{ request()->routeIs('home')
                    ? 'text-secondary border-b-2 border-secondary'
                    : 'text-on-surface-variant hover:text-secondary' }}">
                Inicio
            </a>

            <a href="{{ route('nosotros') }}"
                class="font-label-caps text-label-caps pb-1 transition-all duration-200
                {{ request()->routeIs('nosotros')
                    ? 'text-secondary border-b-2 border-secondary'
                    : 'text-on-surface-variant hover:text-secondary' }}">
                Nosotros
            </a>

            <a href="{{ route('servicios') }}"
                class="font-label-caps text-label-caps pb-1 transition-all duration-200
                {{ request()->routeIs('servicios')
                    ? 'text-secondary border-b-2 border-secondary'
                    : 'text-on-surface-variant hover:text-secondary' }}">
                Servicios
            </a>

            <a href="{{ route('proyectos') }}"
                class="font-label-caps text-label-caps pb-1 transition-all duration-200
                {{ request()->routeIs('proyectos')
                    ? 'text-secondary border-b-2 border-secondary'
                    : 'text-on-surface-variant hover:text-secondary' }}">
                Proyectos
            </a>

            <a href="{{ route('contactanos') }}"
                class="font-label-caps text-label-caps pb-1 transition-all duration-200
                {{ request()->routeIs('contactanos')
                    ? 'text-secondary border-b-2 border-secondary'
                    : 'text-on-surface-variant hover:text-secondary' }}">
                Contáctanos
            </a>

        </div>
        
        @php
            $brochure = json_decode($company->brochure, true);
            $urlBrochure = !empty($brochure)
                ? asset('storage/' . str_replace('\\', '/', $brochure[0]['download_link']))
                : null;
        @endphp

        @if($urlBrochure)
            <a href="{{ $urlBrochure }}"
            download
            class="bg-secondary text-on-secondary px-6 py-2 font-label-caps text-label-caps tracking-widest hover:brightness-110 transition-all">
                Descargar Brochure
            </a>
        @endif

    </div>
</nav>