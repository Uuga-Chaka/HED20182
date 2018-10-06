var horario = [{
    dia:'lunes',
    horario:[
        {tipo:'conf',inicio:8,final:9.1,descripcion:'hola',link:'www.google.com'},
        {tipo:'conf',inicio:9.2,final:10,descripcion:'hola',link:'www.google.com'},
        {tipo:'conf',inicio:10,final:11,descripcion:'hola',link:'www.google.com'},
        {tipo:'conf',inicio:11,final:12,descripcion:'hola',link:'www.google.com'}]},
];

var schedulePlacement = document.getElementById('schedule');

function addingEvents(margin, width, info, link) {
    var event = document.createElement('div');
    event.innerHTML = "<p>"+info+"</p>";
    event.setAttribute('class', 'event');
    event.style.marginLeft = margin + 'px';
    event.style.width = width + 'px';
    event.style.position = 'absolute';
    event.setAttribute('href', link);
    return event;
}

function addingDay() {

    horario.forEach(element => {
        var day = document.createElement('div');
        day.setAttribute('class', 'day');
        day.style.position = 'relative';

        var appendEvents = element.horario.forEach((ele) => {
            var marginLeft = (ele.inicio - 7)*100;
            var width = (ele.final - ele.inicio) *100;
            
             day.appendChild(addingEvents(marginLeft, width, ele.descripcion, ele.link));
        });
        schedulePlacement.appendChild(day);
    });
}

addingDay();
