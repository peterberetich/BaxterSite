<!--?php require_once( 'couch/cms.php' ); ?-->
<!DOCTYPE html>
<html lang="en">
  <head>
  <!--Google Analytics Tag-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-72313310-1', 'auto');
      ga('send', 'pageview');
    </script>
  <!--End Google Analytics Tag-->
  	<link rel="icon" 
      type="image/png" 
      href="images/favicon/baxicon.png">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty - Baxter Academy</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap_faculty.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
      <link href="css/history.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
<body id="top">
<div class="snaptop">
    <a href="#top">
            <img src="images/top.png" width="60px"/>
    </a>
</div>

<!--BEGIN NAV-->
<?php include('header.html'); ?>
<!--End of Navbar-->
<br/>
<!--cms:editable name='main_content' no_xss_check='1' type='textarea'-->

<h1 style="text-align:center">Faculty and Staff</h1>
<br/>
<div class="image" style="background-image: url('images/headerimages/facultyheader.jpg'); background-position: center"></div>
<br/>
<div class="row">
	<div class="col-lg-2">
        <div id="" style="overflow-y: scroll; height:80vh;">
            <div class="panelnoborder panel-default" style="margin-left:10%; margin-right:10%">
                <div class="form-group">
                  <input style="text-align:center" type="text" class="form-control" id="box" placeholder="Find Teachers">
                </div>
                <ul class=navList>
                    <li><a id="popoverData" class="btn" style="margin-left:auto; margin-right:auto" href="#jamory" data-content="Engineering/Robotics" rel="popover" data-trigger="hover"><h4>Amory, Jon</h4></a></li>
                    <li><a id="popoverData2" class="btn" style="margin-left:auto; margin-right:auto" href="#mbarnes" data-content="Art & Design" rel="popover" data-trigger="hover"><h4>Barnes, Matt </h4></a></li>
                    <li><a id="popoverData3" class="btn" style="margin-left:auto; margin-right:auto" href="#sbuhlman" data-content="Instructional Specialist" rel="popover" data-trigger="hover"><h4>Buhlman, Sarah</h4></a></li>
                    <li><a id="popoverData4" class="btn" style="margin-left:auto; margin-right:auto" href="#hdippolito" data-content="Humanities" rel="popover" data-trigger="hover"><h4>D'Ippolito, Heather</h4></a></li>
                    <li><a id="popoverData27" class="btn" style="margin-left:auto; margin-right:auto" href="#jdoughty" data-content="Science" rel="popover" data-trigger="hover"><h4>Doughty, Jonathan</h4></a></li>
                    <li><a id="popoverData5" class="btn" style="margin-left:auto; margin-right:auto" href="#natdoug" data-content="Art & Design" rel="popover" data-trigger="hover"><h4>Edmunds, Nate </h4></a></li>
                    <li><a id="popoverData6" class="btn" style="margin-left:auto; margin-right:auto" href="#dgagne" data-content="Social Work" rel="popover" data-trigger="hover"><h4>Gagne, Debra</h4></a></li>
                    <li><a id="popoverData7" class="btn" style="margin-left:auto; margin-right:auto" href="#agilman" data-content="Humanities" rel="popover" data-trigger="hover"><h4>Gilman, Adam</h4></a></li>
                    <li><a id="popoverData8" class="btn" style="margin-left:auto; margin-right:auto" href="#jguerette" data-content="French & Music" rel="popover" data-trigger="hover"><h4>Guerette, Jordan</h4></a></li>
                    <li><a id="popoverData29" class="btn" style="margin-left:auto; margin-right:auto" href="#whodous" data-content="Engineering" rel="popover" data-trigger="hover"><h4>Hodous, Wells</h4></a></li>
                    <li><a id="popoverData29" class="btn" style="margin-left:auto; margin-right:auto" href="#thowe" data-content="Admissions, Front Office" rel="popover" data-trigger="hover"><h4>Howe, Tia</h4></a></li>
                    <li><a id="popoverData9" class="btn" style="margin-left:auto; margin-right:auto" href="#hlarsson" data-content="Programming" rel="popover" data-trigger="hover"><h4>Larsson, Halsted </h4></a></li>
                    <li><a id="popoverData10" class="btn" style="margin-left:auto; margin-right:auto" href="#mlawrence" data-content="Spanish" rel="popover" data-trigger="hover"><h4>Lawrence, Megan</h4></a></li>
                    <li><a id="popoverData11" class="btn" style="margin-left:auto; margin-right:auto" href="#eli" data-content="Mandarin Chinese" rel="popover" data-trigger="hover"><h4>Li, Enyue      </h4></a></li>
                    <li><a id="popoverData28" class="btn" style="margin-left:auto; margin-right:auto" href="#alukas" data-content="-" rel="popover" data-trigger="hover"><h4>Lukas, Alan</h4></a></li>
                    <li><a id="popoverData12" class="btn" style="margin-left:auto; margin-right:auto" href="#lmedeiros" data-content="Guidance Counselor" rel="popover" data-trigger="hover"><h4>Medeiros, Laurie </h4></a></li>
                    <li><a id="popoverData13" class="btn" style="margin-left:auto; margin-right:auto" href="#pmoxhay" data-content="Physics and Math" rel="popover" data-trigger="hover"><h4>Moxhay, Peter </h4></a></li>
                    <li><a id="popoverData14" class="btn" style="margin-left:auto; margin-right:auto" href="#mnunez" data-content="Director of Student Services" rel="popover" data-trigger="hover"><h4>Nunez, Moises </h4></a></li>
                    <li><a id="popoverData15" class="btn" style="margin-left:auto; margin-right:auto" href="#bolson" data-content="Geography and Special Education" rel="popover" data-trigger="hover"><h4>Olson, Brian </h4></a></li>
                    <li><a id="popoverData16" class="btn" style="margin-left:auto; margin-right:auto" href="#sparwol" data-content="Mathematics" rel="popover" data-trigger="hover"><h4>Parrott-Wolfe, Sean </h4></a></li>
                    <li><a id="popoverData18" class="btn" style="margin-left:auto; margin-right:auto" href="#apfeifer" data-content="Instructional Specialist" rel="popover" data-trigger="hover"><h4>Pfeifer, Alice </h4></a></li>
                    <li><a id="popoverData19" class="btn" style="margin-left:auto; margin-right:auto" href="#drawson" data-content="Math, Science & Technology" rel="popover" data-trigger="hover"><h4>Rawson, David </h4></a></li>
                    <li><a id="popoverData20" class="btn" style="margin-left:auto; margin-right:auto" href="#prawson" data-content="Mathematics" rel="popover" data-trigger="hover"><h4>Rawson, Pamela </h4></a></li>
                    <li><a id="popoverData21" class="btn" style="margin-left:auto; margin-right:auto" href="#scogin" data-content="Humanities" rel="popover" data-trigger="hover"><h4>Scogin, Sam </h4></a></li>
                    <li><a id="popoverData22" class="btn" style="margin-left:auto; margin-right:auto" href="#astarr" data-content="Humanities" rel="popover" data-trigger="hover"><h4>Starr, Aleah </h4></a></li>
                    <li><a id="popoverData23" class="btn" style="margin-left:auto; margin-right:auto" href="#sstutzman" data-content="Fabrication & Engineering" rel="popover" data-trigger="hover"><h4>Stutzman, Sunny </h4></a></li>
                    <li><a id="popoverData24" class="btn" style="margin-left:auto; margin-right:auto" href="#ataylor" data-content="Humanities" rel="popover" data-trigger="hover"><h4>Taylor, Angela </h4></a></li>
                    <li><a id="popoverData25" class="btn" style="margin-left:auto; margin-right:auto" href="#kvirmalo" data-content="Humanities" rel="popover" data-trigger="hover"><h4>Virmalo, Katelyn </h4></a></li>
                    <li><a id="popoverData26" class="btn" style="margin-left:auto; margin-right:auto" href="#awinter" data-content="Educational Technician" rel="popover" data-trigger="hover"><h4>Winter, Antonia </h4></a></li>
                </ul>
        </div>
        </div>
        <br/>
    </div>
