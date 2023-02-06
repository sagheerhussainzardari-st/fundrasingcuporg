
<?php
ob_clean();
session_start();

$mailSent="";

$to = "wincom42@gmail.com";

$comment = $_POST['comment'];
$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];


$subject = $email." Comments";

$message = '<table class="table">
<tbody>
<tr>
<td><b>Name</b></td><td>'.$name.'</td>
</tr>
<tr>
<td><b>Email</b></td><td>'.$email.'</td>
</tr>
<tr>
<td><b>Website</b></td><td>'.$website.'</td>
</tr>
<tr>
<td colspan="2">'.$comment.'</td>
</tr>
<tbody>
</table>';

$header = "From:info@wpuser.website \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";



if(!empty($_POST['postcomment'])){
	$retval = mail ($to,$subject,$message,$header);

	if( $retval == true ) {
		$_SESSION['mailSent'] = '<div class="alert alert-success" style="width: 60%;margin: 0 auto;margin-bottom: 20px;">
		<strong>Success!</strong> Message sent successfully...
		</div>';
	}else {
		$_SESSION['mailSent'] ='<div class="alert alert-danger" style="width: 60%;margin: 0 auto;margin-bottom: 20px;">
		<strong>Success!</strong> Message could not be sent...
		</div>'; 
	}
	echo "<script>setTimeout(() => {window.location.hash = '#bottom';}, 100);</script>";
}
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">

	<title>fundraisingcup</title>
