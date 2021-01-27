function openPage(pageName) {
    let i, tabcontent;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    document.getElementById(pageName).style.display = "block";
}
document.getElementById("default").click();

/*
var nomes =["joao"];
var passes =["123"];
var i=0;
document.getElementById("loginForm").addEventListener("click", function(event){
    event.preventDefault()
});
document.getElementById('login_btn').onclick=function validaUser(){
    pass = document.getElementById("pass").value;
    nome = document.getElementById("nome").value;
    console.log(nome + "está connectado")
    for(i = 0; i < nomes.length; i++){
        if (nome == nomes[i] && pass == passes[i]){
            document.getElementById("btnclose").click();
            document.getElementById("loginBotton").style.display="none"
            document.getElementById("favoritos").style.display="block"
            document.getElementById("perfilBotton").style.display="block"
            document.getElementById("outBotton").style.display="block"
            
        }else{
            alert("Utilizador e password não reconhecida!")
        }
    }
}

document.getElementById('register_btn').onclick=function registaUser(){
    pass = document.getElementById("pass").value;
    nome = document.getElementById("nome").value;
    validar = nomes.length;
    nomes.push(nome);
    passes.push(pass);
    if (nomes.length > validar){
        alert("Utilizador registrado com sucesso")
    }else{
        alert("Utilizador não registrado")
    }
}
*/
document.getElementById("favF1").onclick = function registaFavoritos() {
    document.getElementById("filme1").style.display = "block"
}
document.getElementById("favF2").onclick = function registaFavoritos() {
    document.getElementById("filme2").style.display = "block"
}
document.getElementById("favF3").onclick = function registaFavoritos() {
    document.getElementById("filme3").style.display = "block"
}
document.getElementById("favF4").onclick = function registaFavoritos() {
    document.getElementById("filme4").style.display = "block"
}
document.getElementById("favF5").onclick = function registaFavoritos() {
    document.getElementById("filme5").style.display = "block"
}
document.getElementById("favF6").onclick = function registaFavoritos() {
    document.getElementById("filme6").style.display = "block"
}
document.getElementById("rFav1").onclick = function removeFav() {
    document.getElementById("filme1").style.display = "none"
}
document.getElementById("rFav2").onclick = function removeFav() {
    document.getElementById("filme2").style.display = "none"
}
document.getElementById("rFav3").onclick = function removeFav() {
    document.getElementById("filme3").style.display = "none"
}
document.getElementById("rFav4").onclick = function removeFav() {
    document.getElementById("filme4").style.display = "none"
}
document.getElementById("rFav5").onclick = function removeFav() {
    document.getElementById("filme5").style.display = "none"
}
document.getElementById("rFav6").onclick = function removeFav() {
    document.getElementById("filme6").style.display = "none"
}



document.getElementById("favA1").onclick = function registaFavoritos() {
    document.getElementById("ator1").style.display = "block"
}
document.getElementById("favA2").onclick = function registaFavoritos() {
    document.getElementById("ator2").style.display = "block"
}
document.getElementById("favA3").onclick = function registaFavoritos() {
    document.getElementById("ator3").style.display = "block"
}
document.getElementById("favA4").onclick = function registaFavoritos() {
    document.getElementById("ator4").style.display = "block"
}
document.getElementById("favA5").onclick = function registaFavoritos() {
    document.getElementById("ator5").style.display = "block"
}
document.getElementById("favA6").onclick = function registaFavoritos() {
    document.getElementById("ator6").style.display = "block"
}

document.getElementById("rAFav1").onclick = function removeFav() {
    document.getElementById("ator1").style.display = "none"
}
document.getElementById("rAFav2").onclick = function removeFav() {
    document.getElementById("ator2").style.display = "none"
}
document.getElementById("rAFav3").onclick = function removeFav() {
    document.getElementById("ator3").style.display = "none"
}
document.getElementById("rAFav4").onclick = function removeFav() {
    document.getElementById("ator4").style.display = "none"
}
document.getElementById("rAFav5").onclick = function removeFav() {
    document.getElementById("ator5").style.display = "none"
}
document.getElementById("rAFav6").onclick = function removeFav() {
    document.getElementById("ator6").style.display = "none"
}


document.getElementById("favE1").onclick = function registaFavoritos() {
    document.getElementById("estudio1").style.display = "block"
}
document.getElementById("favE2").onclick = function registaFavoritos() {
    document.getElementById("estudio2").style.display = "block"
}
document.getElementById("favE3").onclick = function registaFavoritos() {
    document.getElementById("estudio3").style.display = "block"
}
document.getElementById("favE4").onclick = function registaFavoritos() {
    document.getElementById("estudio4").style.display = "block"
}
document.getElementById("favE5").onclick = function registaFavoritos() {
    document.getElementById("estudio5").style.display = "block"
}
document.getElementById("favE6").onclick = function registaFavoritos() {
    document.getElementById("estudio6").style.display = "block"
}

document.getElementById("rEFav1").onclick = function removeFav() {
    document.getElementById("estudio1").style.display = "none"
}
document.getElementById("rEFav2").onclick = function removeFav() {
    document.getElementById("estudio2").style.display = "none"
}
document.getElementById("rEFav3").onclick = function removeFav() {
    document.getElementById("estudio3").style.display = "none"
}
document.getElementById("rEFav4").onclick = function removeFav() {
    document.getElementById("estudio4").style.display = "none"
}
document.getElementById("rEFav5").onclick = function removeFav() {
    document.getElementById("estudio5").style.display = "none"
}
document.getElementById("rEFav6").onclick = function removeFav() {
    document.getElementById("estudio6").style.display = "none"
}

document.getElementById("favR1").onclick = function registaFavoritos() {
    document.getElementById("realizador1").style.display = "block"
}
document.getElementById("favR2").onclick = function registaFavoritos() {
    document.getElementById("realizador2").style.display = "block"
}
document.getElementById("favR3").onclick = function registaFavoritos() {
    document.getElementById("realizador3").style.display = "block"
}
document.getElementById("favR4").onclick = function registaFavoritos() {
    document.getElementById("realizador4").style.display = "block"
}
document.getElementById("favR5").onclick = function registaFavoritos() {
    document.getElementById("realizador5").style.display = "block"
}
document.getElementById("favR6").onclick = function registaFavoritos() {
    document.getElementById("realizador6").style.display = "block"
}

document.getElementById("rRFav1").onclick = function removeFav() {
    document.getElementById("realizador1").style.display = "none"
}
document.getElementById("rRFav2").onclick = function removeFav() {
    document.getElementById("realizador2").style.display = "none"
}
document.getElementById("rRFav3").onclick = function removeFav() {
    document.getElementById("realizador3").style.display = "none"
}
document.getElementById("rRFav4").onclick = function removeFav() {
    document.getElementById("realizador4").style.display = "none"
}
document.getElementById("rRFav5").onclick = function removeFav() {
    document.getElementById("realizador5").style.display = "none"
}
document.getElementById("rRFav6").onclick = function removeFav() {
    document.getElementById("realizador6").style.display = "none"
}