const nomeSocialCheckbox = document.getElementById('nome-social')
const nomeSocialInput = document.getElementById('nome-social-input')
const enderecoCheckbox = document.getElementById('endereco')
const divEndereco = document.getElementById('div-endereco')
const buttonAlterarSenha = document.getElementById('buttonAlterarSenha')
const modalAlterarSenha = document.getElementById('modalAlerarSenha')

nomeSocialCheckbox.addEventListener('click', function() {
    if (nomeSocialCheckbox.checked) {
        nomeSocialInput.style.display = 'block'
        return
    }

    nomeSocialInput.style.display = 'none'
})

enderecoCheckbox.addEventListener('click', function() {
    if (enderecoCheckbox.checked) {
        divEndereco.style.display = 'block'
        return
    }

    divEndereco.style.display = 'none'
})
