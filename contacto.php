<?php include 'head.php';?>
<?php include 'nav.php';?>

<header class="jumbotron">
    <div class="container">
        <h1>Contacto</h1>
    </div>
</header>

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <h2>Contacto directo</h2>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Correo:</strong> <a href="mailto:info@matidiaz.com.ar">info@matidiaz.com.ar</a>
                    </li>
                    <li class="list-group-item">
                        <strong>Celular:</strong> (5411) ?
                    </li>
                    <li class="list-group-item">
                        <strong>Skype:</strong> matidiaz00
                    </li>
                    <li class="list-group-item">
                        <strong>Redes sociales:</strong>
                        <div class="social_icons social-base">
                            <a target="_blank" href="https://www.facebook.com/matidiaz00"><span class="social-icon" id="facebook"></span></a>
                            <a target="_blank" href="http://www.instagram.com/matidiaz00"><span class="social-icon" id="instagram"></span></a>
                            <a target="_blank" href="https://www.twitter.com/matidiaz000"><span class="social-icon" id="twitter"></span></a>
                            <a target="_blank" href="https://www.youtube.com/user/00matidiaz"><span class="social-icon" id="youtube"></span></a>
                            <a target="_blank" href="https://www.behance.net/matidiaz00"><span class="social-icon" id="behance"></span></a>
                            <a target="_blank" href="https://www.soundcloud.com/matidiaz00"><span class="social-icon" id="soundcloud"></span></a>
                            <a target="_blank" href="http://matidiaz000.tumblr.com/"><span class="social-icon" id="tumblr"></span></a>
                            <a target="_blank" href="http://ar.linkedin.com/in/matidiaz/"><span class="social-icon" id="linkedin"></span></a>
                            <a target="_blank" href="http://www.lookbook.nu/matidiaz00"><span class="social-icon" id="lookbook"></span></a>
                            <a target="_blank" href="https://vine.co/u/1090313442742657024"><span class="social-icon" id="vine"></span></a>
                            <a target="_blank" href="http://drawcrowd.com/matidiaz00"><span class="social-icon" id="drawclroud"></span></a>
                            <a target="_blank" href="https://www.flickr.com/photos/matidiaz/"><span class="social-icon" id="flickr"></span></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 col-md-12">
                <h2>Formulario de contacto</h2>
                <p class="bg-danger">¡Formulario en construccion!</p>
                <form action="form.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" disabled>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" disabled>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="10" placeholder="Mensaje" disabled></textarea>
                    </div>
                    <button type="submit" class="btn btn-default disabled" disabled>Enviar</button>
                </form>
            </div>
        </div>
    </div>
</article>

<?php include 'footer.php';?>