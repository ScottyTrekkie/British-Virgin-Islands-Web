var chapters = 6;
var ctlengths = [5, 12, 10, 6, 8, 16];


function updatestate(chapternum){
    //correct result will update question completion and also current question in memory
    cookie = JSON.parse($.cookie('chapter' + chapternum));
    $.cookie(('chapter' + chapternum), JSON.stringify(new Array(cookie[1] + 1,cookie[1] + 1)));
}

function updatewatch(chapternum, index){
    //only updates the browsing through questions
    cookie = JSON.parse($.cookie('chapter' + chapternum));
    $.cookie(('chapter' + chapternum), JSON.stringify(new Array(index,cookie[1])));
}

function totalPercentageCorrect(){
    var t = 0;
    for(var i = 0; i < ctlengths.length; i++)
        t += PercentageOfChapter(i);
    return t/ctlengths.length;
}

function PercentageOfChapter(index){
    var x = 'chapter' + (index+1);
    chaptertuple = JSON.parse($.cookie(x));
    return ((chaptertuple[1])/ctlengths[index])*100;
}

$(function() {
        $( "#progressbar" ).progressbar({
            value: totalPercentageCorrect()
        });
});

function nullcheck(){
    for (var i=1; i <= chapters; i++) {
	if (typeof $.cookie('chapter' + i) === 'undefined') {
            //window.alert(i + " does not exist");
            $.cookie(('chapter' + i), JSON.stringify(new Array(0,0)));
	}
        else{
            //window.alert($.cookie('chapter' + i));
        }
    }
}

function startcookies(){
    nullcheck();
    setProgressOfElement("p1", PercentageOfChapter(0));
    setProgressOfElement("p2", PercentageOfChapter(1));
    setProgressOfElement("p3", PercentageOfChapter(2));
    setProgressOfElement("p4", PercentageOfChapter(3));
    setProgressOfElement("p5", PercentageOfChapter(4));
    setProgressOfElement("p6", PercentageOfChapter(5));
    setProgressOfElement("totalprog", totalPercentageCorrect());
}

function idToCheckmark(id){
    return "c" + id.slice(-1);
}

function setProgressOfElement(id, percent) {
  var el = document.getElementById(id);
  el.style.width = percent + "%";
  if(percent===100 && id !== "totalprog"){
    var el = document.getElementById(idToCheckmark(id));
    el.style.visibility = "visible";
  }
}