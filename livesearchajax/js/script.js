// ambil elemen yg dibutuhkan
const keyword = document.querySelector('#keyword');
const tombolCari = document.querySelector('#tombolCari');
const container = document.querySelector('#container');

//tambahkan event ketika keyword ditulis

keyword.addEventListener('keypress', function(){

    //buat object ajax
    let xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }
    //eksekusi ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();
})