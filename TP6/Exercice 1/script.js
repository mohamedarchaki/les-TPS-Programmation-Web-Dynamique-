let divPrg = document.querySelector(".text_prg");
let paragraphe = document.createElement("p");

paragraphe.textContent="Ceci est un paragraphe";

divPrg.appendChild(paragraphe);

paragraphe.textContent="Le texte a été modifié ";
paragraphe.style.color="lightblue"

divPrg.addEventListener("click", function() {
  paragraphe.textContent = "Un clic a été détecté";
});


