<link rel="stylesheet" type="text/css" href="estilos.css" />

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

<body onload="MM_preloadImages('img/face1.jpg','img/twit1.jpg','img/orkut1.jpg')" style="margin-left:0px; margin-right:0px; margin-bottom:0px; margin-top:0px; width:100%; height:104px;">
	<div id="footerfull">
    	<footer id="footer">
        	<div id="left1"></div>
            <div id="footermeio">
            	<div id="redes">
                	<div class="rede"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('face','','img/face1.jpg',1)"><img src="img/face2.jpg" name="face" width="45" height="43" border="0" id="face" /></a></div>
                    <div class="rede"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('twit','','img/twit1.jpg',1)"><img src="img/twit2.jpg" name="twit" width="45" height="43" border="0" id="twit" /></a></div>
                    <div class="rede"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('orkut','','img/orkut1.jpg',1)"><img src="img/orkut2.jpg" name="orkut" width="45" height="43" border="0" id="orkut" /></a></div>
                </div>
                <div id="midiamixflash">
                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="135" height="99" id="FlashID3" title="flashrodape">
                    <param name="movie" value="flashfooter.swf" />
                    <param name="quality" value="high" />
                    <param name="swfversion" value="6.0.65.0" />
                    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
                    <param name="expressinstall" value="Scripts/expressInstall.swf" />
                    <param name="wmode" value="transparent" />
                    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
                    <!--[if !IE]>-->
                    <object type="application/x-shockwave-flash" data="flashfooter.swf" width="135" height="99">
                      <!--<![endif]-->
                      <param name="quality" value="high" />
                      <param name="swfversion" value="6.0.65.0" />
                      <param name="expressinstall" value="Scripts/expressInstall.swf" />
                      <param name="wmode" value="transparent" />
                      <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                      <div>
                        <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
                      </div>
                      <!--[if !IE]>-->
                    </object>
                    <!--<![endif]-->
                  </object>
                </div>
          </div>
            <div id="right1"></div>
        </footer>
    </div>
<script type="text/javascript">
swfobject.registerObject("FlashID3");
    </script>
</body>
