<nav class="barra-navegacao-container">
    <div class="header-barra-navegacao">
        <img src="{{ asset('imagens/pngtree-user-vector-avatar-png-image_1541962.jpg')  }} " class="foto-usuario-barra-navegacao" alt="">
        <p class="nome-usuario-barra-navegacao">Rafael Raposo</p>
    </div>
    <div class="body-barra-navegacao">
        <ul>
            <li>
                <a href="{{ route('site.index') }}">
                    <img src="{{ asset('icones/planilha.svg') }}" alt="">
                    <span>Dashboard</span>
                    <img src="{{ asset('icones/arrow-right.svg') }}" alt="">
                </a>
            </li>
            <li>
                <a href="{{ route('site.chamados') }}" onclick="render('chamados',event)">
                    <img src="{{ asset('icones/planilha.svg') }}" alt="">
                    <span>Chamados</span>
                    <img src="{{ asset('icones/arrow-right.svg') }}" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('icones/planilha.svg') }}" alt="">
                    <span>Clientes</span>
                    <img src="{{ asset('icones/arrow-right.svg') }}" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('icones/planilha.svg') }}" alt="">
                    <span>Clientes</span>
                    <img src="{{ asset('icones/arrow-right.svg') }}" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('icones/planilha.svg') }}" alt="">
                    <span>Clientes</span>
                    <img src="{{ asset('icones/arrow-right.svg') }}" alt="">
                </a>
            </li>
        </ul>
    </div>
    <div class="footer-barra-navegacao">
        <h4>@2022- BrockSolution</h4>
    </div>
</nav>