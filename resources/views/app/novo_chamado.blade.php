<section id="header-secao-adicionar">
    <h4>
        <img src="{{ asset('icones/icone-checklist.svg') }}">
        <span>Novo chamado</span>
    </h4>
    <button type="button" class="btn-limpar" onclick="limparNovoChamado()">
        <img src="{{ asset('icones/lixeira.svg') }}" alt="">
        <span>Limpar</span>
    </button>
</section>

<section class="body-secao" id="novo-chamado">
    <form action="" method="POST">

        <div class="form-grupo">
            <label for="cliente">Cliente</label>
            <select name="" id="cliente">
                <option value="">Selecione um cliente</option>
                <option value="">Rafael</option>
                <option value="">Dilaine</option>
                <option value="">João</option>
                <option value="">Kleber</option>
                <option value="">Jurema</option>
                <option value="">Sabrina</option>
            </select>
            <button type="button" class="flash-add"><img src="/icones/add.svg" alt=""></button>
        </div>

        <div class="form-grupo">
            <label for="data_abertura">Data abertura</label>
            <input type="date" id="data_abertura">
        </div>

        <div class="form-grupo">
            <label for="setor">Setor responsável</label>
            <select name="" id="setor">
                <option value="">Dono de puteiro</option>
                <option value="">Manutenção</option>
                <option value="">Acesso remoto</option>
                <option value="">Tecnico de rua</option>
            </select>
        </div>

        <div class="form-grupo">
            <label for="tipo">Tipo problema</label>
            <select name="" id="tipo">
                <option value="">Software</option>
                <option value="">Hardware</option>
                <option value="">Configuração</option>
            </select>
        </div>

        <div class="form-grupo">
            <label for="prioridade">Nivel prioridade</label>
            <select name="" id="prioridade">
                <option value="">Baixo</option>
                <option value="">Medio</option>
                <option value="">Alto</option>
            </select>
        </div>

        <div class="form-grupo">
            <label for="atendente">Atendente responsavel</label>
            <select name="" id="atendente">
                <option value="">Dilaine</option>
                <option value="">Rafael</option>
                <option value="">Marcia</option>
            </select>
        </div>

        <div class="form-grupo">
            <label for="status">Status após abertura</label>
            <select name="" id="status">
                <option value="">Aberto</option>
                <option value="">Fechado</option>
                <option value="">Em andamento</option>
            </select>
        </div>

        <div class="form-grupo">
            <label for="contrato">Número contrato</label>
            <input type="number" id="contrato">
        </div>

        <div class="form-grupo full">
            <label for="descricao">Descrição do problema</label>
            <textarea name="" id="descricao" rows="10"></textarea>
        </div>

        <div class="grupo-botoes">
            <button type="button" onclick="voltar()">
                <img src="{{ asset('icones/angle-left-solid.svg') }}" alt="">
                <span>Voltar</span>
            </button>
            <button>
                <img src="{{ asset('icones/save.svg') }}" alt="">
                <span>Salvar</span>
            </button>
        </div>

    </form>
</section>