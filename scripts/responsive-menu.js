init()

function init() {
    let btn = document.querySelector('.nav-btn');
    let nav = document.querySelector('.res-menu');

    // console.log(btn)
    
    btn.addEventListener('click', () => {
        console.log(nav)
        nav.classList.toggle('activate')
    })
}
