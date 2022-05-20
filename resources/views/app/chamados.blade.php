<section id="header-secao">
    <h4>
        <img src="{{ asset('icones/icone-checklist.svg') }}">
        <span>Chamados</span>
    </h4>
    <a href="/novo-chamado" onclick="render('novo-chamado',event)">
        <img src="{{ asset('icones/add.svg') }}" alt="">
        <span>Novo chamado</span>
    </a>
</section>

<section id="filtro-chamados" class="body-secao">
    <div id="titulo-filtro-chamados">
        <img src="{{ asset('icones/lupa.svg') }}" alt="">
        <span>Filtro</span> 
    </div>
    <form action="" method="GET">
        <div class="form-grupo">
            <label for="cliente">Cliente</label>
            <input type="text" id="cliente">
        </div>

        <div class="form-grupo">
            <label for="data_inicio">Data inicio</label>
            <input type="date" id="data_inicio">
        </div>

        <div class="form-grupo">
            <label for="data_fim">Data fim</label>
            <input type="date" id="data_fim">
        </div>

        <div class="form-grupo">
            <label for="situacao">Situação</label>
            <select id="situacao">
                <option value="">Todos</option>
                <option value="">Em aberto</option>
                <option value="">Fechado</option>
            </select>
        </div>

        <div class="form-grupo">
            <label for="usuario">Usuario responsável</label>
            <input type="text" id="usuario">
        </div>

        <div class="form-grupo">
            <label for="departamento">Departamento</label>
            <select id="departamento">
                <option value="">Todos</option>
                <option value="">Manutenção</option>
                <option value="">Fechado</option>
            </select>
        </div>

        <div class="form-grupo">
            <label for="atendente">Atendente</label>
            <input type="text" id="atendente">
        </div>

        <div class="grupo-botoes">
            <button>
                <img src="{{ asset('icones/lupa-white.svg') }}" alt="">
                <span>Filtrar</span>
            </button>
            <button type="button" onclick="limparFiltroChamados()">
                <img src="{{ asset('icones/lixeira.svg') }}" alt="">
                <span>Limpar</span>
            </button>
        </div>

    </form>
</section>