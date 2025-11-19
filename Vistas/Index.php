<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MC - Micaela Castillo Developer</title>
<!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<!-- Sweet -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- CSS -->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/Presentacion.css">
    <link rel="stylesheet" href="../css/tec.css">
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/Portfolio.css">
    <link rel="stylesheet" href="../css/modal.css">
<!-- JS -->
    <script defer src="../js/Portfolio.js"></script>
    <script defer src="../js/contacto.js"></script>

<!-- Script de reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body id="IndexBody">

<?php __DIR__.include_once("../includes/header.php");?>
<?php __DIR__.include_once("../includes/Portfolio.php");?>
<?php __DIR__.include_once("../includes/Tecnologias.php");?>
<?php __DIR__.include_once("../includes/contacto.php");?>
<?php __DIR__.include_once("../includes/footer.php");?>



<!-- Modal -->
<div id="ModalProyectos" class="modal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Carrussel -->
    <div>
        <img class="imgProy" src="" alt="">
        <img class="imgProy" src="" alt="">
    </div>

      <div class="modal-body mt-3">
        <p class="modalBody"></p>
      </div>
      <div class="px-3 pb-3">
        <h5>Tecnologías utilizadas:</h5>
        <p class="modalTec"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>