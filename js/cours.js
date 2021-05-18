(function(){

        // chacune des classes des cours
        let image = document.getElementsByClassName('Image');
        let web = document.getElementsByClassName('Web');
        let spec = document.getElementsByClassName('Spécifique');
        let jeu = document.getElementsByClassName('Jeu');
        let conception = document.getElementsByClassName('Conception');

        // tout les articles
        let article = document.querySelectorAll('.cours article');
        let compteArticle = article.length;

        for(let i=0 ; i < compteArticle.lenght ; i++){
            article.addEventListener('mousedown',function(){
                if(article.classList.contains('Image')){
                    image.style.backgroundColor('red');
                }

                if(article.classList.contains('Web')){
                    web.style.backgroundColor('blue');
                }

                if(article.classList.contains('Spécifique')){
                    spec.style.backgroundColor('green');
                }

                if(article.classList.contains('Jeu')){
                    console.log(jeu); // comprend tout les element qui on la classe 'jeu'
                    jeu.style.backgroundColor('yellow');
                }

                if(article.classList.contains('Conception')){
                    conception.style.backgroundColor('red');
                }
            });
        }
})()