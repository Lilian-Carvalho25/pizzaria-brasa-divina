let massaSelecionada = null;
        let molhoSelecionado = null;
        let recheiosSalgadosSelecionados = 0;
        let recheiosDocesSelecionados = 0;
        const limiteRecheiosSalgados = 6;
        const limiteRecheiosDoces = 3;
        const limiteMassas = 1;
        let opcoesSelecionadasObj = {}; // Armazena as opções selecionadas

        function selecionarProduto(produto) {
            const categoria = produto.classList[0];

            if (categoria === 'size-pasta') {
                if (massaSelecionada && massaSelecionada !== produto) {
                    massaSelecionada.classList.remove('selected');
                }
                massaSelecionada = produto;
            } else if (categoria === 'types-sauces') {
                if (molhoSelecionado && molhoSelecionado !== produto) {
                    molhoSelecionado.classList.remove('selected');
                }
                molhoSelecionado = produto;

                // Desmarcar todos os recheios doces ao selecionar um molho
                const recheiosDoces = document.getElementsByClassName('types-fillings-candy');
                for (let i = 0; i < recheiosDoces.length; i++) {
                    recheiosDoces[i].classList.remove('selected');
                }
                recheiosDocesSelecionados = 0;
            } else if (categoria === 'types-fillings' || categoria === 'types-fillings-candy') {
                const isRecheioSalgado = categoria === 'types-fillings';

                // Verifica se já foi selecionado um molho, se sim, bloqueia a seleção de recheios doces
                if (molhoSelecionado && !isRecheioSalgado) {
                    return;
                }

                // Verifica o limite de seleções na categoria correspondente e bloqueia a seleção
                if (isRecheioSalgado && recheiosSalgadosSelecionados >= limiteRecheiosSalgados) {
                    produto.classList.remove('selected'); // Desmarca o item caso tenha atingido o limite de recheios salgados
                    return;
                }

                if (!isRecheioSalgado && recheiosDocesSelecionados >= limiteRecheiosDoces) {
                    produto.classList.remove('selected'); // Desmarca o item caso tenha atingido o limite de recheios doces
                    return;
                }

                if (isRecheioSalgado) {
                    recheiosSalgadosSelecionados += produto.classList.contains('selected') ? 1 : -1;
                } else {
                    recheiosDocesSelecionados += produto.classList.contains('selected') ? 1 : -1;
                }
            }

            produto.classList.toggle('selected');
            atualizarOpcoesSelecionadas();
        }

        function atualizarOpcoesSelecionadas() {
            const opcoesSelecionadas = document.getElementById('opcoesSelecionadas');
            const opcoes = [];

            // Atualiza o objeto de opções selecionadas
            opcoesSelecionadasObj = {};

            // Adiciona a massa selecionada ao objeto
            if (massaSelecionada) {
                opcoesSelecionadasObj['massa'] = massaSelecionada.querySelector('h4').innerText;
            }

            // Adiciona o molho selecionado ao objeto
            if (molhoSelecionado) {
                opcoesSelecionadasObj['molho'] = molhoSelecionado.querySelector('h4').innerText;
            }

         // Adiciona os recheios selecionados ao objeto
         const recheiosSelecionados = document.getElementsByClassName('selected');
         for (let i = 0; i < recheiosSelecionados.length; i++) {
             const recheio = recheiosSelecionados[i].querySelector('h4').innerText;
             const categoria = recheiosSelecionados[i].classList[0];
             if (categoria === 'types-fillings') {
                 opcoesSelecionadasObj['recheios'] = opcoesSelecionadasObj['recheios'] || [];
                 opcoesSelecionadasObj['recheios'].push(recheio);
             } else if (categoria === 'types-fillings-candy') {
                 opcoesSelecionadasObj['recheiosDoces'] = opcoesSelecionadasObj['recheiosDoces'] || [];
                 opcoesSelecionadasObj['recheiosDoces'].push(recheio);
             }
         }

         // Cria a string final de opções a ser exibida no parágrafo
         opcoes.push(`massa: ${opcoesSelecionadasObj['massa'] || '-'}`);
         opcoes.push(`molho: ${opcoesSelecionadasObj['molho'] || '-'}`);
         if (opcoesSelecionadasObj['recheios']) {
             opcoes.push(`slg: ${opcoesSelecionadasObj['recheios'].join(', ')}`);
         }
         if (opcoesSelecionadasObj['recheiosDoces']) {
             opcoes.push(`dcs: ${opcoesSelecionadasObj['recheiosDoces'].join(', ')}`);
         }

         // Atualiza o parágrafo com as opções selecionadas
         opcoesSelecionadas.innerHTML = `<span>Opções selecionadas: </span>${opcoes.join('; ')}.`;
     }