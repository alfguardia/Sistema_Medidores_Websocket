const CACHE_NAME = 'Surtidores-v1';
const CACHE_URLS = [
    '/',
    '/index.php',
    'build/css/app.css',
    'build/js/app.js',
    'build/js/dashboard.js',
    'build/js/tabla.js'
    // Agrega aquí más recursos que deseas cachear
];
// Instalación del Service Worker
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => {
                return cache.addAll(CACHE_URLS);
            })
    );
});

// Recuperación de recursos desde el caché
self.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
    );
});

// Actualización del caché
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys()
            .then(cacheNames => {
                return Promise.all(
                    cacheNames.filter(name => name !== CACHE_NAME)
                        .map(name => caches.delete(name))
                );
            })
    );
});