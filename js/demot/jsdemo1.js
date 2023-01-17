function myFunction() {
    if (confirm("Haluatko varmasti")) {
        document.getElementById("vastaus").textContent = "hyvä!"
    } else {
        document.getElementById("vastaus").textContent = "harmi :("
    }
}

function matikka() {
    let a = 3;
    let b = 2;
    let summa = a + b;
    console.log(summa);
}

const first = document.querySelector('input[id="first"]').value;
const second = document.querySelector('input[id="second"]').value;
const vastaus2 = document.getElementById("vastaus2");

function summaus() {
    vastaus2.textContent = Number(first) + Number(second);
}
function erotus() {
    vastaus2.textContent = Number(first) - Number(second);
}

function tulo() {
    vastaus2.textContent = Number(first) * Number(second);
}

function osamaara() {
    vastaus2.textContent = Number(first) / Number(second);
}

function alertLasku() {
    var count = 0;
    var img = document.getElementById("kuva");

    img.onclick = function () {
        count++;
        if (count >= 3) {
            alert("Huono firma!");
        } else {
            alert("Klikkasit kuvasta!");
        }
    }
}