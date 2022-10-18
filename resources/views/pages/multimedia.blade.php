@extends('layouts.master')
@section('content')
<!-- Galeria de imagenes -->
<section id="gallery">
    <div class="content-center">
        <h2><b>Galeria de imágenes</b></h2>
        <p>A continuación presentamos algunas de las ilustraciones mostradas en las diferentes secciones de la página.</p>
    </div>
    <!-- miniaturas -->
    <a onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">
        <img src="img/seccion_1.png" width="290" id="galeria">
    </a>

    <a onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-black">
        <img src="img/seccion_5.png" width="290" id="galeria">
    </a>

    <a onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-black">
        <img src="img/seccion_4.png" width="290" id="galeria">
    </a>

    <a onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-black">
        <img src="img/seccion_3.png" width="290" id="galeria">
    </a>

    <a onclick="document.getElementById('id05').style.display='block'" class="w3-button w3-black">
        <img src="img/seccion_2.png" width="290" id="galeria">
    </a>

    <a onclick="document.getElementById('id06').style.display='block'" class="w3-button w3-black">
        <img src="img/seccion_6.png" width="290" id="galeria">
    </a>

    <!-- visualización de imagenes -->
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom">
            <div class="w3-container">
                <span onclick="document.getElementById('id01').style.display='none'"
                    class="w3-button w3-display-topright">&times;</span>
                <img title="Representación de mal de alzheimer" src="img/seccion_1.png" width="100%">
            </div>
        </div>
    </div>


    <div id="id02" class="w3-modal">
        <div class="w3-modal-content w3-animate-opacity">
            <div class="w3-container">
                <span onclick="document.getElementById('id02').style.display='none'"
                    class="w3-button w3-display-topright">&times;</span>
                <img title="Psicología de la música" src="img/seccion_5.png" width="100%" onclick="onClick(this)">


            </div>
        </div>
    </div>


    <div id="id03" class="w3-modal">
        <div class="w3-modal-content w3-animate-opacity">
            <div class="w3-container">
                <span onclick="document.getElementById('id03').style.display='none'"
                    class="w3-button w3-display-topright">&times;</span>
                <img title="¿Cómo oímos?" src="img/seccion_4.png" width="100%">
            </div>
        </div>
    </div>

    <div id="id04" class="w3-modal">
        <div class="w3-modal-content w3-animate-opacity">
            <div class="w3-container">
                <span onclick="document.getElementById('id04').style.display='none'"
                    class="w3-button w3-display-topright">&times;</span>
                <img title="Música y sus principios" src="img/seccion_3.png" width="100%">
            </div>
        </div>
    </div>

    <div id="id05" class="w3-modal">
        <div class="w3-modal-content w3-animate-opacity">
            <div class="w3-container">
                <span onclick="document.getElementById('id05').style.display='none'"
                    class="w3-button w3-display-topright">&times;</span>
                <img title="Musicoterapia" src="img/seccion_2.png" width="100%">
            </div>
        </div>
    </div>
    <div id="id06" class="w3-modal">
        <div class="w3-modal-content w3-animate-opacity">
            <div class="w3-container">
                <span onclick="document.getElementById('id06').style.display='none'"
                    class="w3-button w3-display-topright">&times;</span>
                <img title="Multimedia" src="img/seccion_6.png" width="100%">
            </div>
        </div>
    </div>
    
    <!-- Para cerrar las imagenes -->
    <script>
        /*Script que usa un array para almacenar los id's de las imagenes
        para cerrarlas con solo dar un click fuera de ellas*/
        modal = new Array(20);
        for (var i = 0; i < modal.length; i++) {
            if (i < 10) modal[i] = document.getElementById('id0' + i);
            else modal[i] = document.getElementById('id' + i);
        }

        window.onclick = function (event) {
            for (var i = 0; i < modal.length; i++) {
                if (event.target == modal[i]) {
                    modal[i].style.display = "none";
                }
            }
        }
    </script>
</section>
@endsection