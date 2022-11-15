const eli = document.querySelectorAll(".nav-link");
const loc = url => { return url.split("=").pop() };
const URLactual = loc(window.location + "");
console.log(URLactual);

document.querySelector('body').style.backgroundColor = "rgba(221, 217, 217, 0.287)"

const activar = x => {
    x.forEach(element => {
        // element.addEventListener("change", () => {
        // desactivar(eli)
        section = element.getAttribute('key');
        console.log(section)
        section == URLactual ? (element.classList.add('active')) :
            element.classList.remove('active');
        // getSection(element.getAttribute('key'))
        // });
    });
}
const desactivar = x => {
    x.forEach(y =>
        y.classList.remove('active'))
}
const getSection = x => {
    document.getElementById('content-admin').innerHTML = '<?php echo include components/footer.php ?>'
}
activar(eli);