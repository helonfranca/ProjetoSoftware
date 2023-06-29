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
    const dataInicial = document.getElementsByName("data_inicial")[0].value;
    const dataFinal = document.getElementsByName("data_final")[0].value;
    const enviarBtn = document.getElementById("enviarBtn");
    const dataErrorMessageInicial = document.getElementById("dataErrorMessageInicial");
    const dataErrorMessageFinal = document.getElementById("dataErrorMessageFinal");

    const hoje = new Date();
    const ontem = new Date(hoje); // Cria uma cópia da data atual
    ontem.setDate(ontem.getDate() - 1); // Define o dia para ontem

    const dataInicialValida = new Date(dataInicial) <= hoje;
    const dataFinalValida = new Date(dataFinal) >= new Date(dataInicial);

    if (dataInicial && dataInicialValida && (dataFinal === "" || dataFinalValida)) {
        dataErrorMessageInicial.style.color = "black"; // Define a cor preta
        dataErrorMessageInicial.textContent = "";
        dataErrorMessageFinal.style.color = "black"; // Define a cor preta
        dataErrorMessageFinal.textContent = "";
        return true;
    } else if (!dataInicial || !dataInicialValida || !dataFinalValida) {
        if (!dataInicial || !dataInicialValida) {
            dataErrorMessageInicial.style.color = "red"; // Define a cor vermelha
            dataErrorMessageInicial.textContent = "A data INICIAL deve ser válida e anterior ou igual à data atual.";
            dataErrorMessageFinal.style.color = "black"; // Define a cor preta
            dataErrorMessageFinal.textContent = "";
        } else {
            dataErrorMessageInicial.style.color = "black"; // Define a cor preta
            dataErrorMessageInicial.textContent = "";
            dataErrorMessageFinal.style.color = "red"; // Define a cor vermelha
            dataErrorMessageFinal.textContent = "A data FINAL deve ser igual ou posterior à data inicial.";
        }
        return false;
    }
};

const enviarBtn = document.getElementById("enviarBtn");
enviarBtn.addEventListener("click", (event) => {
    if (!validarDatasIniciaiseFinais()) {
        event.preventDefault(); // Impede o envio do formulário caso as condições não sejam atendidas
    }
});

const dataInicialInput = document.getElementsByName("data_inicial")[0];
dataInicialInput.addEventListener("input", validarDatasIniciaiseFinais);

const dataFinalInput = document.getElementsByName("data_final")[0];
dataFinalInput.addEventListener("input", validarDatasIniciaiseFinais);






