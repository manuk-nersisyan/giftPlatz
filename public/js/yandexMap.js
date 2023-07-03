ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
            center: [55.751244, 37.618423],
            zoom: 13
        }),
        myPlacemark = new ymaps.Placemark([55.751244,37.618423], {
            balloonContentHeader: "GiftPlatz",
            balloonContentBody: "Шоколад/Дизайн/Подарок",
            balloonContentFooter: "Большая черкизовская 24а стр6",
            hintContent: "GiftPlatz"
        });
    myMap.geoObjects.add(myPlacemark);

    myMap.hint.show(myMap.getCenter(), "GiftPlatz", {
        showTimeout: 1500
    });
}
