function RandomSaka() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://api.chucknorris.io/jokes/random', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            var joke = response.value;
            document.getElementById('jokeText').innerHTML = joke;
        } else {
            console.log('Hata: ' + xhr.status);
        }
    };
    xhr.send();
}