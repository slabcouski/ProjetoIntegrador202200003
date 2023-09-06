const inputSenha = document.getElementById('input-senha')
const inputSenhaTwo = document.querySelector('#input-senha-2')
const eye = document.querySelector('#eye-icon')
const eyeTwo = document.querySelector('#eye-icon-2')
const labelSenha = document.getElementById('label-senha')
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

eye.addEventListener('click', function() {
    if (inputSenha.getAttribute('type') == 'password') {
        eye.src = '../../../assets/icons/eye-slash-fill.svg'
        inputSenha.type = 'text'
    } else {
        eye.src = '../../../assets/icons/eye-fill.svg'
        inputSenha.type = 'password'
    }
})

eyeTwo.addEventListener('click', function() {
    if (inputSenhaTwo.getAttribute('type') == 'password') {
        eyeTwo.src = '../../../assets/icons/eye-slash-fill.svg'
        inputSenhaTwo.type = 'text'
    } else {
        eyeTwo.src = '../../../assets/icons/eye-fill.svg'
        inputSenhaTwo.type = 'password'
    }
})

inputCpf.addEventListener('keyup', function() {
    if (inputCpf.value.length == 14) {
        labelCpf.style.display = 'none'
    }
})

document.querySelector('form').addEventListener('submit', function(e) {

    // alert(inputCpf.value.replace('.', '').replace('.', '').replace('-', ''))

    if (inputCpf.value.length != 14) {
        e.preventDefault()
        labelCpf.style.display = 'block'
        return
    }

    if (inputSenha.value.length < 8 || inputSenhaTwo.value.length < 8) {
        e.preventDefault()
        labelSenha.style.display = 'block'
        labelSenha.innerHTML = 'Minimo 8 characteres'
        return
    }

    if (inputSenha.value != inputSenhaTwo.value || inputSenhaTwo.value != inputSenha.value) {
        e.preventDefault()
        labelSenha.style.display = 'block'
        labelSenha.innerHTML = 'Senhas diferentes'
        return
    }

    // if (TestarCPF(inputCpf.value.replace('.', '').replace('.', '').replace('-', '')) == false) {
    //     e.preventDefault()
    //     labelCpf.style.display = 'block'
    //     return
    // }

})

$(document).ready(function() {
    $('#cpf').mask('000.000.000-00')
})