<div class="col-lg-10">
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="jamory" class="panel-title" style="text-align:center">Jonathan Amory - Engineering/Robotics Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/jamory.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:jon.amory@baxter-academy.org" target="_top"><button type="button" class="btn btn-info">jon.amory@baxter-academy.org</button></a>
           <a href="https://sites.google.com/a/baxter-academy.org/engineering/home" target="_blank"><button type="button" class="btn btn-info pull-right">Website</button></a>
         <p>
<br/>
Mr. Amory was an advanced robotics engineer for five years at Boston Dynamics, where he helped design a number of robots, including BigDog, RiSE, RHex, and LittleDog.  He had always been interested in education and had been helping students in local schools with their engineering projects. Working with kids, he began to realize that the skills that made him a successful engineer were not the skills he had learned in high school or that he saw being taught in high schools.  This realization moved him to teach. And he has now been teaching engineering for four years in Freeport (one year in middle school, three in high school). He has focused on building skills through large-scale, student-led, real world projects, such as a wind tunnel that clocked the highest wind speeds ever recorded in Maine.
<br/><br/>
Mr. Amory also has a background in naval architecture and philosophy, which he studied along with engineering at Trinity College. He has a master’s degree in design studies from Harvard University. He accomplished all this after struggling as a younger student, an experience he is quick to share with his students: “I am extremely dyslexic and could not read until I was in 7th grade.” He believes every student can be taught creativity and every student can succeed.
<br/><br/>
Mr. Amory worked to design Baxter Academy’s unique Flex Friday program. Mr. Amory grew up in Portland, attending Waynflete. He lives here with his family.
<br/><br/>
Fun facts about Mr. Amory:  He has sailed to Norway. He has climbed mountains on every continent except South America and Antarctica. He is an outlier when it comes to math and music: “I butcher every instrument I touch, but I can press play on a CD play, iPod and cassette deck."
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="mbarnes" class="panel-title" style="text-align:center">Matthew Barnes - Art & Design Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/mbarnes.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:matthew.barnes@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">matthew.barnes@baxter-academy.org</button></a>
         <p>
<br/>
Mr. Barnes’s personal motto is: “He who dies with the most tools wins.” He uses his tools to hand-carve slate tombstones, to motorize toy airplanes, to add micro-cameras to Estes rockets, and to repurpose 1950s rotary phones into his home’s intercom system. He knows how to cast metal, solder wire, and weld sheet steel. He can run a lathe and drill through glass and design a textbook. (Want to see more of what he can do? Go to mattmakes.weebly.com.)
<br/><br/>
Mr. Barnes has a bachelor’s degree in education from Notre Dame College in Manchester, N.H., and also started a successful company that designed and manufactured tiles. His most important work recently, though, has been staying home on Peaks Island with his two small children.
<br/><br/>
Baxter has brought him back to the mainland and to the classroom.  He remembers his first visit to the school: “People were excited to be there. They WANTED to be there and it showed in everything I saw. Students helped students in unselfish, uncritical ways and supported one another. Teachers were part of their classes and waded directly into whatever was going on rather than hovering on the edges. The mantra of "Let's try it" elevated everything happening at Baxter and for me, it was like Dorothy stepping into the colored world of Oz. I spent a long time thinking, ‘This can't be actually happening,’ but it is, and I can't wait to start.”
<br/><br/>
Fun facts about Mr. Barnes: He’s a pilot, a scuba diver, and the cemetery keeper for Brackett Memorial Cemetery on Peaks. He can write with either hand and walk across the bottom of a pond. Ticks freak him out. He loves the Hitchhiker’s Guide to the Galaxy series and can quote anything from Monty Python (but please don’t ask him to do that in front of his family because it embarrasses them).
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="sbuhlman" class="panel-title" style="text-align:center">Sarah Buhlman - Instructional Specialist</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/sbuhlman.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:sarah.buhlman@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">sarah.buhlman@baxter-academy.org</button></a>
         <p>
<br/>
Ms. Buhlman comes to the Baxter adventure from a life of adventure. She grew up on a Maryland horse farm, played rugby, and spent a college semester sailing from Tahiti to Hawaii with the Sea Education Association. She fell in love with teaching while sailing on a 74-foot schooner out of Annapolis, Maryland, and she’s since been an outdoor educator in Alaska and Maine, where she spends her summers as an sailing, canoeing, and backpacking instructor for Hurricane Island Outward Bound School in Rockland. She’s spent the last two years as an AmeriCorps volunteer specializing in adventure education.
<br/><br/>
She has a Bachelor of Science degree in biology (botany and ecology track) from Towson University.
<br/><br/>
Ms. Buhlman worked at the REAL School on Mackworth Island last year but wanted to establish a longer lasting relationship with a Maine school. “After spending only a day with the Baxter students and staff, I could see this was the type of school I could make a home in: Someplace where the students are valued as people and not just as a number that takes a test. Where the staff is encouraged to be creative and inspire the students to discover their love of learning.”
<br/><br/>
Fun facts about Ms. Buhlman: She once had a job preparing three meals a day for 100 campers and staff at Camp Dark Waters. She attended a Quaker high school. She works two nights a week at Trader Joe’s, and if she’s not working, she’s over at Back Cove Crossift picking up heavy things and putting them back down again at varying rates of intensity. Sailing on the schooner Woodwind, she and her fellow sailors came in second in the Great Chesapeake Bay Schooner Race. Her friends call her eSBee.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="hdippolito" class="panel-title" style="text-align:center">Heather D'Ippolito - Humanities Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/hdippolito.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:heather.dippolito@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">heather.dippolito@baxter-academy.org</button></a>
         <p>
