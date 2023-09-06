const bodyHtml = document.querySelector('html')
const openConfig = document.getElementById('open-config')
const divConfigFonte = document.getElementById('div-config-fonte')
const divConfigTema = document.getElementById('div-config-tema')
const headerImg = document.getElementById('header-img')
const modalConfiguracoes = new bootstrap.Modal(document.getElementById('modalConfig'), {})

function saveLocalStorage(theme) {
    let themeObject = {theme: theme}
    let txtTheme = JSON.stringify(themeObject)
    themeObject  = JSON.parse(txtTheme)
    localStorage.setItem('Theme-SenacPI', JSON.stringify(themeObject))
}

function getLocalStorage() {
    let themeSelected = JSON.parse(localStorage.getItem("Theme-SenacPI"))
    if (themeSelected.theme == 'dark') {
        return 'dark'
    } else if (themeSelected.theme == 'accessibility') {
        return 'accessibility'
    }

    return 'default'
}

function editClass(target, state, className) {
    if (state == 'add') {
        target.classList.add(className)
        return
    }
    
    target.classList.remove(className)
}

function effect(target, transition, translate) {
    target.style.transition = transition
    target.style.translate = translate
}

function changeTheme(theme) {
    if (theme == 'dark') {
        editClass(bodyHtml, 'remove', 'default')
        editClass(bodyHtml, 'remove', 'accessibility')
        editClass(bodyHtml, 'add', theme)
        effect(divConfigTema, '0.5s', '100%')
        saveLocalStorage(theme)
        headerImg.src = '../../../assets/imgs/Logo_Senac_White.png'
        return
    } else if (theme == 'accessibility') {
        editClass(bodyHtml, 'remove', 'default')
        editClass(bodyHtml, 'remove', 'dark')
        editClass(bodyHtml, 'add', theme)
        effect(divConfigTema, '0.5s', '200%')
        saveLocalStorage(theme)
        headerImg.src = '../../../assets/imgs/Logo_Senac_Black.png'
        return
    }

    editClass(bodyHtml, 'remove', 'accessibility')
    editClass(bodyHtml, 'remove', 'dark')
    editClass(bodyHtml, 'add', 'default')
    effect(divConfigTema, '0.5s', '0%')
    saveLocalStorage('default')
    headerImg.src = '../../../assets/imgs/Logo_Senac.png'
}

openConfig.addEventListener('click', function() {
    modalConfiguracoes.show()
})

divConfigTema.addEventListener('click', function() {
    if (bodyHtml.classList.contains('default')) {
        changeTheme('dark')
        return
    } else if (bodyHtml.classList.contains('dark')) {
        changeTheme('accessibility')
        return
    }

    changeTheme() 
})

if (getLocalStorage() == 'dark') {
    changeTheme('dark')
} else if (getLocalStorage() == 'accessibility') {
    changeTheme('accessibility')
}