const arrow = document.querySelectorAll('#seta-uc')

arrow.forEach(function(e) {
    e.addEventListener('click', function() {
        e.style.rotate = '0'
        e.parentElement.parentElement.classList.toggle('expand')
        e.classList.toggle('rotate')
    })
})