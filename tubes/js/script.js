// ambil element user
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var tabel = document.getElementById('tabel');

// keyword event
keyword.addEventListener('keyup', function() {

    // buat objek ajax
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            tabel.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/users.php?keyword=' + keyword.value, true);
    xhr.send();
});

const judul = document.getElementById("judul");
const searchButton = document.getElementById("search-button");
const searchContainer = document.getElementById("search-container");

judul.onkeyup = function() {
    fetch("ajax/cardList.php?judul=" + judul.value)
        .then((response) => (response.text()))
        .then((text) => (searchContainer.innerHTML = text));
}