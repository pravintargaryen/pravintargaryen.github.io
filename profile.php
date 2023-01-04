<!DOCTYPE html>
<?php
session_name();
session_start(['cookie_lifetime' => 86400,]);
if ( ! isset($_SESSION['pass']) ) {
    header("Location : error.htm");
}
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Pravin's Macintosh</title>
    <link rel="icon" type="image/x-icon" href="/img/Apple-logo.png">
    <meta name="description" content="Chrome-style tabs in HTML/CSS/JS.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6df7ba1858.js" crossorigin="anonymous"></script>
    <link href="demo/css/demo.css" rel="stylesheet">
    <link href="css/chrome-tabs.css" rel="stylesheet">
    <link href="css/chrome-tabs-dark-theme.css" rel="stylesheet">
    <!--<link href="css/style.css" type="text/css" rel="stylesheet"> -->

    <style>

    #lnav {
      height: 25px;
      word-spacing: 10px;
      cursor: pointer;
    }
    #rnav {
      height: 25px;
      word-spacing: 9px;
      cursor: pointer;
    }
    #from {
      font-size: 92%;
    }
    h1 {
      font-family: 'Linux Libertine','Georgia','Times',serif;
      font-size: 1.8em;

    }
    h2{
      font-size: 1.5em;
    }
    .wiki {
      font-family: sans-serif;
    }

    .infobox {
    border: 1px solid #a2a9b1;
    border-spacing: 3px;
    background-color: #f8f9fa;
    color: black;
    margin: 0.5em 0 0.5em 1em;
    padding: 0.2em;
    float: right;
    clear: right;
    font-size: 88%;
    line-height: 1.5em;
    width: 22em;
    }

  .infobox .infobox-above, .infobox .infobox-title, .infobox caption {
    font-size: 125%;
    font-weight: bold;
    text-align: center;
}

.infobox-label, .infobox-data, .infobox th, .infobox td {
    text-align: left;
}

.infobox-header, .infobox-label, .infobox-above, .infobox-full-data, .infobox-data, .infobox-below, .infobox-subheader, .infobox-image, .infobox-navbar, .infobox th, .infobox td {
    vertical-align: top;
}

.infobox-header,
.infobox-label,
.infobox-above,
.infobox-full-data,
.infobox-data,
.infobox-below,
.infobox-subheader,
.infobox-image,
.infobox-navbar,
.infobox th,
.infobox td {
	vertical-align: top
}

.infobox-label,
.infobox-data,
.infobox th,
.infobox td {
	text-align: left
}

.infobox .infobox-above,
.infobox .infobox-title,
.infobox caption {
	font-size: 125%;
	font-weight: bold;
	text-align: center
}

.infobox-title,
.infobox caption {
	padding: 0.2em
}

.infobox .infobox-header,
.infobox .infobox-subheader,
.infobox .infobox-image,
.infobox .infobox-full-data,
.infobox .infobox-below {
	text-align: center
}

.infobox .infobox-navbar {
	text-align: right
}

th {
    display: table-cell;
    vertical-align: inherit;
    font-weight: bold;
    text-align: -internal-center;
}
.thumbimage {
    background-color: #ffffff;
    border: 1px solid #c8ccd1;
}

div.thumbinner {
    border: 1px solid #c8ccd1;
    background-color: #f8f9fa;
    font-size: 94%;
    padding: 3px;
    text-align: center;
    overflow: hidden;
    float: left;
    margin-right: 10px;
}


div.thumb {
	width: auto;
	background-color: transparent;
	margin-bottom: 0.5em;
}

div.tleft {
	margin: 0.5em 1.4em 1.3em 0;
}

div.tright {
	margin: 0.5em 0 1.3em 1.4em;
}

.thumbcaption {
	text-align: left;
	line-height: 1.4em;
	padding: 3px;
}
div.thumb {
		page-break-inside: avoid;
	}

	div.thumb a {
		border-bottom: 0;
	}

  div.thumbinner1 {
      border: 1px solid #c8ccd1;
      background-color: #f8f9fa;
      font-size: 94%;
      padding: 3px;
      text-align: center;
      overflow: hidden;
      float: right;
      margin-right: 10px;
  }
	.thumbborder {
		border: 1pt solid #dddddd;
	}


