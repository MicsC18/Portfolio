document.addEventListener("DOMContentLoaded", () => {
  const btn = document.getElementById("BtnContact");
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    let validarForm = validarCampos();
    if (validarForm) {
      Swal.fire({
        title: "Mensaje Enviado!",
        position: "top-end",
        icon: "success",
        showConfirmButton: false,
        timer: 1000,
      }).then(() => {
        document.getElementById("formContact").submit();
      });
    }
  });
});

function validarCampos() {
  let bandera = true;
  if (
    !validarCampoVacio("Nombre") ||
    !validarCampoVacio("email") ||
    !validarCampoVacio("mensaje")
  ) {
    console.log("vacios");
    bandera = false;
  }

  if (!validarNombre("Nombre")) {
    console.log("Nombre mal");
    bandera = false;
  }
  if (!validarEmail("email")) {
    console.log("email mal");
    bandera = false;
  }

  return bandera;
}

/* ---------- genéricas ---------- */
function mostrarError(idInput, txt) {
  const input = document.getElementById(idInput);
  const feed = input.nextElementSibling; // <div class="invalid-feedback">
  input.classList.add("is-invalid");
  feed.textContent = txt;
}
function limpiarError(idInput) {
  const input = document.getElementById(idInput);
  const feed = input.nextElementSibling;
  input.classList.remove("is-invalid");
  feed.textContent = "";
}

function validarCampoVacio(id) {
  const val = document.getElementById(id).value.trim();
  if (val === "") {
    mostrarError(id, "Campo vacío");
    return false;
  }
  limpiarError(id);
  return true;
}

/* ---------- específicas ---------- */
function validarNombre(id) {
  const val = document.getElementById(id).value.trim();
  // sólo letras y espacios, mín 3
  const regex = /^[a-zA-ZáéíóúñÁÉÍÓÚÑ]{3,}(?: [a-zA-ZáéíóúñÁÉÍÓÚÑ]+)*$/;
  if (!regex.test(val)) {
    mostrarError(id, "Nombre inválido (mín 3 letras, sin números ni símbolos)");
    return false;
  }
  limpiarError(id);
  return true;
}

function validarEmail(id) {
  const val = document.getElementById(id).value.trim();
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!regex.test(val)) {
    mostrarError(id, "Email inválido");
    return false;
  }
  limpiarError(id);
  return true;
}
