<h1>Produit detail</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
             <div class="col">
                <div class="card">
                    <img src="/asset/img/<?= $monproduit['nom_image']!="" ? $monproduit['image'] : "no image.jpg";    ?>"
                      class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $monproduit['titre']  ?></h5>
                        <p class="card-text"><?= $monproduit['description'] ?> <?= $monproduit['prix'] ?></p>
                    </div>
                               </div>
            </div>
     </div>


</body>

</html>