<br/>
Ms. D’Ippolito is a fifth-generation Mainer who last year returned home after a long stint teaching in New York City—five years in Brooklyn and three in the Bronx. At the Bushwick School for Social Justice, she was a tenth-grade English teacher who used project-based learning to explore texts ranging from Persepolis to Senegalese poetry to news articles on how social media played a role in the Egyptian revolution.
<br/><br/>
Her work wasn’t confined to the classroom in Brooklyn. She developed and implemented programs to help struggling students while aligning their work with the Common Core Learning Standards. She worked on a team to develop the school’s standards-based grading policy. She served as a coordinator for student affairs and helped plan college tours and job fairs, as well as workshops on social justice issues.
<br/><br/>
Most recently she has been the Jobs for Maine’s Graduates teacher at Bonny Eagle High School. Led by student interest, she has guided service projects with local elementary schools, the Ronald McDonald House, and USM Enactus Club.
<br/><br/>
She holds a bachelor of arts in English literature with a focus on environmental literature from Saint Michael’s College in Vermont, and she also studied at the School for International Training in Jaipur, India. She has a master of science in education from Herbert H. Lehman College in New York.
<br/><br/>
Why does she want to be part of Baxter? “This is a great time to call Portland home. The city's landscape and its community members create an ideal setting and cast of characters for the kinds of collaborative work students and staff are creating at Baxter. I feel very fortunate to be involved in education right now!”
<br/><br/>
Fun facts about Ms. D’Ippolito:  If she weren’t a teacher, she’d probably be a pastry chef. (Her favorite iced treat she’s made to date: vanilla bean ice cream pie with raspberry compote and fudge swirl...in a graham cracker crust.) She has knitted since high school and recently started avidly watching birds.

		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="jdoughty" class="panel-title" style="text-align:center">Jonathan Doughty - Science Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/jdoughty.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:jonathan.doughty@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">jonathan.doughty@baxter-academy.org</button></a>
         <p>
<br/>
Mr. Doughty has been a science teacher for 12 years, teaching at both a private middle school and several public high schools in Maine. He is teaching science at Baxter. He has taught a wide range of physical and life science classes including physics, geology, chemistry, and biology. Mr. Doughty believes “that good science education--like good science--starts with inquiry, travels through data and analysis, and reaches conclusions that lead inevitably to new questions.
<br/><br/>
He received his BA in geology and biology from Brown University. In addition to his teaching experience, Mr. Doughty is the father of two little girls, the Treasurer for the Maine Science Teachers Association, a fencing instructor, and a medieval re-enactor.  
<br/><br/>
Fun Fact: When in Madagascar, Mr. Doughty was at one point taught to sail a dugout canoe by a group of young people who were amazed at the color of his hair.

		</p>
       </div>
     </div>
   </div>
</div>
<br/>
    <div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="natdoug" class="panel-title" style="text-align:center">Nate Edmunds - Art & Design Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/natdoug.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:nate.edmunds@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">nate.edmunds@baxter-academy.org</button></a>
         <p>
<br/>
Mr. Edmunds arrives at Baxter fresh from the Peace Corps. He spent two years in Ukraine teaching English at a local high school, mentoring students in creative writing, and organizing youth leadership events. He has also taught in Tokyo and Jerusalem. In 2005, he graduated with a BFA from the Maine College of Art, where he majored in New Media and minored in Art History. He has exhibited his work at Las Cruces Museum of Art, Mass MOCA, and The Black Factory National Tour.
<br/><br/>
Mr. Edmunds has personal reasons for wanting to come back to Maine to teach at Baxter: “When I entered 3rd grade, I had already completed the 3rd grade math book and wanted to start on the 4th.  The teacher didn’t allow it.  Parents struggled, talked it through with admin, wrestled with whether to home school, and gave up.  I stopped doing homework for 10 years and got by on high-test scores.  I chatted and wrote notes all through class, resented the institution, developed cynicism toward society in general, became opinionated and bitter by 17.  That kind of thing happens.  But it should happen less.”
<br/><br/>
Fun facts about Mr. Edmunds: He is building an 18.3-foot cedar-strip kayak, working on a series of crochet sculptures, and writing a novel. He has the tenor saxophone leftover from his grandfather’s army days. And he has percussion training in Haitian and West African Conga. He is conversant in Ukrainian, competent in Russian, and has spent time studying Japanese and Arabic among native speakers.

		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="dgagne" class="panel-title" style="text-align:center">Debra Gagne - Social Worker</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/dgagne.png" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:debra.gagne@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">debra.gagne@baxter-academy.org</button></a>
           <a href="https://sites.google.com/a/baxter-academy.org/social-work/" target="_blank"><button type="button" class="btn btn-info pull-right">Website</button></a>
         <p>
<br/>
Bio coming soon!
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="agilman" class="panel-title" style="text-align:center">Adam Gilman - Humanities Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/agilman.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:adam.gilman@baxter-academy.org " target="_top"><button type="button" class="btn btn-info" style="text-align: left">adam.gilman@baxter-academy.org </button></a>
         <p>
<br/>
Adam Gilman is relocating to Baxter from Preparatory Charter High School in Philadelphia, where he has taught ninth-grade world history, tenth-grade U.S. history and twelfth-grade government and global studies (and a little algebra, too), and where he piloted an AP U.S. Government Club, coached the chess team and co-founded the Prep Charter Reading Task Force to improve reading comprehension and foster a pro-reading school culture.
<br/><br/>
His classes focus on real-world issues, connecting the skills of the historian— focused inquiry, research, analysis, problem solving, and writing—to contemporary challenges. Through a variety of collaborative projects, his students pose questions and seek solutions to challenges such as providing clean drinking water and food to the world’s growing population, dealing with the impact of wide-scale immigration in the developed world, revamping failed development strategies, providing economic and social justice to the world’s most disadvantaged populations, and maintaining a fair and equitable historical narrative in the age of big data and entertainment media.
<br/><br/>
Mr. Gilman says, “I have always been a firm believer in democratic learning and project-based inquiry, and I look forward to expanding these types of collaborative assignments into co-designed semester- or year-long projects at Baxter. The vision of Baxter Academy is not only one of collaborative learning, but of collaborative teaching as well, which is one of its most exciting features from my perspective. I can’t wait to start co-planning and co-teaching with my colleagues from across the disciplines.”
<br/><br/>
Mr. Gilman has a B.A. in history and an M.A. in African Studies, both from UCLA.
<br/><br/>
Fun facts about Mr. Gilman: He’s been to thirty countries (and counting). He taught himself chess, drums, and guitar, and he has also recently learned to love running. He once worked as a rare-book supervisor, and he collects both books and LPs.
		</p>
       </div>
     </div>
   </div>
