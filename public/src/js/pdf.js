function generatePDF(){
	const element = document.getElementByID("konten");
	html2pdf()
	.from(element)
	.save();
}