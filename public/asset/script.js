/* js */
 

document.getElementById("prix").addEventListener("keydown", test); 

function test(){
    if (document.getElementById("prix").value > 10000    ) {
        document.getElementById("erreur_prix").innerHTML="Attention : Le prix est trop elevé"
        alert("Le prix est trop elevé");
    }
}
