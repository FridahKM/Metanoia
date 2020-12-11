<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>MoreInfo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Bad+Script|Amiri|Cormorant+Garamond|Rancho|Fredericka+the+Great|Handlee|Homemade+Apple|Henny+Penny|Crimson Text|Indie Flower|Nunito

|Philosopher|Playfair+Display+SC|Reenie+Beanie|Unna|Zilla+Slab" rel="stylesheet">
	<link href="stylesheet.css" rel="stylesheet">
</head>
<body>
	<div class="header">
		<div style="width: 87%; display:inline-block;">
	<ul>
		<a class ="mainHeader">Club Metanoia</a></ul>
		<li><a href="index.php"><i class="fas fa-home"> Home</i></a></li>
	 	<li><a href="quotes.php"><i class="fas fa-heart"> To keep you going...Click me!</i></a></li>
	</ul>
</div>
	<div class="accountIcon" style="width:10%; display: inline-block; text-align: right; font-size: 18px;padding: 5px;height: 30px;">
		<ul>
			<!--<li>You are logged in!</li>
			<li>You are logged out!</li>-->
			<li class="account" style="padding: 0px;"><i class="fas fa-user-alt"><i class="fas fa-caret-down"></i></i>
			<div class="submenu">
				<ul>
					<?php
					if (isset($_SESSION["userId"])){
						echo "<li><a href='signup.php'>Sign Up</a></li>";
					  echo "<li><a href='login.php'>Log In</a></li>";
					  echo "<li><a href='moreinfo.php'>Admin Portal</a></li>";
					  echo "<li><a href='includes/logout.incl.php'>Log out</a></li>";
					 echo "<li><a href=''>Admin Portal</a></li>";

					}else {
						echo "<li><a href='signup.php'>Sign Up</a></li>";
					 echo "<li><a href='login.php'>Log In</a></li>";
					}
					?>
					
				</ul>
			</div>
			</li>
		</ul>
	</div>
</div>
	</div>

<div class="infoBodyOne">

	<p class="paraOne" style="color: black; font-size: 15px">Welcome! We're so happy to be able to walk this journey towards conquering depression with you! Let's learn about the different types of depression that are there so you could better understand and also help us understand your personal situation inorder for us to offer approriate and personalized help.</p>
	<p class="headThree">(i)Clinical Depression</p>
	<p class="paraThree">A mental health disorder characterised by persistently depressed mood or loss of interest in activities, causing significant impairment in daily life. Possible causes include a combination of biological, psychological and social sources of distress. Increasingly, research suggests that these factors may cause changes in brain function, including altered activity of certain neural circuits in the brain. The persistent feeling of sadness or loss of interest that characterises major depression can lead to a range of behavioural and physical symptoms. These may include changes in sleep, appetite, energy level, concentration, daily behaviour or self-esteem.</p>
	<p class="headTwo" style="font-size: 16px"><b><i>Symptoms & Treatment</i></b></p>
	<p class="paraThree">Mood: anxiety, apathy, general discontent, guilt, hopelessness, loss of interest, loss of interest or pleasure in activities, mood swings, or sadness.
	Behavioural: agitation, excessive crying, irritability, restlessness, or social isolation.
	Sleep: early awakening, excess sleepiness, insomnia, or restless sleep.
	Whole body: excessive hunger, fatigue, or loss of appetite.
	Cognitive: lack of concentration, slowness in activity, or thoughts of suicide.
	Weight: weight gain or weight loss.
	Also common: poor appetite or rumination.

	Suggested treatments:Treatment consists of antidepressants
	The mainstay of treatment is usually medication, talk/ therapy or a combination of the two. Increasingly, research suggests that these treatments may normalise brain changes associated with depression.
	</p>
	<p class="headThree">(ii)Persistent depressive disorder</p>
	<p class="paraThree">Depression that lasts for two years or more. It’s also called dysthymia or chronic depression. Persistent depression might not feel as intense as major depression, but it can still strain relationships and make daily tasks difficult.Persistent depression lasts for years at a time, so people with this type of depression may start to feel like their symptoms are just part of their normal outlook on life.
	</p>
	<p class="headTwo" style="font-size: 16px"><b><i>Symptoms & Treatment</i></b></p>
	<p class="paraThree">
	Deep sadness or hopelessness,
	low self-esteem or feelings of inadequacy,
	lack of interest in things you once enjoyed,
	appetite changes,
	changes to sleep patterns or low energy,
	concentration and memory problems,
	difficulty functioning at school or work,
	inability to feel joy, even at happy occasions,
	social withdrawal,
	Suggested treatments:Treatment includes prescribed medication (Antidepressants)and talk therapy.
	</p>	
