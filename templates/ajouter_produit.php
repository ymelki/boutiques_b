
<form action="enregistrer_produit.php" method="post">
        <div>
            <label for="name">Titre :</label>
            <input type="text" id="titre" name="titre">
        </div>
        <div>
            <label for="mail">description</label>
            <input type="text" id="description" name="description">
        </div>
        <div>
            <label for="msg">prix :</label>
            <input type="text" name="prix" id="prix"></textarea>
        </div>
        <div id="erreur_prix"></div>
        
        <input type="submit" value="ENREGISTER"/>
    </form>
 

</body>
<script src="/asset/script.js"></script>
</html>