#feature {
  height : 20px;
}

.audio {
  padding-left: 600px;
  padding-top: 10px;
}



    </style>
  </head>
  <body>
    <audio src="hello.ogg" id="my_audio"></audio>
  <script type="text/javascript">
    window.onload=function(){
      document.getElementById("my_audio").play();
    }
    </script>
    <nav class="navbar navbar-light bg-light py-0">
      <section id="lnav"><ul><img data-toggle="modal" data-target="#exampleModal" src="/img/apple_icon_132591.png" height="18px">
        <!-- Modal -->
        <div class="modal fade"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true">

            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Add image inside the body of modal -->
                    <div class="modal-body">
                        <p>Are you Sure you want to quit all applications and log out now? </p>
                        <p><input type="checkbox" name="class1" value="si502" checked> Reopen windows when logging back in</p>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">
                          Cancel
                  </button>
                        <input type="button" value="Log Out" onclick="location.href='index.php';" class="btn btn-primary btn-sm" data-dismiss="modal">
                    </div>
                </div>
            </div>
        </div>

        <!-- Adding scripts to use bootstrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity=
    "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous">
        </script>
        <script src=
    "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity=
    "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous">
        </script>
        <script src=
    "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity=
    "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous">
        </script>
      <a><b>Chrome</b></a>
      <a>File</a>
      <a>Edit</a>
      <a>View</a>
      <a>History</a>
      <a>Bookmarks</a>
      <a>People</a>
      <a>Tab</a>
      <a>Window</a>
      <a>Help</a></ul>
    </section>
    <section id="rnav">
      <ul>
        <img src="/img/wifi-medium-signal-symbol-1_icon-icons.com_56451.png" height="18px">
        <img src="/img/monitor_icon-icons.com_64979.png" height="18px">
        <img src="/img/ic-up_97629.png" height="10px">
        <img src="/img/fullbattery_114246.png" height="18px">
        <?php
        date_default_timezone_set('America/Chicago');
        $date = date('D h:i A');
        echo $date;
        ?>
        <img src="/img/search_magnifying_glass_icon_149392.png" height="18px">
        <img src="/img/siri_macos_bigsur_icon.png" height="18px">
        <img src="/img/left_align_icon_123645.png" height="18px">
      </ul>
    </section>
    </nav>
    <div class="audio">
    <audio id="myAudio">
      <source src="Jammy Jams.ogg" type="audio/ogg">
      <source src="Jammy Jams.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>

    <p></p>

    <button class="btn btn-danger btn-sm" onclick="playAudio()" type="button">Play</button>
    <button class="btn btn-danger btn-sm" onclick="pauseAudio()" type="button">Pause</button>

    <script>
    var x = document.getElementById("myAudio");

    function playAudio() {
      x.play();
    }

    function pauseAudio() {
      x.pause();
    }
    </script>
  </div>
    <div class="surface">
      <div class="mock-browser">
        <div class="chrome-tabs" style="--tab-content-margin: 9px">
          <div class="chrome-tabs-content">
            <div class="chrome-tab" active>
              <div class="chrome-tab-dividers"></div>
              <div class="chrome-tab-background">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><symbol id="chrome-tab-geometry-left" viewBox="0 0 214 36"><path d="M17 0h197v36H0v-2c4.5 0 9-3.5 9-8V8c0-4.5 3.5-8 8-8z"/></symbol><symbol id="chrome-tab-geometry-right" viewBox="0 0 214 36"><use xlink:href="#chrome-tab-geometry-left"/></symbol><clipPath id="crop"><rect class="mask" width="100%" height="100%" x="0"/></clipPath></defs><svg width="52%" height="100%"><use xlink:href="#chrome-tab-geometry-left" width="214" height="36" class="chrome-tab-geometry"/></svg><g transform="scale(-1, 1)"><svg width="52%" height="100%" x="-100%" y="0"><use xlink:href="#chrome-tab-geometry-right" width="214" height="36" class="chrome-tab-geometry"/></svg></g></svg>
              </div>
              <div class="chrome-tab-content">
                <div class="chrome-tab-favicon" style="background-image: url('demo/images/Wikipedia.ico')"></div>
                <div class="chrome-tab-title">Pravin M D - Wikipedia</div>
                <div class="chrome-tab-drag-handle"></div>
                <div class="chrome-tab-close"></div>
              </div>
            </div>
            <div class="chrome-tab">
              <div class="chrome-tab-dividers"></div>
              <div class="chrome-tab-background">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><symbol id="chrome-tab-geometry-left" viewBox="0 0 214 36"><path d="M17 0h197v36H0v-2c4.5 0 9-3.5 9-8V8c0-4.5 3.5-8 8-8z"/></symbol><symbol id="chrome-tab-geometry-right" viewBox="0 0 214 36"><use xlink:href="#chrome-tab-geometry-left"/></symbol><clipPath id="crop"><rect class="mask" width="100%" height="100%" x="0"/></clipPath></defs><svg width="52%" height="100%"><use xlink:href="#chrome-tab-geometry-left" width="214" height="36" class="chrome-tab-geometry"/></svg><g transform="scale(-1, 1)"><svg width="52%" height="100%" x="-100%" y="0"><use xlink:href="#chrome-tab-geometry-right" width="214" height="36" class="chrome-tab-geometry"/></svg></g></svg>
              </div>
              <div class="chrome-tab-content">
                <div class="chrome-tab-favicon" style="background-image: url('demo/images/facebook-favicon.ico')"></div>
                <div class="chrome-tab-title">Facebook</div>
                <div class="chrome-tab-drag-handle"></div>
                <div class="chrome-tab-close"></div>
              </div>
            </div>
          </div>
          <div class="chrome-tabs-bottom-bar"></div>
          <!-- Styles to prevent flash after JS initialization -->
          <style>
            .chrome-tabs .chrome-tab {
              width: 258px
            }

            .chrome-tabs .chrome-tab:nth-child(1) {
              transform: translate3d(0px, 0, 0)
            }

            .chrome-tabs .chrome-tab:nth-child(2) {
              transform: translate3d(239px, 0, 0)
            }
          </style>
        </div>
        <div class="chrome-tabs-optional-shadow-below-bottom-bar"></div>
        <div class="mock-browser-content">
          <div class="buttons">
            <button data-theme-toggle>Toggle dark theme</button>
            <button data-add-tab>Add new tab</button>
            <button data-add-background-tab>Add tab in the background</button>
            <button data-remove-tab>Remove active tab</button>
          </div>
          <div class="wiki">
            <h1>Pravin Dhanasekaran</h1>
          <span>_____________________________________________________________________________________________________________________________________</span>
            <p id="from"> From Wikipedia, the free encyclopedia</p>
            </div>
            <p><b>Pravin M.D</b>  (Born July 30, 1994) is a Web application and mobile application developer
            who currently works at <a href="https://www.straive.com/about-us" target=”_blank”> Straive </a> based in India.Pravin attended <a target=”_blank” href="https://en.wikipedia.org/wiki/Anna_University">Anna University</a> for both his Undergraduate and graduate degree majoring in Biology.</p>
            <p> </p>
             <table class="infobox biography vcard">
               <tbody>
                 <tr><th colspan="2" class="infobox-above" style="font-size:125%;">
                   <div class="fn" style="display:inline">Pravin Dhanasekaran</div></th></tr>
                   <tr><td colspan="2" class="infobox-image"><a href="/img/IMG_20171225_154441.jpg" class="image"><img alt="Pravin M D.jpg" src="/img/IMG_20171225_154441.jpg" decoding="async" width="220" height="300" /></a></td></tr>
                <tr><th scope="row" class="infobox-label">Born</th><td class="infobox-data category"><a title="Born">July 30, 1994 <br/>  Erode, TamilNadu, India</a></td></tr>
                 <tr><th scope="row" class="infobox-label">Nationality</th><td class="infobox-data category"><a href="https://en.wikipedia.org/wiki/India" title="Indian">Indian</a></td></tr>
                 <tr><th scope="row" class="infobox-label">Alma&#160;mater</th><td class="infobox-data"><a href="https://en.wikipedia.org/wiki/Anna_University" title="Anna University">Anna University</a></td></tr>
                 <tr><th scope="row" class="infobox-label">Mentor</th><td class="infobox-data"><a href="https://en.wikipedia.org/wiki/Charles_Severance_(computer_scientist)" title="Dr.Chuck">Dr.Chuck</a></td></tr>
                 <tr><th scope="row" class="infobox-label">Known&#160;for</th><td class="infobox-data"><a title="Web Development, Mobile App Development">Web Development, Mobile App Development</a></td></tr>
                 <tr><th scope="row" class="infobox-label">Favorite Languages</th><td class="infobox-data"><a title="PHP, JavaScript, Python, C++, Java">PHP, JavaScript, Python, C++, Java</a></td></tr>
                 <tr><th scope="row" class="infobox-label">Cares About</th><td class="infobox-data"><a title="Internet, Web 3.0, Edtech, Google, ChatGPT">Internet, Web 3.0, Edtech, Google, ChatGPT</a></td></tr>
                 <tr><th scope="row" class="infobox-label">Years Active</th><td class="infobox-data category"><a title="2007-2011">2007-2011</a> <br /> <a title="2020-Present">2020-Present</a> </td></tr>
                 <tr><th scope="row" class="infobox-label">Projects</th><td class="infobox-data"><a title="Dbase">Dbase</a> <br /> <a title="DoveBuha">DoveBuha</a> <br /> <a title="Voldemort News">Voldemort News</a></td></tr><tr style="display:none"><td colspan="2">
             </td></tr>
             <tr><th scope="row" class="infobox-label">Website</th><td class="infobox-data"><span class="url"><a rel="nofollow" class="external text" target=”_blank” href="http://pravintargaryen.github.io/">https://pravintargaryen<wbr />.github<wbr />.io</a></span></td></tr>
           </tbody>
         </table>


            <h1>Early Life</h1>
              <span>_____________________________________________________________________________________________________________________________________</span>
            <p>Pravin Dhanasekaran was born in <a target=”_blank” href="https://en.wikipedia.org/wiki/Erode" target="_blank"> Erode, TamilNadu, India</a> on July 30, 1994, as the second son of banker M Dhanasekaran and Home Maker Inbaselvi. He and his
            elder brother Dinesh were raised in a Conservative middle class Indian household. He attended schooling in and around India mainly because of his father's frequent job transfers.
          He eventually completed his high school graduation from <a target=”_blank” href="https://main.rosemaryschools.com/"> Rose Mary Matric Hr.Sec.School, Palayamkottai </a>. He majored in Biology for both his graduate and Undergraduate degrees from
          the prestigious Anna University before entering Straive workforce.</p>
          <h1>Web Development</h1>
            <span>_____________________________________________________________________________________________________________________________________</span>
          <h2>Early Years</h2>
          <p>Pravin began using computers (pentium processor based desktop assembled set) running on <a target="_blank" href="https://en.wikipedia.org/wiki/Windows_98"> Windows 98 </a> operating system and grew fond of them at a very young age and developing web applications during his formative years (2006-2011) as a middle school student. In high school he was ardent enthusiast of networking and
          subsequently connected computers in his home using LAN networking cables and enjoyed palying muliplayer games like <a target="_blank" href="https://en.wikipedia.org/wiki/Midtown_Madness"> Midtown Madness </a>, <a target="_blank" href="https://en.wikipedia.org/wiki/Age_of_Empires_II"> Age of Empires 2 </a> etc and also experienced the fruits of networking like file sharing among computers. Around 2008 during his summer holidays he attended a Hardware and Networking
        course at a computer training center and got his first glimpse of web development when he was taught about <a target="_blank" href="https://en.wikipedia.org/wiki/Microsoft_FrontPage"> Microsoft Front Page </a> thus fuelling his love for Internet and Web applications. He began learning about HTML,CSS and PHP furthering his interest and built a news aggregator
      site called Voldemort News (Harry Potter fanship) thus making his first ever contribution to Web 2.0 .  </p>
      <p>Pravin is a ardent enthusiast of Google, Wikipedia & Stack Overflow (till date) and got fascinated by the search indexing site's accuracy, autocomplete, UI/UX, doodling features as all of Google's transition happended during his middle and high
      school days when <a href="https://en.wikipedia.org/wiki/Broadband" target="_blank"> broadband </a> was introduced in India around 2005 for the first time.His brother was a automobile enthusiast often seen dismantling his bikes and he helped his elder brother build a inventory database search of spare parts, CDs, DVDs and books(which was all over the house) called <b>DBase</b> using Apache, MySQL & PHP. Inspired from Google's Jquery/AJAX autocomplete
    features, Pravin subsequently introduced the same features in DBase. Aroud 2011, Pravin got hooked in web spidering aspects of Google and indexed his news aggregator website, brother's website which had loads of pages on them since the news application got daily updates. As he had move to college
  in another city all his school days endeavors were halted and subsequently the prjoects were halted as the hard drives crashed and also lack of awareness that with more formal education and skill Development, Pravin can enter into IT workforce. The lack of experience infleunced his decision to Major in Biology which he would later regret.</p>

    <h2>College Years</h2>
    <div class="thumb tleft">
      <div class="thumbinner" style="width:300px;">
        <a href= "/img/20230103_205604.jpg" class="image">
          <img id="photo" src="/img/20230103_205604.jpg" alt="Pravin in his preteen days" width="250" height="188" class="thumbimage">
        </a>
        <div class="infobox biography vcard">
          "Pravin around 2003 with his first ever desktop computer"
        </div>
      </div>
      </div>


    <p>His first social networking experience was around 2008 mostly Orkut, Myspace. His first introduction to <a target="_blank" href="https://en.wikipedia.org/wiki/History_of_Facebook">Facebook</a> was around 2011 when he entered college as a freshman. As he had majored in Biology he used social networking sites
    more often as a consumer rather than a developer. During his teen years he was more interested with girls than web development and computers in particular. He graduated in 2015 for his Bachelors degree with his grades just above second class and Masters in 2019 with average grades without any programming skills. In the middle of his graduate school he realized he was
  not interested in Biology and doesn't want to spend rest of his career in a life confined with laboratory stuff. He dropped from his graduate school around early 2018 and decided to Travel to Egypt as a Global Volunteer for <a target="_blank" href="https://en.wikipedia.org/wiki/AIESEC"> AIESEC </a>in Ain Shams University, Egypt taking a break from his life and deciding what he really wanted to do in life. After returning to India, he took a job
