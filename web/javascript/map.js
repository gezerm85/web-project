if (document.getElementById('map')){
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ2V6ZXJtODUiLCJhIjoiY20xcnRobGltMDd0bjJpcjE2aXA4NG81aCJ9.eYe0V85BeffvRX3VNEQmWQ';
        const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/outdoors-v12',
        center: [32.84462311405331,39.933243225789525],
        zoom: 14,
        cooperativeGestures: true
    });
    
    const geojson = {
        type: 'FeatureCollection',
        features: [
            { 
            type: 'Feature',
            geometry: {
                type: 'Point',
                coordinates: [32.84462311405331, 39.933243225789525]
            }
            }
        ]
        };
    
        for (const feature of geojson.features) {
        // create a HTML element for each feature
        const el = document.createElement('div');
        el.className = 'marker';
    
        // make a marker for each feature and add to the map
        new mapboxgl.Marker(el).setLngLat(feature.geometry.coordinates).addTo(map);
    }
}

if (document.getElementById('map1')) {
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ2V6ZXJtODUiLCJhIjoiY20xcnRobGltMDd0bjJpcjE2aXA4NG81aCJ9.eYe0V85BeffvRX3VNEQmWQ';
        const map1 = new mapboxgl.Map({
        container: 'map1',
        style: 'mapbox://styles/mapbox/outdoors-v12',
        center: [32.84462311405331, 39.933243225789525],
        zoom: 14,
        cooperativeGestures: true
    });
    
    const geojson1 = {
        type: 'FeatureCollection',
        features: [
            {
            type: 'Feature',
            geometry: {
                type: 'Point',
                coordinates: [32.84462311405331, 39.933243225789525]
            }
            }
        ]
        };
    
        for (const feature of geojson1.features) {
        // create a HTML element for each feature
        const el = document.createElement('div');
        el.className = 'marker';
    
        // make a marker for each feature and add to the map
        new mapboxgl.Marker(el).setLngLat(feature.geometry.coordinates).addTo(map1);
    }
}