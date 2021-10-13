function frmsumar(e) {
    e.preventDefault();
    const valor1 = document.getElementById("valor1");
    const valor2 = document.getElementById("valor2");

    if (valor1.value == "") {
        valor2.classList.remove("is-invalid");
        valor1.classList.add("is-invalid");
        valor1.focus();
    } else {
        if (valor2.value == "") {
            valor1.classList.remove("is-invalid");
            valor2.classList.add("is-invalid");
            valor2.focus();
        } else {
            const url = http://localhost/api_encuestas/suma.php";
            const frm = document.getElementById("frmsumar");
            const http = new XMLHttpRequest();
            http.open("POST", url, true);
            //http.withCredentials = true;
            //http.setRequestHeader('Content-Type', 'application/xml');
            http.send(new FormData(frm));
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const res[] = JSON.parse(this.response);
                    if (res['success'] == 'true') {
                        window.alert(res['respuesta']);
                    } else {
                        valor1.classList.add("is-invalid");
                        valor2.classList.add("is-invalid");
                    }
                }
            }
        }
    }

}