const urlParams = new URLSearchParams(window.location.search);
let nik = urlParams.get('nik');
params = nik.split("?")
let nama = params[1].split("=");
let gender = params[2].split("=")
nik = params[0]

// document.getElementById('img-url').value = imgUrl
document.getElementById('nama-lengkap').value = nama[1]
document.getElementById('nik').value = nik
// document.getElementById('img-url').value = imgUrl

console.log(gender)

if (gender[1] == "LAKI-LAKI") {
    document.getElementById('gender').value = "L"
}
else {
    document.getElementById('gender').value = "P"
}
