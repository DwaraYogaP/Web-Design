let show = true;

function changeColor() {
    if (show) { 
        show = false;

        const jumbotron = document.querySelector("#jumbotron");
        jumbotron.style.backgroundColor = 'black';

        const changeButton = document.querySelector("#nav-button");
        changeButton.style.backgroundColor = 'white';
        changeButton.style.color = 'black';

        const jumbotron_box = document.querySelectorAll(".jumbotron-box > div");
        for(let i=0; i<=jumbotron_box.length; i++) {
            jumbotron_box[i].style.backgroundColor = 'white';
        }

        const isi = document.querySelectorAll(".isi");
        for(let j=0; j<=isi.length; j++) {
            isi[j].style.backgroundColor = 'black';
        }

        
    } else {
        show = true;

        const jumbotron = document.querySelector("#jumbotron");
        jumbotron.style.backgroundColor = '#06283D';

        const changeButton = document.querySelector("#nav-button");
        changeButton.style.backgroundColor = '#256D85';
        changeButton.style.color = 'white';

        const jumbotron_box = document.querySelectorAll(".jumbotron-box > div");
        for(let i=0; i<=jumbotron_box.length; i++) {
            jumbotron_box[i].style.backgroundColor = '#205263';
        }


    }
}