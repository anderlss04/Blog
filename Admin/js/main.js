const eli = document.querySelectorAll(".nav-link");
const posts = document.querySelectorAll(".cartaPost");
let cantidad = posts.length;
let dividir = 5;
let repetir = Math.ceil(cantidad / dividir)
const loc = url => { return url.split("=").pop() };
const URLactual = loc(window.location + "");
var contenedor = document.querySelector('.pagination');
var prueba = 5;
for (let i = 0; i < repetir; i++) {
    let item = document.createElement('li')
    let buton = document.createElement('input')
    buton.setAttribute("type", "button");
    buton.setAttribute("value", i + 1);
    buton.setAttribute("onclick", `Dibujar(${i})`);
    buton.setAttribute("id", `sig${i}`);

    item.appendChild(buton);
    contenedor.appendChild(item)
    document.querySelector(".pagination").write = item
}


// console.log(nuevo[2][0])



document.querySelector('body').style.backgroundColor = "rgba(221, 217, 217, 0.287)"

const activar = x => {
    x.forEach(element => {
        section = element.getAttribute('key');
        section == URLactual ? (element.classList.add('active')) :
            element.classList.remove('active');
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

function EsCconder() {
    posts.forEach(x => { x.style.display = "none" });

}
//pag 

let arrayPage = [];
posts.forEach(x => { arrayPage.push(x), x.style.display = "none" });
const pagList = document.querySelectorAll('.pagination');
const showList = document.querySelectorAll('.list');

function paginationBtn(arr, size = 5) {
    let btn = '';

    pagList.forEach((elem, i) => {
        for (let i = 0; i < arr.length / size; i++) {
            btn += `<button class='pagination__btn'>${i + 1}</button>`
        }
        elem.innerHTML = btn;
    });
}

paginationBtn(arrayPage);
const btnPag = document.querySelectorAll('.pagination__btn');

function smartList(page, size = 5) {
    let arrayList = [];
    arrayList = arrayPage.slice().splice(page * size, size);
    showList.forEach((elem, i) => {
        let item = '';
        for (let i = 0; i < arrayList.length; i++) {
            arrayList[i].style.display = "block"
        }
    })
    btnPag[0].classList.add('pagination__btn-active');
}

function addClass(btnElem, prevBtn) {
    prevBtn.forEach(elem => elem.classList.remove('pagination__btn-active'));
    btnElem.classList.add('pagination__btn-active');
}
if (btnPag != null && btnPag != undefined) {
    btnPag.forEach((elem, i) => {
        elem.addEventListener('click', () => {
            EsCconder();
            smartList(i);
            addClass(elem, btnPag);
        });
    });

    smartList(0);
}