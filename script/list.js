// let liste = document.getElementById("liste_exp").addEventListener("blur", this.validation.bind(this));
let lis = document.querySelectorAll("#liste_exp>li");
let divs = document.querySelectorAll(".exp_text_div");

for (let i = 0; i < lis.length; i++) {
    lis[i].addEventListener("click", refresh);
}

function refresh(evenement) {
    let li = evenement.currentTarget;
    let id = li.getAttribute("data-exp");
    let div = document.getElementById(id);

    // li
    for (let i = 0; i < lis.length; i++) {
        lis[i].classList.remove("selectedli");
    }
    li.classList.add("selectedli");

    // // div
    // for (let j = 0; j < divs.length; j++) {
    //     divs[j].classList.remove("selectedDiv");
    // }
    // div.classList.add("selectedDiv");

    for (let j = 0; j < divs.length; j++) {
        divs[j].style.opacity = "0";
    }
    div.style.opacity = "1";
}
console.log(divs);
