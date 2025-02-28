const logsign = document.querySelector('.logsign');
const btnreg = document.querySelector('.btnreg-btn');
const btnlog = document.querySelector('.btnlog-btn');

btnreg.addEventListener('click', () => {
    logsign.classList.add('active');
})

btnlog.addEventListener('click', () => {
    logsign.classList.remove('active');
})


