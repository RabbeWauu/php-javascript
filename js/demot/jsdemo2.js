function chooseAnimal() {
    let animal = document.querySelector('#animals').value;
    console.log(animal); // animal name
    switch (animal) {
        case 'dog':
            document.querySelector('#animalimg').src = "img/dog.jpg";
            break;
        case 'cat':
            document.querySelector('#animalimg').src = "img/cat.jpg";
            break;
        case 'frog':
            document.querySelector('#animalimg').src = "img/frog.jpg";
            document.querySelector('#animalimg').style.width = "720px";
            break;
        default:
            document.querySelector('#animalimg').src = "img/frog.jpg";
            document.querySelector('#animalimg').style.width = "720px";
    }
}

function imageLoop() {
    let i = 0;
    count = document.querySelector('#syote').value;
    // while-loop
    while (i < count) {
        let img = document.createElement('img');
        img.src = "img/cat.jpg";
        img.style.width = "100px";
        i++;
        console.log("Luotiin kuva " + t);
        document.querySelector('#kuvat').appendChild(img);
    }
    // // for-loop
    // for (let i = 0; i < count; i++) {
    //     let img = document.createElement('img');
    //     img.src = "img/cat.jpg";
    //     img.style.width = "100px";
    //     document.querySelector('#kuvat').appendChild(img);
    // }
}