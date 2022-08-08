const urlParams = new URLSearchParams(window.location.search);
let nik = urlParams.get('nik');
document.getElementById('ktp').value = nik

console.log(document.getElementById('ktp').value);