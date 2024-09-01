(()=>{"use strict";var o=[[0,2],[1,3],[2,6],[3,5],[4,7],[5,8],[6,10]],e=[[0,1],[1,2],[2,5],[3,3],[4,5],[5,6],[6,9]];function t(o,e){return"<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>"+o+"<br/>"+Math.round(e.percent)+"%</div>"}$((function(){$.plot($("#flotLine1"),[{data:o,label:"New Customer",color:"#77bc21"},{data:e,label:"Returning Customer",color:"#e984b1"}],{series:{lines:{show:!0,lineWidth:1},shadowSize:0},points:{show:!1},legend:{noColumns:1,position:"nw"},grid:{borderWidth:1,borderColor:"rgba(171, 167, 167,0.2)",hoverable:!0},yaxis:{min:0,max:15,color:"#eee",tickColor:"rgba(171, 167, 167,0.2)",font:{size:10,color:"#999"}},xaxis:{color:"#eee",tickColor:"rgba(171, 167, 167,0.2)",font:{size:10,color:"#999"}}}),$.plot($("#flotLine2"),[{data:o,label:"New Customer",color:"#77bc21"},{data:e,label:"Returning Customer",color:"#e984b1"}],{series:{lines:{show:!0,lineWidth:1},shadowSize:0},points:{show:!0},legend:{noColumns:1,position:"ne"},grid:{borderWidth:1,borderColor:"rgba(171, 167, 167,0.2)",hoverable:!0},yaxis:{min:0,max:15,color:"#eee",tickColor:"rgba(171, 167, 167,0.2)",font:{size:10,color:"#999"}},xaxis:{color:"#eee",tickColor:"rgba(171, 167, 167,0.2)",font:{size:10,color:"#999"}}}),$.plot($("#flotArea1"),[{data:o,label:"New Customer",color:"#77bc21"},{data:e,label:"Returning Customer",color:"#e984b1"}],{series:{lines:{show:!0,lineWidth:1,fill:!0,fillColor:{colors:[{opacity:0},{opacity:.8}]}},shadowSize:0},points:{show:!1},legend:{noColumns:1,position:"nw"},grid:{borderWidth:1,borderColor:"rgba(171, 167, 167,0.2)",hoverable:!0},yaxis:{min:0,max:15,color:"#eee",tickColor:"rgba(171, 167, 167,0.2)",font:{size:10,color:"#999"}},xaxis:{color:"#eee",tickColor:"rgba(171, 167, 167,0.2)",font:{size:10,color:"#999"}}}),$.plot($("#flotArea2"),[{data:o,label:"New Customer",color:"#77bc21"},{data:e,label:"Returning Customer",color:"#e984b1"}],{series:{lines:{show:!0,lineWidth:1,fill:!0,fillColor:{colors:[{opacity:0},{opacity:.3}]}},shadowSize:0},points:{show:!0},legend:{noColumns:1,position:"nw"},grid:{borderWidth:1,borderColor:"rgba(171, 167, 167,0.2)",hoverable:!0},yaxis:{min:0,max:15,color:"#eee",tickColor:"rgba(171, 167, 167,0.2)",font:{size:10,color:"#999"}},xaxis:{color:"#eee",tickColor:"rgba(171, 167, 167,0.2)",font:{size:10,color:"#999"}}});$.plot("#flotBar1",[{data:[[0,3],[1,8],[2,5],[3,13],[4,5],[5,7],[6,4],[7,6],[8,3],[9,7]]}],{series:{bars:{show:!0,lineWidth:0,fillColor:"#b7dd88",barWidth:.8},highlightColor:"#77bc21"},grid:{borderWidth:0,borderColor:"rgba(171, 167, 167,0.2)",hoverable:!0},yaxis:{tickColor:"rgba(171, 167, 167,0.2)",font:{color:"#5f6d7a",size:10}},xaxis:{tickColor:"rgba(171, 167, 167,0.2)",font:{color:"#5f6d7a",size:10}}}),$.plot("#flotBar2",[{data:[[0,3],[2,8],[4,5],[6,13],[8,5],[10,7],[12,8],[14,10]],bars:{show:!0,lineWidth:0,fillColor:"#ffdde6",barWidth:.3},highlightColor:"#ffb6c9"},{data:[[1,5],[3,7],[5,10],[7,7],[9,9],[11,5],[13,4]],bars:{show:!0,lineWidth:0,fillColor:"#9ad0f5",barWidth:.3},highlightColor:"#76bff1"}],{grid:{borderWidth:1,borderColor:"rgba(171, 167, 167,0.2)",hoverable:!0},yaxis:{tickColor:"rgba(171, 167, 167,0.2)",font:{color:"#666",size:10}},xaxis:{tickColor:"rgba(171, 167, 167,0.2)",font:{color:"#666",size:10}}});for(var i=[{fillColor:"#red"}],a=0;a<=10;a+=1)i.push([a,parseInt(30*Math.random())]);var r=[{fillColor:"#blue"}];for(a=0;a<=10;a+=1)r.push([a,parseInt(30*Math.random())]);var l=[{fillColor:"#green"}];for(a=0;a<=10;a+=1)l.push([a,parseInt(30*Math.random())]);var n=0,s=!0,c=!1,d=!1;function f(){$("#flotStacking").plot([{color:"#a4dfdf",data:i},{color:"#9ad0f5",data:r},{color:"#ffcf9f",data:l}],{series:{stack:n,lines:{show:c,fill:!0,steps:d},bars:{show:s,barWidth:.6,lineWidth:2}},grid:{borderWidth:0,borderColor:"rgba(171, 167, 167,0.2)"},yaxis:{autoScale:"exact",tickColor:"rgba(171, 167, 167,0.2)",font:{color:"#5f6d7a",size:10}},xaxis:{tickColor:"rgba(171, 167, 167,0.2)",font:{color:"#5f6d7a",size:10}}})}f();var h=document.querySelectorAll("#control-btn");var b=document.querySelectorAll("#control-btn-stack");$(".stackControls button").on("click",(function(o){o.preventDefault(),n="With stacking"==$(this).text()||null,f(),function(){for(var o=0;o<b.length;o++)b[o].classList.remove("active")}(),this.classList.add("active")})),$(".graphControls button").on("click",(function(o){o.preventDefault(),function(){for(var o=0;o<h.length;o++)h[o].classList.remove("active")}(),this.classList.add("active"),s=-1!=$(this).text().indexOf("Bars"),c=-1!=$(this).text().indexOf("Lines"),d=-1!=$(this).text().indexOf("steps"),f()}));var u=[],p=Math.floor(4*Math.random())+3;for(a=0;a<p;a++)u[a]={label:"Series"+(a+1),data:Math.floor(100*Math.random())+1};var g=$("#flotPie");$("#action-1").on("click",(function(){g.unbind(),$("#title").text("Default pie chart"),$("#description").text("The default pie chart with no options set."),$.plot(g,u,{series:{pie:{show:!0}},colors:["#a4dfdf","#9ad0f5","#ffcf9f","#ffb0c1","#ffe6aa"]})})),$("#action-2").on("click",(function(){g.unbind(),$("#title").text("Default without legend"),$("#description").text("The default pie chart when the legend is disabled. Since the labels would normally be outside the container, the chart is resized to fit."),$.plot(g,u,{series:{pie:{show:!0}},colors:["#a4dfdf","#9ad0f5","#ffcf9f","#ffb0c1","#ffe6aa"],legend:{show:!1}})})),$("#action-3").on("click",(function(){g.unbind(),$("#title").text("Custom Label Formatter"),$("#description").text("Added a semi-transparent background to the labels and a custom labelFormatter function."),$.plot(g,u,{series:{pie:{show:!0,radius:1,label:{show:!0,radius:1,formatter:t,background:{opacity:.8}}}},colors:["#a4dfdf","#9ad0f5","#ffcf9f","#ffb0c1","#ffe6aa"],legend:{show:!1}})})),$("#action-4").on("click",(function(){g.unbind(),$("#title").text("Label Radius"),$("#description").text("Slightly more transparent label backgrounds and adjusted the radius values to place them within the pie."),$.plot(g,u,{series:{pie:{show:!0,radius:1,label:{show:!0,radius:3/4,formatter:t,background:{opacity:.5}}}},colors:["#a4dfdf","#9ad0f5","#ffcf9f","#ffb0c1","#ffe6aa"],legend:{show:!1}})})),$("#action-5").on("click",(function(){g.unbind(),$("#title").text("Label Styles #1"),$("#description").text("Semi-transparent, black-colored label background."),$.plot(g,u,{series:{pie:{show:!0,radius:1,label:{show:!0,radius:3/4,formatter:t,background:{opacity:.5,color:"#000"}}}},colors:["#a4dfdf","#9ad0f5","#ffcf9f","#ffb0c1","#ffe6aa"],legend:{show:!1}})})),$("#action-6").on("click",(function(){g.unbind(),$("#title").text("Label Styles #2"),$("#description").text("Semi-transparent, black-colored label background placed at pie edge."),$.plot(g,u,{series:{pie:{show:!0,radius:3/4,label:{show:!0,radius:3/4,formatter:t,background:{opacity:.5,color:"#000"}}}},colors:["#a4dfdf","#9ad0f5","#ffcf9f","#ffb0c1","#ffe6aa"],legend:{show:!1}})})),$("#action-7").on("click",(function(){g.unbind(),$("#title").text("Hidden Labels"),$("#description").text("Labels can be hidden if the slice is less than a given percentage of the pie (10% in this case)."),$.plot(g,u,{series:{pie:{show:!0,radius:1,label:{show:!0,radius:2/3,formatter:t,threshold:.1}}},colors:["#a4dfdf","#9ad0f5","#ffcf9f","#ffb0c1","#ffe6aa"],legend:{show:!1}})})),$("#action-8").on("click",(function(){g.unbind(),$("#title").text("Combined Slice"),$("#description").text("Multiple slices less than a given percentage (5% in this case) of the pie can be combined into a single, larger slice."),$.plot(g,u,{series:{pie:{show:!0,combine:{color:"#999",threshold:.05}}},colors:["#a4dfdf","#9ad0f5","#ffcf9f","#ffb0c1","#ffe6aa"],legend:{show:!1}})})),$("#action-9").on("click",(function(){g.unbind(),$("#title").text("Rectangular Pie"),$("#description").text("The radius can also be set to a specific size (even larger than the container itself)."),$.plot(g,u,{series:{pie:{show:!0,radius:500,label:{show:!0,formatter:t,threshold:.1}}},colors:["#a4dfdf","#9ad0f5","#ffcf9f","#ffb0c1","#ffe6aa"],legend:{show:!1}})})),$("#action-10").on("click",(function(){g.unbind(),$("#title").text("Tilted Pie"),$("#description").text("The pie can be tilted at an angle."),$.plot(g,u,{series:{pie:{show:!0,radius:1,tilt:.5,label:{show:!0,radius:1,formatter:t,background:{opacity:.8}},combine:{color:"#999",threshold:.1}}},colors:["#a4dfdf","#9ad0f5","#ffcf9f","#ffb0c1","#ffe6aa"],legend:{show:!1}})})),$("#action-11").on("click",(function(){g.unbind(),$("#title").text("Donut Hole"),$("#description").text("A donut hole can be added."),$.plot(g,u,{series:{pie:{innerRadius:.5,show:!0}}})})),$("#action-1").click()})),$((function(){for(var o=[],e=[],t=0;t<14;t+=.1)o.push([t,Math.sin(t)]),e.push([t,Math.cos(t)]);l=$.plot("#flotArea3",[{data:o},{data:e}],{series:{lines:{show:!0,lineWidth:1,fill:!0}},crosshair:{mode:"x"},grid:{borderWidth:1,borderColor:"rgba(171, 167, 167,0.2)"},colors:["#a4dfdf","#ffcf9f"],yaxis:{min:-1.2,max:1.2,color:"#eee",tickColor:"rgba(171, 167, 167,0.2)",font:{size:10,color:"#999"}},xaxis:{color:"#eee",tickColor:"rgba(171, 167, 167,0.2)",font:{size:10,color:"#999"}}});var i=[];function a(){for(i.length>0&&(i=i.slice(1));i.length<300;){var o=(i.length>0?i[i.length-1]:50)+10*Math.random()-5;o<0?o=0:o>100&&(o=100),i.push(o)}for(var e=[],t=0;t<i.length;++t)e.push([t,i[t]]);return e}var r=30;$("#updateInterval").val(r).on("change",(function(){var o=$(this).val();o&&!isNaN(+o)&&((r=+o)<1?r=1:r>2e3&&(r=2e3),$(this).val(""+r))}));var l=$.plot("#flotAnimated",[a()],{series:{shadowSize:0},grid:{borderColor:"rgba(119, 119, 142, 0.2)",borderWidth:0},colors:["#b7dd88"],yaxis:{min:0,max:100,tickColor:"rgba(171, 167, 167,0.2)",font:{color:"#5f6d7a",size:10}},xaxis:{tickColor:"rgba(171, 167, 167,0.2)",font:{color:"#5f6d7a",size:10}}});!function o(){l.setData([a()]),l.draw(),setTimeout(o,r)}()}))})();