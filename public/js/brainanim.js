$('#invBtn').click(function(){

    var tm = new TimelineMax({});
    tm.to($('#invBtn'),.15,{scaleX:0})
        .from($('#tubeLiquid line:nth-child(4)'),.5,{drawSVG:'0%',ease:Linear.easeInOut})
        .from($('#smallBattery rect:nth-child(2)'),.5,{scaleY:0,scaleX:0,transformOrigin:'0% 30%'})
        .from($('#smallBattery rect:nth-child(3)'),.25,{scaleY:0,transformOrigin:'50% 100%'})
        .from($('#tubeLiquid polyline:nth-child(1)'),.75,{drawSVG:'100% 100%',ease:Linear.easeInOut})
        .from($('#bigBatteryEnergy'),.5,{scaleY:0,transformOrigin:'50% 100%',ease:Linear.easeInOut})
        .from($('#tubeLiquid line:nth-child(2)'),.5,{drawSVG:'0%',ease:Linear.easeInOut})
        .from($('#triangle'),.25,{scaleY:0,transformOrigin:'50% 100%',ease:Bounce.easeOut})
        .from($('#tubeLiquid polyline:nth-child(3)'),1,{drawSVG:'0%',ease:Linear.easeInOut})
        .from($('#lightBulb'),.5,{y:'+=100',ease:Bounce.easeOut})
        .from($('#bulbGlow'),.5,{alpha:0})
        .to($('#invBtn'),.15,{scaleX:1});
    callingfill();

});
function callingfill() {
    fillbrain();
    setTimeout(clearfillbrain, 4400);
}

function fillbrain() {
    $('#brain path').css('fill', '#fe6911');
}

function clearfillbrain() {
    $('#brain path').css('fill', '#fefefc');
}