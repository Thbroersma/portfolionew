const singlePlayer = document.querySelector('.single');
const multiPlayer = document.querySelector('.multi');

if (singlePlayer) {
    singlePlayer.addEventListener('click', function() {
        location.replace('players1.html');
    })
}
if (multiPlayer) {
    multiPlayer.addEventListener('click', function() {
        location.replace('players2.html');
    })
}