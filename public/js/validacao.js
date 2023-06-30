(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()

function verificarSenhas() {
    var senhaNova = document.getElementById("password").value;
    var confirmeSenhaNova = document.getElementById("confirm_password").value;

    var senhaMessage = document.getElementById("senhaMessage");
    var confirmeSenhaMessage = document.getElementById("confirmeSenhaMessage");

    if (senhaNova !== confirmeSenhaNova) {
        senhaMessage.innerText = "As senhas não coincidem. Por favor, verifique novamente.";
        confirmeSenhaMessage.innerText = "As senhas não coincidem. Por favor, verifique novamente.";
    } else {
        senhaMessage.innerText = "";
        confirmeSenhaMessage.innerText = "";
    }
}

const descricaoTextareas = document.querySelectorAll('.descricao');
descricaoTextareas.forEach(function(descricaoTextarea) {
    const descricaoFeedback = descricaoTextarea.parentElement.querySelector('.invalid-feedback');

    descricaoTextarea.addEventListener('input', function() {
        const descricao = descricaoTextarea.value;

        if(descricao.length === 0){
            descricaoTextarea.setCustomValidity('O campo descrição é obrigatório.');
        } else if (descricao.length < 10) {
            descricaoTextarea.setCustomValidity('O campo descrição deve ter no mínimo 10 caracteres.');
        } else if (descricao.length > 255) {
            descricaoTextarea.setCustomValidity('O campo descrição deve ter no máximo 255 caracteres.');
        } else {
            descricaoTextarea.setCustomValidity('');
        }
        descricaoFeedback.textContent = descricaoTextarea.validationMessage;
    });
});


const quantidadeInputs = document.querySelectorAll('.quantidade');
quantidadeInputs.forEach(function(quantidadeInput) {
    quantidadeInput.addEventListener('input', function() {
        quantidadeInput.value = quantidadeInput.value.replace(/\D/g, '');
    });
});
function validarDataNascimento() {
    var inputNascimento = document.getElementById('datanascimento');

    inputNascimento.addEventListener('change', function() {
        var dataNascimento = new Date(inputNascimento.value);
        var dataAtual = new Date();
        var idade = dataAtual.getFullYear() - dataNascimento.getFullYear();

        // Verificar se a idade está entre 13 e 130 anos
        if (idade >= 13 && idade <= 130) {
            // A data de nascimento é válida
            inputNascimento.setCustomValidity('');
        } else {
            // A data de nascimento não é válida
            inputNascimento.setCustomValidity('A data de nascimento deve corresponder a uma idade entre 13 e 130 anos.');
        }
    });
}





    // Opção 1 - "ontem" pois "hoje" dava problema. Aí segue a regra de negócio agora:
const validarDatasIniciaiseFinais = () => {
    const dataInicialInput = document.getElementsByName("data_inicial")[0];
    const dataFinalInput = document.getElementsByName("data_final")[0];

    const dataInicial = dataInicialInput.value;
    const dataFinal = dataFinalInput.value;

    const invalidFeedbackInicial = document.getElementsByClassName("invalid-feedback")[1];
    const invalidFeedbackFinal = document.getElementsByClassName("invalid-feedback")[2];

    const hoje = new Date();
    const ontem = new Date(hoje);
    ontem.setDate(ontem.getDate() - 1);

    const dataInicialValida = new Date(dataInicial) <= hoje;
    const dataFinalValida = new Date(dataFinal) >= new Date(dataInicial);

    //dataInicialInput.setCustomValidity("Campo obrigatório");, isso indicará que o campo é inválido e exibirá a mensagem de erro personalizada fornecida.
    //Por outro lado, ao definir setCustomValidity(""), você está efetivamente removendo qualquer mensagem de erro personalizada e indicando que o campo é válido, permitindo que a validação do navegador seja executada com base nos atributos required, min, max, pattern, entre outros, definidos no campo de entrada.

    if (dataInicial && dataInicialValida && (dataFinal === "" || dataFinalValida)) {
        invalidFeedbackInicial.style.display = "none";
        invalidFeedbackFinal.style.display = "none";
        dataInicialInput.setCustomValidity(""); //PARA LIMPAR! IMPORTANTE! LIMPA "VERIFICAÇÃO = ou seja, INVALIDEZ", APESAR DE FALAR SOBRE ERRO, parece "desfazer", "retirar/desabilitar". Parece limpar/desinvalidar.
        dataFinalInput.setCustomValidity("");
        return true;
    } else if (!dataInicial || !dataInicialValida || !dataFinalValida) {
        if (!dataInicial || !dataInicialValida) {
            invalidFeedbackInicial.textContent = "A data INICIAL deve ser válida e anterior ou igual à data atual.";
            invalidFeedbackInicial.style.display = "block";
            invalidFeedbackFinal.style.display = "none";

            dataFinalInput.setCustomValidity(""); //PARA LIMPAR! IMPORTANTE! LIMPA "INVALIDEZ", APESAR DE FALAR SOBRE ERRO, parece "desfazer", "retirar/desabilitar".
            dataInicialInput.setCustomValidity("A data INICIAL deve ser válida e anterior ou igual à data atual."); //É necessário ter um texto dentro, apesar de estar aparecendo o texto anterior. Pois "" parece limpar/desinvalidar.
        } else {
            invalidFeedbackInicial.style.display = "none";
            invalidFeedbackFinal.textContent = "A data FINAL deve ser igual ou posterior à data inicial.";
            invalidFeedbackFinal.style.display = "block";

            dataInicialInput.setCustomValidity("");
            dataFinalInput.setCustomValidity("Campo obrigatório"); //É necessário ter um texto dentro, apesar de estar aparecendo o texto anterior. Pois "" parece limpar/desinvalidar.
        }
        return false;
    }
};



    //----------------


    const enviarBtn = document.getElementById("enviarBtn");
    enviarBtn.addEventListener("click", (event) => {
        if (!validarDatasIniciaiseFinais()) {
            event.preventDefault();
        }
    });

    const dataInicialInput = document.getElementsByName("data_inicial")[0];
    dataInicialInput.addEventListener("input", validarDatasIniciaiseFinais);

    const dataFinalInput = document.getElementsByName("data_final")[0];
    dataFinalInput.addEventListener("input", validarDatasIniciaiseFinais);