using his Bachelors Degree as a Senior Content Analyst (Healthcare project) for a breif period of six months at <a target="_blank" href="https://en.wikipedia.org/wiki/Firstsource"> Firstsource Inc</a>.</p>

  <p>He decided to pursue a career in data sciences but couldn't know where to start as he had no money and was reluctant to ask his parents especially since the graduate school offered him no stipend. He returned to his graduate school at late 2018 after his parents convinced his Research supervisor for helping him complete his thesis and eventually graduated in September 2019 after giving his <a href="https://en.wikipedia.org/wiki/Oral_exam" target="_blank"> Viva-Voce</a>.
  He had a job offer from Straive in November 2019 for Reviewer Selection Editor Position where he is working till date. Just four months into his job, Pravin had to face another hurdle, the Covid-19 Pandemic. Around March 2020, Covid-19 was declared a global pandemic and every employers preferred their employees to work from home virtually. With the blessing as a disguise, he shifted his time and focus towards
working on revamping his skills especially for his current job. Initially in <a target="_blank" href="https://en.wikipedia.org/wiki/Coursera"> Coursera </a> he took more courses helping his day to day job responsiblities until he stumbled upon<a href="https://www.py4e.com/" target="_blank"> Python for Everybody (PY4E)</a> by Charles Severance (Dr.Chuck).</p>

