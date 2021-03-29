function clearForm() {
    document.getElementById("nis").value = "";
    document.getElementById("nama").value = "";
    document.getElementById("alamat").value = "";
    document.getElementById("asal_sekolah").value = "";
    document.getElementById("ttl").value = "";
    document.getElementById("kelas").value = "";
}

function printPage(elmt){
    var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(elmt).innerHTML;
	document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
    alert('Berhasil diprint!');
}
