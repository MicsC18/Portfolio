const BotonesProyectos = document.querySelectorAll(".project__link");
const ModalTitulo = document.querySelector(".modal-title");
const ModalBody = document.querySelector(".modalBody");
const modaltec = document.querySelector(".modalTec");
const ImagsProy = document.querySelectorAll(".imgProy");

document.addEventListener("DOMContentLoaded", function () {
  BotonesProyectos.forEach((btns) =>
    btns.addEventListener("click", (e) => {
      const modalElement = document.getElementById("ModalProyectos");
      const modal = new bootstrap.Modal(modalElement);

      let VerProyecto = e.target.value;

      if (VerProyecto == 1) {
        ModalTitulo.textContent = "AutoExpress";
        ModalBody.textContent =
          "Sistema orientado al alquiler de vehículos, con el objetivo de facilitar la gestión de reservas, pagos y administración de la flota de vehículos, tanto para los clientes como para los administradores del sistema. Cuenta con funcionalidades específicas para gestionar reservas y disponibilidad.";

        ImagsProy.forEach((src, i) => {
          const item = document.createElement("div");
          item.innerHTML = `<img src="${src}" class="d-block w-100" alt="Slide ${
            i + 1
          }">`;
          inner.appendChild(item);
        });

        modaltec.textContent = "HTML, AJAX, JavaScript, PHP, CSS, MySQL";
      } else if (VerProyecto == 2) {
        ModalTitulo.textContent = "Dia";
        ModalBody.textContent = "";
        modaltec.textContent = "HTML, AJAX, JavaScript, PHP, CSS, MySQL";
      } else if (VerProyecto == 3) {
        ModalTitulo.textContent = "Afiliados";
        ModalBody.textContent =
          "Sistema Orientado a la administracion integral de Afiliados del sindicato de la carne. La plataforma permite visualizar, registrar, editar y eliminar afiliados.  Incorpora la generación automática de la ficha del afiliado recién inscripto en formato pdf descargable, optimizando los procesos administrativos";
        modaltec.textContent = "HTML, AJAX, JavaScript, PHP, CSS, MySQL";
      }

      modal.show();
    })
  );
  ModalTitulo.textContent = "";
  ModalBody.textContent = "";
  modaltec.textContent = "";
});
