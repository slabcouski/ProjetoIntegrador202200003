const buttons = document.querySelectorAll('button')
const titleModal = document.getElementById('teste')

buttons.forEach(function(e) {
    e.addEventListener('click', function() {
        let ucID = `${e.id}UC`
        let chID = `${e.id}CH`
        let uc = document.getElementById(ucID)
        let ch = document.getElementById(chID)
        titleModal.innerHTML = uc.innerHTML + ' - ' + ch.innerHTML
    })
})