</div >
<div class="infoBodyTwo" >
	<p class="headThree">(iii)Manic Depression/ Bipolar disorder :</p>	
	<p class="paraThree">Manic depression consists of periods of mania or hypomania, where you feel very happy, alternating with episodes of depression. Manic depression is an outdated name for bipolar disorder.

	In order to be diagnosed with bipolar I disorder, you have to experience an episode of mania that lasts for seven days, or less if hospitalization is required. You may experience a depressive episode before or following the manic episode.
	</p>
	<p class="headTwo" style="font-size: 16px"><b><i>Symptoms & Treatment</i></b></p>
	<p class="paraThree">
	Depressive episodes have the same symptoms as major depression, including: feelings of sadness or emptiness, lack of energy, fatigue, sleep problems, trouble concentrating, decreased activity, loss of interest in formerly enjoyable activities, suicidal thoughts. <br>Signs of a manic phase include: high energy, reduced sleep, irritability, racing thoughts and speech, grandiose thinking, increased self-esteem and confidence, unusual, risky, and self-destructive behavior feeling elated, “high,” or euphoric.<br>
	In severe cases, episodes can include hallucinations and delusions. Hypomania is a less severe form of mania. You can also have mixed episodes in which you have symptoms of both mania and depression.
	Suggested treatments: Treatment includes prescribed medication (Antidepressants)and talk therapy.
	</p>	
	<p class="headThree">(iv)Seasonal Depression :</p>	
	<p class="paraThree">Seasonal depression, also called seasonal affective disorder and clinically known as major depressive disorder with seasonal pattern, is depression that’s related to certain seasons. For most people, it tends to happen during the winter months.
	</p>
	<p class="headTwo" style="font-size: 16px"><b><i>Symptoms & Treatment</i></b></p>
	<p class="paraThree">
	Symptoms often begin in the fall, as days start to get shorter, and continue through the winter. They include:

	social withdrawal
	increased need for sleep
	weight gain
	daily feelings of sadness, hopelessness, or unworthiness
	Seasonal depression may get worse as the season progresses and can lead to suicidal thoughts. Once spring rolls around, symptoms tend to improve. This might be related to changes in your bodily rhythms in response to the increase in natural light.
	Suggested treatments: Treatment includes talk therapy.
	</p>	
</div>

<div class="infoBodyOne" style="height:1000px;">
	<p class="paraOne" style="color: black; font-size: 15px">
	According to the insight given by us on the different types of depression,we would like to know, have you identified the one that resonates with you most?
	Of course we definitely recommend an accurate diagnosis by a professional specialist.However, this is just us wanting to collect appropriate data to send you emails on self care tips and provide more help to you as per your particular situation and not just in general. Feel free to share with us what you think.
	</p>
	<form>
<label for="diagnosis" style="font-family: 'Indie Flower', serif; font-size: 20px; "> Choose the diagnosis that resonates with your personal situation most.(Optional)</label>
<br>
<br>
<select name="diagnosis" id="diagnosis" style="font:Verdanna;, serif; font-size: 20px; ">
  <option>Select one...</option>
  <option value="clinical_depression">Clinical Depression.</option>
  <option value="persistent_depressive_disorder">Persistent Depressive Disorder.</option>
  <option value="bipolar_disorder">Bipolar Disorder.</option>
  <option value="seasonal_depression">Seasonal Depression.</option>
</select>
<br>
<button  class="diagnosisBtn" id=diagnosis type="submit" value="submit"> Submit</button>
</form>

<p class="headThree" style="font-size: 25px;">Recommended Professionals.</p>
<div class= profsDiv>
	<div class="indProf" style=" width:22.5%; padding: 15px; display: inline-block">
		<div class="profImage">
			<img src="images/p3.jpg" alt="p5" class="cardprof" style="width: 100%;">
		</div>
		<div class="profDesc" style="background-color: white; text-align: center">
			<p class ="paraThree">This is Dr. Daisy of the Nairobi Hospital. She is a Therapist and has been practicing for over 8 years now. She therefore has all the experience wit different patients battling different types of depression.
				You can contact her via email at therapistdaisy@gmail.com & her phone number is +254 703 541 721.</p>
		</div>
	</div>
	<div class="indProf" style="width:22.5%; padding: 15px; display: inline-block">
		<div class="profImage";>
			<img src="images/p3.jpg" alt="p5" class="cardprof"style="width: 100%;">
		</div>
		<div class="profDesc" style="; background-color: white; text-align: center">
			<p class ="paraThree">This is Dr. Daisy of the Nairobi Hospital. She is a Therapist and has been practicing for over 8 years now. She therefore has all the experience wit different patients battling different types of depression.<br>You can contact her via email at therapistdaisy@gmail.com & her phone number is +254 703 541 721.</p>
		</div>
	</div>
	<div class="indProf" style="width:22.5%; padding: 15px; display: inline-block">
		<div class="profImage";>
			<img src="images/p3.jpg" alt="p5" class="cardprof" style="width: 100%;">
		</div>
		<div class="profDesc" style=" background-color: white; text-align: center">
			<p class ="paraThree">This is Dr. Daisy of the Nairobi Hospital. She is a Therapist and has been practicing for over 8 years now. She therefore has all the experience wit different patients battling different types of depression.<br>You can contact her via email at therapistdaisy@gmail.com & her phone number is +254 703 541 721.</p>
		</div>
	</div>
	<div class="indProf" style="width:22.5%; padding: 15px; display: inline-block">
		<div class="profImage";>
			<img src="images/p3.jpg" alt="p5" class="cardprof" style="width: 100%;">
		</div>
		<div class="profDesc" style=" background-color: white; text-align: center">
			<p class ="paraThree">This is Dr. Daisy of the Nairobi Hospital. She is a Therapist and has been practicing for over 8 years now. She therefore has all the experience wit different patients battling different types of depression.<br>You can contact her via email at therapistdaisy@gmail.com & her phone number is +254 703 541 721.</p>
		</div>
	</div>
</div>