function kokonimi() {
    let etunimi = prompt("Anna etunimi:");
    let sukunimi = prompt("Anna sukunimi:");
    document.getElementById("vastaus").textContent = etunimi + " " + sukunimi;
    document.querySelector('p').style.backgroundColor = "#5e5e5e";
}


function luvut() {
    var firstnumber = prompt("Ensimmäinen luku:")
    var secondnumber = prompt("Toinen luku:")
    var thirdnumber = prompt("Kolmas luku:")
    var max = Math.max(firstnumber, secondnumber, thirdnumber);
    var min = Math.min(firstnumber, secondnumber, thirdnumber);
    document.getElementById('suurin').textContent = "Suurin luku on " + max;
    document.getElementById('suurin').style.fontSize = "16px";

    document.getElementById('pienin').textContent = "Pienin luku on " + min;
    document.getElementById('pienin').style.fontSize = "8px";
    document.querySelector('p').style.backgroundColor = "#5e5e5e";
}

function teksti() {
    document.getElementById('teksti').textContent = "No niin, nyt olet saanut pääsi seintätä läpi. Mitä aiot tehdä naapurisellissä?"; 
    document.getElementById('teksti').style.fontStyle = "italic";
    document.getElementById('teksti').style.color = "purple";
    document.querySelector('p').style.backgroundColor = "#5e5e5e";
}

function kissa() {
    document.getElementById('kuva').src = "cat.jpg";
}

function koira() {
    document.getElementById('kuva').src = "dog.jpg";
}

function happy() {
    document.getElementById('emoji').src = "happy.png";
}

function sad() {
    document.getElementById('emoji').src = "sad.png";
}

function lasku() {
    let maksettu;
    let kilometrit = document.querySelector('input[id="kilometrit"]').value;
    let kulutus = document.querySelector('input[id="kulutus"]').value;
    let hinta = document.querySelector('input[id="hinta"]').value;
    maksettu = kulutus * hinta;
    kulutettu = (100 * kulutus) / kilometrit;
    document.getElementById('bensavastaus').textContent = "Maksoit bensasta " + maksettu + "€, ja Kulutit bensaa " + Math.round(kulutettu * 100) / 100 + " litraa.";
    document.getElementById('bensavastaus').style.backgroundColor = "#5e5e5e";
}

function kissavskoira() {
    let vastaus = prompt("Oletko kissa- vai koiraihminen?");
    if (vastaus == "kissa") {
        document.getElementById('elainvastaus').textContent = "Kissoja onkin mukava silitellä ja kuunnella niiden kehräystä";
    } else if (vastaus == "koira") {
        document.getElementById('elainvastaus').textContent = "Koirien kanssa onkin mukava ulkoilla ja harrastaa";
    } else if (vastaus == "") {
        document.getElementById('elainvastaus').textContent = "Ei saatu vastausta, pidät  varmaan muista eläimistä.";
    } else {
        document.getElementById('elainvastaus').textContent = "Tuokin on hyvä eläin!"
    }
    document.getElementById('elainvastaus').style.backgroundColor = "#5e5e5e";
}