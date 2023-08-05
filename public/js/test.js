const { repeat } = require("lodash");

const myFruits = "Orange";
switch (myFruits) {
    case "orange":
        case "Orange":
            case "Oranges":
        console.log("Orange Fruits is good");
        break;
    case "Apple":
        console.log("Fruits is good apple");
        break;
    case "Banna":
        console.log("Banna is good for the body");
        break;
    default:
        console.log("Please i dont understand you")

}
// noprotect
let loopNumbere = 0;
while (loopNumbere < 10) {
    console.log("i am looping...");
    console.log(loopNumbere);
    loopNumbere++;
}

function mySelect() {

    const get = document.getElementById("select").value;
    const p = document.getElementById("result");
    p.style.color = "red";
    p.style.paddingLeft = "20px";
    p.style.backgroundColor = "grey";
    if (get === "html") {
        p.innerText =
            " Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quasi voluptas ut sed deleniti soluta? Ratione culpa rerum nesciunt veniam dolores voluptatibus assumenda distinctio reiciendis deserunt pariatur, quisquam, soluta nam.";
    } else if (get === "PHP") {
        p.innerText = "PHP is really fun go for it!!";
    } else if (get === "Js") {
        p.innerHTML = "<input type='text' class='form-control' placeholder='Specify'>";
    } else {
        p.innerText = "I dont Understans You";
    }

}

// function myBalls() {
//     const Myball = document.getElementById("ball");
//     Myball.style.backgroundColor = "red";
//     if (Myball.style.backgroundColor === "red") {
//         Myball.style.backgroundColor = "blue";
//         Myball.classList.remove("mystyle");
//         Myball.classList.add("mystyles");
//     } else  {
//         Myball.style.backgroundColor = "red";
//     }
// }

function myBalls() {
    const Myball = document.getElementById("ball");
    Myball.classList.add("mystyles");
    Myball.classList.toggle("mystyless");
        Myball.classList.remove("mystyle");
        
    
}

function myrealSliders() {
    const slide = document.getElementById("slider");
    slide.classList.add("mysliders");
    slide.classList.toggle("mysliderss");
    slide.classList.remove("myslider");
    slide++
        
    
}