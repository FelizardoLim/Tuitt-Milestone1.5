<?php

$cars = [
	['name' => 'Subaru',
	'model' => 'WRX 2017',
	'description' => 'The 2017 Subaru WRX powers forward with a 2.0-liter "boxer" four-cylinder engine, just like the original, while the maximum-performance WRX STI variant gets a 2.5-liter boxer with even more verve. Either way, there is certainly no shortage of speed. The base WRX checks in at 268 horsepower, while the STI boasts 305 hp.',
	'image' => 'wrx.jpg',
	'price' => 'PHP 1,888,000',
	'stocks' => '52'],
	['name' => 'Ford',
	'model' => 'Explorer 2017',
	'description' => 'The Ford Explorer is arguably the vehicle that spurred on peoples love affair with the SUV. Certainly there were SUVs before the Explorer, but they were mostly utilitarian in nature. The Explorer was the first SUV that truly appealed to families, as it offered a combination of comfort, versatility and style that minivans and station wagons were unable to match. These days, the Explorer is a midsize crossover SUV with three rows of seating.',
	'image' => 'explorer.jpg',
	'price' => 'PHP 2,509,000',
	'stocks' => '28'],
	['name' => 'Toyota',
	'model' => 'RAV4 2017',
	'description' => 'RAV4 is packed with advanced technologies designed to deliver great performance, plenty of pulling power, excellent agility, a comfortable ride and surprisingly good fuel economy. The RAV4 comes in three powerful and efficient engine options, including 2.2 litre Turbo-diesel, 2.5 litre Petrol and 2.0 litre Petrol engine. Depending on engine choice, RAV4 comes in All Wheel Drive (AWD) or Two Wheel Drive (2WD).',
	'image' => 'rav4.jpg',
	'price' => '2,081,000',
	'stocks' => '34'],
	['name' => 'Hyundai',
	'model' => 'Tucson 2017',
	'description' => 'Named after a prime city right in the heart of Arizona in the US, Hyundai Tucson (TU-son) is a compact SUV with a powerful engine in contrast to its size. Sleek yet rugged, the all-new Tucson design is a fusion of innovation and premium comfort. With its high-speed stability and highly-optimized body structure, it brings innovative engineering resulting to an aerodynamic design.',
	'image' => 'tucson.jpg',
	'price' => '1,558,000',
	'stocks' => '37'],
];

	foreach ($cars as $entry) {
		$name = $entry['name'];
		$model = $entry['model'];
		$description = $entry['description'];
		$image = $entry['image'];
		$price = $entry['price'];
		$stocks = $entry['stocks'];



		echo "<div class='col-xs-12 col-sm-6 col-md-4 collectiondetails'>";
			echo "<div class='cdetails'>";
				echo "<p>".$name."<p>";
				echo "<p>".$model."</p>";
				echo "<p><img class='col-xs-12' src='".$image."'></p>";
				echo "<p>".$description."</p>";
				echo "<p>".$price."</p>";
				echo "<p>".$stocks."</p>";
				echo "<button class='btn btn-success'>Add to Cart</button>";
			echo "</div>";
		echo "</div>";

		// echo "<p>".$name."<p>";
		// echo "<p>".$model."</p>";
		// echo "<p><img src='".$image."'></p>";
		// echo "<p>".$description."</p>";
		// echo "<p>".$price."</p>";
		// echo "<p>".$stocks."</p>";

	}

?>