</head>
<body>
	<!-- navbar start -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="img/logo.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
				    	<li class="nav-item">
						<button type="button" class="btn btn-primary blue-button">Give now</button>
						
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Discover <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Fundraise for</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">How it works</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Sign Up</a>
					</li>
					<li class="nav-item">
						<span><a class="nav-link" href="#"><img src="img/search.png"></a></span>
					</li>
					<li class="nav-item">
					
						<button type="button" class="btn btn-dark dark-button">Start Fundraising</button>
					</li>
				</ul>
			</div>
		</div> 
	</nav>
	<!-- navbar end -->
	<!-- banner end -->
	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dog-friend">
						<h2>Be Your Dog’s Best Friend 2</h2>
						<img src="img/dog.png">
						<ul>
							<li><p>Published <b>June 14,2022</b> By Start-Fundraising</p></li>
							<li><p>Categorized as Uncategorized</p></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->
	<!-- banner end -->
	<div class="dog-treats">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dog-eat">
						<button type="button" class="btn btn-primary click-button">Click Here</button>
						<h2>Dos And Dont’s For Dogs To Eat</h2>
						<p><a href="#">To have a really great relationship with your pet dog,</a> you need to work on that relationship constantly. It’s not enough to build a few foundations and expect your relationship to blossom with little or no extra effort. Time spent reinforcing the bond between you and your dog is time well spent, and will enrich your relationship providing you both with the fun and rewards that dog ownership brings.</p>
						<h3>GET DOGS BEST GIFTS & TOY TREATS</h3>
						<p><a href="#">Make sure that you spend quality time with your dog.</a>  As dog owners we are all aware of the need to exercise and train your dog. The time spent on these activities will vary according to your dogs needs, however, this time should be rewarding and enjoyable for your dog. When walking with your dog, make sure that you talk and interact with your dog. Play a game of fetch or chase. All dogs love to chase, and taking an active role in this game will not only keep you fit, but will help you engage with your dog in a fun and simple way.</p>
						<p><a href="#">Be animated when you communicate with your dog.</a> During the day, your dog will hear you converse with many different people, either on the phone or in person, and will generally filter out most of the conversation. With your tone of voice you can communicate to your dog that something is interesting or fun, or that <a href="#">something is undesirable or naughty.</a> Dogs have extremely sensitive hearing and are very much attuned to your moods and tone of voice, use this to your advantage. Attract your dogs attention by using a friendly voice that is slightly higher pitched than your normal speaking voice.</p>
						<p><a href="#">Never forget the importance of physical contact.</a> When your dog is near, make the effort to stroke their head or neck and talk in a soothing voice. If you are in the park, and your dog bounds over to you, make a fuss of them, make being near you a rewarding experience for your dog. This will not only reinforce the bond you and your dog have, but it will also aid recall. If you have problems recalling your dog, practice this when they are off the lead. Several times during the walk, call your dog to you and reward them for coming with a treat or a cuddle, and then let them carry on with what they were doing. If you only recall your dog when they are naughty or to put them on the lead, your dog will associate punishment or the end of the walk with coming when called. If you have been out, greet your dog properly when your return – being away from you is never enjoyable for your dog. Make the time to cuddle or play a quick game to celebrate your return. This is very natural for dogs, they will do this to other dogs they know and like, so this behavior is something they understand.</p>
						<p><a href="#">Ask yourself, if you were your dog, would you enjoy the time you spend together.</a> Try to be fun for your dog. We all have busy days, bad days and sad days, but your dog relies upon you to provide the love and support it needs, and will give you loyalty and friendship in return. Your dog doesn’t need or understand your stress, but they are affected by it. On a bad day, make a point of having a game or cuddling with your dog, and you’ll probably find it helps you too.</p>
						<div class="row">
							<div class="col-md-6">
								<div class="dog-helps-list">
									<ul>
										<li><span><img src="img/window.png"></span><h4>it helps you too.</h4></li>
										<li><span><img src="img/window.png"></span><h4>The science behind my system of correcting bad behaviors is simple.</h4></li>
										<li><span><img src="img/window.png"></span><h4>You may have heard of the idea of ‘neuroplasticity’ in the human brain.</h4></li>
										<li><span><img src="img/window.png"></span><h4>It’s a well established idea researched heavily at Harvard and other leading universities.</h4></li>
										<li><span><img src="img/window.png"></span><h4>In other words – our brains are like soft plastic – always capable of molding and changing to learn new habits and behaviors.</h4></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="dog-helps-list">
									<ul>
										<li><span><img src="img/window.png"></span><h4>Well your dog’s brain is the EXACT same.</h4></li>
										<li><span><img src="img/window.png"></span><h4>With the right mental stimulation and training… (That you will get in my program) your dog’s brain will become more open and receptive to learning new information.</h4></li>
										<li><span><img src="img/window.png"></span><h4>Your dog will listen to you and better understand what you are telling him to do.</h4></li>
										<li><span><img src="img/window.png"></span><h4>When this happens – your dog’s bad behaviors simply fade away as more desirable ones appear in their place. The bottom line is…</h4></li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->
	<!-- More intelligent start -->
	<div class="more-intelligent">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intelligent-dogs">
						<h2>More intelligent Dogs are better behaved and more obedient</h2>
						<ul>
							<li><img src="img/window.png"><p>It makes perfect sense if you think about it.</p></li>
							<li><img src="img/window.png"><p>A more intelligent dog has the capacity to take commands easier and understand what you need from him.</p></li>
							<li><img src="img/window.png"><p>In my 10 years as a dog trainer, I realized pretty quickly that more intelligent dogs are much easier to train bad habits out of and teach new skills to.</p></li>
							<li><img src="img/window.png"><p>It’s the same with children really.</p></li>
							<li><img src="img/window.png"><p>If a child is bored and not stimulated intellectually – they tend to misbehave and cause trouble.</p></li>
							<li><img src="img/window.png"><p>When you stimulate your dog’s mind correctly with a very specific set of games I’m going to show you…</p></li>
						</ul>
					</div>
				</div>
				<div class="col-md-12">
					<div class="intelligent-bg">
						<div class="row">
							<div class="col-md-6">
								<div class="intelligent-box">
									<ul>
										<li><img src="img/check.png"><p><b>Your dog’s</b> problem behaviors can fade away</p></li>
										<li><img src="img/check.png"><p><b>Your dog </b> will be better behaved and more obedient</p></li>
										<li><img src="img/check.png"><p><b>Your dogs</b> ability to learn will skyrocket</p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="intelligent-box">
									<ul>
										<li><img src="img/check.png"><p><b>Your dog’s</b> temperament will improve</p></li>
										<li><img src="img/check.png"><p><b>Your bond</b> with your dog will become stronger</p></li>
										<li><img src="img/check.png"><p><b>Your dog’s</b> health will improve</p></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="why-brand">
						<h2>Why ANYBODY can use my system</h2>
						<div class="row">
							<div class="col-md-4">
								<div class="brand-img">
									<img src="img/tv.png">
								</div>
							</div>
							<div class="col-md-4">
								<div class="brand-img">
									<img src="img/tv.png">
								</div>
							</div>
							<div class="col-md-4">
								<div class="brand-img">
									<img src="img/tv.png">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- More intelligent end -->
	<!-- dog-owener start -->
	<div class="dog-owener">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="dog-xtylo">
						<h2>What Can Dogs Not Eat? </h2>
						<p><a href="#">Dog owners are kind people </a>because they share everything with their dogs, either it is their heart or their homes. Sharing with your dog is good, but some human foods that are good for humans are not good for a dog’s health.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="dog-eat-img">
						<img src="img/dog2.png">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="dog-eat-img">
						<img src="img/xylitol.png">
					</div>
				</div>
				<div class="col-md-6">
					<div class="dog-xtylo">
						<h2>Xylitol:</h2>
						<p>This compound is an artificial sweetener used in the preparation of toothpaste, candies, baked foods, and gums that is injurious to the dog’s health. It can cause hypoglycemia and dysfunction of the liver.</p>
						<p>Some of the symptoms of Xylitol toxicity in dogs may include coordination disorders, lethargy, and vomiting. Severe symptoms may include seizures and liver failure after a few days.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<div class="dog-xtylo">
						<h2>Avocados:</h2>
						<p>Some dog owners feed avocados as a treat to their dogs, but avocados may result in dangerous consequences to the health of dogs due to the presence of a compound named persin. Avocados are good for humans but may cause allergy in dogs. Increased consumption of avocados in dogs causes diarrhea or vomiting in dogs. Persin is not only present in the fruit but also in seeds, leaves, and bark of the avocado plant. If you have an avocado plant in your garden, keep your canine fried away from the plants. Avocado seeds may be stuck in the gastrointestinal tract of the dogs and cause an obstruction that may prove life-threatening for the dogs.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="dog-eat-img">
						<img src="img/avocados.png">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="dog-eat-img">
						<img src="img/alcohol.png">
					</div>
				</div>
				<div class="col-md-6">
					<div class="dog-xtylo">
						<h2>Alcohol:</h2>
						<p>Alcohol is injurious to the liver and brain of the dog in a similar way as it affects humans. Dog’s internal organs are more sensitive than those of humans, so dogs are more prone to side effects of alcohol. Common adverse effects of alcohol in dogs include diarrhea, breathing problems, coma, and death.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<div class="dog-xtylo">
						<h2>Onions And Garlic:</h2>
						<p>Onions and garlic cause the destruction of red blood cells in dogs that result in anemia. You should keep onions and garlic away from your dog. Signs of toxicity of onion and garlic include vomiting, breathing issues, and weakness.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="dog-eat-img">
						<img src="img/onions.png">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="dog-eat-img">
						<img src="img/caffeine.png">
					</div>
				</div>
				<div class="col-md-6">
					<div class="dog-xtylo">
						<h2>Caffeine:</h2>
						<p>Keep your dog away from caffeine-containing products such as colas, chocolate, cocoa, and energy drinks. If your dog has consumed anything containing caffeine, immediately take him to the vet.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<div class="dog-xtylo">
						<h2>Grapes And Raisins:</h2>
						<p>Grapes and raisins are not good treats to the dogs because small amounts can make your dog vomit and prolonged consumption cause kidney failure.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="dog-eat-img">
						<img src="img/grapes.png">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="dog-eat-img">
						<img src="img/macadamia.png">
					</div>
				</div>
				<div class="col-md-6">
					<div class="dog-xtylo">
						<h2>Macadamia Nuts:</h2>
						<p>Macadamia nuts and food containing macadamia nuts are not good for the health of dogs. About six macadamia nuts can make your dog unhealthy. Common symptoms of their toxicity include fever, weakness in legs, GI upset, and muscular problems.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- dog-owener end -->
	<!-- in-nutshell start -->
	<div class="in-nutshell">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dog-nutshell">
						<h2>In A Nutshell:</h2>
						<p><a href="#">A good diet is essential for the health of the dog.</a>  Dog owners usually feed their dogs with a combination of commercial and home foods. Some home foods are good for humans but not good for dogs. So, dog owners should take care of the dog’s diet and do not allow their dogs to eat those foods which are injurious to the dog’s health.</p>
						<p>A good diet is essential for the health of the dog. Dog owners usually feed their dogs with a combination of commercial and home foods. Some home foods are good for humans but not good for dogs. So, dog owners should take care of the dog’s diet and do not allow their dogs to eat those foods which are injurious to the dog’s health.</p>
						<h2>Food Dogs Can’t Eat</h2>
						<p>Dogs have long been known as man’s best friend. They are our companions, partners, and our closest confidantes. A dog is a part of the family, and you want to share everything with them; your time, your bed, your food. How many times have you sat down with a plate of food with your pooch right next to you and eventually given in to the pleading, puppy eyes?</p>
						<p>However, there are some things that you have to be vary of when it comes to the food you share with your dogs. Humans and dogs have different metabolism, which means that quite often, there are certain human food items that might not be safe for your furry friend. Dogs have certain sensitivities and dietary needs that need to be paid attention to when wanting to share a plate of food with them. While there are some foods that are commonly known to be toxic for dogs, there is a long list of random foods that can harm your four-legged friend, some of which might surprise you. Let’s take a look at some human foods that a dog can or cannot eat.</p>
						<h3>What Fruits Can Dogs Eat?</h3>
						<p><a href="#">Many dogs enjoy munching on almost all fruits.</a> Fruits provide plant-based nutrition, including antioxidants. They can help a dog maintain a healthy coat and eyesight and even boost immunity. It should be noted, however, that fruits can’t be the primary part of your dog’s diet. Fruits that you can feed your dog include</p>
						<div class="row">
							<div class="col-md-4">
								<div class="apples-box">
									<h2>Apples</h2>
									<p>Apples are crunchy, sweet, and delicious. They are also a great source of vitamin C, fiber, potassium, and phytonutrients. However, you can only feed your dog a peeled apple without the seeds as the core and seeds of an apple can be toxic for a pup.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="apples-box">
									<h2>Pears</h2>
									<p>Pears are also a great source of vitamin C and V, and they also contain a great amount of fiber. They also have anti-cancer properties ad your puppy is most likely to love the sweet, delicious treats. Pear seeds are also harmful to dogs, so only feed your dog sliced peaches.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="apples-box">
									<h2>Oranges</h2>
									<p>A great source of calcium, fiber, potassium, iron, and other vitamins, oranges are one of the dogs’ favorite fruits. Be careful not to feed too much at once because citric acid can potentially cause digestive tract issues in a dog. Peel it, take out the seed, and only feed half of a segment.</p>
								</div>
							</div>
						</div>
						<h2>Is Rice Good For My Dogs?</h2>
						<p><a href="#">Rice is one of the most common food items all over the world.</a> Almost all cuisines include dishes that feature at least one type of rice. While many people wonder if rice is actually safe to give to your dog, the answer is absolutely yes. In fact, rice is one of those items that are fed to a pooch when he is feeling unwell. This is because white rice is easy to digest and low in fiber. What many people don’t know is that rice is also a major component in almost all commercial foods. Be mindful of the fact that brown rice is not the same as white rice and is never recommended for dogs with an upset stomach. This is because brown rice is more processed than white rice and can be hard to digest for the delicate digestive system for your dog. On the other hand, white rice is not a good choice if your dog has diabetes.</p>
						<p>While carbohydrates are an important component of a dog’s diet, it is important to keep the amount in check in order to avoid harmful weight gain. Adding rice along with some fat and protein to a dog’s diet is a good choice as long as the dog maintains a healthy weight.</p>
						<p>However, there are some things that you have to be vary of when it comes to the food you share with your dogs. Humans and dogs have different metabolism, which means that quite often, there are certain human food items that might not be safe for your furry friend. Dogs have certain sensitivities and dietary needs that need to be paid attention to when wanting to share a plate of food with them. While there are some foods that are commonly known to be toxic for dogs, there is a long list of random foods that can harm your four-legged friend, some of which might surprise you. Let’s take a look at some human foods that a dog can or cannot eat.</p>
						<h2>Why Can’t Dogs Eat Chocolate?</h2>
						<p>For many years, it has been considered common knowledge that dogs can’t eat chocolate. However, not many people know exactly why. While it is reason enough that dogs have different digestive tracts, sensitivities, and metabolisms, there are some other technicalities behind the “dogs can’t eat chocolate” scenario which can help solve this mystery and put our curiosity to rest.</p>
						<p>The human digestive tract has an enzyme belonging to the CYP family, which breaks down the alkaloid found in Cocoa. Dogs, on the other hand, do not have this enzyme, which hinders them from metabolizing and digesting Cocoa properly. Because of the slow metabolizing, only about 50 grams of milk chocolate can prove fatal for a small-sized dog.</p>
						<p> In mild cases, the initial warning signs after your dog has eaten chocolate include vomiting, diarrhea, trembling, hyperactivity, and convulsions, with the worst cases experience cardiac or respiratory failure. The component of chocolate, Theobromine, is dangerous in large quantities for humans too. In case your puppy or dog is displaying any of these symptoms, or you suspect that he has eaten chocolate, those to the vet immediately so the vet can perform stomach washing.</p>
						<h2>Why Can’t I Feed My Dogs Eat Onions And Mushrooms?</h2>
						<p><a href="#">Onions are probably one of the most loved vegetables because of how delicious and tasty they make any dish they are added to.</a> From onion rings to caramelized onions on top of a hamburger, onions can do it all, and everybody loves them. However, many people who enjoy as an important part of their meals often wonder if it is safe to give their pooch a taste of the vegetable. The concern is fully justified, and it is responsible for dog ownership to be varied of what goes into your dog’s mouth. The answer to whether dogs can eat onions is “absolutely not!”. Onions are a danger for your dog in all forms; fried, raw, chopped, or powdered. Similar to the case of chocolate, onions have a substance called thiosulfate. This substance does not get metabolized without the enzyme is present in a human digestive tract. If consumed, onions greatly harm a dog through liver damage, asthma, diarrhea, vomiting, anemia, and even dermatitis. If you witness your dog eating onions, rush him to the vet immediately so that tests can be done immediately to figure out if he has onion toxicity.</p>
						<p>Mushrooms are another ingredient that is relatively important in our foods. And it is another item that you should be careful about around your dog. Especially during autumn, mushrooms grow everywhere, and dogs generally find them rather interesting. Wild mushrooms are particularly dangerous for a dog, which is why it is important that owners are attentive about what their dog is eating. There are thousands of different species of mushrooms, and some are non-toxic to dogs. The most potentially dangerous ones include Death Cap, Fly Agaric, Jeweled Death Cap, Elf’s Saddle, and Autumn Galerina. However, distinguishing between these types is very difficult, so it is recommended to keep all types of mushrooms away from your furry friend. Mushrooms that are grown in the wild have special toxic substances that can prove fatal if not diagnosed properly. Fungi is generally highly complicated, and wild mushrooms most definitely will poison or kill your dog. There are four categories of symptoms that your dog can display if he has been poisoned by a mushroom. Category A, being the most dangerous, can directly kill your cells, attack your kidney and liver. Category B and C negatively impact the nervous system, which can cause tremors, seizures, and the loss of ability to walk. Category D is the least poisonous and is usually not life-threatening and causes diarrhea or vomiting. Regardless of category, mushroom toxicity is a major condition. Therefore, it is recommended that you keep all types of mushrooms safely away from your pooch so that you can save up on a lot of stress, worry, and money that could be used when your dog eats a mushroom.</p>
						<div class="show-img">
							<img src="img/show.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- in-nutshell end -->
	<!-- cat-food start -->
	<div class="cat-food">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="cat-food-list">
						<h2>Can Dogs Eat Cat Food?</h2>
						<p><a href="#">Cat food is something that is perhaps the most attractive for a dog.</a> Cat food is very difficult to keep away from your dog because they will be drawn to it no matter how young, old, well-behaved, or disciplined they are. The difference between a dog and cat food is its content. Dogs are omnivorous, and their diet consists of a mix of both plant and animal-based items. On the other hand, cats are pure carnivores, which means they consume and have a greater requirement for animal protein and fat.</p>
						<p>Cat food is a highly nutritious meal and poses no harm to dogs in any amount. In fact, Cat food is recommended for dogs that might be suffering from weight loss and have a poor appetite. This is because it provides a greater amount of protein and fat. Cat kibble can also be used as a delicious treat while training your dog instead of human foods like peanut butter or cheese. However, it is important to note that dogs with underlying conditions can find Cat food to be harmful. These conditions include problems with the gastrointestinal tract, kidney or liver disease, and obesity. Therefore, the level of harm Cat food can cause to your dog is highly dependent on each individual dog. So, talk to your vet before experimenting with Cat food to find out if it is safe or not.</p>
						<h3>Can Dogs Eat Nuts?</h3>
						<p>Yes, dogs can eat nuts but in restricted amounts.  All nuts varieties are not suitable for dogs. These furry friends can eat peanuts, almonds, and hazelnuts. It is always good to give your dog nuts in a restricted amount due to their high-fat content or choking hazards. Low sodium varieties of peanuts are good for dogs.</p>
						<p>Cashew nuts, Hickory nuts, Macadamia nuts, Pecans, and Pistachios are always no for the dogs. Even small amounts of these nuts can be dangerous for your dog. Macadamia nuts are considered extremely dangerous because these nuts can cause depression and weakness to pets. Small nuts are hard to chew or can harm their gums. Try to avoid giving nuts from a mixed nuts packet. There are some breeds that are sensitive to nuts, so it’s a better idea to avoid nuts for such sensitive breeds. If you want to stay on the safer side, you have to avoid giving your dog nuts. You can choose other safe treats for your dog instead.</p>
						<h3>Why Are Raisins Not Good For My Dog?</h3>
						<p>Not at all. Raisins are a dried form of grapes. As you all know, you can’t feed your dog grapes; similarly, you can’t give your dog raisins. Still, it is a mystery that what elements make grapes and raisins unsuitable for dogs, but experts believe that they can cause kidney failure to your dog. It is a better idea to avoid feeding grapes and raisins to your dog. Don’t feed cupcakes and muffins with nuts and raisins to your dog. Even a small amount of grapes and raisins can make your dog depress and sluggish. Raisins and grapes are not good for your furry friends.</p>
						<h3>Can Dogs Take Salty Snacks Or Foods?</h3>
						<p>Many people believe that there is no harm to give these salty treats to your dogs in restricted quantity occasionally. Salty snacks like chips, crackers, and pretzels are suitable for dogs. These excessive salty foods and snacks can cause excessive thirst for your dog. It is also believed that sodium ions can cause poisoning to dogs. If your dog consumes too many salty foods, then the dog can suffer from vomiting, diarrhea, and loose motion. Continuous use of excessive salt or salty snacks can cause high blood pressure to your dog. It better idea to avoid feeding such snacks to your dogs to stay on the safer side. In case of extreme vomiting or diarrhea, immediately take your dog to a vet for emergency treatment.</p>
						<h3>Why Are Coffee or Tea Is Suitable For My Dog?</h3>
						<p><a href="#">Not at all coffee, tea, and all caffeinated products are not suitable for your dogs.</a> Coffee and caffeinated drinks all contain substances called methylxanthines, which are very dangerous to a dog’s health. Caffeine can disturb the sleep cycle of your pets, and methylxanthines also create other health issues. Excess amounts of methylxanthines can cause vomiting and diarrhea, and excessive thirst, and sometimes it can cause abnormal heart rhythm, tremors,  and even death to your dog. So stay on the safer side and avoid giving tea, coffee, or any caffeinated drink to your dog. Even energy drinks are extremely harmful to your dog due to sugar and caffeine content. If ever your dog accidentally ingested energy or nay caffeinated drink, then immediately take him to the doctor to avoid further complications.</p>
						<h3>Why Can’t My Dog Eat Fats Or Fat Trimmings?</h3>
						<p><a href="#">Fat trimmings from meat are not healthy for dogs, but in fact, there is confusion.</a> There are several types of fats. Small amounts of steaks fats are good for dogs. It is a good idea to feed your dog with proteins instead of fats. Excess fats can harm your dog’s health, such as heart issues, high blood pressure, and elevated cholesterol levels. Liver damage or pancreatic problems are also possible due to overeating of fats and fast trimmings. If your dog likes fat trimmings, then you can give it occasionally. Feed your furry friends with healthy proteins and a small number of fats to gain lean mass. Avoid feeding processed and excess fats.</p>
						<h3>How come you say Avocados are not good for Dogs?</h3>
						<p><a href="#">Avocadoes have countless health benefits for human beings, but they are not the favorite food for the dogs.</a> Dogs don’t like to eat avocadoes at all. It is found that eating avocadoes may lead to vomiting and diarrhea in dogs. This is because of the toxic compound called persin, which is present in a slight amount in the fruit. This is the reason that dogs don’t like to eat avocadoes.</p>
						<h3>Can Raw Eggs Be Suitable For My Dogs?</h3>
						<p><a href="#">Many people believe that a raw diet can make tier dog healthy.</a> For this purpose, they feed many raw foods to dogs, including raw eggs. Giving raw egg to dogs is not a safe idea. Many health experts believe that raw eggs can cause food poisoning to your dog due to the presence of E.coli. These bacteria can cause many intestinal infections to your dog.  Raw eggs also contain salmonella, which can cause other stomach issues to your dog. If you want to give the egg to your dog, then it must be properly cooked.</p>
						<h3>Final Thoughts</h3>
						<p><a href="#">Many people tend to share their food with the dogs without knowing the dog’s favorite food and dangerous foods.</a> No doubt, there are many human foods that are safe for the dogs, and dogs love to eat those foods and snacks. Similarly, there are certain foods that are not even dangerous, but they result in horrible consequences. These food groups always come with countless health issues, and you must avoid those foods. Upon looking at this serious matter, I have explained some of the most common questions that every one of us thinks about. Dogs are carnivores, and many human foods are not suitable for them. This article gives complete insight regarding the dangerous foods for dogs.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- cat-food end -->
	<!-- fast-about start -->
	<div class="amazing-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="fast-about">
						<h2>Amazing <br>Facts about Dogs</h2>
						<a href="#">A Wagging Tail does NOT always mean they are Happy</a>
						<p>Tail wagging has its own language. Apparently dogs wag their tail to the right when they’re happy and to the left when they are frightened. Wagging low means they are insecure and rapid movements accompanied by tense muscles or dilated pupils can signal aggression. So every wagging tail tells its own story, if you know how to read the signs. Share us your Story.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="fast-about">
						<img src="img/fast-dog.png">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- fast-about end -->
	
	<!-- fast-about start -->
	<div id="bottom" class="leave-comment">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="comment-title">
						<h2>Leave a comment</h2>
						<p>Your email address will not be published. Required fields are marked *</p>
					</div>
					<?php 
					if($_SESSION['mailSent']) {
						$message = $_SESSION['mailSent'];
						unset($_SESSION['mailSent']);
						echo $message;
					}
					?>
					<div class="comment-form">
						<form method="post" action="">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="exampleFormControlTextarea1">Comment *</label>
										<textarea class="form-control" name="comment" id="exampleFormControlTextarea1" required autocomplete="on" rows="3"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputName1">Name *</label>
										<input type="text" name="name" class="form-control" id="exampleInputName1"  required autocomplete="on" placeholder="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Email *</label>
										<input type="email" name="email" class="form-control" id="exampleInputEmail1" required autocomplete="on" placeholder="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="exampleInputWebsite1">Website</label>
										<input type="text" name="website" class="form-control" id="exampleInputWebsite1" autocomplete="on"  placeholder="">
									</div>
								</div>
							</div>
							<!-- <div class="row">
								<div class="col-md-12">
									
									<div class="custom-control custom-checkbox form-check">
										<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
										<label class="custom-control-label" for="customCheck">Save My Name, Email, And Website In This Browser For The Next Time I Comment.</label>
									</div>
								</div>
							</div> -->
							<div class="row">
								<div class="col-md-12">
									<div class="post-btt">
										<input type="submit" name="postcomment"   value="Post Comment" style="background-color: #052833;border-color: #052833;width: 100%;" class="btn btn-dark post-button">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- fast-about end -->
	
	<!-- footer start -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-logo">
						<img src="img/logo.png">
						<div class="form-group">
							<select class="form-control" id="exampleFormControlSelect1">
								<option>Select language</option>
								<option>English</option>
								<option>Hindi</option>
							</select>
						</div>
						<button type="button" class="btn btn-primary Donate-button">Donate Now</button>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-4">
							<div class="footer-link">
								<h2>Fundraise For</h2>
								<ul>
									<li><a href="#">Medical</a></li>
									<li><a href="#">Emergency</a></li>
									<li><a href="#">Memorial</a></li>
									<li><a href="#">Education</a></li>
									<li><a href="#">Coronavirus fundraising</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer-link">
								<h2>Learn More</h2>
								<ul>
									<li><a href="#">Medical</a></li>
									<li><a href="#">Emergency</a></li>
									<li><a href="#">Memorial</a></li>
									<li><a href="#">Education</a></li>
									<li><a href="#">Coronavirus fundraising</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer-link">
								<h2>Resources</h2>
								<ul>
									<li><a href="#">Help center</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">More resources</a></li>
								</ul>
							</div>
						</div>
					</div>	
				</div>	
			</div>
		</div>
	</div>
	<!-- footer end -->
	<div class="copy-right">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="copy-link">
						<p>© 2010-2022 Start Fundraising</p>
						<ul>
							<li><a href="#">Terms</a></li>
							<li>|</li>
							<li><a href="#">Privacy</a></li>
							<li>|</li>
							<li><a href="#">Legal</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="copy-social">
						<ul>
							<li><a href="#"><img src="img/Facebook.png"></a></li>
							<li><a href="#"><img src="img/Twitter.png"></a></li>
							<li><a href="#"><img src="img/Instagram.png"></a></li>
							<li><a href="#"><img src="img/Linkedin.png"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>