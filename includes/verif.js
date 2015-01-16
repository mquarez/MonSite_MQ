function surligne(champ, erreur) // fonction qui colore les textbox
{
    if (erreur)
        champ.style.backgroundColor = "#fba"; // Colorie en rouge si incorrect 
    else
        champ.style.backgroundColor = "#3D7"; // Colorie en vert si correct
}

function verifNom(champ) // Fonction qui vérifie l'enregistrement du nom
{
    if (!champ.value) // Si la textbox est vide
    {
        surligne(champ, true); // Fonction surligne passe à True, ce qui affiche la textbox en rouge
        alert("Attention : Le champ Nom, ne peut être vide."); // On affiche le messages afin d'expliquert l'erreur à l'utilisateur
        return false;
    }
    else
    {
        surligne(champ, false); // Alors on passe la fonction surligne à False, la textbox seras donc verte
        return true;
    }
}

function verifPrenom(champ) // Fonction qui vérifie l'enregistrement du prenom
{
    if (!champ.value) // Si la textbox est vide
    {
        surligne(champ, true); // Fonction surligne passe à True, ce qui affiche la textbox en rouge
        alert("Attention : Le champ Prenom, ne peut être vide."); // On affiche le messages afin d'expliquert l'erreur à l'utilisateur
        return false;
    }
    else
    {
        surligne(champ, false); // Alors on passe la fonction surligne à False, la textbox seras donc verte
        return true;
    }
}

function verifMail(champ) // Fonction qui vérifie l'enregistrement du mail
{
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/; // Caractère autorisé dans le mail avec l'emplacement ou les caractères sont autorisé
    if (!regex.test(champ.value)) // Si le mail respect la règle ci-dessus
    {
        surligne(champ, true); // Fonction surligne passe à True, ce qui affiche la textbox en rouge
        alert("Votre adresse e-mail est incorrecte"); // On affiche le messages afin d'expliquert l'erreur à l'utilisateur
        return false;
    }
    else
    {
        surligne(champ, false); // Alors on passe la fonction surligne à False, la textbox seras donc verte
        return true;
    }
}

function verifPswd(champ) // Fonction qui vérifie l'enregistrement du mot de passe
{
    if (champ.value.length < 5) // Si le mot de passe est inferieur a 5 caractères 
    {
        surligne(champ, true); // Fonction surligne passe à True, ce qui affiche la textbox en rouge
        alert("Votre mot de passe doit contenir au minimum 5 caractères"); // On affiche le messages afin d'expliquert l'erreur à l'utilisateur
        return false;
    }
    else //Si le mot de passe répond au critère de validation - Minimlum 5 caractères
    {
        surligne(champ, false); //  Alors on passe la fonction surligne à False, la textbox seras donc verte
        return true;
    }
}