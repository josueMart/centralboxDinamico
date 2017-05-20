<?php 
//Template Name: Contacto
get_header();
 ?>
<section>
    <div class="row" id="hero-contact">
        <h1>Para nosotros es muy importante tu opinión.</h1>
        <p>Escríbenos, te daremos más información.</p>
        <div class="column large-6 medium-11 small-10 large-centered small-centered medium-centered" id="form-contact">
            <input type="text" placeholder="Nombre" required>
            <input type="tel" placeholder="Teléfono">
            <input type="email" placeholder="Email" required name="email">
            <input type="text" placeholder="Dirección">
            <input type="text" placeholder="Asunto">
            <textarea placeholder="Detalle del mensaje"></textarea>
            <button class="button">Enviar</button>
        </div>


    </div>
   
</section>
<?php get_footer(); ?>