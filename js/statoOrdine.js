var stato = document.getElementsByName("idStato")[0].content;
let divs = document.querySelectorAll("fieldset.spedizione > div:nth-child(even)");

for (let i = 0 ; i <= stato ; i++){
    let img = divs[i].children[0];
    let h3 = divs[i].children[1];
    img.setAttribute("src", "./upload/tick-spedizione.png");
    h3.style.color = "#01b125";
    console.log(img);
}
