    <!-- Sección Contacto -->
    <section id="contact">
    <div class="contact-container">
      
      <!-- Info de contacto -->
      <div class="contact-info">
        <h1>CONTACTO</h1>
        <h5>Micaela Castillo</h5>
        <p>📞 1165220597</p>
        <p>📧 Mica.castillo.@gmail.com</p>
        <div class="contact-buttons">
          <button type="button"> <a  href="https://github.com/MicsC18"  target="_blank" rel="noopener noreferrer">GitHub</a></button>
          <button><a href="../includes/MicaelaCastillocv.pdf" target="_blank">CV</a></button>
          <button><a href="https://www.linkedin.com/in/micacastillo"  target="_blank">LinkedIn</a></button>
        </div>
      </div>

      <!-- Formulario -->
      <div class="contact-form">
        <h3>HÁZME UNA CONSULTA</h3>
        <form id="formContact" action="ProcesarContacto.php" method="post">
          <div>
            <input id="Nombre" name="Nombre" type="text" placeholder="Tu Nombre" required>
            <div class="invalid-feedback"></div>
          </div>
          <div>
            <input id="email" name="email" type="email" placeholder="Tu Email" required>
            <div class="invalid-feedback"></div>
          </div>
          <div>
             <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje..." rows="5" required></textarea>
            <div class="invalid-feedback"></div>
          </div>
          <button id="BtnContact" type="submit">Enviar</button>
        </form>
      </div>

    </div>
</section>