</div>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="jguerette" class="panel-title" style="text-align:center">Jordan Guerette - French & Music Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/jguerette.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:jordan.guerette@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">jordan.guerette@baxter-academy.org</button></a>
           <a href="https://sites.google.com/a/baxter-academy.org/jordan_guerette/" target="_blank"><button type="button" class="btn btn-info pull-right">Website</button></a>
         <p>
<br/>
Mr. Guerette reclaimed the French language for himself. He found the language of his paternal grandparents beautiful. “Unfortunately, like many immigrants from Québec who settled in Maine, they chose to not teach their children French as at that time it was seen as the language of lower-class people,” he says. “I never got a chance to learn French from them either, so I decided to formally study it and reclaim the language of my family.”
<br/><br/>
While he was working toward his Bachelor of Arts degree in French at the University of Southern Maine, he completed an immersion program at L’Universite du Maine in Le Mans, France.
<br/><br/>
In addition to his French degree, he also has a degree in music from USM. He is a guitarist and saxophonist who teaches private music lessons and has also managed Bull Moose music in Brunswick. He is also pursuing a graduate degree in music composition. He looks forward to teaching music electives at Baxter.
<br/><br/>
He feels fortunate to begin teaching at Baxter because of the enthusiasm of its community:  “Every student and teacher I’ve met is thrilled to be here.”
<br/><br/>
Fun facts about Mr. Guerette: He is part of a heavy metal band that sells albums not only in the U.S. but abroad. He has never met an animal he didn’t love and especially loves cats, though he is allergic to them. He knows how to brew cider. And every morning he brews himself good coffee in his own French press.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="whodous" class="panel-title" style="text-align:center">Wells Hodous - Engineering Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/whodous.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:wells.hodous@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">wells.hodous@baxter-academy.org</button></a>
         <p>
<br/>
Wells Hodous comes out of industry to teach engineering at Baxter. As a Mechanical Design Engineer, he has a diverse background in product development and expertise in integrating design specifications, analysis requirements and manufacturing capabilities to generate successful designs. He intends to help Baxter students acquire a proficiency in the skills and awareness required to succeed as working engineers and designers.
<br/><br/>
He earned his B.S. in Mechanical Engineering at the University of Massachusetts, Amherst. He is adept at using CAD and FEA programs to capture design intent and perform design verification.
<br/><br/>
Baxter Quote:  "I am very excited to have this opportunity  to increase perception and understanding of how mechanical, structural and energy based systems work while also introducing a critical thinking process that has great value whether one decides to become and engineer or not....my hope is many students leaving Baxter will choose this diverse fascinating discipline that directly impacts the quality of our human existence!"
<br/><br/>
Fun Fact:  I love simple living, my kids, (three, two are in high school!) the sea, working with my hands,  playing the banjo with friends and exercising. I like to laugh and tell jokes and greatly enjoy working with teams of creative, compassionate people to accomplish interesting and challenging work.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="thowe" class="panel-title" style="text-align:center">Tia Howe - Admissions & Front Office Manager</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/thowe.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:tia.howe@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">tia.howe@baxter-academy.org</button></a>
         <p>
<br/>
Ms Howe joins us from the Yarmouth School Department, where she worked for ten years as the Special Education Assistant in their central office. Before working in Yarmouth, Ms Howe spent five years as an administrative assistant at a fabrication mill in Lisbon Falls working on environmental protection and safety procedures. She brings with her a wealth of experience in business and technology. She graduated from Beal College in Bangor with an AS degree in Travel and Tourism.
<br/><br/>
“My favorite part about Baxter is the community feel,” Ms Howe reflects. “On my very first day here, I actually felt like I had found my place… This is one of the most fascinating journeys I have ever been on, and I am loving every single second of it!”
<br/><br/>
Fun facts: Ms Howe is a taphophile* (definition: someone who takes interest in cemeteries, tombstones, graves, funerals, or memories of past lives). She works as a Paranormal Investigator and has been interviewed by Downeast Magazine for an article on her cemetery restoration work with the town of Durham. 
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="hlarsson" class="panel-title" style="text-align:center">Halsted Larsson - Programming Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/hlarsson.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:halsted.larsson@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">halsted.larsson@baxter-academy.org</button></a>
         <p>
<br/>
Mr. Larsson moved from Pennsylvania to teach at Baxter after hearing about Baxter’s approach to student ownership of learning. He teaches computer science at Baxter.
<br/><br/>
He brings with him a wealth of experience from working in the industry, most recently Advanced Workstations in Education, where he was a Senior UX Developer. His experience in learning design and technology spans from being a Research Associate at LeapFrog Enterprises to being a Senior UX Developer.
<br/><br/>
His understanding of design and technology is wide and varied. He co-founded a design studio and developed an award-winning indie video game, Jamestown: Legend of the Lost Colony (set in British Colonial Mars).  He has experience with Javascript, Unity, game design, website design, and curriculum design (to name a few).
<br/><br/>
Mr Larsson earned a B.S. in religious studies from Haverford College and a M.S. from Stanford University School of Education. 
<br/><br/>
Fun Fact: Mr. Larsson spent a year after college in a Clinical Pastoral Education program, training and serving as a non-denominational hospital chaplain.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="mlawrence" class="panel-title" style="text-align:center">Megan Lawrence - Spanish Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/mlawrence.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:megan.lawrence@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">megan.lawrence@baxter-academy.org</button></a>
         <p>
<br/>
In teaching Spanish, Megan Lawrence brings to bear a masters degree in Spanish from Middlebury College—and a world of experience. She’s lived and taught or studied in Spain, Costa Rica, and Sweden. And she’s also a hundred-ton master merchant mariner who earned her captain’s license in 2013.
<br/><br/>
Ms. Lawrence is a graduate of Gorham High School and the University of Southern Maine, where she majored in geography and anthropology.
<br/><br/>
“I want my Spanish class to be a setting that will allow students to listen and respond to each other, that will inspire them to read, write, create, and think for themselves,” says Ms. Lawrence. “At Baxter, the interest the students display in what they're doing is palpable and exciting. On the day I interviewed at the school, they were curious and enthused, and that excited my ambitions for what we can accomplish in the classroom.”
<br/><br/>
Fun facts about Ms. Lawrence: She raised sheep when she was growing up. She reads every chance she gets; memoirs are her favorites. She writes short stories in Spanish. She has skied the Pyrenees and hopes, someday, to ski the Alps. She loves maps and globes but claims to be a terrible navigator.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="eli" class="panel-title" style="text-align:center">Enyue Li - Mandarin Chinese Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/eli.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:enyue.li@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">enyue.li@baxter-academy.org</button></a>
         <a href="https://sites.google.com/a/baxter-academy.org/mandarin-chinese/home" target="_blank"><button type="button" class="btn btn-info pull-right">Website</button></a>
         <p>
