<html>
<head>
<link type="text/css" href="csshake.css">
    <title>Portail de la révolution</title>
    <style>
    /*! * * * * * * * * * * * * * * * * * * * *\  
  CSShake :: Package
  v1.5.0
  CSS classes to move your DOM
  (c) 2015 @elrumordelaluz
  http://elrumordelaluz.github.io/csshake/
  Licensed under MIT
\* * * * * * * * * * * * * * * * * * * * */.shake,.shake-little,.shake-slow,.shake-hard,.shake-horizontal,.shake-vertical,.shake-rotate,.shake-opacity,.shake-crazy,.shake-chunk{display:inherit;transform-origin:center center}.shake-freeze,.shake-constant.shake-constant--hover:hover,.shake-trigger:hover .shake-constant.shake-constant--hover{animation-play-state:paused}.shake-freeze:hover,.shake-trigger:hover .shake-freeze,.shake:hover,.shake-trigger:hover .shake,.shake-little:hover,.shake-trigger:hover .shake-little,.shake-slow:hover,.shake-trigger:hover .shake-slow,.shake-hard:hover,.shake-trigger:hover .shake-hard,.shake-horizontal:hover,.shake-trigger:hover .shake-horizontal,.shake-vertical:hover,.shake-trigger:hover .shake-vertical,.shake-rotate:hover,.shake-trigger:hover .shake-rotate,.shake-opacity:hover,.shake-trigger:hover .shake-opacity,.shake-crazy:hover,.shake-trigger:hover .shake-crazy,.shake-chunk:hover,.shake-trigger:hover .shake-chunk{animation-play-state:running}@keyframes shake{2%{transform:translate(1.5px, -1.5px) rotate(-.5deg)}4%{transform:translate(-1.5px, -.5px) rotate(1.5deg)}6%{transform:translate(1.5px, 2.5px) rotate(-.5deg)}8%{transform:translate(2.5px, .5px) rotate(-.5deg)}10%{transform:translate(2.5px, -.5px) rotate(-.5deg)}12%{transform:translate(-.5px, 1.5px) rotate(1.5deg)}14%{transform:translate(2.5px, -.5px) rotate(1.5deg)}16%{transform:translate(.5px, -1.5px) rotate(.5deg)}18%{transform:translate(2.5px, 2.5px) rotate(-.5deg)}20%{transform:translate(1.5px, -.5px) rotate(1.5deg)}22%{transform:translate(-.5px, 1.5px) rotate(.5deg)}24%{transform:translate(-1.5px, 1.5px) rotate(.5deg)}26%{transform:translate(2.5px, .5px) rotate(1.5deg)}28%{transform:translate(-.5px, -.5px) rotate(.5deg)}30%{transform:translate(.5px, -.5px) rotate(.5deg)}32%{transform:translate(1.5px, -.5px) rotate(1.5deg)}34%{transform:translate(1.5px, .5px) rotate(-.5deg)}36%{transform:translate(.5px, 2.5px) rotate(.5deg)}38%{transform:translate(-1.5px, -.5px) rotate(.5deg)}40%{transform:translate(.5px, -.5px) rotate(.5deg)}42%{transform:translate(.5px, -.5px) rotate(1.5deg)}44%{transform:translate(-1.5px, .5px) rotate(1.5deg)}46%{transform:translate(-1.5px, -.5px) rotate(-.5deg)}48%{transform:translate(-1.5px, -.5px) rotate(-.5deg)}50%{transform:translate(-.5px, -.5px) rotate(.5deg)}52%{transform:translate(-1.5px, .5px) rotate(1.5deg)}54%{transform:translate(2.5px, .5px) rotate(-.5deg)}56%{transform:translate(1.5px, 2.5px) rotate(1.5deg)}58%{transform:translate(.5px, 1.5px) rotate(1.5deg)}60%{transform:translate(-1.5px, -1.5px) rotate(1.5deg)}62%{transform:translate(.5px, 1.5px) rotate(-.5deg)}64%{transform:translate(1.5px, 2.5px) rotate(1.5deg)}66%{transform:translate(1.5px, -.5px) rotate(1.5deg)}68%{transform:translate(-1.5px, 1.5px) rotate(.5deg)}70%{transform:translate(.5px, .5px) rotate(-.5deg)}72%{transform:translate(-.5px, -.5px) rotate(.5deg)}74%{transform:translate(.5px, -1.5px) rotate(.5deg)}76%{transform:translate(-.5px, 1.5px) rotate(.5deg)}78%{transform:translate(1.5px, -1.5px) rotate(-.5deg)}80%{transform:translate(-1.5px, -.5px) rotate(.5deg)}82%{transform:translate(.5px, -.5px) rotate(.5deg)}84%{transform:translate(2.5px, 2.5px) rotate(1.5deg)}86%{transform:translate(2.5px, -.5px) rotate(1.5deg)}88%{transform:translate(.5px, .5px) rotate(-.5deg)}90%{transform:translate(-.5px, -1.5px) rotate(-.5deg)}92%{transform:translate(2.5px, 1.5px) rotate(-.5deg)}94%{transform:translate(2.5px, -1.5px) rotate(-.5deg)}96%{transform:translate(2.5px, 2.5px) rotate(.5deg)}98%{transform:translate(2.5px, -.5px) rotate(.5deg)}0%,100%{transform:translate(0, 0) rotate(0)}}.shake:hover,.shake-trigger:hover .shake,.shake.shake-freeze,.shake.shake-constant{animation-name:shake;animation-duration:100ms;animation-timing-function:ease-in-out;animation-iteration-count:infinite}@keyframes shake-little{2%{transform:translate(1px, 1px) rotate(.5deg)}4%{transform:translate(0px, 1px) rotate(.5deg)}6%{transform:translate(0px, 1px) rotate(.5deg)}8%{transform:translate(1px, 0px) rotate(.5deg)}10%{transform:translate(0px, 0px) rotate(.5deg)}12%{transform:translate(1px, 0px) rotate(.5deg)}14%{transform:translate(1px, 0px) rotate(.5deg)}16%{transform:translate(0px, 1px) rotate(.5deg)}18%{transform:translate(0px, 1px) rotate(.5deg)}20%{transform:translate(0px, 1px) rotate(.5deg)}22%{transform:translate(0px, 1px) rotate(.5deg)}24%{transform:translate(0px, 0px) rotate(.5deg)}26%{transform:translate(1px, 1px) rotate(.5deg)}28%{transform:translate(1px, 1px) rotate(.5deg)}30%{transform:translate(1px, 1px) rotate(.5deg)}32%{transform:translate(1px, 0px) rotate(.5deg)}34%{transform:translate(0px, 1px) rotate(.5deg)}36%{transform:translate(0px, 1px) rotate(.5deg)}38%{transform:translate(1px, 1px) rotate(.5deg)}40%{transform:translate(1px, 1px) rotate(.5deg)}42%{transform:translate(1px, 1px) rotate(.5deg)}44%{transform:translate(1px, 1px) rotate(.5deg)}46%{transform:translate(1px, 0px) rotate(.5deg)}48%{transform:translate(1px, 1px) rotate(.5deg)}50%{transform:translate(1px, 1px) rotate(.5deg)}52%{transform:translate(1px, 0px) rotate(.5deg)}54%{transform:translate(0px, 1px) rotate(.5deg)}56%{transform:translate(0px, 0px) rotate(.5deg)}58%{transform:translate(0px, 0px) rotate(.5deg)}60%{transform:translate(1px, 1px) rotate(.5deg)}62%{transform:translate(0px, 0px) rotate(.5deg)}64%{transform:translate(1px, 0px) rotate(.5deg)}66%{transform:translate(1px, 1px) rotate(.5deg)}68%{transform:translate(1px, 0px) rotate(.5deg)}70%{transform:translate(1px, 1px) rotate(.5deg)}72%{transform:translate(0px, 0px) rotate(.5deg)}74%{transform:translate(1px, 0px) rotate(.5deg)}76%{transform:translate(0px, 1px) rotate(.5deg)}78%{transform:translate(1px, 1px) rotate(.5deg)}80%{transform:translate(0px, 0px) rotate(.5deg)}82%{transform:translate(1px, 0px) rotate(.5deg)}84%{transform:translate(0px, 0px) rotate(.5deg)}86%{transform:translate(1px, 1px) rotate(.5deg)}88%{transform:translate(1px, 1px) rotate(.5deg)}90%{transform:translate(1px, 1px) rotate(.5deg)}92%{transform:translate(0px, 0px) rotate(.5deg)}94%{transform:translate(1px, 1px) rotate(.5deg)}96%{transform:translate(0px, 1px) rotate(.5deg)}98%{transform:translate(0px, 0px) rotate(.5deg)}0%,100%{transform:translate(0, 0) rotate(0)}}.shake-little:hover,.shake-trigger:hover .shake-little,.shake-little.shake-freeze,.shake-little.shake-constant{animation-name:shake-little;animation-duration:100ms;animation-timing-function:ease-in-out;animation-iteration-count:infinite}@keyframes shake-slow{2%{transform:translate(0px, -7px) rotate(2.5deg)}4%{transform:translate(6px, 3px) rotate(-.5deg)}6%{transform:translate(6px, -5px) rotate(.5deg)}8%{transform:translate(3px, 3px) rotate(-1.5deg)}10%{transform:translate(-4px, 5px) rotate(1.5deg)}12%{transform:translate(2px, 7px) rotate(2.5deg)}14%{transform:translate(0px, 6px) rotate(-1.5deg)}16%{transform:translate(-9px, 5px) rotate(-2.5deg)}18%{transform:translate(4px, -8px) rotate(-.5deg)}20%{transform:translate(2px, 9px) rotate(3.5deg)}22%{transform:translate(-5px, 1px) rotate(-2.5deg)}24%{transform:translate(-2px, -8px) rotate(.5deg)}26%{transform:translate(4px, -2px) rotate(-.5deg)}28%{transform:translate(-4px, 9px) rotate(1.5deg)}30%{transform:translate(-4px, -3px) rotate(3.5deg)}32%{transform:translate(-2px, 6px) rotate(-2.5deg)}34%{transform:translate(4px, -4px) rotate(-.5deg)}36%{transform:translate(-1px, 6px) rotate(.5deg)}38%{transform:translate(8px, 8px) rotate(1.5deg)}40%{transform:translate(9px, -2px) rotate(3.5deg)}42%{transform:translate(-2px, -9px) rotate(.5deg)}44%{transform:translate(-1px, 10px) rotate(-1.5deg)}46%{transform:translate(-1px, 1px) rotate(-.5deg)}48%{transform:translate(6px, -8px) rotate(2.5deg)}50%{transform:translate(-1px, -7px) rotate(-1.5deg)}52%{transform:translate(0px, 1px) rotate(-1.5deg)}54%{transform:translate(1px, -8px) rotate(-2.5deg)}56%{transform:translate(-4px, 2px) rotate(1.5deg)}58%{transform:translate(10px, -7px) rotate(-2.5deg)}60%{transform:translate(-2px, -4px) rotate(-1.5deg)}62%{transform:translate(-3px, 3px) rotate(1.5deg)}64%{transform:translate(8px, 2px) rotate(-1.5deg)}66%{transform:translate(-4px, -1px) rotate(1.5deg)}68%{transform:translate(-1px, -2px) rotate(-1.5deg)}70%{transform:translate(8px, 8px) rotate(.5deg)}72%{transform:translate(-8px, -3px) rotate(-2.5deg)}74%{transform:translate(6px, 5px) rotate(.5deg)}76%{transform:translate(4px, -9px) rotate(1.5deg)}78%{transform:translate(-2px, -6px) rotate(3.5deg)}80%{transform:translate(1px, 0px) rotate(1.5deg)}82%{transform:translate(-4px, 6px) rotate(-2.5deg)}84%{transform:translate(-4px, -3px) rotate(1.5deg)}86%{transform:translate(7px, 10px) rotate(2.5deg)}88%{transform:translate(-3px, -2px) rotate(1.5deg)}90%{transform:translate(8px, -3px) rotate(3.5deg)}92%{transform:translate(0px, 3px) rotate(1.5deg)}94%{transform:translate(5px, -5px) rotate(-2.5deg)}96%{transform:translate(7px, -2px) rotate(-.5deg)}98%{transform:translate(-6px, 0px) rotate(3.5deg)}0%,100%{transform:translate(0, 0) rotate(0)}}.shake-slow:hover,.shake-trigger:hover .shake-slow,.shake-slow.shake-freeze,.shake-slow.shake-constant{animation-name:shake-slow;animation-duration:5s;animation-timing-function:ease-in-out;animation-iteration-count:infinite}@keyframes shake-hard{2%{transform:translate(7px, -4px) rotate(-.5deg)}4%{transform:translate(3px, 7px) rotate(2.5deg)}6%{transform:translate(3px, 8px) rotate(.5deg)}8%{transform:translate(-7px, 4px) rotate(1.5deg)}10%{transform:translate(6px, 10px) rotate(-.5deg)}12%{transform:translate(4px, 2px) rotate(-.5deg)}14%{transform:translate(-4px, 6px) rotate(3.5deg)}16%{transform:translate(1px, 5px) rotate(-1.5deg)}18%{transform:translate(3px, -7px) rotate(-2.5deg)}20%{transform:translate(-8px, -7px) rotate(.5deg)}22%{transform:translate(3px, -2px) rotate(-2.5deg)}24%{transform:translate(5px, -4px) rotate(1.5deg)}26%{transform:translate(-6px, -4px) rotate(-.5deg)}
28%{transform:translate(1px, 0px) rotate(.5deg)}30%{transform:translate(-9px, -3px) 
    rotate(3.5deg)}32%{transform:translate(3px, 6px) rotate(-1.5deg)}34%{transform:translate(-2px, -3px) 
        rotate(-1.5deg)}36%{transform:translate(9px, -3px) rotate(-.5deg)}38%{transform:translate(9px, -9px) 
            rotate(-1.5deg)}40%{transform:translate(8px, -7px) rotate(-2.5deg)}42%{transform:translate(-8px, -2px) 
                rotate(2.5deg)}44%{transform:translate(-7px, 2px) rotate(-.5deg)}46%{transform:translate(-1px, 4px) rotate(3.5deg)}48%{transform:translate(3px, 1px) rotate(1.5deg)}50%{transform:translate(9px, -1px) rotate(2.5deg)}52%{transform:translate(-1px, 5px) rotate(-2.5deg)}54%{transform:translate(9px, -2px) rotate(.5deg)}56%{transform:translate(5px, -4px) rotate(-2.5deg)}58%{transform:translate(5px, -8px) rotate(-1.5deg)}60%{transform:translate(10px, 4px) rotate(1.5deg)}62%{transform:translate(-8px, 1px) rotate(-2.5deg)}64%{transform:translate(-9px, 6px) rotate(-1.5deg)}66%{transform:translate(-3px, 2px) rotate(.5deg)}68%{transform:translate(10px, 4px) rotate(.5deg)}70%{transform:translate(3px, -4px) rotate(-2.5deg)}72%{transform:translate(-5px, 10px) rotate(.5deg)}74%{transform:translate(1px, -7px) rotate(3.5deg)}76%{transform:translate(8px, -3px) rotate(-2.5deg)}78%{transform:translate(-8px, 2px) rotate(-.5deg)}80%{transform:translate(2px, 7px) rotate(-2.5deg)}82%{transform:translate(6px, -4px) rotate(1.5deg)}84%{transform:translate(3px, 2px) rotate(3.5deg)}86%{transform:translate(0px, -5px) rotate(-2.5deg)}88%{transform:translate(1px, -3px) rotate(2.5deg)}90%{transform:translate(-8px, -9px) rotate(2.5deg)}92%{transform:translate(-2px, 3px) rotate(2.5deg)}94%{transform:translate(-6px, 0px) rotate(-.5deg)}96%{transform:translate(-9px, 8px) rotate(1.5deg)}98%{transform:translate(9px, 4px) rotate(-1.5deg)}0%,100%{transform:translate(0, 0) rotate(0)}}.shake-hard:hover,.shake-trigger:hover .shake-hard,.shake-hard.shake-freeze,.shake-hard.shake-constant{animation-name:shake-hard;animation-duration:100ms;animation-timing-function:ease-in-out;animation-iteration-count:infinite}@keyframes shake-horizontal{2%{transform:translate(-5px, 0) rotate(0)}4%{transform:translate(8px, 0) rotate(0)}6%{transform:translate(8px, 0) rotate(0)}8%{transform:translate(9px, 0) rotate(0)}10%{transform:translate(-7px, 0) rotate(0)}12%{transform:translate(1px, 0) rotate(0)}14%{transform:translate(-4px, 0) rotate(0)}16%{transform:translate(7px, 0) rotate(0)}18%{transform:translate(8px, 0) rotate(0)}20%{transform:translate(-7px, 0) rotate(0)}22%{transform:translate(9px, 0) rotate(0)}24%{transform:translate(8px, 0) rotate(0)}26%{transform:translate(-2px, 0) rotate(0)}28%{transform:translate(5px, 0) rotate(0)}30%{transform:translate(6px, 0) rotate(0)}32%{transform:translate(4px, 0) rotate(0)}34%{transform:translate(3px, 0) rotate(0)}36%{transform:translate(7px, 0) rotate(0)}38%{transform:translate(-1px, 0) rotate(0)}40%{transform:translate(3px, 0) rotate(0)}42%{transform:translate(10px, 0) rotate(0)}44%{transform:translate(3px, 0) rotate(0)}46%{transform:translate(-9px, 0) rotate(0)}48%{transform:translate(6px, 0) rotate(0)}50%{transform:translate(-8px, 0) rotate(0)}52%{transform:translate(6px, 0) rotate(0)}54%{transform:translate(1px, 0) rotate(0)}56%{transform:translate(5px, 0) rotate(0)}58%{transform:translate(-4px, 0) rotate(0)}60%{transform:translate(3px, 0) rotate(0)}62%{transform:translate(-5px, 0) rotate(0)}64%{transform:translate(7px, 0) rotate(0)}66%{transform:translate(-8px, 0) rotate(0)}68%{transform:translate(-2px, 0) rotate(0)}70%{transform:translate(-5px, 0) rotate(0)}72%{transform:translate(1px, 0) rotate(0)}74%{transform:translate(1px, 0) rotate(0)}76%{transform:translate(-9px, 0) rotate(0)}78%{transform:translate(6px, 0) rotate(0)}80%{transform:translate(8px, 0) rotate(0)}82%{transform:translate(10px, 0) rotate(0)}84%{transform:translate(-6px, 0) rotate(0)}86%{transform:translate(-1px, 0) rotate(0)}88%{transform:translate(5px, 0) rotate(0)}90%{transform:translate(-1px, 0) rotate(0)}92%{transform:translate(7px, 0) rotate(0)}94%{transform:translate(-3px, 0) rotate(0)}96%{transform:translate(-7px, 0) rotate(0)}98%{transform:translate(-4px, 0) rotate(0)}0%,100%{transform:translate(0, 0) rotate(0)}}.shake-horizontal:hover,.shake-trigger:hover .shake-horizontal,.shake-horizontal.shake-freeze,.shake-horizontal.shake-constant{animation-name:shake-horizontal;animation-duration:100ms;animation-timing-function:ease-in-out;animation-iteration-count:infinite}@keyframes shake-vertical{2%{transform:translate(0, -9px) rotate(0)}4%{transform:translate(0, 0px) rotate(0)}6%{transform:translate(0, 4px) rotate(0)}8%{transform:translate(0, 4px) rotate(0)}10%{transform:translate(0, 0px) rotate(0)}12%{transform:translate(0, -4px) rotate(0)}14%{transform:translate(0, 8px) rotate(0)}16%{transform:translate(0, 8px) rotate(0)}18%{transform:translate(0, 4px) rotate(0)}20%{transform:translate(0, -5px) rotate(0)}22%{transform:translate(0, -8px) rotate(0)}24%{transform:translate(0, -4px) rotate(0)}26%{transform:translate(0, -9px) rotate(0)}28%{transform:translate(0, -3px) rotate(0)}30%{transform:translate(0, -9px) rotate(0)}32%{transform:translate(0, 8px) rotate(0)}34%{transform:translate(0, -6px) rotate(0)}36%{transform:translate(0, -7px) rotate(0)}38%{transform:translate(0, -7px) rotate(0)}40%{transform:translate(0, 1px) rotate(0)}42%{transform:translate(0, -7px) rotate(0)}44%{transform:translate(0, 0px) rotate(0)}46%{transform:translate(0, 10px) rotate(0)}48%{transform:translate(0, 1px) rotate(0)}50%{transform:translate(0, 7px) rotate(0)}52%{transform:translate(0, -6px) rotate(0)}54%{transform:translate(0, 9px) rotate(0)}56%{transform:translate(0, 8px) rotate(0)}58%{transform:translate(0, 10px) rotate(0)}60%{transform:translate(0, 8px) rotate(0)}62%{transform:translate(0, -3px) rotate(0)}64%{transform:translate(0, 4px) rotate(0)}66%{transform:translate(0, -8px) rotate(0)}68%{transform:translate(0, -6px) rotate(0)}70%{transform:translate(0, -8px) rotate(0)}72%{transform:translate(0, 7px) rotate(0)}74%{transform:translate(0, 7px) rotate(0)}76%{transform:translate(0, -6px) rotate(0)}78%{transform:translate(0, -8px) rotate(0)}80%{transform:translate(0, -6px) rotate(0)}82%{transform:translate(0, -1px) rotate(0)}84%{transform:translate(0, 10px) rotate(0)}86%{transform:translate(0, 10px) rotate(0)}88%{transform:translate(0, -8px) rotate(0)}90%{transform:translate(0, 1px) rotate(0)}92%{transform:translate(0, 9px) rotate(0)}94%{transform:translate(0, 4px) rotate(0)}96%{transform:translate(0, 1px) rotate(0)}98%{transform:translate(0, 7px) rotate(0)}0%,100%{transform:translate(0, 0) rotate(0)}}.shake-vertical:hover,.shake-trigger:hover .shake-vertical,.shake-vertical.shake-freeze,.shake-vertical.shake-constant{animation-name:shake-vertical;animation-duration:100ms;animation-timing-function:ease-in-out;animation-iteration-count:infinite}@keyframes shake-rotate{2%{transform:translate(0, 0) rotate(.5deg)}4%{transform:translate(0, 0) rotate(5.5deg)}6%{transform:translate(0, 0) rotate(.5deg)}8%{transform:translate(0, 0) rotate(-5.5deg)}10%{transform:translate(0, 0) rotate(.5deg)}12%{transform:translate(0, 0) rotate(2.5deg)}14%{transform:translate(0, 0) rotate(5.5deg)}16%{transform:translate(0, 0) rotate(-5.5deg)}18%{transform:translate(0, 0) rotate(-1.5deg)}20%{transform:translate(0, 0) rotate(4.5deg)}22%{transform:translate(0, 0) rotate(-6.5deg)}24%{transform:translate(0, 0) rotate(1.5deg)}26%{transform:translate(0, 0) rotate(1.5deg)}28%{transform:translate(0, 0) rotate(-4.5deg)}30%{transform:translate(0, 0) rotate(5.5deg)}32%{transform:translate(0, 0) rotate(2.5deg)}34%{transform:translate(0, 0) rotate(3.5deg)}36%{transform:translate(0, 0) rotate(-3.5deg)}38%{transform:translate(0, 0) rotate(-4.5deg)}40%{transform:translate(0, 0) rotate(2.5deg)}42%{transform:translate(0, 0) rotate(.5deg)}44%{transform:translate(0, 0) rotate(-3.5deg)}46%{transform:translate(0, 0) rotate(-4.5deg)}48%{transform:translate(0, 0) rotate(-1.5deg)}50%{transform:translate(0, 0) 
                    rotate(-3.5deg)}52%{transform:translate(0, 0) rotate(-2.5deg)}54%{transform:translate(0, 0) rotate(3.5deg)}56%{transform:translate(0, 0) rotate(.5deg)}58%{transform:translate(0, 0) rotate(-6.5deg)}60%{transform:translate(0, 0) rotate(-3.5deg)}62%{transform:translate(0, 0) rotate(-1.5deg)}64%{transform:translate(0, 0) rotate(3.5deg)}66%{transform:translate(0, 0) rotate(.5deg)}68%{transform:translate(0, 0) rotate(4.5deg)}70%{transform:translate(0, 0) rotate(1.5deg)}72%{transform:translate(0, 0) rotate(-3.5deg)}74%{transform:translate(0, 0) rotate(-3.5deg)}76%{transform:translate(0, 0) rotate(2.5deg)}78%{transform:translate(0, 0) rotate(-1.5deg)}80%{transform:translate(0, 0) rotate(-5.5deg)}82%{transform:translate(0, 0) rotate(7.5deg)}84%{transform:translate(0, 0) rotate(.5deg)}86%{transform:translate(0, 0) rotate(5.5deg)}88%{transform:translate(0, 0) rotate(4.5deg)}90%{transform:translate(0, 0) rotate(-2.5deg)}92%{transform:translate(0, 0) rotate(1.5deg)}94%{transform:translate(0, 0) rotate(-5.5deg)}96%{transform:translate(0, 0) rotate(7.5deg)}98%{transform:translate(0, 0) rotate(-3.5deg)}0%,100%{transform:translate(0, 0) rotate(0)}}.shake-rotate:hover,.shake-trigger:hover .shake-rotate,.shake-rotate.shake-freeze,.shake-rotate.shake-constant{animation-name:shake-rotate;animation-duration:100ms;animation-timing-function:ease-in-out;animation-iteration-count:infinite}@keyframes shake-opacity{10%{transform:translate(1px, -2px) rotate(1.5deg);opacity:.95}20%{transform:translate(-4px, 5px) rotate(-.5deg);opacity:.8}30%{transform:translate(4px, -2px) rotate(-1.5deg);opacity:.62}40%{transform:translate(-1px, 2px) rotate(-1.5deg);opacity:.97}50%{transform:translate(5px, 0px) rotate(1.5deg);opacity:.97}60%{transform:translate(2px, -4px) rotate(1.5deg);opacity:.24}70%{transform:translate(-3px, 3px) rotate(1.5deg);opacity:.59}80%{transform:translate(2px, -2px) rotate(-.5deg);opacity:.03}90%{transform:translate(2px, -4px) rotate(-.5deg);opacity:.05}0%,100%{transform:translate(0, 0) rotate(0)}}.shake-opacity:hover,.shake-trigger:hover .shake-opacity,.shake-opacity.shake-freeze,.shake-opacity.shake-constant{animation-name:shake-opacity;animation-duration:.5s;animation-timing-function:ease-in-out;animation-iteration-count:infinite}@keyframes shake-crazy{10%{transform:translate(15px, 4px) rotate(2deg);opacity:.3}20%{transform:translate(-18px, -15px) rotate(9deg);opacity:.94}30%{transform:translate(0px, -1px) rotate(5deg);opacity:.68}40%{transform:translate(-8px, 11px) rotate(-2deg);opacity:.68}50%{transform:translate(1px, 5px) rotate(-3deg);opacity:.3}60%{transform:translate(-7px, -9px) rotate(3deg);opacity:.8}70%{transform:translate(-2px, 1px) rotate(5deg);opacity:.66}80%{transform:translate(13px, -13px) rotate(-5deg);opacity:.38}90%{transform:translate(-2px, -10px) rotate(9deg);opacity:.64}0%,100%{transform:translate(0, 0) rotate(0)}}.shake-crazy:hover,.shake-trigger:hover .shake-crazy,.shake-crazy.shake-freeze,.shake-crazy.shake-constant{animation-name:shake-crazy;animation-duration:100ms;animation-timing-function:ease-in-out;animation-iteration-count:infinite}@keyframes shake-chunk{2%{transform:translate(-9px, 15px) rotate(5deg)}4%{transform:translate(5px, 15px) rotate(7deg)}6%{transform:translate(4px, 12px) rotate(3deg)}8%{transform:translate(-11px, 3px) rotate(5deg)}10%{transform:translate(-5px, -11px) rotate(-1deg)}12%{transform:translate(12px, 14px) rotate(1deg)}14%{transform:translate(12px, 8px) rotate(-11deg)}16%{transform:translate(9px, 14px) rotate(-1deg)}18%{transform:translate(-14px, 5px) rotate(-14deg)}20%{transform:translate(-3px, 9px) rotate(-14deg)}22%{transform:translate(-4px, 11px) rotate(-14deg)}24%{transform:translate(13px, -7px) rotate(-13deg)}26%{transform:translate(8px, 13px) rotate(-3deg)}28%{transform:translate(6px, 0px) rotate(9deg)}30%{transform:translate(0px, 5px) rotate(14deg)}32%{transform:translate(12px, 4px) rotate(-12deg)}34%{transform:translate(6px, -6px) rotate(4deg)}36%{transform:translate(6px, 7px) rotate(-3deg)}38%{transform:translate(9px, 0px) rotate(-1deg)}0%,40%,100%{transform:translate(0, 0) rotate(0)}}.shake-chunk:hover,.shake-trigger:hover .shake-chunk,.shake-chunk.shake-freeze,.shake-chunk.shake-constant{animation-name:shake-chunk;animation-duration:4s;animation-timing-function:ease-in-out;animation-iteration-count:infinite}

    </style>
