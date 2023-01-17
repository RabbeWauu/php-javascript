function bussiHinta() {
    let ika = parseInt(document.querySelector('input[id="ika"]').value);
    console.log("Syötetty ikä on " + ika) // ikä
    console.log("Syötetyn iän tyyppi on " + typeof ika) // pitäisi olla number
    if (ika >= 7 && ika <= 16) {
        document.querySelector('#bussilippu').textContent = "Ikäsi on " + ika + ", joten bussilippusi hinta on 1.05€ euroa.";
    } else if (ika >= 17 && ika <= 24) {
        document.querySelector('#bussilippu').textContent = "Ikäsi on " + ika + ", joten bussilippusi hinta on 1.52€ euroa.";
    } else if (ika >= 25 && ika < 65) {
        document.querySelector('#bussilippu').textContent = "Ikäsi on " + ika + ", joten bussilippusi hinta on 2.10€ euroa.";
    } else if (ika >= 65) {
        document.querySelector('#bussilippu').textContent = "Ikäsi on " + ika + ", joten bussilippusi hinta on 1.16€ euroa.";
    } else {
        document.querySelector('#bussilippu').textContent = "Ikäsi on " + ika + ", joten bussilippusi on ilmainen.";
    }
}

min = Math.ceil(document.querySelector('#alaraja').value);
max = Math.floor(document.querySelector('#ylaraja').value);
let random = Math.floor(Math.random() * (max - min + 1)) + min;
console.log("Arvottu luku: " + random);

function numberGuess(min, max) {
    let arvaus = document.querySelector('#arvaus').value;
    let vihje = document.querySelector('#vihje');
    if (min > max) {
        document.getElementById('vastaus').textContent = "Alaraja ei voi olla suurempi kuin yläraja!";
    } else if (arvaus < min || arvaus > max) {
        document.getElementById('vastaus').textContent = "Arvaus ei voi olla pienempi kuin alaraja, tai suurempi kuin yläraja!";
    } else if (arvaus == random) {
        document.getElementById('vastaus').textContent = "Oikein, Onnittelut!";
        console.log("Oikea vastaus " + arvaus);
    } else {
        document.getElementById('vastaus').textContent = "Väärin meni :(";
        console.log("Väärä vastaus " + arvaus);
    }

    if (arvaus < random) {
        vihje.textContent = "Vihje: Lukusi oli pienempi kuin oikea vastaus.";
    } else if (arvaus > random) {
        vihje.textContent = "Vihje: Lukusi oli suurempi kuin oikea vastaus.";
    } else if (arvaus == random) {
        vihje.textContent = "";
    }
}

let i = 0;

function counter() {
    i++;
    console.log("Arvauksia: " + i);
    laskuri = document.querySelector('#laskuri');
    if (document.getElementById('vastaus').textContent == "Oikein, Onnittelut!") {
        laskuri.textContent = "Oikeaan vastaukseen meni " + i + " kertaa.";
    }
}