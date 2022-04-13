let mostrarsenha = document.querySelector(".mostrar");
let ocultarsenha = document.querySelector(".ocultar");
let input = document.getElementById("senha");

mostrarsenha.addEventListener("click",(e)=>{
    input.setAttribute("type", "text");
    mostrarsenha.style.display = "none";
    ocultarsenha.style.display = "block";
});

ocultarsenha.addEventListener("click", (e)=>{
    input.setAttribute("type", "password");
    mostrarsenha.style.display = "block";
    ocultarsenha.style.display = "none";
});