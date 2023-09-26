ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
            center: [lat, long],
            zoom: 13
        }),
        myPlacemark = new ymaps.Placemark([lat, long], {
            balloonContentHeader: "GiftPlatz",
            balloonContentBody: "Шоколад/Дизайн/Подарок",
            balloonContentFooter: "Большая Черкизовская 24а стр6",
            hintContent: "GiftPlatz"
        });
    myMap.geoObjects.add(myPlacemark);

    myMap.hint.show(myMap.getCenter(), "GiftPlatz", {
        showTimeout: 1500
    });
}
