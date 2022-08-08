const Formulir = document.querySelector("#formreset");
// dragText = Formulir.querySelector("h2");

button = Formulir.querySelector("#upload-btn");
btnUpload = Formulir.querySelector("#upload-ktp");
input = Formulir.querySelector("#inputgambar");
let file;

function showFileExplorer() {
    console.log('klik')
    input.click();
}
// button.onclick = () => {
//     console.log('klik')
//     input.click();
// }

input.addEventListener("change", function () {
    file = this.files[0];
    showFile();
    Formulir.classList.add("active");
});
//keluar dari drag area
Formulir.addEventListener("dragover", (event) => {
    event.preventDefault();
    // console.log("File Is Over Drag Area");
    Formulir.classList.add("active");
    // dragText.textContent = "Lepas File untuk Upload";
});

//leave drag area	
Formulir.addEventListener("dragleave", () => {
    // console.log("File Is Over Drag Area");
    Formulir.classList.remove("active");
    // dragText.textContent = "Unggah File Untuk Upload";
});

Formulir.addEventListener("drop", (event) => {
    event.preventDefault();
    // console.log("File Is dropped on Drag Area");
    file = event.dataTransfer.files[0];
    showFile();

});
function showFile() {
    let fileType = file.type;
    // console.log(fileType);
    console.log("showFile: ", file);
    let fileURL
    let validExtensions = ["image/jpeg", "image/jpg", "image/png"];
    if (validExtensions.includes(fileType)) {
        let fileReader = new FileReader();
        fileReader.onload = () => {
            fileURL = fileReader.result;
            // document.getElementById('inputgambar').value = fileURL
            console.log(fileURL)
            let imgTag = `<img id="uploaded-image" src="${fileURL}" style=\"padding-bottom: 20px;\" alt="">`;
            document.getElementById("instruction").remove();
            document.getElementById('upload-btn').remove();
            // Formulir.innerHTML += imgTag;
            document.getElementById('anchor-image').innerHTML = imgTag
            let buttonTag = `<a onclick="reset()"><button>Upload Ulang</button></a> `;
            var tombol = document.getElementById("tombolbawah");
            tombol += buttonTag;
        }
        fileReader.readAsDataURL(file)
    } else {
        alert("Mohon Untuk Mengunggah File");
        Formulir.classList.remove("active");
    }
}
function reset1() {
    // let formTag = `<form action="#"> <i class="fa fa-cloud-upload-alt"></i> <p>Unggah File Untuk Upload</p> <span>or</span> <button onclick="upload()">Unggah Berkas</button><input type="file" hidden="" id="inputgambar"> </form>`
    let formTag = `
        	<form id="formreset" name="formreset" method="POST" enctype="multipart/form-data">                
                <div id="instruction">
                    <i class="fa fa-cloud-upload-alt"></i>
				    <p>Unggah File Untuk Upload</p>
				    <span>or</span>
                </div>			
                <a onclick="showFileExplorer()" id="upload-btn" class="btn-primary" style="margin-top: 40px;">Unggah Berkas</a>
				<input type="file" hidden="" id="inputgambar" name="imgktp">
			</form>
    `
    let instruction = `
        <div id="instruction">
            <i class="fa fa-cloud-upload-alt"></i>
	        <p>Unggah File Untuk Upload</p>
	        <span>or</span>
        </div>	    
    `
    let uploadBtn = `<a onclick="showFileExplorer()" id="upload-btn" class="btn-primary" style="margin-top: 40px;">Unggah Berkas</a>`

    document.getElementById("uploaded-image").remove();
    Formulir.innerHTML += instruction;
    Formulir.innerHTML += uploadBtn;
    console.log("reset: ", file);

}
function upload() {
    btnUpload.click();
    console.log('klik')
}

function debug() {
    file = document.getElementById('inputgambar').value
    console.log(typeof file)
}

function dropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
  }