<br/>
Before moving to the United States, Enyue Li earned her master's degree in education and taught for seven years in her hometown, Xi'an, China, where she won numerous awards, including the prestigious National Chinese Teachers' Award for Fundamental Knowledge of Chinese Language/Literature Competition of China. In the Bei-Lin district-wide awards, she was recognized for Excellence in Teaching, Outstanding Coach, and Highest Ranking Class. Since arriving in Maine, she has taught Mandarin for eight years to students ranging in age from five to adult. She anchors the elementary-age program at Portland's CAFAM Chinese School.
<br/><br/>
Her emphasis is on encouraging lively, colloquial dialogue and introducing students to Chinese culture as they practice reading and writing. Ms. Li is excited to be part of Baxter. She says, "This school is awesome because of the idea of students leading the learning."
<br/><br/>
She lives in Scarborough with her husband and young son.
<br/><br/>
Fun facts about Ms. Li: She has done research in Chinese calligraphy and grammar. She plays the piano and is interested in reading, running, and some cooking. Shehas reviewed most books related to China and Mandarin language in Maine's libraries. She was born in the Year of the Snake; in honor of that, you'll see her wearing lucky red all year.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="alukas" class="panel-title" style="text-align:center">Alan Lukas</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/alukas.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:alan.lukas@baxter-academy.org " target="_top"><button type="button" class="btn btn-info" style="text-align: left">alan.lukas@baxter-academy.org </button></a>
         <p>
<br/>
Bio coming soon!
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="lmedeiros" class="panel-title" style="text-align:center">Laurie Medeiros - Guidance Counselor</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/lmedeiros.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:laurie.medeiros@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">laurie.medeiros@baxter-academy.org</button></a>
           <a href="http://baxterguidance.weebly.com/" target="_blank"><button type="button" class="btn btn-info pull-right">Website</button></a>
         <p>
<br/>
Ms. Medeiros comes to Baxter from Gray-New Gloucester HIgh School where she was the director of guidance. She earned her M.S. in Counseling at the University of Southern Maine and her B.A. in Theatre and Creative Writing at Hampshire College.
<br/><br/>
Ms. Medeiros was drawn to Baxter’s student-centered approach to learning: “I believe students learn the most when they feel a sense of ownership around their learning.  When students can identify their own interests and then find the support and resources they need to purse them, they are well on their way to creating the most challenging, engaging, and rewarding academic careers.  The skills they learn in doing this are essential outside of high school, as well, and become the foundation of lifelong learning and growth.  I'm delighted to be at Baxter and seeing that process play out for our students every day!“ 
<br/><br/>
Ms. Medeiros has a strong knowledge of proficiency-based curriculum and presented her work at the Maine Association for Supervision and Curriculum Development. Her experience includes work as a Civil Rights Team Leader and counselor for at risk students.  “Helping students in transition - whether into or out of high school, or in other moments of their lives - is a major part of being a school counselor and is something I love to do,” Ms. Medeiros says. “ I think young people are best served by helping them help themselves so they can develop the skills they need to enjoy and be successful in school, on the job, or anywhere in their lives.  I am constantly amazed by the unique strengths each student has, and am honored to be a part of helping them grow.”
<br/><br/>
Fun Fact: Ms. Medeiros  is a playwright in her spare time, and enjoys having her plays produced and participating in the vibrant local theater community. At Hampshire College as an undergraduate she created my own program of study, which culminated in a full-length play about Benjamin Rush, one of the founders of American psychiatry.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="pmoxhay" class="panel-title" style="text-align:center">Peter Moxhay - Physics & Math Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/pmoxhay.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:peter.moxhay@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">peter.moxhay@baxter-academy.org</button></a>
         <p>
<br/>
Dr. Moxhay will be familiar to students who participated in his Arduino and Raspberry Pi programming classes at Baxter last fall. He’s been a math and physics teacher at Portland High School and King Middle School, and math and physics are the subjects he’ll be teaching at Baxter along with computer programming. He’s a former theoretical physicist (high-energy particle physics) with degrees from Brown University and the University of Minnesota. When he became interested in education, he got deeply involved in international projects with math and science educators from Russia, Bulgaria, and Romania.
<br/><br/>
He’s long seen the need for a STEM school in southern Maine and is pleased that Baxter will also have an incredibly strong humanities and arts component. He says, “I like the prospective focus on enabling students to build interesting stuff with their hands. I expect that letting students work on practical projects of their own devising will develop student motivation in a big way." Dr. Moxhay lives on Peaks Island with his family.
<br/><br/>
Fun facts about Dr. Moxhay: He has done research in elementary particle physics, string theory, and quantum field theory. His languages are Russian and French, and he plays old-time fiddle.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="mnunez" class="panel-title" style="text-align:center">Moises Nunez - Director of Student Services</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/mnunez.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:mo.nunez@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">mo.nunez@baxter-academy.org</button></a>
         <p>
<br/>
Mr. Nunez has been teaching for over ten years. Most of his work has been with disadvantaged youth, and with special needs students. He comes to Baxter directly from Spurwink Services, where he has been a special ed teacher and case manager. Past positions for Mr. Nunez include being a faculty member of the English department at the Cambridge School of Weston, an instructor at the University of Massachusetts in Boston, and a guest lecturer at the University of Rochester. Mr. Nunez has also worked for the Department of Labor, has written for the National Academy of Sciences, and has consulted for several city/county school districts on issues related to youth violence.
<br/><br/>
His academic passions are focused on the relationships between teenagers, schools, and their communities. While in Rochester, he designed, and oversaw Project New Beginnings, an academic program for incarcerated and at-risk youth, that continues to this day.
<br/><br/>
Mr. Nunez is a graduate of Hampshire College and has a master’s degree in education from the University of Southern Maine. He is currently working on a second masters in Special Education administration. At Baxter, he will be spearheading the Special Education services, as well as supporting his fellow teachers on effective student engagement strategies. He’ll also teach a course or two. He lives in Portland with his wife (and brilliant sculptor) Christine. Mr. Nunez says, “I am beyond excited to join this team and grow this school!”
<br/><br/>
Fun facts about Mr. Nunez: Everyone calls him Mo. His first language is Spanish. He produces music and performs under the name mosart212.  He has a dog named Count Basie Caswell Nunez.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="bolson" class="panel-title" style="text-align:center">Brian Olson - Geography and Special Education Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/bolson.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:brian.olson@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">brian.olson@baxter-academy.org</button></a>
         <p>
