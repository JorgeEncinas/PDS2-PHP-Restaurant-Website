<section class="listads">
    <div class="flexads">
        <?php
            $result = $this->model->listAds();
            if ($result != null) {
                foreach($result as $r) {
                    echo '
                    <div class="ad">
                        <img src="/pds2resto/'.$r["src"].'" alt="' .$r["alt"]. '">
                    </div>
                    ';
                }
            } else {
                echo 'No hay promociones de momento';
            }
        ?>
    </div>
</section>