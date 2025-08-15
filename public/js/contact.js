const map = L.map('map').setView([-21.1767, -47.8208], 16);

const layer = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>'
});
layer.addTo(map);

const marker = L.marker([-21.1767, -47.8208]);
marker.addTo(map);