<br/>
Brian Olson brings to Baxter Academy wide experience with alternative learning programs. From the classrooms of California's juvenile justice system to the APEX environment of RSU 14, Mr. Olson has been committed to helping create communities of learners. He has coached in Freeport, worked in social justice schools in Brooklyn, and volunteered for non-profit initiatives around after-school learning. He has taught in the Caribbean, Thailand, and Central America.
<br/><br/>
Mr. Olson says, "I actively seek chances to impact the lives of our youth. I search out opportunities to serve as a catalyst for students pursuing their passions."
<br/><br/>
At Baxter, Brian assists the special education department, co-guides the student senate, teaches a cultural geography class, and facilitates music, art and gaming clubs. He draws on his background in print media, athletic organization, community activism, holistic wellness, martial arts, fiction writing, and outdoor education to build on the enrichment ideas of the community. He spearheads arts and athletic outreach.   
<br/><br/>
He holds a degree in writing from Western Washington University, a Global Literacy teaching certificate from the New College of California, and an Educational Leadership CAS from USM. Brian has founded ten athletic teams, coaching five different sports for over 15 years.
<br/><br/>
Mr. Olson lives with his wife and two children in Portland.
<br/><br/>
Fun facts about Mr. Olson: He likes juicing and children's books, beat-boxing and kites. He can pull off a no-look pass. He is currently planning his Viking repatriation and perfecting his recipe for breakfast Dutch babies. He has more freckles than passport stamps, but just barely.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="sparwol" class="panel-title" style="text-align:center">Sean Parrott-Wolfe - Mathematics Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/sparwol.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:sean.pw@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">sean.pw@baxter-academy.org</button></a>
         <p>
<br/>
Mr. Parrott-Wolfe graduated from the University of Southern Maine in 2014 with a degree in mathematics and physics. He is  teaching math this year. His research interests include mathematical physics, general relativity, quantum field theory, and theories of quantum gravity. 
<br/><br/>
At USM, Mr. Parrott-Wolfe founded the USM Mathematical Society and served as a student representative for the USM Mathematics Curriculum Planning Committee where he represented the academic needs and desires of mathematics students. In addition, he served as a mathematics tutor for undergraduate students at all levels from pre-algebra to multivariate calculus. 
<br/><br/>
Mr. Parrott-Wolfe says,  “I believe  mathematics is an art and that investigations in mathematics stem from creativity and curiosity. Mathematics isn’t always about getting the right answer, but about the ongoing process of problem-solving.” Mr. Parrott-Wolfe wants his classroom always to be inquiry-led and expects hand-on-involvement from his students. 
<br/><br/>
Fun facts:  Mr. Parrott-Wolfe has been a barista, paperboy, audio engineer, welder, recycling plant sorter, baker, bike mechanic, and a dockhand.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="eperks" class="panel-title" style="text-align:center">Elke Perks - Life Sciences Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/eperks.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:elke.perks@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">elke.perks@baxter-academy.org</button></a>
         <p>
<br/>
Ms. Perks doesn’t just teach about the dirt; she gets out there with students into the dirt—or water. As a life science teacher, most recently at South Portland, and as a English major at Rutgers, she loves connecting things—the fall of Mayan civilization because of anomalies in climate patterns and how those climate trends might mean something now; or the history of Aztecs and chocolate and why it might inform thinking about contemporary water issues. Side-by-side with her students, she discovers meaningful stories through science.
<br/><br/>
“The world to me is a fluid system that connects everything in a complex community of interactions encompassing all disciplines,” says Ms. Perks. “The more I teach, the more connections I can see, and it inspires me to want to learn more.”
<br/><br/>
Ms. Perks has a masters in environmental studies from Antioch New England and has taught in experiential programs at the Stone Environmental Schools of New England and as an adventure educator at Camp Kieve, where she led ten-day wilderness sea kayaking and backpacking trips for freshmen and sophomore girls. She used Muscongus Bay to teach tidal ecology and Baxter State Park to teach geology and terrestrial ecology.
<br/><br/>
Ms. Perks lives in Portland, which she especially loves in winter, with her family, which includes three young sons.
<br/><br/>
Fun facts about Ms. Perks: She moved to Maine from New Jersey to be a chef at an off-the-grid lighthouse inn on Isle au Haut. She loves skiing down Portland streets in a snowstorm. And, because she’s crazy about birds, she always has a pair of binoculars in her car.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="apfeifer" class="panel-title" style="text-align:center">Alice Pfeifer - Instructional Specialist</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/apfeifer.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:alice.pfeifer@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">alice.pfeifer@baxter-academy.org</button></a>
         <p>
<br/>
Bio coming soon!
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="drawson" class="panel-title" style="text-align:center">David Rawson - Math, Science & Technology Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/drawson.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:david.rawson@baxter-academy.org " target="_top"><button type="button" class="btn btn-info" style="text-align: left">david.rawson@baxter-academy.org </button></a>
         <p>
<br/>
Southern Maine has had to endure Mr. Rawson’s teaching for twenty-five years. He began his career at Wells High School, initially teaching Chemistry and Geometry. His subsequent teaching assignments spread to most of the curriculum in math and physical science, eventually expanding into technology as well. It was also there that he experienced his first forays into the wilds of school reform. Since 2001 he has been a member of the Poland Regional High School faculty, where he was a co-creator of an interdisciplinary individualized team, a faculty coach and mentor, and a long-serving member of the PRHS governance group. He has taught a wide range of courses, including Astronomy, Chemistry, and Physics; Statistics, Integrated Math, and Calculus; Digital Photography, Desktop Publishing, and AP Programming.
<br/><br/>
The concept of learning by discovery is central to his idea of successful learning. As Mr. Rawson puts it: “Figuring out how things work – in which direction will that rolling ball move? what function describes this pattern? – is vital to understanding the world around us. Without that understanding, we can hardly expect to be more than spectators, rather than participants.”
<br/><br/>
Mr. Rawson is a graduate of the University of Maine, where he earned double majors in Mathematics and Physics. There he met educators whose ideas he later turned loose in his own classrooms: math professors who taught the value of a Socratic dialogue and treating students as individuals; teacher guides who instilled the simple importance of commandeering a student’s pencil; physics professors who let students explore a room full of equipment with which to investigate the world, and showed how there is ample room and opportunity for humor in education. His work at the UMaine (now Maynard F Jordan) Planetarium also helped show him the path to a future helping students understand the universe around them.
<br/><br/>
The promise and the challenge afforded as one of the trailblazers making a path for the success of Baxter Academy, its students, its community, and its spirit, posed an opportunity too difficult to resist. The prospect of crafting effective individualized education around math and science is too thrilling to ignore. Helping the collective Baxter community figure out how to accomplish such a seemingly simple (yet inestimably complex) problem – now that is a noble quest!
<br/><br/>
Fun facts about Mr. Rawson: Neither the piano nor the clarinet (or even, during a disastrous spring, the drums) has yet succumbed to his efforts at mastery – or, to be fair, even competency. Seeking an outlet for music has instead lead to years as a choral singer (Messiah singalong, anyone?) and to all sides of the stage apron, where he has performed in and directed community theatre productions, high school theatre, and assisted local theaters with their technical lighting needs. An avid writer, he is also the author of Murder on Mount Desert.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="prawson" class="panel-title" style="text-align:center">Pamela Rawson - Mathematics Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/prawson.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:pam.rawson@baxter-academy.org " target="_top"><button type="button" class="btn btn-info" style="text-align: left">pam.rawson@baxter-academy.org </button></a>
           <a href="https://sites.google.com/a/baxter-academy.org/rawsonmath/home" target="_blank"><button type="button" class="btn btn-info pull-right">Website</button></a>
         <p>
