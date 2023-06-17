// const button = document.getElementById('s1');
// button.addEventListener('click', () => {
//    const sinki = document.getElementsByClassName('sinki')[0];
//    sinki.style.visibility = "visible";
// }); 


const button = document.getElementsByClassName("sinkitouroku")[0];
const sinki = document.getElementsByClassName("sinki")[0];
document.addEventListener('DOMContentLoaded', function () {
 sinki.style.visibility = "hidden";
 button.addEventListener('click', () => {
    if (sinki.style.visibility === "hidden") {
      sinki.style.visibility = "visible";
    } else {
      sinki.style.visibility = "hidden";
    }
 })
})