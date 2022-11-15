const cartas = document.querySelectorAll(".carta");
let val = document.querySelector('.per');
cartas.forEach(x => x.addEventListener('click', () => {
        val.style.display = "none"
        document.getElementById("contentPer").innerHTML = CrearCarta(x.id);
    },

))


function CrearCarta($id) {
    let sCarta = `<?php $id=${$id} ?>`
    sCarta += "<div class='container mt-4 mb-4 p-3 d-flex justify-content-center'>"
    sCarta += "    <div class='card p-4'>"
    sCarta += "        <div class=' image d-flex flex-column justify-content-center align-items-center'> <button"
    sCarta += "                class='btn btn-secondary'> <img src='https://i.imgur.com/wvxPV9S.png' height='100'"
    sCarta += "                    width='100' /></button> <span class='name mt-3'>Eleanor Pena</span> <span"
    sCarta += "                class='idd'>@eleanorpena</span>"
    sCarta += "            <div class='d-flex flex-row justify-content-center align-items-center gap-2'> <span"
    sCarta += "                    class='idd1'>Oxc4c16a645_b21a</span> <span><i class='fa fa-copy'></i></span> </div>"
    sCarta += "            <div class='d-flex flex-row justify-content-center align-items-center mt-3'> <span class='number'>1069"
    sCarta += "                    <span class='follow'>Followers</span></span> </div>"
    sCarta += "            <div class=' d-flex mt-2'> <button class='btn1 btn-dark'>Edit Profile</button> </div>"
    sCarta += "            <div class='text mt-3'> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital"
    sCarta += "                    artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div>"
    sCarta += "            <div class='gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center'> <span><i"
    sCarta += "                        class='fa fa-twitter'></i></span> <span><i class='fa fa-facebook-f'></i></span> <span><i"
    sCarta += "                        class='fa fa-instagram'></i></span> <span><i class='fa fa-linkedin'></i></span> </div>"
    sCarta += "            <div class=' px-2 rounded mt-4 date '> <span class='join'>Joined May,2021</span> </div>"
    sCarta += "        </div>"
    sCarta += "    </div>"
    sCarta += "</div>"
    return sCarta;

}