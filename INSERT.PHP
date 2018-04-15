
<html>
<head>
<title>Gra ekonomiczna on-line E-Conomica</title>
<META http-equiv=content-type content="text/html; charset=iso-8859-2">
<META property="og:image" content="http://e-conomica.pl/grafika/eco600x315.png">
<META property="og:title" content="E-Conomica.PL - gra ekonomiczna on-line">
<META property="og:site_name" content="E-Conomica.PL">
<META property="og:url" content="http://e-conomica.pl/">
<meta property="article:publisher" content="https://www.facebook.com/EConomica.game/">
<META property="og:type" content="website">
<META property="og:description" content="Pierwsza biznesowo-ekonomiczna gra on-line działająca przez przeglądarkę. Graj za darmo.">
<META name=keywords content="ekonomiczna gra on-line, biznesowa gra on-line, gra online, biznes mmorpg, ekonomiczny mmorpg">
<META name=description content="Pierwsza biznesowo-ekonomiczna gra on-line działająca przez przeglądarkę.">
<META name=reply-to content=admin@e-conomica.pl>
<META content=all name=robots>
<style type="text/css">
font.mn { font-weight: bold; color:white; font-size:11px; }
font.minus { font-size: 11px; }
a { text-decoration: none; color: #ffff80; }
a:visited { color:#ffff80; }
td { font-family: Verdana; font-size:12px; color: #808080; }
input,textarea,select { font-family: Verdana; border: solid 1px; border-color: #c0c0c0; background-color:#aaaaaa; font-size: 11px; overflow:auto; overflow-x:hidden; }
input.wh { border: none; background-color:white; }
input.w2 { border: none; }
img.a { border: solid 1px #888888; }
form { display:inline; }

.tabela { border: solid 1px #536253; font-family: Verdana; }
.tabela td { background-color: #202020; }
.tabela th { background-color: #9f541d; font-size: 13px; color: white; }
.tabela a { color:orange; }

img.bialetlo { background-color: white; }</style>
<script>

var divid=1;

function conhelp(i)
 {
  var e = document.createElement('div');
  var body = document.getElementsByTagName('body')[0];

  e.id = 'conhelp'+divid;
  e.style.width = 400;
  e.style.position="absolute";
  e.style.left=screen.width-400-25;
  e.style.top=body.scrollTop+300+((divid%10)*30);

  body.appendChild(e);

  document.getElementById('hiddenFrame').src='/_conhelp.php?t='+i+'&divid='+divid;

  divid++;
 }

function conclose(i)
 {
  document.getElementById("conhelp"+i).style.visibility="hidden";
 }

function cba()
 {
  var l="srel";
  var p=0;
  var pz=1;
  var r=250;

  if(l.length>0)
   {
    var test = document.getElementById('cba1').offsetHeight;
    var test2 = document.getElementById('cba2').offsetHeight;
    if(test>0) { test=1; }
    if(test2>0) { test2=1; }
    document.getElementById("cbachck").src="/tr.php?c="+test+"_"+test2+"&l="+l+"&p="+p;

    if(test==0 && test2==0 && r<60 && p==0)
     {
      document.getElementById("glownatresc").innerHTML="<center><h2>Nie lubisz reklam w internecie? My też nie</h2>Jednak głównie z reklam utrzymuje się ta strona więc proszę wyłącz blokowanie reklam<br>na naszej stronie poprzez oprogramowanie typu AdBlock czy podobne<br><br>Możesz także aktywować konto <a href=/premium.php><b>PREMIUM</b></a> i w ten sposób jednocześnie pozbyć się reklam i wspomóc naszą stronę<br><br>Komunikat ten zniknie za kilkadziesiąt sekund i będziesz mógł nadal korzystać ze strony</center>";
     }
   }
 }

function arkusz(i,j)
 {
  document.getElementById('hiddenFrame').src="/_arkusz.php?id="+i+"&hl="+j;
 }

function arkusz2(i)
 {
  document.getElementById('arkusz').innerHTML=i;
 }

function a3()
 {
  var i=document.ks.ileks.value*document.ks.thiscena.value*100;
  var j=Math.round(i)/100;

  document.getElementById('thissuma').innerHTML=j;
 }

function verorder()
 {
 	document.ks.price.value=document.ks.price.value.replace(",",".");
 	if(document.ks.ileks.value>0)
 	 {
 	 	if(document.ks.kczys.options[document.ks.kczys.selectedIndex].value>0)
 	 	 {
 	 	 	if(document.ks.what.options[document.ks.what.selectedIndex].value>0) return(true);
      else { alert("Nie został wskazany podmiot transakcji"); return(false); }
     }
    else { alert("Nie został wskazany kierunek transakcji (kupno/sprzedaż)"); return(false); }
   }
  else { alert("Wolumen transakcji musi być wyższy od zera."); return(false); }
 }

function magorder()
 {
 	if(document.mag.ilosc.value>0)
 	 {
 	 	if(document.mag.what.options[document.mag.what.selectedIndex].value>0) return(true);
    else { alert("Nie został wskazany towar do przeniesienia"); return(false); }
   }
  else { alert("Wskazana ilość towaru musi być wyższa od zera."); return(false); }
 }

function magorder2()
 {
 	if(document.mag2.ilosc.value>0)
 	 {
 	 	if(document.mag2.what.options[document.mag2.what.selectedIndex].value>0) return(true);
    else { alert("Nie został wskazany towar do przeniesienia"); return(false); }
   }
  else { alert("Wskazana ilość towaru musi być wyższa od zera."); return(false); }
 }

var cntr1=0;
var cntr2=0;
var cntr3=0;
var cntr4=0;

</script>
<link rel="SHORTCUT ICON" href="http://e-conomica.pl/favicon.ico">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24246167-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- (C) 2000-2009 Gemius SA - gemiusAudience / ver 11.1 / pp.e_conomica.pl / strona_glowna_serwisu-->
<script type="text/javascript">
 <!--//--><![CDATA[//><!--
var pp_gemius_identifier ='coVAsoL3R7ET4AkJ3nXCeJaGfbpdY6LxkpwCHP98WcD.E7';
//--><!]]>
</script>
<script type="text/javascript" src="http://idm.hit.gemius.pl/xgemius.js"></script>

</head>
<body bgcolor=black onLoad="javascript:cba();">
<table border=0 cellspacing=0 cellpadding=0 width=1130 align=center>

<tr><td><img src=/grafika/economica.jpg></td>
<td width=130 align=right rowspan=3>&nbsp;</td></tr>
<tr><td><img src=/grafika/tr.gif width=1 height=10></td></tr>
<tr><td align=center>
<div id=cba1>

<!-- BBelements AdServer one2many Position: go.idmnet.bbelements.com AdAction_e-conomica.pl(700) / Strona G3ówna(1) / 750x100(1) / billboard 750x100(1)-->
<!-- HowTo: Place this code into the html page there the ad should appear. -->
<div id='bmone2n-700.1.1.1'>
<noscript><div style='display:inline'><a href='http://go.idmnet.bbelements.com/please/redirect/700/1/1/1/'><img src='http://go.idmnet.bbelements.com/please/showit/700/1/1/1/?typkodu=img&keywords=' width='750' height='100' style='border-width:0' alt='' /></a></div></noscript>
</div>
</div>
</td></tr>
<tr><td><img src=/grafika/tr.gif width=1 height=10></td></tr>
<tr><td>

<table border=0 cellspacing=0 cellpadding=0 width=1000>
<tr><td width=14><img src=/grafika/l.gif></td>

<td background=/grafika/s.gif width=118 align=center><b><a href=/>Strona główna</a></b></td>
<td width=2><img src=/grafika/sp.gif width=2 height=49></td>
<td background=/grafika/s.gif width=100 align=center><b><a href=/edycja_info.php>O edycji gry<br>i nagrodach</a></b></td>
<td width=2><img src=/grafika/sp.gif width=2 height=49></td>
<td background=/grafika/s.gif width=118 align=center><a href=/pomoc.php><b>Pomoc i FAQ</b></a></td>
<td width=2><img src=/grafika/sp.gif width=2 height=49></td>
<td background=/grafika/s.gif width=128 align=center><a href=/forum/viewtopic.php?f=1&t=47 target=_blank><b>Poradnik dla<br>początkujących</b></a></td>
<td width=2><img src=/grafika/sp.gif width=2 height=49></td>
<td background=/grafika/s.gif width=68 align=center><a href=/forum/ target=_blank><b>Forum</b></a></td>
<td width=2><img src=/grafika/sp.gif width=2 height=49></td>
<td background=/grafika/s.gif width=128 align=center><a href=/ranking.php><b>Ranking graczy</b></a></td>
<td width=2><img src=/grafika/sp.gif width=2 height=49></td>
<td background=/grafika/s.gif width=177 align=center><font color=white><b><div style='display:inline' id=czas>Czas serwera<br>2018-02-11 22:14:10</div></b></font></td>
<td width=2><img src=/grafika/sp.gif width=2 height=49></td>
<td width=15 background=/grafika/s.gif>&nbsp;</td>
<td background=/grafika/s.gif width=110><script src="http://connect.facebook.net/pl_PL/all.js#xfbml=1"></script><fb:like href="http://www.facebook.com/EConomica.game" layout="button_count" show_faces="false" width="90"></fb:like></td>


<td width=14><img src=/grafika/p.gif></td></tr>
</table>

</td></tr>
<tr><td style="background-image:url('/grafika/ss.gif');background-repeat:repeat-x" height=460 bgcolor=#12151a>

<table border=0 cellspacing=0 cellpadding=0 width=1000>
<tr><td width=260 valign=top><br>


<table border=0 cellspacing=0 cellpadding=0 width=250><tr>
<td width=16><img src=/grafika/lgm.gif width=16 height=19></td>
<td width=218 background=/grafika/sgm.gif><img src=/grafika/tr.gif width=218 height=1></td>
<td width=16><img src=/grafika/pgm.gif width=16 height=19></td>
</tr><tr><td bgcolor=#12151a colspan=3 height=100 valign=top align=center>

<table border=0 cellspacing=0 cellpadding=0 width=240>
<tr><td valign=top width=120>
<img src=/grafika/avatars/srel.jpg border=1 style='padding:2px;border:solid 1px #666666' hspace=5 id=avt></td><td width=120 valign=top>
<a href=/player.php?nick=srel>srel</a><br>

Stan konta:<br><b><font color=white>$-67,065.98</font></b><br>
<small><a href='javascript:conhelp("nowe_zycie");' title="Kliknij aby uzyskać pomoc"><img src=grafika/pytajnik_small2.png width=14 height=14 border=0 style="vertical-align: bottom" ALT="Kliknij aby uzyskać pomoc"></a> <a href=/edycja.php#nowe>/nowe życie/</a></small><br><br>

<a href='javascript:conhelp("poziom_gracza");' title="Kliknij aby uzyskać pomoc"><img src=grafika/pytajnik_small2.png width=14 height=14 border=0 style="vertical-align: bottom" ALT="Kliknij aby uzyskać pomoc"></a> Poziom: <font color=white>1</font><br><br>

</td></tr>
<tr><td colspan=2 align=center height=20><br><small>Zwiększ swoje szanse</small><br><a href=/premium.php><b><u>AKTYWUJ KONTO PREMIUM</u></b></a><br></td></tr><tr><td colspan=2 align=center><img src=/grafika/hr.gif width=200 height=1 vspace=10></td></tr>
<tr><td height=20 colspan=2>

<table border=0 cellspacing=0 cellpadding=0 width=240>
<tr><td width=70><a href='javascript:conhelp("energia");' title="Kliknij aby uzyskać pomoc"><img src=grafika/pytajnik_small2.png width=14 height=14 border=0 style="vertical-align: bottom" ALT="Kliknij aby uzyskać pomoc"></a> Energia</td>
<td width=95><div style='display:inline;font-size:11px' id=eczas>(więcej za 0:50)</div></td>
<td align=right width=75>5/5&nbsp;
</td></tr>
</table>

</td></tr>
<tr><td colspan=2 height=20 align=center><table border=0 cellspacing=0 cellpadding=0 width=230 style='border: solid 1px #666666'><tr><td bgcolor=#ccffcc><img src=grafika/postep.png width=230 height=18></td></tr></table></td></tr>
<tr><td height=20><a href='javascript:conhelp("doswiadczenie");' title="Kliknij aby uzyskać pomoc"><img src=grafika/pytajnik_small2.png width=14 height=14 border=0 style="vertical-align: bottom" ALT="Kliknij aby uzyskać pomoc"></a> Doświadczenie</td><td align=right>3%&nbsp;</td></tr>
<tr><td colspan=2 height=20 align=center><table border=0 cellspacing=0 cellpadding=0 width=230 style='border: solid 1px #666666'><tr><td bgcolor=#ccffcc><img src=grafika/postep.png width=6 height=18></td></tr></table></td></tr>
<tr><td height=20><a href='javascript:conhelp("poziom_zdrowia");' title="Kliknij aby uzyskać pomoc"><img src=grafika/pytajnik_small2.png width=14 height=14 border=0 style="vertical-align: bottom" ALT="Kliknij aby uzyskać pomoc"></a> Poziom zdrowia</td><td align=right>90%&nbsp;</td></tr>
<tr><td colspan=2 height=20 align=center><table border=0 cellspacing=0 cellpadding=0 width=230 style='border: solid 1px #666666'><tr><td bgcolor=#ccffcc><img src=grafika/postep.png width=206 height=18></td></tr></table></td></tr>
</table>

</td></tr><tr>
<td width=16><img src=/grafika/ld.gif width=16 height=19></td>
<td width=218 background=/grafika/sd.gif><img src=/grafika/tr.gif width=218 height=1></td>
<td width=16><img src=/grafika/pd.gif width=16 height=19></td>
</tr>

</table><br>

<table border=0 cellspacing=0 cellpadding=0 width=250><tr>
<td width=16><img src=/grafika/lgm.gif width=16 height=19></td>
<td width=218 background=/grafika/sgm.gif><img src=/grafika/tr.gif width=218 height=1></td>
<td width=16><img src=/grafika/pgm.gif width=16 height=19></td>
</tr><tr><td bgcolor=#12151a>&nbsp;</td>
<td height=500 bgcolor=#12151a valign=top>
<a href=/mylands.php>Moje działki</a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/storage.php>Magazyn główny</a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/work.php>Praca w zawodzie</a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/school.php>Szkolenia i kursy zawodowe</a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/hospital.php>Szpital (0)</a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/bank.php>Bank <font color=orange>i pożyczki</font></a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/dotacje.php>Dotacje unijne</a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/tempjob.php>Prace dorywcze</a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/spolki_gielda.php><font color=orange>Spółki akcyjne (32)</font></a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/bilans.php>Bilanse</a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/report.php>Zakładanie spółki</a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/market.php>Giełda towarowa</a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/pomoc_ranking.php>Ranking biznesów</a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/invite.php><font color=orange>Poleć grę znajomym</font></a>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>

<!--
<a href=/invitefb.php>Poleć grę na <font color=#3b5998><b>Facebooku</b></font></a><br>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
 -->

<a href=/friends.php>Znajomi</a>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/urlop.php>Urlop</a>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/regulamin.php>Regulamin</a>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/edycja.php>Edycja danych</a>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>
<a href=/logout.php>Wyloguj się</a>
<img src=/grafika/hr.gif width=200 height=1 vspace=10><br>


</td>
<td bgcolor=#12151a>&nbsp;</td></tr>
</table>

</td><td valign=top width=740><br>
<div id=glownatresc>
<!-- ęóąśłżźćńĘÓĄŚŁŻŹĆŃ -->

<table width=730 border=0>
<tr><td width=510 valign=top>

<center>
<h1>Gra ekonomiczna on-line</h1>
</center>

<div style="text-align:justify">

Witaj w <b>DARMOWEJ</b> grze E-conomica. To najlepsza internetowa <font color=red><b>gra ekonomiczna</b></font> on-line
w której wszystkie aspekty kształtowane są przez niewidzialną rękę rynku. To popyt i podaż określa ceny towarów, wysokość wynagrodzeń
graczy i opłacalność poszczególnych działań, a Twoim głównym celem jest lawirowanie pomiędzy nimi w sposób, który zapewni Ci maksymalizację
zysków. Jeżeli zagrywałeś/aś się wcześniej w <font color=red><b>gry ekonomiczne</b></font> to E-Conomica jest dla Ciebie.<br><br>


- uprawiaj zboża, owoce, warzywa, hoduj zwierzęta, otwieraj lokale usługowe, handlowe, gastronomiczne czy przetwórcze<br><br>

- kupuj towary gdy są tanie i sprzedawaj, gdy są drogie lub przetwarzaj je na inne towary, których ceny są wysokie<br><br>

- zatrudniaj pracowników, gdy nie musisz im dużo płacić, gdy wynagrodzenia są wysokie - samodzielnie podejmuj pracę<br><br>

- zakładaj spółki akcyjne i sprzedawaj je na giełdzie za ich przyszłe zyski<br><br>

- rozwijaj się poprzez szkolenia, które zwiększą Twoją zdolność do osiągania zysków, a także pozwolą Ci na ekspansję
na nowe rynki<br><br>

- awansuj na kolejne poziomy wyprzedzając konkurencję - to najkrótsza droga do zwycięstwa!<br><br>

E-Conomica to <font color=red><b>gra ekonomiczna mmo</b></font> działająca <b>przez przeglądarke</b> i nie wymaga instalacji
żadnego oprogramowania.<br><br><br>

<big>
Niezależnie od tego kiedy zaczniesz swoją przygodę z grą zawsze masz szansę na zwycięstwo. Ważniejsze bowiem od czasu
poświęconego grze są Twoje decyzje - podjęte właściwie pozwolą Ci szybko dogonić konkurencję lub zostawić ją daleko w tyle.
Jako rozpoczynający grę masz przewagę elastyczności wyboru swojej ścieżki rozwoju, która, o ile będzie odpowiedzią na
aktualne potrzeby rynku, pozwoli Ci szybko nadrobić dystans pomiędzy grającymi dłużej.</div><br><br>
</big>

</div>
</td><td valign=top width=220 align=center>

<a href=/grafika/screendz.jpg target=_blank><img src=grafika/screendz_small.jpg width=200 height=162 border=0></a><br><br><br>
<a href=/grafika/screenland.jpg target=_blank><img src=grafika/screenland_small.jpg width=200 height=167 border=0></a><br><br><br>
<a href=/grafika/screenmarkt.jpg target=_blank><img src=grafika/screenmarkt_small.jpg width=200 height=167 border=0></a><br><br><br>
<a href=/grafika/screenmag.jpg target=_blank><img src=grafika/screenmag_small.jpg width=200 height=167 border=0></a><br><br><br>
<a href=/grafika/screenhelp.jpg target=_blank><img src=grafika/screenhelp_small.jpg width=200 height=167 border=0></a>

</td></tr></table>

</div></td></tr></table>

</td><td width=130 align=right valign=top>
<div id='cba2'>

<!-- BBelements AdServer one2many Position: go.idmnet.bbelements.com AdAction_e-conomica.pl(700) / Strona G3ówna(1) / 120x600(7) / skyscraper 120x600(3)-->
<!-- HowTo: Place this code into the html page there the ad should appear. -->
<div id='bmone2n-700.1.7.3'>
<noscript><div style='display:inline'><a href='http://go.idmnet.bbelements.com/please/redirect/700/1/7/3/'><img src='http://go.idmnet.bbelements.com/please/showit/700/1/7/3/?typkodu=img&keywords=' width='120' height='600' style='border-width:0' alt='' /></a></div></noscript>
</div>
</div>
</td></tr>
<tr><td bgcolor=#12151a align=center height=6><img src=grafika/tr.gif width=980 height=1 style='background-color:#333333'></td></tr>
<tr><td align=right bgcolor=#12151a><img src=grafika/tr.gif width=1 height=1 id=cbachck><a href=reklama.php style='color:#555555'>reklama</a> | <a href=mailto:admin@e-conomica.pl style='color:#555555'>kontakt</a> &nbsp; &nbsp; &nbsp; </td></tr>
<tr><td>

<table border=0 cellspacing=0 cellpadding=0 width=1000><tr>
<td width=16><img src=/grafika/ld.gif width=16 height=19></td>
<td background=/grafika/sd.gif height=19><img src=/grafika/tr.gif width=1 height=1></td>
<td width=16><img src=/grafika/pd.gif width=16 height=19></td>
</tr></table>

</td></tr>
</table>
<script>

var cntr1min=((cntr1*5-1)%60);
var cntr1h=parseInt((cntr1*5-1)/60);

var cntr2min=((cntr2*5-1)%60);
var cntr2h=parseInt((cntr2*5-1)/60);

var cntr3min=((cntr3*5-1)%60);
var cntr3h=parseInt((cntr3*5-1)/60);

var cntr4min=((cntr4*5-1)%60);
var cntr4h=parseInt((cntr4*5-1)/60);

var mt=1518383650000;

function formatdaty(x)
 {
 	xx=x.toString();
  if(xx.length==1) { xx='0'+xx; }
  return(xx);
 }

function srvtime()
 {
  var c=new Date(mt);

 	var month=c.getMonth()+1;
 	var month=month+'';
 	month=formatdaty(month);

 	var dzn=c.getDate()+'';
 	dzn=formatdaty(dzn);

 	var godz=c.getHours()+'';
 	godz=formatdaty(godz);

 	var mint=c.getMinutes()+'';
 	mint=formatdaty(mint);

 	var sek=c.getSeconds()+'';
 	sek=formatdaty(sek);

  var emint=4-(c.getMinutes()%5);
  var esek=60-c.getSeconds();

  var minus=0;
  if(esek==60)
   {
   	if(emint==4)
   	 {
   	  cntr1min=cntr1min-5;
   	  cntr2min=cntr2min-5;
   	  cntr3min=cntr3min-5;
   	  cntr4min=cntr4min-5;
   	 }

   	minus=1;

   	emint=emint+1;

   	esek='00';
   }

  esek=esek+'';
 	esek=formatdaty(esek);

  var cntr1minx=cntr1min-c.getMinutes()%5+minus;
  var cntr2minx=cntr2min-c.getMinutes()%5+minus;
  var cntr3minx=cntr3min-c.getMinutes()%5+minus;
  var cntr4minx=cntr4min-c.getMinutes()%5+minus;

  document.getElementById("czas").innerHTML='Czas serwera<br>'+c.getFullYear()+'-'+month+'-'+dzn+' '+godz+':'+mint+':'+sek;
  document.getElementById("eczas").innerHTML='(więcej za '+emint+':'+esek+')';

  if(document.getElementById("div1cntr"))
   {
   	if(cntr1minx<0) { cntr1minx='00'; esek='00'; }
    document.getElementById("div1cntr").innerHTML='(pozostało '+formatdaty(cntr1h)+':'+formatdaty(cntr1minx)+':'+formatdaty(esek)+')';
   }
  if(document.getElementById("div2cntr"))
   {
   	if(cntr2minx<0) { cntr2minx='00'; esek='00'; }
    document.getElementById("div2cntr").innerHTML='(pozostało '+formatdaty(cntr2h)+':'+formatdaty(cntr2minx)+':'+formatdaty(esek)+')';
   }
  if(document.getElementById("div3cntr"))
   {
   	if(cntr3minx<0) { cntr3minx='00'; esek='00'; }
    document.getElementById("div3cntr").innerHTML='(pozostało '+formatdaty(cntr3h)+':'+formatdaty(cntr3minx)+':'+formatdaty(esek)+')';
   }
  if(document.getElementById("div4cntr"))
   {
   	if(cntr4minx<0) { cntr4minx='00'; esek='00'; }
    document.getElementById("div4cntr").innerHTML=''+formatdaty(cntr4h)+':'+formatdaty(cntr4minx)+':'+formatdaty(esek)+'';
   }

  //alert('Czas serwera: '+c.getFullYear()+'-'+month+'-'+dzn+' '+godz+':'+mint+':'+sek);
  //alert(formatdaty(cntr4h)+'@'+cntr4);
  mt=mt+1000;
 }

setInterval("srvtime();",1000);
mt=mt+1000;

</script>



<!-- BBelements AdServer one2many code -->
<!-- HowTo: All the ad codes must be above this code! -->
<!-- HowTo: It is good idea to place this code just below the last ad code. -->
<script type='text/javascript' charset='iso-8859-2' src='http://go.idmnet.bbelements.com/bb/bb_one2n.js'></script>
<script type='text/javascript'>/* <![CDATA[ */
var bbkeywords=''; //fill in: 'key1;key2;..'
bmone2n.addPosition('700.1.7.3','');
bmone2n.addPosition('700.1.3.4','');
bmone2n.addPosition('700.1.2.2','');
bmone2n.addPosition('700.1.1.1','');
bmone2n.getAd('go.idmnet.bbelements.com',bbkeywords,''+(typeof(bburlparam)=='string'?'&'+bburlparam:''),'iso-8859-2');
/* ]]> */</script>
<div id='bmone2t-700.1.7.3' style='display:none'><script type='text/javascript'>/* <![CDATA[ */ bmone2n.makeAd('700.1.7.3'); /* ]]> */</script></div>
<div id='bmone2t-700.1.3.4' style='display:none'><script type='text/javascript'>/* <![CDATA[ */ bmone2n.makeAd('700.1.3.4'); /* ]]> */</script></div>
<div id='bmone2t-700.1.2.2' style='display:none'><script type='text/javascript'>/* <![CDATA[ */ bmone2n.makeAd('700.1.2.2'); /* ]]> */</script></div>
<div id='bmone2t-700.1.1.1' style='display:none'><script type='text/javascript'>/* <![CDATA[ */ bmone2n.makeAd('700.1.1.1'); /* ]]> */</script></div>
<script type='text/javascript'>/* <![CDATA[ */ bmone2n.moveAd(); /* ]]> */</script>

<iframe id=hiddenFrame frameborder=0 width=1 height=1></iframe>
</body>
</html>
