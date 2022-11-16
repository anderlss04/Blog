const campo = document.getElementById("formPass");
console.log(campo);
campo.addEventListener("mouseover", () => {
    campo.removeAttribute("type");

})

campo.addEventListener("mouseout", () => {

    campo.setAttribute("type", "password");

})