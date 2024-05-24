document.addEventListener('DOMContentLoaded', function () {
    const searchForm = document.getElementById('search-form');
    const searchInput = document.getElementById('search-input');

    searchForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Evita que el formulario se envíe normalmente

        const searchTerm = searchInput.value.trim(); // Obtiene el término de búsqueda y elimina los espacios en blanco

        // Realiza la búsqueda solo si se ha ingresado un término de búsqueda
        if (searchTerm !== '') {
            // Aquí puedes realizar tu lógica de búsqueda, como enviar una solicitud AJAX al servidor
            // Por ahora, simplemente mostraremos el término de búsqueda en la consola
            console.log('Búsqueda por titulo:', searchTerm);
        } else {
            // Si no se ha ingresado ningún término de búsqueda, muestra un mensaje de advertencia al usuario
            alert('Por favor, ingresa el nombre del libro para buscar.');
        }
    });
});
