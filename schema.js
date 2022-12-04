window.onload = function () {
    var loginBtn = document.querySelector('#login');
    loginBtn.addEventListener('click', enterDB);

    function enterDB () {
        fetch('http://localhost/Project%202/schema.php')
            .then(response => response.text())
            .then(data => {
                console.log(data)
            })
            .catch(error => console.log(error));
    }
}