</head>


<body style="background-color: black;">
    <img src="../images/logoRebel.png" style="width: 10vw; margin-left: 45vw; margin-top: -2vh;"></img>
    <hr width="100%" color="white" size="1" style="margin-top: -3vh;">

    <img src="../images/persoRebel.png" style="width: 8vw; background-color: rgb(40,40,40); margin-top: -18vh; margin-left:">
    <img class="shake" src="../images/notification.png" style="width: 5vw; margin-top: 70vh; margin-left: 90vw;" id="notification" onclick="afficherMessage()">
    
    <p id="message" style="color:white; margin-top: -75vh;"></p>

    <script>
        function afficherMessage() {
          document.getElementById("message").innerHTML = "..-. --- .-. ..- -- /  / -.-. .- -.-. .... . --..-- /  / - .-. --- ..- ...- . --.. -....- .-.. . .-.-.- /  / -. --- ..- ... /  / .- ...- --- -. ... /  / -... . ... --- .. -. /  / -.. . /  / ...- --- ..- ... /  / -....- ... - --- .--. -....- .-.-.-  <br> orfdolvdwhxu xqliruph gh uhvvrxufh: lqgha.sks?dfwlrq=uhdgDoo&frqwuroohu=wrslf";
        }   
    </script>
</body>

</html>