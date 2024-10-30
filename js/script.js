
document.getElementById('closeButton').addEventListener('click', function() {
    const overlay = document.getElementById('overlay');
    overlay.style.display = 'none'; // Oculta a sobreposição
    document.getElementById('map').style.zIndex = '1';    });

    console.log("hellou")