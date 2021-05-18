(function(){
        let article = document.querySelectorAll('.cours article');
        let image = document.getElementsByClassName('Image');
        let web = document.getElementsByClassName('Web');
        let spec = document.getElementsByClassName('Spécifique');
        let jeu = document.getElementsByClassName('Jeu');
        let conception = document.getElementsByClassName('Conception');
        
        article.addEventListener('mousedown', function(){
            if(article.classList.contains('Image')){
                image.classList.add('bleu');
            }
        })
})()