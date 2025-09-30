function validar_form(tipo) {
   let codigo = document.getElementById("codigo").value;
   let nombre = document.getElementById("nombre").value;
   let detalle = document.getElementById("detalle").value;
   let precio = document.getElementById("precio").value;
   let stock = document.getElementById("stock").value;
   let id_categoria = document.getElementById("id_categoria").value;
   let fecha_vencimiento = document.getElementById("fecha_vencimiento").value;
   let imagen = document.getElementById("imagen").value;
   let id_proveedor = document.getElementById("id_proveedor").value;
   let rol = document.getElementById("rol").value;
  
  
   if (codigo == "" || nombre == "" || detalle == "" || precio == "" || stock == "" || id_categoria== "" || fecha_vencimiento == "" || imagen == "" || id_proveedor == ""|| rol == "") {
      SSwal.fire({
            icon: "error",
            title: "Oops...",
            text: "El nombre de la categoría es obligatorio!"
        });
        return;
    }

    Swal.fire({
        title: "Guardando...",
        icon: "info",
        showConfirmButton: false
    });

    registrarProducts();
}

if (document.querySelector('#frm_products')) {
    let frm_products = document.querySelector('#frm_products');
    frm_products.onsubmit = function(e) {
        e.preventDefault();
        validar_form();
    }
}

async function registrarProducts() {
    try {
        const datos = new FormData(frm_products);
        let respuesta = await fetch(base_url + 'control/ProductsController.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await respuesta.json();
        if (json.status) {
            Swal.fire({
                icon: "success",
                title: "Éxito",
                text: json.msg
            });
            document.getElementById('frm_products').reset();
        } else {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: json.msg
            });
        }
    } catch (error) {
        console.log("Error al registrar categoría: " + error);
    }
}

function cancelar() {
    Swal.fire({
        icon: "warning",
        title: "¿Estás seguro?",
        text: "Se cancelará el registro",
        showCancelButton: true,
        confirmButtonText: "Sí, cancelar",
        cancelButtonText: "No"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = base_url + "?views=home";
        }
    });
}