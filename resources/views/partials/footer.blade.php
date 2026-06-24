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
                <li><a class="text-white/70 hover:text-secondary hover:underline transition-colors"
                        href="#">Encuesta de Satisfacción</a></li>
                <li><a class="text-white/70 hover:text-secondary hover:underline transition-colors" href="#">Libro
                        de Reclamaciones</a></li>
                <li><a class="text-white/70 hover:text-secondary hover:underline transition-colors"
                        href="#">Certificados ISO 17025</a></li>
                <li><a class="text-white/70 hover:text-secondary hover:underline transition-colors"
                        href="#">Políticas de Privacidad</a></li>
            </ul>
        </div>
        <div class="flex flex-col gap-6">
            <h5 class="font-label-caps text-label-caps text-secondary font-bold">INFORMACIÓN LEGAL</h5>
            <div class="text-white/70 space-y-2">
                <p>{{$company->nombre}}</p>
                <p>RUC: {{$company->ruc}}</p>
                <p>© 2026 {{$company->nombre}}. Todos los derechos reservados.</p>
            </div>
            <div class="mt-4 p-4 border border-outline-variant/30 bg-white/5">
                <p class="text-[10px] font-label-caps text-white/50 leading-tight">SISTEMA DE GESTIÓN CERTIFICADO
                    POR ENTIDADES NACIONALES E INTERNACIONALES.</p>
            </div>
        </div>
    </div>
</footer>
<!-- WhatsApp Floating Button -->
<a class="fixed bottom-8 right-8 z-[100] bg-[#25D366] text-white p-4 rounded-full shadow-2xl hover:scale-110 active:scale-95 transition-all group flex items-center justify-center"
    href="https://wa.me/{{$company->whatsapp}}" target="_blank">
    <svg class="w-8 h-8" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.025 3.012l-.533 1.944 2.016-.531c.712.466 1.632.741 2.525.741 3.18 0 5.767-2.586 5.768-5.766 0-3.181-2.587-5.766-5.833-5.766zm3.336 8.019c-.144.405-.831.78-1.155.828-.323.05-1.031.144-2.144-.311-1.114-.456-2.031-1.572-2.316-1.956-.048-.066-.016-.101.016-.137.031-.031.144-.176.216-.264.072-.088.096-.144.144-.24s.024-.176-.012-.252c-.036-.076-.324-.781-.444-1.07-.116-.282-.236-.24-.324-.245l-.276-.005c-.192 0-.504.072-.768.36-.264.288-1.008.984-1.008 2.399s1.032 2.784 1.176 2.976c.144.192 2.031 3.1 4.912 4.346.687.296 1.224.474 1.64.607.69.219 1.319.189 1.815.114.552-.084 1.692-.692 1.932-1.362s.24-1.248.168-1.362c-.072-.114-.264-.183-.552-.328z">
        </path>
    </svg>
    <span
        class="max-w-0 overflow-hidden group-hover:max-w-xs group-hover:ml-3 transition-all duration-300 font-label-caps text-[12px] whitespace-nowrap">CONSULTA
        TÉCNICA</span>
</a>