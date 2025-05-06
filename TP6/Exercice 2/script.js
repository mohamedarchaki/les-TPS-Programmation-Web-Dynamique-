var ulList = document.getElementById("list");
var btnAdd = document.getElementById("btn");
var inputTache = document.getElementById("input");

btnAdd.addEventListener('click', function () {
    var tache = inputTache.value;
    if (tache!== "") {
        let li = document.createElement("li");
        li.textContent = tache;
        ulList.appendChild(li);
        
        inputTache.value = "";
        let divbtn= document.createElement("div")
        let btnsup= document.createElement("button")
        let btnDoIt= document.createElement("button")


        btnsup.textContent="supremer"
        btnDoIt.textContent="fais-le"
        btnsup.classList="supremer"
        btnDoIt.classList="fais-le"
        divbtn.appendChild(btnsup)
        divbtn.appendChild(btnDoIt)
        divbtn.classList="btns"



        li.appendChild(divbtn)
/*###############        Event       ###############*/
        btnsup.addEventListener("click", function (){
          li.remove()
        })

        btnDoIt.addEventListener("click", function (){
          divbtn.remove()
          li.style.background="#06d918"
          li.style.color="white"
        })
    } else {
        alert("Veuillez écrire une tâche !");
    }
});
