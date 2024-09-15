// PRIMER METODO

function traerPartidas(id_grupo) {
    partida.disabled = false;
    generica.disabled = true;
    especifica.disabled = true;
    subEspecifica.disabled = true;
    partida.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    generica.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    especifica.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    subEspecifica.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    descripcion.value = "";
    let cadena = "1_" + id_grupo;
    fetch(`/SISPRE/BuscadorDeCodigosPresupuestarios/${cadena}`, {
        method: "GET",
        headers: {
            "content-type": "application/json",
        },
    })
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            // console.log(data)
            let dataD = JSON.parse(data);
            // console.log(dataD);
            partida.innerHTML = "";
            var option = '<option value="" selected disabled>Seleccione</option>';
            for (let i in dataD) {
                option += `<option value="${dataD[i].codigo_partida}">${dataD[i].codigo_partida}</option>`;
                // console.log(dataD[i].codigo_partida)
            }
            partida.innerHTML = option;
        });
}

// SEGUNDO METODO

function traerGenericas(id_grupo, id_partida) {
    partida.disabled = false;
    generica.disabled = false;
    especifica.disabled = true;
    subEspecifica.disabled = true;
    generica.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    especifica.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    subEspecifica.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    descripcion.value = "";
    let cadena = "2_" + id_grupo + "_" + id_partida;
    fetch(`/SISPRE/BuscadorDeCodigosPresupuestarios/${cadena}`, {
        method: "GET",
        headers: {
            "content-type": "application/json",
        },
    })
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            // console.log(data)
            let dataD = JSON.parse(data);
            // console.log(dataD);
            generica.innerHTML = "";
            var option = '<option value="" selected disabled>Seleccione</option>';
            for (let i in dataD) {
                option += `<option value="${dataD[i].codigo_generica}">${dataD[i].codigo_generica}</option>`;
                // console.log(dataD[i].codigo_generica)
            }
            generica.innerHTML = option;
        });
}

// TERCER METODO

function traerEspecificas(id_grupo, id_partida, id_generica) {
    partida.disabled = false;
    generica.disabled = false;
    especifica.disabled = false;
    subEspecifica.disabled = true;
    especifica.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    subEspecifica.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    descripcion.value = "";
    let cadena = "3_" + id_grupo + "_" + id_partida + "_" + id_generica;
    fetch(`/SISPRE/BuscadorDeCodigosPresupuestarios/${cadena}`, {
        method: "GET",
        headers: {
            "content-type": "application/json",
        },
    })
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            // console.log(data)
            let dataD = JSON.parse(data);
            // console.log(dataD);
            especifica.innerHTML = "";
            var option = '<option value="" selected disabled>Seleccione</option>';
            for (let i in dataD) {
                option += `<option value="${dataD[i].codigo_especifica}">${dataD[i].codigo_especifica}</option>`;
                // console.log(dataD[i].codigo_especifica)
            }
            especifica.innerHTML = option;
        });
}

// CUARTO METODO

function traerSubEspecificas(id_grupo, id_partida, id_generica, id_especifica) {
    partida.disabled = false;
    generica.disabled = false;
    especifica.disabled = false;
    subEspecifica.disabled = false;
    subEspecifica.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    descripcion.value = "";
    let cadena = "4_" + id_grupo + "_" + id_partida + "_" + id_generica + "_" + id_especifica;
    fetch(`/SISPRE/BuscadorDeCodigosPresupuestarios/${cadena}`, {
        method: "GET",
        headers: {
            "content-type": "application/json",
        },
    })
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            // console.log(data)
            let dataD = JSON.parse(data);
            // console.log(dataD);
            subEspecifica.innerHTML = "";
            var option =
                '<option value="" selected disabled>Seleccione</option>';
            for (let i in dataD) {
                option += `<option value="${dataD[i].codigo_sub_especifica}">${dataD[i].codigo_sub_especifica}</option>`;
                // console.log(dataD[i].codigo_sub_especifica)
            }
            subEspecifica.innerHTML = option;
        });
}

// QUINTO METODO

function traerDescripcion(id_grupo, id_partida, id_generica, id_especifica, id_subEspecifica) {
    let cadena = "5_" + id_grupo + "_" + id_partida + "_" + id_generica + "_" + id_especifica + "_" + id_subEspecifica;
    fetch(`/SISPRE/BuscadorDeCodigosPresupuestarios/${cadena}`, {
        method: "GET",
        headers: {
            "content-type": "application/json",
        },
    })
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            // console.log(data)
            let dataD = JSON.parse(data);
            // console.log(dataD);
            descripcion.value = dataD[0].descripcion;
        });
}

function limpiar() {
    partida.disabled = true;
    generica.disabled = true;
    especifica.disabled = true;
    subEspecifica.disabled = true;
    partida.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    generica.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    especifica.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    subEspecifica.innerHTML = '<option value="" selected disabled>Seleccione</option>';
    descripcion.value = "";
}