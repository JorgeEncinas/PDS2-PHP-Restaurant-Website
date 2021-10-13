<h1><?php echo $categMenu; ?></h1>
<section class="listads">
    <div id="flexmenu">
        <?php
            if ($result != null) {
                foreach($result as $r) {
                    echo '
                    <div class="submenu_item">
                        <div class="smimg">
                            <img src="'.$r["rutaimg"].'" alt="'.$r["platillo"].'"></a>
                        </div>
                        <div class="smtxt">
                            <h1>'.$r["platillo"].'</h1> <br>
                            <p>'.$r["descripcion"].'</p>
                        </div>
                    </div>
                    ';
                }
            } else {
                echo 'No hay opciones de submenú';
            }
        ?>
    </div>
</section>