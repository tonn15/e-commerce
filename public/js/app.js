var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// bar de navigation an'le izyyyyyyy

$(document).ready(function(){
    $('.tabs').each(function(){
        // each => selectionne tous les element de la class tabs 
        // this => a chaque fois c'est la tab courante
        var current = null;
        // chercher le premier kien et le mettre en class active
        current = $(this).find('a:first').attr('href');
        $(this).find('a[href="+current+"]').addClass('active');
        // cache les contenus qui ne sont pas active => hide()
        $(current).siblings().hide();
        $(this).find('a').click(function(){
            var link = $(this).attr('href');
            if( link == current){
                return false;
            } else
            {
                // enleve l'attribut class="active"
                $(this).siblings().removeClass('active');
                // ajouter un attibut active au lien clicke
                $(this).addClass('active');
                // afficher le lien active et cache les lien in-active
                $(link).show().siblings().hide();
                current = link;
            }
        });
    });

})