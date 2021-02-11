var icons = {
	'transportation' : BASEURL + "public/img/amenity/pin2/commuting_pin.png",
	'food' : BASEURL + "public/img/amenity/pin2/dining_pin.png",
	'healthcare' : BASEURL + "public/img/amenity/pin2/healthcare_pin.png",
	'church' : BASEURL + "public/img/amenity/pin2/church_pin.png",
	'public_services' : BASEURL + "public/img/amenity/pin2/sports_pin.png",
	'school' : BASEURL + "public/img/amenity/pin2/education_pin.png",
	'shopping' : BASEURL + "public/img/amenity/pin2/shopping_pin.png",
	'recreation' : BASEURL + "public/img/amenity/pin2/parks_pin.png"
}
var locations_json = {
"transportation": [
	{ "type": "Feature", "properties": { "Name": "Ultramar", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4451206, 44.118384 ] } },
	{ "type": "Feature", "properties": { "Name": "Durham Transit Stop", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4474209, 44.1262117 ] } },
	{ "type": "Feature", "properties": { "Name": "Durham Transit Stop", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.447158, 44.1257881 ] } },
	{ "type": "Feature", "properties": { "Name": "Durham Transit Stop", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4488398, 44.1319219 ] } },
	{ "type": "Feature", "properties": { "Name": "Durham Transit Stop", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4487352, 44.1319739 ] } },
	{ "type": "Feature", "properties": { "Name": "Durham Transit Stop", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4496632, 44.1349057 ] } },
	{ "type": "Feature", "properties": { "Name": "Durham Transit Stop", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4495237, 44.1350058 ] } },
	{ "type": "Feature", "properties": { "Name": "Durham Transit Stop", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4505879, 44.1383653 ] } },
	{ "type": "Feature", "properties": { "Name": "Durham Transit Stop", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4504001, 44.138426 ] } },
	{ "type": "Feature", "properties": { "Name": "Petro-Canada", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4638886, 44.1939944 ] } },
	{ "type": "Feature", "properties": { "Name": "Esso", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4403027, 44.1991846 ] } },
	{ "type": "Feature", "properties": { "Name": "East Gwillimbury GO Station", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4558492, 44.0780498 ] } },
	{ "type": "Feature", "properties": { "Name": "Bradford GO Station", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.5553398, 44.1165109 ] } },
	{ "type": "Feature", "properties": { "Name": "Pioneer Energy", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.5569196, 44.1155582 ] } },
	{ "type": "Feature", "properties": { "Name": "Petro-Canada", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.5600806, 44.115592 ] } }
],
"food": [
	{ "type": "Feature", "properties": { "Name": "Clancy's Fish And Chips", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4504078, 44.1386803 ] } },
	{ "type": "Feature", "properties": { "Name": "Jacx", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4236828, 44.1370392 ] } },
	{ "type": "Feature", "properties": { "Name": "CHEFIES eatery", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4906027, 44.1021794 ] } },
	{ "type": "Feature", "properties": { "Name": "Pizza Pizza", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4924659, 44.1031268 ] } },
	{ "type": "Feature", "properties": { "Name": "Subway", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4411432, 44.1051467 ] } },
	{ "type": "Feature", "properties": { "Name": "Papa D's Pizza & Variety", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4407413, 44.1023321 ] } },
	{ "type": "Feature", "properties": { "Name": "Sunset Grill", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4452931, 44.2183596 ] } },
	{ "type": "Feature", "properties": { "Name": "McDonald's", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.447653, 44.2188068 ] } },
	{ "type": "Feature", "properties": { "Name": "St. Louis Bar & Grill", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4458104, 44.2202762 ] } },
	{ "type": "Feature", "properties": { "Name": "Drinkii", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4478555, 44.2192355 ] } },
	{ "type": "Feature", "properties": { "Name": "KFC", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.445874, 44.2214074 ] } },
	{ "type": "Feature", "properties": { "Name": "The Naked Wing", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4483083, 44.2266544 ] } },
	{ "type": "Feature", "properties": { "Name": "McDonald's", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.447878, 44.228505 ] } },
	{ "type": "Feature", "properties": { "Name": "Sushi Minato", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4645447, 44.2235962 ] } },
	{ "type": "Feature", "properties": { "Name": "Wind Sushi", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4646013, 44.2244673 ] } },
	{ "type": "Feature", "properties": { "Name": "Oriental Delights", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4629587, 44.2258038 ] } },
	{ "type": "Feature", "properties": { "Name": "Halibut Queen", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4644274, 44.226538 ] } },
	{ "type": "Feature", "properties": { "Name": "Mr. Sub", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4647853, 44.2268396 ] } },
	{ "type": "Feature", "properties": { "Name": "Boston Pizza", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4638554, 44.2273136 ] } },
	{ "type": "Feature", "properties": { "Name": "Riveredge Restaurant", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.464747, 44.228412 ] } },
	{ "type": "Feature", "properties": { "Name": "C.J. Barley's", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4646229, 44.2289153 ] } },
	{ "type": "Feature", "properties": { "Name": "Sammy's Chicken Coop", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4650846, 44.2294834 ] } },
	{ "type": "Feature", "properties": { "Name": "Tim Hortons", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4621019, 44.2133008 ] } },
	{ "type": "Feature", "properties": { "Name": "Pizza Pizza", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4645436, 44.2130925 ] } },
	{ "type": "Feature", "properties": { "Name": "Wild Bill's Bistro", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4642471, 44.2150811 ] } },
	{ "type": "Feature", "properties": { "Name": "Dairy Queen Grill & Chill", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4658414, 44.2114558 ] } },
	{ "type": "Feature", "properties": { "Name": "Tatlows Broiler Bar", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.510741, 44.125507 ] } },
	{ "type": "Feature", "properties": { "Name": "Bangkok Saigon Noodle", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.5600628, 44.1149061 ] } },
	{ "type": "Feature", "properties": { "Name": "Portugalia Bakery", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.5581607, 44.1161535 ] } },
	{ "type": "Feature", "properties": { "Name": "La Mexicanada Bradford", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.5637301, 44.1144303 ] } },
	{ "type": "Feature", "properties": { "Name": "Kenzington Burger Bar", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.5649087, 44.1141079 ] } },
	{ "type": "Feature", "properties": { "Name": "Riverview Inn & Restaurant", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.5444871, 44.1127058 ] } },
	{ "type": "Feature", "properties": { "Name": "Tim Hortons", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.5505696, 44.1146453 ] } }
],"healthcare": [
	{ "type": "Feature", "properties": { "Name": "Eden Chiropractic and Wellness", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4448691, 44.1057008 ] } },
	{ "type": "Feature", "properties": { "Name": "New Leaf: Living and Learning Together Inc.", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4447799, 44.1169671 ] } },
	{ "type": "Feature", "properties": { "Name": "Pleasant Valley Rest Home", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4801689, 44.1317206 ] } },
	{ "type": "Feature", "properties": { "Name": "Queenview Residential Home", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4058661, 44.1296411 ] } },
	{ "type": "Feature", "properties": { "Name": "Sharon Pharmacy", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4412385, 44.105235 ] } },
	{ "type": "Feature", "properties": { "Name": "Loblaw pharmacy", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4485364, 44.2270805 ] } },
	{ "type": "Feature", "properties": { "Name": "Eustice Drug Store", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4697227, 44.2194423 ] } },
	{ "type": "Feature", "properties": { "Name": "Shoppers Drug Mart", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4635952, 44.2164008 ] } },
	{ "type": "Feature", "properties": { "Name": "York Region Paramedic Services Headquarters", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.3980087, 44.0803353 ] } },
	{ "type": "Feature", "properties": { "Name": "Southlake Regional Health Centre", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4521396, 44.0602638 ] } }
],"church": [
	{ "type": "Feature", "properties": { "Name": "Kingdom Hall of Jehovah's Witnesses", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4420674, 44.107788 ] } },
	{ "type": "Feature", "properties": { "Name": "Queensville Holland Landing United Church", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.44989, 44.1375199 ] } },
	{ "type": "Feature", "properties": { "Name": "Regina Mundi Renewal Centre", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.3942735, 44.1219248 ] } },
	{ "type": "Feature", "properties": { "Name": "Keswick Presbyterian Church", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4431781, 44.2157462 ] } }
],"public_services": [
	{ "type": "Feature", "properties": { "Name": "Mario's Auto Sales & Service", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4492323, 44.1348409 ] } },
	{ "type": "Feature", "properties": { "Name": "Queensville Veterinary Clinic", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4490159, 44.1333225 ] } },
	{ "type": "Feature", "properties": { "Name": "NAPA AUTOPRO - Queensville Service Centre", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4483913, 44.1320588 ] } },
	{ "type": "Feature", "properties": { "Name": "Bishop Tractor & Equipment Ltd.", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4501544, 44.1382718 ] } },
	{ "type": "Feature", "properties": { "Name": "Hobby Shop Tarp & Canvas Products", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4468393, 44.1393857 ] } },
	{ "type": "Feature", "properties": { "Name": "Canada Post", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4473684, 44.1399153 ] } },
	{ "type": "Feature", "properties": { "Name": "Queensville Fire Station 28", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4479459, 44.1398536 ] } },
	{ "type": "Feature", "properties": { "Name": "Queensville Farm Supply Ltd", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4459554, 44.139757 ] } },
	{ "type": "Feature", "properties": { "Name": "Express Truck Center", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4453226, 44.121251 ] } },
	{ "type": "Feature", "properties": { "Name": "Doane Road Storage Inc", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.434002, 44.1228082 ] } },
	{ "type": "Feature", "properties": { "Name": "Farmer Jack's", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4447538, 44.1179287 ] } },
	{ "type": "Feature", "properties": { "Name": "Holland Valley Nursery", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4857608, 44.131533 ] } },
	{ "type": "Feature", "properties": { "Name": "Crystal Star Orchids", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4762136, 44.1411575 ] } },
	{ "type": "Feature", "properties": { "Name": "Fly Gravity Sports", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4787178, 44.1433361 ] } },
	{ "type": "Feature", "properties": { "Name": "Glendon Stables", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4269703, 44.1491397 ] } },
	{ "type": "Feature", "properties": { "Name": "Van Bakel Greenhouse", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4037674, 44.1108429 ] } },
	{ "type": "Feature", "properties": { "Name": "Shawneeki Golf Club", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4050693, 44.0972123 ] } },
	{ "type": "Feature", "properties": { "Name": "East Gwillimbury Sports Complex", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4264644, 44.1065583 ] } },
	{ "type": "Feature", "properties": { "Name": "Holland Landing Community Centre", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4909218, 44.1053642 ] } },
	{ "type": "Feature", "properties": { "Name": "Satyam Trivedi, Wall Street Capital Inc.", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4617305, 44.1145135 ] } },
	{ "type": "Feature", "properties": { "Name": "Mr Wrench Automotive", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4417266, 44.1043515 ] } },
	{ "type": "Feature", "properties": { "Name": "East Gwillimbury Chamber Of Commerce", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4411596, 44.1031988 ] } },
	{ "type": "Feature", "properties": { "Name": "Canada Post", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4376, 44.1034 ] } },
	{ "type": "Feature", "properties": { "Name": "Farr Avenue Soccer Field", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4279508, 44.1087775 ] } },
	{ "type": "Feature", "properties": { "Name": "Sharon Temple National Historic Site and Museum", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4418879, 44.1012814 ] } },
	{ "type": "Feature", "properties": { "Name": "MoneyGram", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.450187, 44.1388831 ] } },
	{ "type": "Feature", "properties": { "Name": "Queensville Community Centre", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4489452, 44.140298 ] } },
	{ "type": "Feature", "properties": { "Name": "StoneGait Stables", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4576026, 44.1669781 ] } },
	{ "type": "Feature", "properties": { "Name": "TD Canada Trust", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4453667, 44.2175784 ] } },
	{ "type": "Feature", "properties": { "Name": "RBC Royal Bank", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4457588, 44.2193539 ] } },
	{ "type": "Feature", "properties": { "Name": "Silver Lakes Golf & Country Club", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.507714, 44.142127 ] } },
	{ "type": "Feature", "properties": { "Name": "Pheasant Run Golf Club", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.380683, 44.090914 ] } },
	{ "type": "Feature", "properties": { "Name": "The Stardust Drive in Theater", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4594979, 44.1001026 ] } }
],"recreation": [
	{ "type": "Feature", "properties": { "Name": "Carnaby Park", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4643407, 44.1141154 ] } },
	{ "type": "Feature", "properties": { "Name": "Brenner Park", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4306293, 44.1028252 ] } },
	{ "type": "Feature", "properties": { "Name": "Oxford Park", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4249475, 44.1091494 ] } },
	{ "type": "Feature", "properties": { "Name": "Queensville Cemetery", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4524634, 44.1454712 ] } },
	{ "type": "Feature", "properties": { "Name": "Georgina Leash Free Dog Park", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4800839, 44.1954497 ] } },
	{ "type": "Feature", "properties": { "Name": "West Park", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4751646, 44.1921078 ] } },
	{ "type": "Feature", "properties": { "Name": "Young's Harbour Park", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4791558, 44.2000768 ] } },
	{ "type": "Feature", "properties": { "Name": "Thornlodge Park", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4554236, 44.1964155 ] } },
	{ "type": "Feature", "properties": { "Name": "Holland Landing Prairie Provincial Park", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4913468, 44.1225306 ] } },
	{ "type": "Feature", "properties": { "Name": "Tall Pines Park", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.5094571, 44.1191725 ] } },
	{ "type": "Feature", "properties": { "Name": "French Park", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.5132337, 44.1236704 ] } },
	{ "type": "Feature", "properties": { "Name": "Parkway Playground", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.5113883, 44.130355 ] } },
	{ "type": "Feature", "properties": { "Name": "Anchor Park", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4900165, 44.1121478 ] } },
	{ "type": "Feature", "properties": { "Name": "Oriole Park", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4976983, 44.1082864 ] } },
	{ "type": "Feature", "properties": { "Name": "Rogers Resevoir Conservation Area", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4564996, 44.0884386 ] } },
	{ "type": "Feature", "properties": { "Name": "Sharon Hill Park", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4227252, 44.1006131 ] } }
],"school": [
	{ "type": "Feature", "properties": { "Name": "Queensville Public School", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4492682, 44.1343706 ] } },
	{ "type": "Feature", "properties": { "Name": "Our Lady of Good Counsel school", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4327505, 44.1029173 ] } },
	{ "type": "Feature", "properties": { "Name": "Elementary School Catholic Jean-Béliveau", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.466881, 44.1037505 ] } },
	{ "type": "Feature", "properties": { "Name": "Good Shepherd Catholic Elementary School", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4693767, 44.0992363 ] } },
	{ "type": "Feature", "properties": { "Name": "Holland Landing Public School", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4782095, 44.0963212 ] } },
	{ "type": "Feature", "properties": { "Name": "Park Avenue Public School", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.507658, 44.1109665 ] } },
	{ "type": "Feature", "properties": { "Name": "King Christian School", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.5201702, 44.1011851 ] } },
	{ "type": "Feature", "properties": { "Name": "Queensville Montessori Academy", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4527791, 44.1441267 ] } },
	{ "type": "Feature", "properties": { "Name": "Lake Simcoe Public School", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4576386, 44.1975454 ] } },
	{ "type": "Feature", "properties": { "Name": "Our Lady of the Lake Catholic College School", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4608749, 44.2124284 ] } },
	{ "type": "Feature", "properties": { "Name": "Jersey Public School", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4576941, 44.2144747 ] } },
	{ "type": "Feature", "properties": { "Name": "Keswick High School", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4566766, 44.2231724 ] } },
	{ "type": "Feature", "properties": { "Name": "Fairwood Public School", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4490032, 44.2213176 ] } },
	{ "type": "Feature", "properties": { "Name": "R.L. Graham Public School", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4599474, 44.2235706 ] } },
	{ "type": "Feature", "properties": { "Name": "Prince of Peace Catholic Elementary School", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4592076, 44.2127468 ] } }
],"shopping": [
	{ "type": "Feature", "properties": { "Name": "Downsview Health Foods", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4216323, 44.1274258 ] } },
	{ "type": "Feature", "properties": { "Name": "Vince's Market Sharon", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4415761, 44.105432 ] } },
	{ "type": "Feature", "properties": { "Name": "Forza Bella Bridal Loft & Accessories", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4841099, 44.1315099 ] } },
	{ "type": "Feature", "properties": { "Name": "Brice's Furniture & Appliances", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4243492, 44.138358 ] } },
	{ "type": "Feature", "properties": { "Name": "Queensville Antique Mall", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4210463, 44.1342348 ] } },
	{ "type": "Feature", "properties": { "Name": "Old McDonald's Furniture And Appliances", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4171265, 44.1314735 ] } },
	{ "type": "Feature", "properties": { "Name": "Equestrian Fashion Outfitters", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4413286, 44.1035446 ] } },
	{ "type": "Feature", "properties": { "Name": "Izzy Convenience", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.43931, 44.1025959 ] } },
	{ "type": "Feature", "properties": { "Name": "Gen Sports", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.424545, 44.1060692 ] } },
	{ "type": "Feature", "properties": { "Name": "Walmart Keswick Supercentre", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4482016, 44.2189046 ] } },
	{ "type": "Feature", "properties": { "Name": "Zehrs", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4479288, 44.2274947 ] } },
	{ "type": "Feature", "properties": { "Name": "Mark's", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.445644, 44.218738 ] } },
	{ "type": "Feature", "properties": { "Name": "Keswick Marketplace", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4471531, 44.2186297 ] } },
	{ "type": "Feature", "properties": { "Name": "Staples Keswick", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4474535, 44.2261821 ] } },
	{ "type": "Feature", "properties": { "Name": "Queensway Grocery", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4655105, 44.2190465 ] } },
	{ "type": "Feature", "properties": { "Name": "Keswick Flowers & Gifts", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4650598, 44.2179203 ] } },
	{ "type": "Feature", "properties": { "Name": "Beer Store", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4631373, 44.2130351 ] } },
	{ "type": "Feature", "properties": { "Name": "FreshCo", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4624995, 44.2136433 ] } },
	{ "type": "Feature", "properties": { "Name": "Glenwoods Centre", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.464639, 44.214785 ] } },
	{ "type": "Feature", "properties": { "Name": "The Source", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.463187, 44.21426 ] } },
	{ "type": "Feature", "properties": { "Name": "Global Pet Foods", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4628048, 44.2145572 ] } },
	{ "type": "Feature", "properties": { "Name": "Walmart", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.4305591, 44.0695097 ] } },
	{ "type": "Feature", "properties": { "Name": "Upper Canada Mall", "description": null }, "geometry": { "type": "Point", "coordinates": [ -79.483936, 44.0567784 ] } }
]};
// console.log(locations_json);

