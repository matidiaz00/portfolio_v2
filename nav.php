<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#base-collapse" aria-expanded="false">
                <span class="sr-only">Menú</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index">
                <img src="assets/img/logo.png">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="base-collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    $full_name = $_SERVER['PHP_SELF'];
                    $name_array = explode('/',$full_name);
                    $count = count($name_array);
                    $page_name = $name_array[$count-1];
                ?>
                <li class="<?php echo ($page_name=='index.php')?'active':'';?>">
                    <a href="index">Inicio</a>
                </li>
                <li class="<?php echo ($page_name=='sobre_mi.php')?'active':'';?>">
                    <a href="sobre_mi">Sobre mí</a>
                </li>
                <li class="<?php echo ($page_name=='habilidades.php')?'active':'';?>">
                    <a href="habilidades">Habilidades</a>
                </li>
                <li class="<?php echo ($page_name=='experiencia.php')?'active':'';?>">
                    <a href="experiencia">Experiencia</a>
                </li>
                <li class="<?php echo ($page_name=='proyectos.php')?'active':'';?>">
                    <a href="proyectos">Proyectos</a>
                </li>
                <li class="<?php echo ($page_name=='curriculum.php')?'active':'';?>">
                    <a href="curriculum">Curriculum</a>
                </li>
                <li class="<?php echo ($page_name=='contacto.php')?'active':'';?>">
                    <a href="contacto">Contacto</a>
                </li>
            </ul>
        </div>

    </div>
</nav>