function copiarAlPortapapeles(texto) {
    console.log(texto)
    // Crear un elemento de textarea temporal
    const textarea = document.createElement('textarea');
    textarea.value = texto;
    // Asegurarse de que el textarea esté fuera de la vista
    textarea.style.position = 'fixed';
    textarea.style.opacity = 0;
    // Agregar el textarea al documento
    document.body.appendChild(textarea);
    // Seleccionar y copiar el contenido del textarea
    textarea.select();
    document.execCommand('copy');
    // Eliminar el textarea temporal
    document.body.removeChild(textarea);
}