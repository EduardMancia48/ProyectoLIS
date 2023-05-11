
    // Se obtienen los elementos necesarios del DOM
    const searchInput = document.getElementById('searchInput');
    const cuponesContainer = document.getElementById('cupones_container');
    const cuponCards = document.getElementsByClassName('cupon-card');
    const mostrar = document.getElementById('jsMensaje');
    
    // Se agrega un evento para detectar cambios en el input de búsqueda
    searchInput.addEventListener('input', () => {
        // Se obtiene el texto ingresado en el input
        const searchText = searchInput.value.toLowerCase();
        let resultados =0;
        
        // Se recorren las tarjetas de cupones y se ocultan aquellas que no coinciden con la búsqueda
        for (let i = 0; i < cuponCards.length; i++) {
            const cardTitle = cuponCards[i].querySelector('.card-title').innerText.toLowerCase();
            
            if (cardTitle.includes(searchText)) {
                cuponCards[i].style.display = 'block';
                resultados ++;
            } else {
                cuponCards[i].style.display = 'none';
                
            }
        }

        if (resultados === 0) {
            mostrar.innerHTML="<h3 class=\"mt-5 font-weight-bold \">Sin resultados.</h3>";
        } else {
            mostrar.innerHTML=" ";
        }
    });

    //mostrar.innerHTML="<h3 class=\"mt-5 font-weight-bold \">Sin resultados.</h3>";    

