
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function goBack() {
  window.history.back();
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

    function initialize() {
        
        //variáveis dos mapas
        var sao_miguel = new google.maps.LatLng(37.782545, -25.495070);
        var santa_maria = new google.maps.LatLng(36.973062, -25.094728);
        var sao_jorge = new google.maps.LatLng(38.641253, -28.029045);
        var graciosa = new google.maps.LatLng(39.051702, -28.006863);
        var terceira = new google.maps.LatLng(38.722418, -27.213828);
        var flores = new google.maps.LatLng(39.439280, -31.204284);
        var faial = new google.maps.LatLng(38.577781, -28.700612);
        var corvo = new google.maps.LatLng(39.700333, -31.114375);
        var pico_coordenates = new google.maps.LatLng(38.459796, -28.322870);
        
        
        var mapa1 = {
            zoom: 10,                                      //Zoom do mapa
            center: sao_miguel,                           //nome do mapa original
            mapTypeId: google.maps.MapTypeId.SATELLITE   //tipo de mapa ROADMAP ou SATTELITE
        };
        var mapa2 =  {
            zoom: 12,
            center: santa_maria,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa3 =  {
            zoom: 11,
            center: sao_jorge,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa4 =  {
            zoom: 12,
            center: graciosa,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa5 =  {
            zoom: 11,
            center: terceira,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa6 =  {
            zoom: 11,
            center: flores,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa7 =  {
            zoom: 11,
            center: faial,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa8 =  {
            zoom: 12,
            center: corvo,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var mapa9 =  {
            zoom: 10.5,
            center: pico_coordenates,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
    
        var saomiguel = new google.maps.Map(document.getElementById("mapa_sao_miguel"), mapa1);
        var santamaria = new google.maps.Map(document.getElementById("mapa_santa_maria"), mapa2);
        var saojorge = new google.maps.Map(document.getElementById("mapa_sao_jorge"), mapa3);
        var graciosa = new google.maps.Map(document.getElementById("mapa_graciosa"), mapa4);
        var terceira = new google.maps.Map(document.getElementById("mapa_terceira"), mapa5);
        var flores = new google.maps.Map(document.getElementById("mapa_flores"), mapa6);
        var faial = new google.maps.Map(document.getElementById("mapa_faial"), mapa7);
        var corvo = new google.maps.Map(document.getElementById("mapa_corvo"), mapa8);
        var pico = new google.maps.Map(document.getElementById("mapa_pico"), mapa9);
    
        var myMarker = new google.maps.Marker(
        {
            position: sao_miguel,
            map: saomiguel,
            title:"São Miguel"
       });
        var myMarker2 = new google.maps.Marker(
            {
                position: santa_maria,
                map: santamaria,
                title:"Santa Maria"
        });
        var myMarker3 = new google.maps.Marker(
            {
                position: sao_jorge,
                map: saojorge,
                title:"São Jorge"
        });
        var myMarker4 = new google.maps.Marker(
            {
                position: graciosa,
                map: graciosa,
                title:"Graciosa"
        });
        var myMarker5 = new google.maps.Marker(
            {
                position: terceira,
                map: terceira,
                title:"Terceira"
        });
        var myMarker6 = new google.maps.Marker(
            {
                position: flores,
                map: flores,
                title:"Flores"
        });
        var myMarker7 = new google.maps.Marker(
            {
                position: faial,
                map: faial,
                title:"Faial"
        });
        var myMarker8 = new google.maps.Marker(
            {
                position: corvo,
                map: corvo,
                title:"Corvo"
        });
        var myMarker9 = new google.maps.Marker(
            {
                position: pico_coordenates,
                map: pico,
                title:"Pico"
        });
    }
     
        google.maps.event.addDomListener(window, 'load', initialize);
        
        
        