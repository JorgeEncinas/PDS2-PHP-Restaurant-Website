<section class="listads">
    <div class="flexmenu">
        <?php
            $result = $this->model->listMenuCategories();
            if ($result != null) {
                foreach($result as $r) {
                    echo '
                    <div class="menu_item">
                        <a href="index.php?c=menu&a=submenu&idsubm='.$r["id"].'&categ='.$r["categoria"].'">
                            <div>
                                <img src="'.$r["img"].'" alt="'.$r["categoria"].'">
                                <h4>'.$r["categoria"].'</h4>
                            </div>
                        </a> <br>
                    </div>
                    ';
                }
            } else {
                echo 'No hay opciones de menú';
            }
        ?>
    </div>
</section>