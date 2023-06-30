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





//Repare que os modais têm os seguintes seletores:
//
// Modal de adicionar funcionário: #addEmployeeModal
// Modal de editar funcionário: #editEmployeeModal
function setupValidation(modalSelector) {
    //Busca todos os formulários aos quais queremos aplicar estilos personalizados de validação de Bootstrap
    const forms = document.querySelectorAll(
        `${modalSelector} .needs-validation`
    );

    // Faz um loop sobre eles e evita submissão
    Array.from(forms).forEach((form) => {
        form.addEventListener("submit", (event) => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add("was-validated");
        }, false);
    });

    // Opção 1 - "ontem" pois "hoje" dava problema. Aí segue a regra de negócio agora:
    const validarDatasIniciaiseFinais = () => {
        const dataInicialInput = document.querySelector(
            `${modalSelector} [name="data_inicial"]`
        );
        const dataFinalInput = document.querySelector(
            `${modalSelector} [name="data_final"]`
        );

        const dataInicial = dataInicialInput.value;
        const dataFinal = dataFinalInput.value;

        const invalidFeedbackInicial = document.querySelectorAll(
            `${modalSelector} .invalid-feedback`
        )[1];
        const invalidFeedbackFinal = document.querySelectorAll(
            `${modalSelector} .invalid-feedback`
        )[2];

        const hoje = new Date();
        const ontem = new Date(hoje);
        ontem.setDate(ontem.getDate() - 1);

        const dataInicialValida = new Date(dataInicial) <= hoje;
        const dataFinalValida = !dataFinal || new Date(dataFinal) > ontem || new Date(dataFinal).toDateString() === ontem.toDateString();

        if (
            dataInicial &&
            dataInicialValida &&
            dataFinalValida
        ) {
            invalidFeedbackInicial.style.display = "none";
            invalidFeedbackFinal.style.display = "none";
            dataInicialInput.setCustomValidity("");
            dataFinalInput.setCustomValidity("");
            return true;
        } else {
            if (!dataInicial || !dataInicialValida) {
                invalidFeedbackInicial.textContent =
                    "A data INICIAL deve ser válida e anterior ou igual à data atual.";
                invalidFeedbackInicial.style.display = "block";
                invalidFeedbackFinal.style.display = "none";
                dataFinalInput.setCustomValidity("");
                dataInicialInput.setCustomValidity(
                    "A data INICIAL deve ser válida e anterior ou igual à data atual."
                );
            } else {
                invalidFeedbackInicial.style.display = "none";
                invalidFeedbackFinal.textContent =
                    "A data FINAL deve ser igual ou posterior à data atual.";
                invalidFeedbackFinal.style.display = "block";
                dataInicialInput.setCustomValidity("");
                dataFinalInput.setCustomValidity("Campo obrigatório");
            }
            return false;
        }
    };


    // Event listener para o botão de envio
    const botaoEnviar = document.querySelector(
        `${modalSelector} .botaoEnviar`
    );
    botaoEnviar.addEventListener("click", (event) => {
        if (!validarDatasIniciaiseFinais()) {
            event.preventDefault();
        }
    });

    // Event listener para o input de data inicial
    const dataInicialInput = document.querySelector(
        `${modalSelector} [name="data_inicial"]`
    );
    dataInicialInput.addEventListener("input", validarDatasIniciaiseFinais);

    // Event listener para o input de data final
    const dataFinalInput = document.querySelector(
        `${modalSelector} [name="data_final"]`
    );
    dataFinalInput.addEventListener("input", validarDatasIniciaiseFinais);
}

// Chamadas para configurar a validação em cada modal específico
setupValidation("#addEmployeeModal");
setupValidation("#editEmployeeModal");






