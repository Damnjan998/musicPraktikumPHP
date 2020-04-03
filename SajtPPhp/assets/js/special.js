$(document).ready(function() {
    var sort = 0;
    var strana = 0;
    var kat_id = 0;

    $.ajax({
        url: "models/paginacija.php",
        method: "GET",
        dataType: "json",
        success: function(data){
            prikaziBrojevePaginacije(data);
        },
        error: function(xhr,status,error){
            console.log(xhr,status,error);
        }
    });

    function prikaziBrojevePaginacije(brojevi){
        let ispis = "<ul id='stilPaginacija'>";
        for(let i=1;i<brojevi+1;i++){
            ispis += `<li><a class='pag' data-id='${i}' href='index.php?page=specials&strana=${i}'>${i}</a></li> `;
        }
        ispis+= "</ul>";

        document.getElementById("paginacija").innerHTML = ispis;
        $('.pag').click(promeniStranu);
    }

    
    $.ajax({
        url: "models/ispisAlbuma.php",
        method: "GET",
        dataType: "json",
        success: function(data){
            prikazProizvoda(data);
        },
        error: function(xhr,status,error){
            console.log(xhr,status,error);
            console.warn(xhr.responseText);
        }
    })

    function prikazProizvoda(podaciAlbum){
        var brojac = 0;
        var ispis = "<div class='section group example'>";
        for(let album of podaciAlbum){
            if(brojac == 5){
                ispis += "<div class='section group example'>";
            }
            ispis += ispisProizvoda(album);
            if(brojac == 4){
                ispis +="</div>";
            }
            brojac++;
        }
        ispis +="</div>";

        document.getElementById("prikazProizvoda").innerHTML = ispis;
    }

    function ispisProizvoda(album){
        return `<div class="grid_1_of_2 images_1_of_2">
        <img src="${album.slika}" alt="${album.alt}" />
         <h3>${album.naziv}</h3>
      <span class="godina"><sup>Year: ${album.godina}</sup></span>
       <div class="button"><span><a href="index.php?page=details&id=${album.id}" data-id=${album.id} class="showMore">Show more</a></span></div>
   </div>`
    }


    document.getElementById("selectPrductSort").onchange = function(vrednost){
        sort = vrednost.target.value;

        $.ajax({
            url : "models/ispisAlbuma.php?sort=" + sort + "&strana=" + strana + "&kat_id=" + kat_id,
            method : "GET",
            dataType : "json",
            success : function(data){
                prikazProizvoda(data);
            },
            error : function(xhr, status, error){
                console.log(error);
            }
        });
    }

    

    function promeniStranu(e){
        e.preventDefault();
        strana = this.dataset.id;
        let url = "models/ispisAlbuma.php?strana=" + strana + "&sort=" + sort + "&kat_id=" + kat_id;
        console.log(url);
        $.ajax({
            url: url,
            method: "GET",
            dataType: "json",
            success: function(data){
                prikazProizvoda(data);
            },
            error: function(xhr,status,error){
                console.log(xhr,status,error);
            }
        })
    }


    $('.filter-category').click(filtrirajPoKategoriji);

    function filtrirajPoKategoriji(e){
        kat_id = this.dataset.id;
        let urlPaginacija = "models/paginacija.php?kat_id=" + kat_id;
        $.ajax({
            url: urlPaginacija,
            method : "GET",
            success: function(data){
                document.getElementById("paginacija").innerHTML = data;
            },
            error: function(xhr,status,error){
                console.log(xhr,status,error);
            }
        })
        e.preventDefault();
        
        let urlAlbumi = "models/ispisAlbuma.php?kat_id=" + kat_id + "&strana=1&sort=" + sort;
        $.ajax({
            url : urlAlbumi,
            method : "GET",
            dataType : "json",
            success: function(data){
                prikazProizvoda(data);
            },
            error: function(xhr,status,error){
                console.log(xhr,status,error);
            }
        })
    }
})