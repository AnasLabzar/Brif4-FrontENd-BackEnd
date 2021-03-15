window.onload = () => {
    const button1 = document.querySelector('.iconmenu');
    const button2 = document.querySelector('.btn--close')
    const menu = document.querySelector('.menuburg');

    button1.addEventListener('click', () => {
        menu.classList.add('menuburg-open')
    })

    button2.addEventListener('click', () => {
        menu.classList.remove('menuburg-open')
    })
}