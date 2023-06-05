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

// ambil element user
var kataKunci = document.getElementById('kata-kunci');
var tombolCari = document.getElementById('tombol-cari');
var cardList = document.getElementById('cardList');

// keyword event
kataKunci.addEventListener('keyup', function() {

    // buat objek ajax
    var xhr2 = new XMLHttpRequest();

    xhr2.onreadystatechange = function () {
        if (xhr2.readyState == 4 && xhr2.status == 200) {
            cardList.innerHTML = xhr2.responseText;
        }
    }

    // eksekusi ajax
    xhr2.open('GET', 'ajax/cardList.php?judul=' + kataKunci.value, true);
    xhr2.send();
});