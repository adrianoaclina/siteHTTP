var ç = document.querySelector.bind(document);
// POST
function btnSubmit(event) {
    event.preventDefault();
    var valueN = ç("#name").value;
    var valueJ = ç("#job").value;
    var usuario = new Object();
    usuario.name = valueN;
    usuario.job = valueJ;
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 201) {
            var p = ç("#pPost");
            var resposta = ajax.responseText;
            p.innerHTML = resposta;
        }
    }

    var json = JSON.stringify(usuario);
    ajax.open("POST", "https://reqres.in/api/users");
    ajax.setRequestHeader("Content-type", "application/json");
    ajax.send(json);
}



// // GET 
function get1() {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4 && ajax.status == 200) {
            var p = ç("#p1");
            var resposta = ajax.responseText;
            p.innerHTML = resposta;
        }
    }
    ajax.open("GET", "https://reqres.in/api/users?page=2", true);
    ajax.send();
}

// // GET 

function get2() {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4 && ajax.status == 200) {
            var p = ç("#p2");
            var resposta = ajax.responseText;
            p.innerHTML = resposta;
        }
    }
    ajax.open("GET", "https://reqres.in/api/users/2", true);
    ajax.send();
}

// // GET 

function get3() {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4 && ajax.status == 200) {
            var p = ç("#p3");
            var resposta = ajax.responseText;
            p.innerHTML = resposta;
        } else {
            var p = ç("#p3");
            p.innerHTML = "Erro 404 - Verifique no console";

        }
    }
    ajax.open("GET", "https://reqres.in/api/users/23", true);
    ajax.send();
}

// // GET 

function get4() {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4 && ajax.status == 200) {
            var p = ç("#p4");
            var resposta = ajax.responseText;
            p.innerHTML = resposta;
        }
    }
    ajax.open("GET", "https://reqres.in/api/unknown", true);
    ajax.send();
}

// // GET 

function get5() {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4 && ajax.status == 200) {
            var p = ç("#p5");
            var resposta = ajax.responseText;
            p.innerHTML = resposta;
        }
    }
    ajax.open("GET", "https://reqres.in/api/unknown/2", true);
    ajax.send();
}

// // GET 

function get6() {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4 && ajax.status == 200) {
            var p = ç("#p6");
            var resposta = ajax.responseText;
            p.innerHTML = resposta;
        } else {
            var p = ç("#p6");
            p.innerHTML = "Erro 404 - Verifique no console";

        }
    }
    ajax.open("GET", "https://reqres.in/api/unknown/23", true);
    ajax.send();
}

// // PUT
// var btnSubmitPut = ç("#submitPut");
function put(event) {
    event.preventDefault();
    var valueN = ç("#namePut").value;
    var valueJ = ç("#jobPut").value;
    var usuario = new Object();
    usuario.name = valueN;
    usuario.job = valueJ;
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4 && ajax.status == 200) {
            var p = ç("#pPut");
            var resposta = ajax.responseText;
            p.innerHTML = resposta;
        }
    }
    var json = JSON.stringify(usuario);
    ajax.open("PUT", "https://reqres.in/api/users/2");
    ajax.setRequestHeader("Content-type", "application/json");
    ajax.send(json);
}

// var btnSubmitPatch = ç("#submitPatch");
function patch(event) {
    event.preventDefault();
    var valueN = ç("#namePatch").value;
    var valueJ = ç("#jobPatch").value;
    var usuario = new Object();
    usuario.name = valueN;
    usuario.job = valueJ;
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4 && ajax.status == 200) {
            var p = ç("#pPatch");
            var resposta = ajax.responseText;
            p.innerHTML = resposta;
        }
    }
    var json = JSON.stringify(usuario);
    ajax.open("PATCH", "https://reqres.in/api/users/2");
    ajax.setRequestHeader("Content-type", "application/json");
    ajax.send(json);
}

function deleteHttp(){
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
        if (ajax.readyState == 4 && ajax.status == 204) {
            var p = ç("#pDelete");
            p.innerHTML = "Erro 204 - Verifique o console";
        }

    }
    
    ajax.open("DELETE", "https://reqres.in/api/users/2", true);
    ajax.send();
}
