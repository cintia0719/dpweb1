function validar_form(tipo) {
    let nombre = document.getElementById("nombre").value;
    let detalle = document.getElementById("detalle").value;
    if (nombre == "" || detalle == "") {
        Swal.fire({
            title: "Error campos vacios!",
            icon: "error",
            draggable: true
        });
        return;
    }
    if (tipo == "nuevo") {
        registrarCategoria();
    }
    if (tipo == "actualizar") {
        actualizarCategoria();
    }

}

if (document.querySelector('#frm_category')) {
    // evita que se envie el formulario
    let frm_category = document.querySelector('#frm_category');
    frm_category.onsubmit = function (e) {
        e.preventDefault();
        validar_form("nuevo");
    }
}
async function registrarCategoria() {
    try {
        //capturar campos de formulario (HTML)
        const datos = new FormData(frm_category);
        //enviar datos a controlador
        let respuesta = await fetch(base_url + 'control/CategoriaController.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await respuesta.json();
        // validamos que json.status sea = True
        if (json.status) { //true
            alert(json.msg);
            document.getElementById('frm_category').reset();
            location.replace(base_url + 'categories');
        } else {
            alert(json.msg);
        }
    } catch (e) {
        console.log("Error al registrar Categoria:" + e);
    }
}


async function view_categorias() {
    try {
        let respuesta = await fetch(base_url + 'control/CategoriaController.php?tipo=ver_categorias', {
            method: 'GET',
            mode: 'cors',
            cache: 'no-cache'
        });
        let json = await respuesta.json();
        let content_categories = document.getElementById('content_categories');
        content_categories.innerHTML = ''; // limpiamos antes de insertar

        if (json.status && json.data) {
            let cont = 1;
            json.data.forEach(categoria => {
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila" + categoria.id;
                nueva_fila.className = "filas_tabla";
                nueva_fila.innerHTML = `
                                <td>${cont}</td>
                                <td>${categoria.nombre}</td>
                                <td>${categoria.detalle}</td>
                                <td>
                                    <a href="${base_url}edit-category/${categoria.id}">Editar</a>
                                    <button class="btn btn-danger" onclick="fn_eliminar(${categoria.id});">Eliminar</button>
                                </td>
                    `;
                cont++;
                content_categories.appendChild(nueva_fila);
            });
        } else {
            console.log('No hay categorías o error: ' + json.msg);
        }

    } catch (error) {
        console.log('error en mostrar categoria ' + error);
    }
}
if (document.getElementById('content_categories')) {
    view_categorias();
}


async function edit_category() {
    try {
        let id_categoria = document.getElementById('id_categoria').value;
        const datos = new FormData();
        datos.append('id_categoria', id_categoria);

        let respuesta = await fetch(base_url + 'control/CategoriaController.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await respuesta.json();
        if (!json.status) {
            alert(json.msg);
            return;
        }

        document.getElementById('nombre').value = json.data.nombre;
        document.getElementById('detalle').value = json.data.detalle;
    } catch (error) {
        console.log('Error al cargar categoria: ' + error);
    }
}
if (document.querySelector('#frm_edit_category')) {
    edit_category();
    // evita que se envie el formulario
    let frm_category = document.querySelector('#frm_edit_category');
    frm_category.onsubmit = function (e) {
        e.preventDefault();
        validar_form("actualizar");
    }
}


async function actualizarCategoria() {
    const datos = new FormData(frm_edit_category);
    let respuesta = await fetch(base_url + 'control/CategoriaController.php?tipo=actualizar', {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos
    });
    let json = await respuesta.json();
    if (!json.status) {
        alert("Oooooops, ocurrio un error al actualizar, intentelo nuevamente");
        console.log(json.msg);
        return;
    } else {
        alert(json.msg);
        location.replace(base_url + 'categories');
    }
}


async function fn_eliminar(id) {
    if (window.confirm("Confirmar eliminar?")) {
        eliminar(id);
    }
}
async function eliminar(id) {
    let datos = new FormData();
    datos.append('id', id);
    let respuesta = await fetch(base_url + 'control/CategoriaController.php?tipo=eliminar', {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos
    });
    let json = await respuesta.json();
    if (!json.status) {
        alert("Oooooops, ocurrio un error al eliminar categoria, intentelo mas tarde");
        console.log(json.msg);
        return;
    } else {
        alert(json.msg);
        location.replace(base_url + 'categories');
    }
}
