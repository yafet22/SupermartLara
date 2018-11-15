function loginFunction() {
    var Regex= /^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$/;
    var sMsg = "";

    if(document.getElementById("email").value ==="") {
        sMsg +=("\n* Anda Belum Megisikan Email");
    }

    if(document.getElementById("pwd").value ==="") {
        sMsg +=("\n* Anda Belum Megisikan Password");
    }

    if(sMsg !=""){
        alert("Peringatan:\n" +sMsg);
        return false;
    }

    else {
        return true;
    }
}