<h2>Programming 2.0</h2>
<p>During his PY4E days, he struggled a lot at first as he was coming back to programming after almost a decade and since he had more interest towards developing web applications than writing programs on a high level programming language.
He continued to learn Python upto tuples (chapter 11) and decided to move forward to Web Applications for Everybody (Wa4e) in the midst as he was making progress at a snail pace. He got hooked into Web Applications for everybody from the first lecture itself as he had always a thirst in him to learn and work more on web applications.
After taking Wa4e he explained :</p>

<div class="thumb tright">
  <div class="thumbinner1" style="width:300px;">
    <a href= "/img/DOVE SPARES LOGO.png" class="image">
      <img src="/img/DOVE SPARES LOGO.png" alt="DBase Logo" width="220" height="188" class="thumbimage">
    </a>
    <div class="infobox biography vcard">
      "DBase Logo Circa.2008"
    </div>
  </div>
  </div>

<p><q><b><em> Web applications for Everybody took me back to my school days around 2007-08 when everyday after returning from school I would drop my bag and go straight to my Pentium 2 desktop computer with 512 MB RAM and began working on my website using Notepad++ listenting to MJ's music.
When I came across a lesson to work on Autos database assignmet, it took my memory back to my good olden DBase days with my Brother. Thus Wa4e holds a special place in my heart always more than anyother course by Dr.Chuck and as a matter of fact it helped me learn object-oriented programming concepts in python especially for loops which I sorted of figured
it out during Rock Papers and Scissors game and when looping through database rows from a search query using PDO.</em></b></q></p>

