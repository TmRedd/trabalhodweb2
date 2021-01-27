var btnContainer = document.getElementById("barra");

var btns = btnContainer.getElementsByClassName("topnav a");

for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}

// var nomes = ["admin"];
// var passes = ["1234"];
// var i = 0;
// document.getElementById("loginForm").addEventListener("click", function (event) {
//     event.preventDefault()
// });
// document.getElementById('login_btn').onclick = function validaUser() {
//     pass = document.getElementById("pass").value;
//     nome = document.getElementById("nome").value;
//     console.log(nome + "está connectado")
//     for (i = 0; i < nomes.length; i++) {
//         if (nome == nomes[i] && pass == passes[i]) {
//             document.getElementById("modal").style.display = "none"
//             document.getElementById("navbar").style.display = "block"
//         } else {
//             alert("Utilizador e password não reconhecida!")
//         }
//     }
// }

document.getElementById('realizadores_btn').onclick = function mudaReal() {

    document.getElementById("tab_atores").style.display = "none";
    document.getElementById("tab_realizadores").style.display = "block";
    document.getElementById("tab_estudios").style.display = "none";
    document.getElementById("tab_filmes").style.display = "none";
    document.getElementById("tab_home").style.display = "none";


}

document.getElementById('atores_btn').onclick = function mudaReal() {

    document.getElementById("tab_atores").style.display = "block";
    document.getElementById("tab_realizadores").style.display = "none";
    document.getElementById("tab_estudios").style.display = "none";
    document.getElementById("tab_filmes").style.display = "none";
    document.getElementById("tab_home").style.display = "none";


}
document.getElementById('estudios_btn').onclick = function mudaReal() {

    document.getElementById("tab_atores").style.display = "none";
    document.getElementById("tab_realizadores").style.display = "none";
    document.getElementById("tab_estudios").style.display = "block";
    document.getElementById("tab_filmes").style.display = "none";
    document.getElementById("tab_home").style.display = "none";

}

document.getElementById('filmes_btn').onclick = function mudaReal() {

    document.getElementById("tab_atores").style.display = "none";
    document.getElementById("tab_realizadores").style.display = "none";
    document.getElementById("tab_estudios").style.display = "none";
    document.getElementById("tab_filmes").style.display = "block";
    document.getElementById("tab_home").style.display = "none";

}
document.getElementById('home_btn').onclick = function mudaReal() {

    document.getElementById("tab_atores").style.display = "none";
    document.getElementById("tab_realizadores").style.display = "none";
    document.getElementById("tab_estudios").style.display = "none";
    document.getElementById("tab_filmes").style.display = "none";
    document.getElementById("tab_home").style.display = "block";

}













