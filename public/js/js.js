var paginas = [' '];

function render(janela,e){
    e.preventDefault();
    paginas.push(janela)
    $('.quadro-exibicao').html(' <div id="tela-loading"><img src="/imagens/loading.gif" }}" alt=""></div>');

    setTimeout(()=>{
            $.get('/'+janela,(data)=>{
            $('.quadro-exibicao').html(data)
        })
    },1000)
}

function voltar(){
    paginas.pop();
    pagina = paginas[paginas.length - 1]
    $('.quadro-exibicao').html(' <div id="tela-loading"><img src="/imagens/loading.gif" }}" alt=""></div>');
    setTimeout(()=>{
            $.get('/'+pagina,(data)=>{
            $('.quadro-exibicao').html(data)
        })
    },1000)
}

function limparFiltroChamados(){
    $('#cliente').val("")
    $('#data_inicio').val("")
    $('#data_fim').val("")
    $('#situacao').val("")
    $('#usuario').val("")
    $('#departamento').val("")
    $('#atendente').val("")
}

function limparNovoChamado(){
     $('#cliente').val("")
    $('#data_abertura').val("")
    $('#setor').val("")
    $('#tipo').val("")
    $('#prioridade').val("")
    $('#atendente').val("")
    $('#status').val("")
    $('#contrato').val("")
    $('#descricao').val("")
}