<p>
  His favorite lesson in PY4E was Network Programming especially sockets, Twitter, Gmane and Page Rank as it helped him better understand Google than anytime else. He decided to work with Dr.Chuck and subsequently got a response from him as of late December 2022. He now wanted to shift
  his career towards help develop Dr.Chuck his own brand of EdTech and will continue to do so in the years to come.</p>

<h1>Projects</h1>
<span>______________________________________________________________________________________________________________________________________</span>
<h2>DBase</h2>
<p> DBase project was created to accomodate the ever growing needs of digitizing the books inventory (piles), CDs, DVDs (which was quite famous at that time) and maintain database with search capabilities also for chunks of motor vechicle(Bike) spare
  parts (his brother is an automobiles enthusiast just like Dr.Chuck) piled all over the attic of his home. Moreover his brother wanted to develop a website similar to <a target="_blank" href="http://www.dansmc.com/">Dan's Motorcycles</a>
  (DP Motorcycles) which obviously had little to no css which was the norm at that time.</p>

<p>DBase was written in PHP(MVC model) + MySQL + Apache 2.2  combo as Apache server was preferred over IIS (even today) by Windows Users.The login page of DBase was inspired from Gmail's 2008 home page.</p>
<div class="thumb tright">
  <div class="thumbinner1" style="width:300px;">
    <a href= "/img/LIG Dovebuha.jpg" class="image">
      <img src="/img/LIG Dovebuha.jpg" alt="DBase Logo" width="220" height="200" class="thumbimage">
    </a>
    <div class="infobox biography vcard">
      "DoveBuha Home page"
    </div>
  </div>
  </div>