<br/>
Ms. Rawson has been teaching for 25 years. During her career, Ms. Rawson has taught all levels of high school mathematics from basic skills to Advanced Placement. She spent the last twelve years at Poland Regional High School working with an integrated mathematics program and developing cross-curricular projects. While at Poland, Ms Rawson worked with teams of at-risk students, co-taught an integrated math/physics course with Mr. Rawson, served as a teacher leader and mentor, and field-tested the use of TI-Nspire technology for learning mathematics. She is intrigued by the use of technology to teach conceptual understanding and has used a variety of tools, beginning with graphing calculators in 1990.
<br/><br/>
As an independent consultant, Ms. Rawson has provided professional development to math teachers in Maine and throughout the country since 1993. Much of her recent work has focused on implementation of Core-Plus Mathematics and classroom use of TI-Nspire. She was recently granted T3 Regional Instructor status by Texas Instruments. Ms. Rawson is currently President of the Association of Teachers of Mathematics in Maine where she has worked to organize professional development supporting implementation of the Common Core State Standards for Mathematics.
<br/><br/>
Ms Rawson is a graduate of the University of Lowell and has a Bachelor of Science degree in Mathematics, with concentrations in Computer Science and Statistics. She also studied Mathematics at the graduate level for two years at the University of Maine.
<br/><br/>
Ms Rawson is excited to be a member of the Baxter inaugural faculty and looks forward to being amazed by her colleagues and students. She is especially excited to be returning to teach in Portland, where her career began. In her first year of teaching at Portland High School, she teamed her geometry class with an art class to create an architecture unit, culminating with a walking tour of downtown Portland.
<br/><br/>
Fun facts about Ms Rawson: She plays many instruments, but none of them very well. She has a passion for musical theater and has been on stage and behind the scenes at many community theaters in southern Maine. She has spent the last decade tracing her family roots and has made some interesting discoveries.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="brosenbloom" class="panel-title" style="text-align:center">Ben Rosenbloom</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/brosenbloom.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:ben.rosenbloom@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">ben.rosenbloom@baxter-academy.org</button></a>
         <p>
<br/>
Bio Coming Soon!
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="dschwarz" class="panel-title" style="text-align:center">Donna Schwarz - Front Office Administrative Assistant</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/dschwarz.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:donna.schwarz@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">donna.schwarz@baxter-academy.org</button></a>
         <p>
<br/>
Bio Coming Soon!
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="scogin" class="panel-title" style="text-align:center">Samuel Scogin - Humanities Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/scogin.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:sam.scogin@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">sam.scogin@baxter-academy.org</button></a>
         <p>
<br/>
Mr. Scogin has a bachelor’s degree in American studies and literature from Marlboro College and a master’s in education from Goddard College. For the past two years he’s been team-teaching honors courses at Maine Central Institute using a project- based model that integrates history and English.
<br/><br/>
A strong interest in anthropology has led him to build projects around cultural artifacts that reveal something about the society that created it. In one project, he and his students worked on an ethnography of the United States in the 1950s using artifacts such as TV dinners and early video games.
<br/><br/>
Mr. Scogin says: “I see my job as a humanities teacher as one where I strive to create a balance between an open doorway to the outside world and a safe space where students can gain perspective on that world. From this vantage point, we gain the ability to see the interconnectedness of the human experience, especially how technology changes that experience. We can weigh technological advancement and the role it plays in changing our society. Science, technology, math, and engineering depend on the humanities just as much as the humanities depend on STEM subjects for further inspiration. My teaching asks the questions that binds these disparate subjects together and provides the context to move forward with whatever the human experience will be.”
<br/><br/>
At MCI, Mr. Scogin advised the school’s faculty about using technology in the classroom and was a dorm parent to international students. He advised the Model United Nations and coached the soccer, cross country, and rifle teams.
<br/><br/>
Fun facts about Mr. Scogin: He spends at least one week a year alone in the backcountry and so he’s hiked almost all of the Appalachian Trail. He wants to paddle the Northern Forest Canoe Trail and would love to fly fish in Mongolia.  He is an amateur woodworker, a hobby diesel mechanic and grease-car conversion specialist, and an organic gardener. He hates mayonnaise and is learning how to be a sushi chef.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="astarr" class="panel-title" style="text-align:center">Aleah Starr - Humanities Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/astarr.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:aleah.starr@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">aleah.starr@baxter-academy.org</button></a>
         <p>
<br/>
Ms. Starr has spent the past three years teaching English to 9th and 10th graders at Boston Preparatory Charter Public School. While at Boston Prep, she advised the student mentoring club, partnered with WriteBoston to improve student composition, got 30  seconds of playing time in the student vs staff basketball game, and served as the 9th grade Grade Level leader.  She is teaching ninth-grade Humanities this year at Baxter.
<br/><br/>
Ms. Starr  graduated from Colby College with a B.A. in English and Education, and received a Masters in Effective Teaching from the Charles Sposato Graduate School of Education. Prior to receiving her Masters, Ms. Starr worked at a middle school in inner-city Boston as a Teacher resident in the Match Teachers' Residency program. While, at Colby, Ms. Starr was a peer writing tutor at the  Farnham Writers’ Center and a mentor and program coordinator for Colby Cares about Kids.
<br/><br/>
Ms. Starr  is excited to learn from her students and co-workers at Baxter. She says; "I am continually impressed by students' ability to drive their own learning and love the natural curiosity they bring to the classroom."
<br/><br/>
Fun Fact:  Ms. Starr grew up in the smallest U.S. state capital which also happens to be the only one without a McDonald's. She loves manatees and is a master parallel parker. She can guess people's Meyers Briggs profiles on the first try.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="sstutzman" class="panel-title" style="text-align:center">Sunny Stutzman - Fabrication & Engineering Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/sstutzman.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:sunny.stutzman@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">sunny.stutzman@baxter-academy.org</button></a>
         <p>
<br/>
Mr. Stutzman describes himself as a teacher, an industrial designer, a maker, a farmer, and a musician who wants to help build a program at Baxter that “embodies the spirit of making.” He arrives from Yarmouth High School, and his passion is sharing the knowledge he’s accumulated through years of product design. He introduces his students to new technologies and techniques that are relevant to today’s creative economy and that has helped them make everything from carbon fiber skateboards and surfboard to hovercrafts and human-powered vehicles. He himself once designed a prototype bicycle for use in Antarctica, and the project won a National Creative Genius Award.
<br/><br/>
 “After only a few minutes at Baxter Academy I could tell that Baxter was a place I could call home,” Mr. Stutzman says. “I grew up on a small vegetable farm in Sangerville, Maine.  There is a certain energy that surrounds the farm that I have also found at Baxter.  It is derived from the sense of community and the coordinated dedication found in both the staff and the student body.  Ideas are allowed space to grow and flourish.  Project-based learning allows both students and faculty to discover new subject matter in a manner that gives both relevance and purpose to the curriculum.”
