<section id="header-secao">
    <h4>
        <img src="{{ asset('icones/icone-checklist.svg') }}">
        <span>Chamados</span>
    </h4>
    <button onclick="alert('Botão clicado')">
        <img src="{{ asset('icones/add.svg') }}" alt="">
        <span>Novo chamado</span>
    </button>
</section>

<section id="filtro-chamados" class="body-secao">
    <div id="titulo-filtro-chamados">
        <img src="{{ asset('icones/lupa.svg') }}" alt="">
        <span>Filtro</span> 
    </div>
    <form action="" method="GET">
        <div class="form-grupo">
            <label for="">Cliente</label>
            <input type="text">
        </div>

        <div class="form-grupo">
            <label for="">Data inicio</label>
            <input type="date">
        </div>

        <div class="form-grupo">
            <label for="">Data fim</label>
            <input type="date">
        </div>

        <div class="form-grupo">
            <label for="">Situação</label>
            <select>
                <option value="">Todos</option>
                <option value="">Em aberto</option>
                <option value="">Fechado</option>
            </select>
        </div>

        <div class="form-grupo">
            <label for="">Usuario responsável</label>
            <input type="text">
        </div>

        <div class="form-grupo">
            <label for="">Departamento</label>
            <select>
                <option value="">Todos</option>
                <option value="">Manutenção</option>
                <option value="">Fechado</option>
            </select>
        </div>

        <div class="form-grupo">
            <label for="">Atendente</label>
            <input type="text">
        </div>

        <div class="grupo-botoes">
            <button>
                <img src="{{ asset('icones/lupa-white.svg') }}" alt="">
                <span>Filtrar</span>
            </button>
            <button>
                <img src="{{ asset('icones/lixeira.svg') }}" alt="">
                <span>Limpar</span>
            </button>
        </div>

    </form>
</section>