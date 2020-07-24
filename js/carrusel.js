        window.onload = function () {
            // Variables
            const IMAGENES = [
                '../img/destinos/01-full.jpg',
                '../img/destinos/02-full.jpg',
                '../img/destinos/03-full.jpg'
            ];
            const TIEMPO_INTERVALO_MILESIMAS_SEG = 1000;
            let posicionActual = 0;
            let $botonRetroceder = document.querySelector('#atras');
            let $botonAvanzar = document.querySelector('#adelante');
            let $imagen = document.querySelector('#imagen');
            let intervalo;

            // Funciones

            /**
             * Funcion que cambia la foto en la siguiente posicion
             */
            function pasarFoto() {
                if(posicionActual >= IMAGENES.length - 1) {
                    posicionActual = 0;
                } else {
                    posicionActual++;
                }
                renderizarImagen();
            }

            /**
             * Funcion que cambia la foto en la anterior posicion
             */
            function retrocederFoto() {
                if(posicionActual <= 0) {
                    posicionActual = IMAGENES.length - 1;
                } else {
                    posicionActual--;
                }
                renderizarImagen();
            }

            /**
             * Funcion que actualiza la imagen de imagen dependiendo de posicionActual
             */
            function renderizarImagen () {
                $imagen.style.backgroundImage = `url(${IMAGENES[posicionActual]})`;
            }
            // Eventos
            $botonAvanzar.addEventListener('click', pasarFoto);
            $botonRetroceder.addEventListener('click', retrocederFoto);
            // Iniciar
            renderizarImagen();
        } 