<br/><br/>
Mr. Stutzman has also coached the Science Olympiad and has served as assistant director in the drama department. In his free time, he surfs, hang glides, snowboards, and plays music.
<br/><br/>
He has a bachelors degree in Business/Economics from the University of Maine at Farmington, and an associates degree in specialized technology from the Art Institute of Pittsburgh, where he majored in industrial design technology. He’s done industrial design for L.L. Bean, Maine Discovery Museum, and Moosehead Manufacturing, among others.
<br/><br/>
Fun facts about Mr. Stutzman: He surfs year-round in Maine’s coastal waters. He’s been a professional musician since age 11 and plays the saxophone, upright bass, harmonica, guitar, cello, fiddle, didgeridoo. Plus he sings. He gained important experience maintaining small engines through his hobby of hang gliding—using a harness outfitted with a small two-stroke high-performance engine attached to a folding propeller.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="ataylor" class="panel-title" style="text-align:center">Angela Taylor - Humanities Teacher</h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/ataylor.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:angela.taylor@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">angela.taylor@baxter-academy.org</button></a>
         <p>
<br/>
Ms. Taylor comes to Baxter as not just an experienced high-school teacher and elementary principal but as a designer of new approaches to education. At Poland Regional High School, where she taught humanities for eleven years, she also designed the student judiciary board (the model for Baxter’s j-board). She proposed and designed an alternative school within the school that allowed students to work at their own pace while meeting the same standards as mainstream students. And she designed a standards-recovery program for students who didn’t meet course standards.
<br/><br/>
At Poland, she taught humanities integrated with math, science, and special education. She created an SAT prep curriculum that was embedded in her classes and also in an after-school prep course. She created a standards-based summer school. One of her specialties is implementing standards-based curriculum and assessment, and she has taught other teachers about standards-based education at UNE, Kaplan University, and USM (her alma mater for both a bachelors in history and a masters in education).
<br/><br/>
Ms. Taylor says, “I am excited to teach at Baxter because I think embracing contradictions and loving ambiguity should be part of every school.”
<br/><br/>
Ms. Taylor grew up in southern California and now lives with her family in Raymond, Maine.
<br/><br/>
Fun facts about Ms. Taylor:  She was in the Navy but gets seasick. She thought she didn’t like cats but is now in love with one named Picasso.  She loves hot weather, even though she doesn’t get much of it in Maine.
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="kvirmalo" class="panel-title" style="text-align:center">Katelyn Virmalo - Humanities Teacher </h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/kvirmalo.jpg" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:katelyn.virmalo@baxter-academy.org " target="_top"><button type="button" class="btn btn-info" style="text-align: left">katelyn.virmalo@baxter-academy.org </button></a>
         <p>
<br/>
Ms. Virmalo is highly experienced in achieving remarkable results from challenging classroom circumstances. Until 2009, she was head of the English department at the Bushwick School for Social Justice in Brooklyn, New York, where she used creative writing, role-playing, and close relationships to provide unique learning opportunities—even for students who often spoke English as a second language. She received the Most Dedicated Teacher and the Most Creative Teacher awards while there.
<br/><br/>
Most recently, she has empowered incarcerated youth at Long Creek Youth Development Center to express themselves through murals, poetry slams, community gardens, and a school newspaper. She has volunteered her time and talent to The Telling Room and Blunt Youth Radio.
<br/><br/>
She has an undergraduate degree from Radford University, and an MS in Education from Queens College, Queens, New York.  Between degrees, she lived in Bangkok, Thailand for two years, teaching at The American School of Bangkok and mentoring youth through arts and athletics programs.
<br/><br/>
As an English teacher, Ms. Virmalo’s goals are to strengthen communication skills—reading, writing, listening, and speaking—that will apply to any path her students choose.  She facilitates critical thinking. Her favorite part of high school English is celebrating student work with literary publications.
<br/><br/>
Ms. Virmalo says, “I am thrilled to be a member of Baxter Academy where talented educators collaborate with students, parents, and the community to build a school where learning is innovative, meaningful, and relevant to our ever- evolving world.  My work with diverse populations, from at-risk youth to international students, has demonstrated that everyone learns differently. Baxter Academy is a school where all learners will be challenged and engaged.”
<br/><br/>
Fun facts about Ms. Virmalo: She is a traveler, reader, baker, seamstress, yogi, and mother.  She has taken class with the Croatian National Ballet and walked the Great Wall. She uses the Oxford comma. 
		</p>
       </div>
     </div>
   </div>
</div>
<br/>
<div class="panel panel-default facmax" style="margin-left: 1%; margin-right: 1%">
   <div class="panel-heading">
     <h1 id="awinter" class="panel-title" style="text-align:center">Antonia Winter - Educational Technician </h1>
   </div>
   <div class="panel-body">
     <div class="row">
       <div class="col-md-3">
         <img src="images/faculty/awinter.png" class="img-responsive img-circle" style="width: 250px; height: auto; margin-top:40px; margin-left:auto; margin-right:auto">
       </div>
       <div class="col-md-9">
         <a href="mailto:antonia.winter@baxter-academy.org" target="_top"><button type="button" class="btn btn-info" style="text-align: left">antonia.winter@baxter-academy.org</button></a>
         <p>
<br/>
Ms. Winter comes to Baxter from Riverton School in Portland where she was an ELL teacher. She also works as an instructor of language arts at Portland Adult Ed.  In addition to her public education experience, Antonia has privately tutored students aging from 5-16 and conducted Yoga instruction for K-1 students and adults. 
<br/><br/>
Ms. Winter says, "I find Baxter to be a dynamic educational setting because of the commitment to the Socratic method, the focus on STEM, and the curricular foundation of project-based experimentation.”
<br/><br/>
She earned her M.S. in Elementary Education from Wheelock College and earned her B.A. in American Studies at Wesleyan University.
<br/><br/>
Fun facts: Ms. Winter loves to teach Yoga and still likes to practice her cartwheels on the beach.
		</p>
       </div>
     </div>
   </div>
</div>
</div>
    
<!--/cms:editable-->
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/plugins/jquery.capSlide.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
	<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
	</script>
<script>
    $(".snaptop").hide();
    $(document).scroll(function() {
      var y = $(this).scrollTop();
      if (y > 300) {
        $('.snaptop').fadeIn();
      } else {
        $('.snaptop').fadeOut();
      }
    });
    
    $(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>

</body>
</html>
<?php COUCH::invoke(); ?>