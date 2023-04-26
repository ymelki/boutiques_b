
<div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($resultat as $unuser) {  ?>
            <div class="col">
                <div class="card">
                    <img src="/asset/img/<?= $unuser['image']!="" ? $unuser['image'] : "no image.jpg";    ?>"
                      class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $unuser['email']  ?></h5>
                        <p class="card-text"><?= $unuser['password'] ?></p>
                    </div>
                    <a href="/detail_user?email=<?= $unuser['email']?>">detail user</a>
                </div>
            </div>
        <?php  }  ?>
    </div>


</body>

</html>