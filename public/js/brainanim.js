$('#invBtn, .center').click(function(){

    var tm = new TimelineMax({});
    tm.to($('#invBtn'),.15,{scaleX:0})
        .from($('#tubeLiquid line:nth-child(4)'),.25,{drawSVG:'0%',ease:Linear.easeInOut})
        .from($('#smallBattery rect:nth-child(2)'),.25,{scaleY:0,scaleX:0,transformOrigin:'0% 30%'})
        .from($('#smallBattery rect:nth-child(3)'),.12,{scaleY:0,transformOrigin:'50% 100%'})
        .from($('#tubeLiquid polyline:nth-child(1)'),.325,{drawSVG:'100% 100%',ease:Linear.easeInOut})
        .from($('#bigBatteryEnergy'),.25,{scaleY:0,transformOrigin:'50% 100%',ease:Linear.easeInOut})
        .from($('#tubeLiquid line:nth-child(2)'),.25,{drawSVG:'0%',ease:Linear.easeInOut})
        .from($('#triangle'),.125,{scaleY:0,transformOrigin:'50% 100%',ease:Bounce.easeOut})
        .from($('#tubeLiquid polyline:nth-child(3)'),.5,{drawSVG:'0%',ease:Linear.easeInOut})
        .from($('#lightBulb'),.25,{y:'+=100',ease:Bounce.easeOut})
        .from($('#bulbGlow'),.25,{alpha:0})
        .to($('#invBtn'),.75,{scaleX:1});
    callingfill();

});
function callingfill() {
    fillbrain();
    setTimeout(clearfillbrain, 2200);
}

function fillbrain() {
    $('#brain path').css('fill', '#fe6911');
}

function clearfillbrain() {
    $('#brain path').css('fill', '#fefefc');
}