function render(e,janela){
    e.preventDefault();
    $('.quadro-exibicao').html(' <div id="tela-loading"><img src="/imagens/loading.gif" }}" alt=""></div>');

    setTimeout(()=>{
            $.get('/chamados',(data)=>{
            $('.quadro-exibicao').html(data)
        })
    },2000)
}