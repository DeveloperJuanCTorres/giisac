<!-- Footer -->
<footer class="bg-primary-container text-white border-t border-outline-variant/20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter px-8 py-stack-md max-w-container-max mx-auto w-full">
        <div class="flex flex-col gap-4">
            <div class="font-display-lg text-headline-md text-white">
                <img src="{{asset('storage/' . $company->logo)}}" width="200" alt="">
            </div>
            <p class="text-white/70 max-w-xs">
                {{$company->descripcion}}
            </p>
            <div class="flex gap-4 mt-4">

                <a href="{{ $company->link_facebook ?? '#' }}"
                target="_blank"
                class="text-white/70 hover:text-secondary transition-colors text-xl">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="{{ $company->link_instagram ?? '#' }}"
                target="_blank"
                class="text-white/70 hover:text-secondary transition-colors text-xl">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="{{ $company->link_linkedin ?? '#' }}"
                target="_blank"
                class="text-white/70 hover:text-secondary transition-colors text-xl">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <a href="{{ $company->link_youtube ?? '#' }}"
                target="_blank"
                class="text-white/70 hover:text-secondary transition-colors text-xl">
                    <i class="fab fa-youtube"></i>
                </a>

                <a href="{{ $company->link_tiktok ?? '#' }}"
                target="_blank"
                class="text-white/70 hover:text-secondary transition-colors text-xl">
                    <i class="fab fa-tiktok"></i>
                </a>

            </div>
        </div>
        <div class="flex flex-col gap-6">
            <h5 class="font-label-caps text-label-caps text-secondary font-bold">ACCESOS RÁPIDOS</h5>
            <ul class="space-y-3">
                <li>
                    <a class="text-white/70 hover:text-secondary hover:underline transition-colors"
                        href="{{route('home')}}">Inicio
                    </a>
                </li>
                <li>
                    <a class="text-white/70 hover:text-secondary hover:underline transition-colors" href="{{route('nosotros')}}">
                        Nosotros
                    </a>
                </li>
                <li>
                    <a class="text-white/70 hover:text-secondary hover:underline transition-colors"
                        href="{{route('servicios')}}">Servicios
                    </a>
                </li>
                <li>
                    <a class="text-white/70 hover:text-secondary hover:underline transition-colors"
                        href="{{route('proyectos')}}">Proyectos
                    </a>
                </li>
                <li>
                    <a class="text-white/70 hover:text-secondary hover:underline transition-colors"
                        href="{{route('contactanos')}}">Contáctanos
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex flex-col gap-6">
            <h5 class="font-label-caps text-label-caps text-secondary font-bold">INFORMACIÓN LEGAL</h5>
            <div class="text-white/70 space-y-2">
                <p>{{$company->nombre}}</p>
                <p>RUC: {{$company->ruc}}</p>
                <p>administrador@giisac.com</p>
                <p>laboratorio@giisac.com</p>
                <p>geotecnia@giisac.com</p>
                <p>© 2026 {{$company->nombre}}. Todos los derechos reservados.</p>
            </div>
            <div class="mt-4 p-4 border border-outline-variant/30 bg-white/5">
                <p class="text-[10px] font-label-caps text-white/50 leading-tight">SISTEMA DE GESTIÓN CERTIFICADO
                    POR ENTIDADES NACIONALES E INTERNACIONALES.</p>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="mc-footer-bottom">
        <div class="mc-footer-bottom-container">

            <div class="mc-footer-copy">
                © {{ date('Y') }} {{ $company->nombre }}. Todos los derechos reservados.
            </div>

            <div class="mc-footer-credits">
                Desarrollado por
                <a href="https://vesergenperu.com"
                target="_blank"
                rel="noopener">
                    Grupo VesergenPerú
                </a>
            </div>

        </div>
    </div>
</footer>