var locations = [];
for (x in locations_json) {
	// console.log(x);
	// console.log(locations_json[x].length);
	for (var i = locations_json[x].length - 1; i >= 0; i--) {
		// console.log(locations_json[x]);
		 // console.log(locations_json[x][i]);
		// adfs
		locations.push({
			cat: x,
			name: locations_json[x][i].properties.Name,
			lat: locations_json[x][i].geometry.coordinates[1],
			lng: locations_json[x][i].geometry.coordinates[0],
			icon : icons[x]
		});
	}
}
// console.log(locations);s

var myStyles = [{
            featureType: "poi",
            elementType: "labels",
            stylers: [
                  { visibility: "off" }
            ]
        },
        {
            featureType: "poi",
            elementType: "business",
            stylers: [
                  { visibility: "off" }
            ]
        },
        {
            featureType: "transit.station.bus",
            stylers: [
              { visibility: "off" }
            ]
          },
         {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e9e9e9"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#dedede"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#333333"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f2f2f2"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    }

    ];
function clearMarkers() {
        setMapOnAll(null);
      }
function initMap(){

	// $('#map').height(window.height);

	var current_info_window = null;
	var map_center = {lat: 44.1263134, lng: -79.4466111};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 15,
		center: map_center,
		// disableDefaultUI: true,
		zoomControlOptions: {
			position: google.maps.ControlPosition.RIGHT_CENTER
		},
		streetViewControlOptions: {
			position: google.maps.ControlPosition.RIGHT_CENTER
		},
		mapTypeControl: false,
		styles: myStyles
	});

	var mainMarker = new google.maps.Marker({
		position: map_center,
		map: map,
		icon: BASEURL + "public/img/amenity/pin2/q.png"
	});


	var markers = locations.map(function(location, i) {

		// var contentString = '<div id="marker_info">'+
		// 						'<p class="title">Villa Caledon Inn Restaurant</p>'+
		// 						'<p class="text">'+
		// 							'16626 Airport Rd, Caledon East, <br>'+
		// 							'ON L7C 2W9, Canada'+
		// 						'</p>'+
		// 						'<p class="text">'+
		// 							'villacaledoninn.com<br>'+
		// 							'+1 905-584-0033'+
		// 						'</p>'+
		// 					'</div>';

		var contentString = '<div id="marker_info">'+
								'<p class="title">'+location.name+'</p>'+
							'</div>';

		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(location.lat, location.lng),
			icon: location.icon,
			map: map,
			cat : location.cat,
			infowindow: new google.maps.InfoWindow({
				content: contentString
			})
		});

		marker.addListener('click', function() {
			if(current_info_window != null){
				current_info_window.close();
			}
			current_info_window = this.infowindow;
			this.infowindow.open(map, this);
		});

		return marker;

	});




	$(".map_cat").click(function(evt){
		evt.preventDefault();
		var cat = $(this).attr("data-cat");

		for (var i = markers.length - 1; i >= 0; i--) {
			markers[i].setMap(null);
		}

		for (var i = markers.length - 1; i >= 0; i--) {
			if(markers[i].cat == cat || cat == "all"){
				markers[i].setMap(map);
			}
		}
		map.setZoom(12);
	});
}