<h2>DoveBuha</h2>

<p> DoveBuha was a PHP webcrawler used for indexing the many other project websites including Voldemort news, DP Motorcycles webpage, DBase Blogs, Scheduler etc. The project was inspired from Google's web
algorithms including spidering, ranking and image indexing. The site used MySQL as the primary database and ran on Apache Webserver 2.2.

</p>

<h1>Upcoming Projects (2023)</h1>
<span>_____________________________________________________________________________________________________________________________________</span>
<ul>
  <li>PY4E - Android & iOs</li>
  <li>WA4E - Android & iOs</li>
  <li>Separate Javascript course for everybody & need to update contents in WA4E</li>
  <li>Enhancing Contents in CC4E</li>
  <li>Updating UI/UX of contents and submission of Dr.Chuck's Courses</li>
  <li>Sakai/Tsugi Mobile optimization</li>
  <li>All courses integrated to single app giving birth to Dr.Chuck's EdTech Platform and counting...</li>
</ul>


<div class="thumb tleft">
  <div class="thumbinner" style="width:300px;">
    <a href= "/img/Picture1.jpg" class="image">
      <img id="photo" src="/img/Picture1.jpg" alt="Pravin in his preteen days" width="250" height="188" class="thumbimage">
    </a>
    <div class="infobox biography vcard">
      "Pravin (Second from left, marked arrow) at the Abu Simbel Temple, Egypt. Circa 2018"
    </div>
  </div>
  </div>
  <div class="thumb tleft">
    <div class="thumbinner" style="width:300px;" >
      <a href= "/img/dan's.png" class="image">
        <img id="photo" src="/img/dan's.png" alt="Dan's Motorcycles" width="250" height="188" class="thumbimage">
      </a>
      <div class="infobox biography vcard">
        "Screenshot of Dan's Motorcycles Homepage"
      </div>
    </div>
    </div>

    <div class="thumb tleft">
      <div class="thumbinner" style="width:300px;">
        <a href= "/img/Dr.Chuck's.mp4" class="image">
          <img id="photo" src="/img/Dr.Chuck's.jpg" alt="Dr.Chuck's" width="250" height="188" class="thumbimage">
        </a>
        <div class="infobox biography vcard">
          "Proposed Dr.Chuck's Logo"
        </div>
      </div>
      </div>


