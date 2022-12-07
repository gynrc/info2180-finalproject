window.onload = function () {
    //var loginBtn = document.querySelector('#login');
    //var addBtn = document.querySelector('#add-contact');
    //var notate = document.querySelector('#add-note');
    var fltrAll = document.querySelector('#fltrAll');
    var fltrSL = document.querySelector('#fltrSL');
    var fltrSupport = document.querySelector('#fltrSupport');
    var fltrAssigned = document.querySelector('#fltrAssigned');

    fltrAll.addEventListener('click', filterAll);
    fltrSL.addEventListener('click', filterSalesLeads);
    fltrSupport.addEventListener('click', filterSupport);
    fltrAssigned.addEventListener('click', filterAssigned);


    function filterAll() {
        fetch('http://localhost/info2180-finalproject/schema.php?filter=all')
            .then(response => response.text())
            .then(data => {
                let result = document.querySelector('tbody');
                result.innerHTML = data;
            })
            .catch(error => console.log(error));
    }

    function filterSalesLeads() {
        fetch('http://localhost/info2180-finalproject/schema.php?filter=sl')
            .then(response => response.text())
            .then(data => {
                let result = document.querySelector('tbody');
                result.innerHTML = data;
            })
            .catch(error => console.log(error));
    }

    function filterSupport() {
        fetch('http://localhost/info2180-finalproject/schema.php?filter=support')
            .then(response => response.text())
            .then(data => {
                let result = document.querySelector('tbody');
                result.innerHTML = data;
            })
            .catch(error => console.log(error));
    }

    function filterAssigned() {
        fetch('http://localhost/info2180-finalproject/schema.php?filter=assigned')
            .then(response => response.text())
            .then(data => {
                let result = document.querySelector('tbody');
                result.innerHTML = data;
            })
            .catch(error => console.log(error));
    }


    //loginBtn.addEventListener('click', gotoHP);
    //notate.addEventListener('click', notatePage)
    //addBtn.addEventListener('click', addtoDB);

    /*function gotoHP() {
        fetch('http://localhost/Project%202/schema.php')
        .then(response => response.text())
        .then(data => {
            console.log(data)
        })
        .catch(error => console.log(error));

    }

    function addtoDB() {
        fetch('http://localhost/Project%202/schema.php?')
            .then(response => response.text())
            .then(data => {
                console.log(data)
            })
            .catch(error => console.log(error));
    }

    function notatePage() {
        fetch('http://localhost/Project%202/schema.php?')
        .then(response => response.text())
        .then(data => {
            let note = document.querySelector('#note-section')
            note.innerHTML = data;
        })
        .catch(error => console.log(error));
    }*/
}
