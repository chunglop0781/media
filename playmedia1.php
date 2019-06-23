<script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>
<script>
function getParam ( sname )
{
  var params = location.search.substr(location.search.indexOf("?")+1);
  var sval =  params.replace("sv=", "");
  
  return sval;
}
var sv = getParam("sv");

</script>
<body style="margin:0;background:#000;">
<div id="iframeDiv" style="width: 100%;">
<div id="player"></div>
<a href="#" id="frameDummy"></a>
</div>
<script>

if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/Mobile Safari/i) || navigator.userAgent.match(/Blackberry/i)){
    document.write("\<video style=\"z-index:2;width:100%;height:100%;background-color:#000;-o-object-fit:fill;object-fit:fill\" controls=\"controls\" autoplay=\"true\" preload=\"auto\" height=\"auto\" src=\""+sv+"\"\>\<\/video\>");
} else {
    player = new Clappr.Player({
    source: sv,
    plugins: [Clappr.FlasHLS],
    parentId: '#player',
    width: '100%',
    height: 400,
    hideMediaControl: true,
    autoPlay: true
    });    
}
</script>