<br><br><br><br><br><br><br><br><br><br><br><br><br>

<h1>Online Courses & Certifications</h1>
  <span>______________________________________________________________________________________________________________________________________</span>
<h2>Completed</h2>
<ul>
  <li>Web Applications for Everybody(WA4E)</li>
  <li>Python for Everybody(PG4E)</li>
  <li>PostgreSQL for Everybody (PG4E)</li>
  <li>The Completed Web Development Bootcamp 2022</li>
  <li>JavaScript Algorithms and Data Structures - Free Codecamp</li>
  <li>Learn React for Free - Free Codecamp</li>
  <li>Advent of Code</li>
</ul>
<h2>Ongoing</h2>
<ul>
  <li>Django for Everybody(DJ4E)</li>
  <li>C Programming - A Historical Perspective(PG4E)</li>
  <li>Internet History, Technology, and Security (IHTS) </li>
  <li>CodingBat Java</li>
  <li>Advent of Code 2022</li>
</ul>

<h1>External Links</h1>
<span>_____________________________________________________________________________________________________________________________________</span>
<p><input value="Twitter" class="btn btn-primary btn-sm" onclick="location.href='https://twitter.com/PravinChats';" type="button">
<input value="Mastodon" class="btn btn-success btn-sm" onclick="location.href='https://openedtech.social/@pravinmd';" type="button">
<input value="Github" class="btn btn-warning btn-sm" onclick="location.href='https://github.com/pravintargaryen';" type="button"></p>



       </div>
        </div>
      </div>
    </div>

      <style>
      @keyframes bounce {
      	0%, 100%, 20%, 50%, 80% {
      		-webkit-transform: translateY(0);
      		-ms-transform:     translateY(0);
      		transform:         translateY(0)
      	}
      	40% {
      		-webkit-transform: translateY(-30px);
      		-ms-transform:     translateY(-30px);
      		transform:         translateY(-30px)
      	}
      	60% {
      		-webkit-transform: translateY(-15px);
      		-ms-transform:     translateY(-15px);
      		transform:         translateY(-15px)
      	}
      }
      #bo {
        /* position: absolute;*/
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
        -webkit-animation-iteration-count: infinite;
      }
      #bo:hover {
        cursor: pointer;
        animation-name: bounce;
        -moz-animation-name: bounce;
      }
        .made-by {
          margin-top: 5px;
          margin-left: 250px;
          margin-right: 220px;
          background-color:#dee1e6 ;
          border-radius: 15px;
         --active-background-color: #dee1e6;
          color: #848890;
          font-size: 14px;
          font-family: Avenir, "Avenir Next", "Segoe UI", Arial, "Helvetica Neue", Helvetica, sans-serif;
          text-align: center;
          -webkit-font-smoothing: antialiased;
          font-weight: bold;
        }

        html.dark-theme .made-by {
          --active-background-color: #242628;
          color: #838488;
        }

        .made-by-link { color: inherit; text-decoration: none; display: inline-block; padding: 1em; border-radius: .5em }
        .made-by-link:hover:not(:active) { opacity: .7 }
        .made-by-link:hover:active { background: var(--active-background-color) }
        .made-by-logo { display: block; height: 3.5em; width: 7em; margin: 0 auto .75em }
      </style>

      <div class="made-by">
        <nav class="navbar">
          <ul>
          <img id="bo" src="/img/finder_macos_bigsur_icon_190173.png" height="48px">
          <img id="bo" src="/img/siri_macos_bigsur_icon_189739.png" height="48px">
          <img id="bo" src="/img/1deepinlauncher_103114.png" height="48px">
          <img id="bo" src="/img/safari_icon-icons.com_75763.png" height="48px">
          <img id="bo" src="/img/contacts_macos_bigsur_icon_190274.png" height="48px">
          <img id="bo" src="/img/reminders_macos_bigsur_icon_189784.png" height="48px">
          <img id="bo" src="/img/photos_macos_bigsur_icon_189835.png" height="48px">
          <img id="bo" src="/img/apple_music_android_logo_icon_134021.png" height="48px">
          <img id="bo" src="/img/FaceTime_31109.png" height="48px">
          <img id="bo" src="/img/Word_Mac_23563.png" height="48px">
          <img id="bo" src="/img/brand_google_chrome_icon_157340.png" height="48px">
          <img id="bo" src="/img/PowerPoint_Mac_23565.png" height="48px">
          <img id="bo" src="/img/Mac_39614.png" height="48px">
          <img id="bo" src="/img/App_store_2_40662.png" height="48px">
          <img id="bo" src="/img/folderbluedownload_93326.png" height="48px">
          <img id="bo" src="/img/office-garbidge-can-trash-bin-recycle_108636.png" height="48px"></ul>
        </nav>
    </div>

    <script src="https://unpkg.com/draggabilly@2.2.0/dist/draggabilly.pkgd.min.js"></script>
    <script src="js/chrome-tabs.js"></script>
    <script>
      var el = document.querySelector('.chrome-tabs')
      var chromeTabs = new ChromeTabs()

      chromeTabs.init(el)

      el.addEventListener('activeTabChange', ({ detail }) => console.log('Active tab changed', detail.tabEl))
      el.addEventListener('tabAdd', ({ detail }) => console.log('Tab added', detail.tabEl))
      el.addEventListener('tabRemove', ({ detail }) => console.log('Tab removed', detail.tabEl))

      document.querySelector('button[data-add-tab]').addEventListener('click', _ => {
        chromeTabs.addTab({
          title: 'New Tab',
          favicon: false
        })
      })

      document.querySelector('button[data-add-background-tab]').addEventListener('click', _ => {
        chromeTabs.addTab({
          title: 'New Tab',
          favicon: false
        }, {
          background: true
        })
      })

      document.querySelector('button[data-remove-tab]').addEventListener('click', _ => {
        chromeTabs.removeTab(chromeTabs.activeTabEl)
      })

      document.querySelector('button[data-theme-toggle]').addEventListener('click', _ => {
        if (el.classList.contains('chrome-tabs-dark-theme')) {
          document.documentElement.classList.remove('dark-theme')
          el.classList.remove('chrome-tabs-dark-theme')
        } else {
          document.documentElement.classList.add('dark-theme')
          el.classList.add('chrome-tabs-dark-theme')
        }
      })

      window.addEventListener('keydown', (event) => {
        if (event.ctrlKey && event.key === 't') {
          chromeTabs.addTab({
            title: 'New Tab',
            favicon: false
          })
        }
      })
    </script>
  </body>
</html>
