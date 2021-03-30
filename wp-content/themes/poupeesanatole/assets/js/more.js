function cache_affiche(ok1, okPlusMoins){
    if(document.getElementById(ok1).style.display == 'none')
    {
        document.getElementById(ok1).style.display='block';
        document.getElementById(okPlusMoins).value = 'En savoir -';
    }
    else
    {
        document.getElementById(ok1).style.display='none';
        document.getElementById(okPlusMoins).value = 'En savoir +';
    }
};