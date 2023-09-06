const eyeIcon = document.getElementById('eye-icon')
const inputSenha = document.getElementById('input-senha')
const labelCpf = document.getElementById('label-cpf')
const inputCpf = document.querySelector('#cpf')

function TestarCPF(strCPF) {
    let Soma
    let Resto
    Soma = 0
    if (strCPF == "00000000000") return false

    for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i)
    Resto = (Soma * 10) % 11

    if ((Resto == 10) || (Resto == 11))  Resto = 0
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i)
    Resto = (Soma * 10) % 11

    if ((Resto == 10) || (Resto == 11))  Resto = 0
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false
    return true
}

eyeIcon.addEventListener('click', function() {
    if (inputSenha.getAttribute('type') == 'password') {
        eyeIcon.src = './assets/icons/eye-slash-fill.svg'
        inputSenha.type = 'text'
    } else {
        eyeIcon.src = './assets/icons/eye-fill.svg'
        inputSenha.type = 'password'
    }
})

// document.querySelector('form').addEventListener('submit', function(e) {
//     if (TestarCPF(inputCpf.value.replace('.', '').replace('.', '').replace('-', '')) == false) {
//         e.preventDefault()
//         labelCpf.style.display = 'block'
//     }
// })

$(document).ready(function() {
    $('#cpf').mask('000.000.000-00')
})