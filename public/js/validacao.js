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

function mostrarInfoMessage() {
    var dataInicial = document.getElementById("data_inicial_edit").value;
    var dataInfoMessage = document.getElementById("dataInfoMessage");

    if (!dataInicial) {
        dataInfoMessage.style.display = "block";
    } else {
        dataInfoMessage.style.display = "none";
    }
}


/*
//SEGUINDO A REGRA DE NEGÓCIO ATUAL -
//Opção 2 que funciona: Tive que deixar a variável dataFinal no formato esperado "AAAA-MM-DD" :
function validarDatasIniciaiseFinais() {
    var dataInicial = document.getElementsByName("data_inicial")[0].value;
    var dataFinal = document.getElementsByName("data_final")[0].value;
    var enviarBtn = document.getElementById("enviarBtn");
    var dataErrorMessage = document.getElementById("dataErrorMessage");

    var hoje = new Date();
    var anoAtual = hoje.getFullYear();
    var mesAtual = hoje.getMonth() + 1; // Os meses em JavaScript são indexados a partir de zero
    var diaAtual = hoje.getDate();

    // Ajusta o formato da data final para "AAAA-MM-DD"
    var partesDataFinal = dataFinal.split('/');
    var dataFinalFormatada = partesDataFinal[2] + '-' + partesDataFinal[1] + '-' + partesDataFinal[0];

    var dataFinalValida = new Date(dataFinalFormatada) >= new Date(anoAtual, mesAtual - 1, diaAtual);

    if (dataInicial && (dataFinal === "" || dataFinalValida)) {
        enviarBtn.disabled = false;
        enviarBtn.style.opacity = "1";
        dataErrorMessage.textContent = "";
        return true;
    } else if (!dataInicial && !dataFinal) {
        enviarBtn.disabled = true;
        enviarBtn.style.opacity = "0.5";
        dataErrorMessage.textContent = "Informe datas válidas.";
        return false;
    } else {
        enviarBtn.disabled = true;
        enviarBtn.style.opacity = "0.5";
        dataErrorMessage.textContent = "A data final deve ser igual ou posterior à data atual.";
        return false;
    }
}
*/

//Opção 1 - Escolhi utilizar essa
function validarDatasIniciaiseFinais() {
    var dataInicial = document.getElementsByName("data_inicial")[0].value;
    var dataFinal = document.getElementsByName("data_final")[0].value;
    var enviarBtn = document.getElementById("enviarBtn");
    var dataErrorMessage = document.getElementById("dataErrorMessage");

    var hoje = new Date();
    var ontem = new Date(hoje); // Cria uma cópia da data atual

    ontem.setDate(ontem.getDate() - 1); // Define o dia para ontem

    var dataFinalValida = new Date(dataFinal) >= ontem;

    if (dataInicial && (dataFinal === "" || dataFinalValida)) {
        enviarBtn.disabled = false;
        enviarBtn.style.opacity = "1";
        dataErrorMessage.textContent = "";
        return true;
    } else if (!dataInicial && !dataFinal) {
        enviarBtn.disabled = true;
        enviarBtn.style.opacity = "0.5";
        dataErrorMessage.textContent = "Informe datas válidas.";
        return false;
    } else {
        enviarBtn.disabled = true;
        enviarBtn.style.opacity = "0.5";
        dataErrorMessage.textContent = "A data final deve ser igual ou posterior a ontem.";
        return false;
    }
}



/*
//Opção 0: PERMITE QUE A DATA FINAL SEJA APENAS MAIOR QUE A INICAL NO JS (IGNORA TER QUE SER MAIOR Q HOJE)
function validarDatasIniciaiseFinais() {
    var dataInicial = document.getElementsByName("data_inicial")[0].value;
    var dataFinal = document.getElementsByName("data_final")[0].value;
    var enviarBtn = document.getElementById("enviarBtn");
    var dataErrorMessage = document.getElementById("dataErrorMessage");

    if (dataInicial && (dataFinal === "" || dataFinal >= dataInicial)) {
        enviarBtn.disabled = false;
        enviarBtn.style.opacity = "1";
        dataErrorMessage.textContent = "";
        return true;
    } else if (!dataInicial && !dataFinal) {
        enviarBtn.disabled = true;
        enviarBtn.style.opacity = "0.5";
        dataErrorMessage.textContent = "Informe datas válidas.";
        return false;
    } else {
        enviarBtn.disabled = true;
        enviarBtn.style.opacity = "0.5";
        dataErrorMessage.textContent = "A data final deve ser igual ou posterior à data inicial.";
        return false;
    }
}
*/
document.getElementsByName("data_inicial")[0].addEventListener("input", validarDatasIniciaiseFinais);
document.getElementsByName("data_final")[0].addEventListener("input", validarDatasIniciaiseFinais);




