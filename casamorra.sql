-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2021 at 09:46 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `casamorra`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_article`
--

CREATE TABLE `blog_article` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `category_ids` varchar(1000) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `short_description` varchar(1000) DEFAULT NULL,
  `content` text,
  `author` varchar(100) DEFAULT NULL,
  `url` varchar(1000) NOT NULL,
  `active` int(1) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_article`
--

INSERT INTO `blog_article` (`id`, `title`, `category_ids`, `image`, `short_description`, `content`, `author`, `url`, `active`, `updated`) VALUES
(6, 'Plans Updated as Marketing Begins for The Cardiff on Eglinton', '8, ', 'Communities/The%20Cardiff/32515-111631.jpg', 'The Cardiff - A modern inspired, luxurious condominium in midtown Toronto, bracketed by two of the most desirable neighborhoods in the city. Centrally located in Sherwood Park, steps to the luxurious...', '<p>The Sierra&nbsp;has submitted a revised&nbsp;application for an Official Plan Amendment and rezoning, finalizing details for an OMB-approved mid-rise condominium development at 492 Eglinton Avenue East at Cardiff Road, just west of Bayview Avenue. Located in Toronto&#39;s Sherwood Park area, the building is being marketed as&nbsp;<a href=\"http://urbantoronto.ca/database/projects/cardiff\" target=\"_blank\">The Cardiff</a>, and has evolved quite a bit since it was initially proposed at 11 storeys in 2016, now planned to rise 12 storeys with reimagined architecture by&nbsp;<a href=\"http://urbantoronto.ca/database/profiles/raw-design\">RAW Design</a>.</p><p><img alt=\"\" src=\"http://ngendev.com/sierra/source/Article/Woodbridgepark.jpg\" /><img alt=\"\" src=\"http://ngendev.com/sierra/files/source/Article/32515-111631.jpg\" style=\"height:681px; width:640px\" /></p><p>The result of a 2017 OMB settlement, the new design would reach a height of 38.6 metres. New renderings&nbsp;and elevation diagrams reveal a new massing consisting of a seven-storey base building topped by a five-storey upper volume. Diagrams show an exterior clad in a mix of textured precast concrete, window wall, and curtainwall with both clear glass and spandrel panels, as well as grey and black zinc panels. The textured&nbsp;precast panels&mdash;arranged in horizontal bands dividing the first seven levels&mdash;help to set the lower volume apart from the glazed upper volume.</p><p><img alt=\"\" src=\"http://ngendev.com/sierra/files/source/Article/32515-111633.jpg\" style=\"height:640px; width:640px\" /></p><p>A total of 92 condominium units are being proposed, in a mix of 41 one-bedroom units, 35 two-bedroom units, and 16 three-bedroom units. Residents will have access to a selection of amenities, including a gym on the ground floor, a&nbsp;theatre&nbsp;and indoor/outdoor entertainment lounge on the 2nd floor, and an outdoor barbeque area on the 5th floor.</p><p><img alt=\"\" src=\"http://ngendev.com/sierra/files/source/Article/32515-111634.jpg\" style=\"height:360px; width:640px\" /></p><p>Sierra&nbsp;tells us that sales will launch for the project within the coming weeks. In the meantime, a&nbsp;<a href=\"http://thecardiff.ca/\" target=\"_blank\">website for the project</a>&nbsp;has begun accepting registrations, and further details are expected to materialize as marketing gets underway.</p><p><img alt=\"\" src=\"http://ngendev.com/sierra/files/source/Article/32515-111632.jpg\" style=\"height:697px; width:531px\" /></p><p>Additional information and renderings can be found in the project&#39;s database file, linked below. Want to share your thoughts on the project? Feel free to leave a comment in the space provided on this page, or join in the ongoing discussion in the associated Forum threads.</p><p>&nbsp;</p>', '', 'plans-updated-as-marketing-begins-for-the-cardiff-on-eglinton', 1, '2018-04-02 16:49:17'),
(7, 'AVAILABLE UNITS AT WOODBRIDGE PARK IN VAUGHAN', '5, ', 'Article/Woodbridgepark.jpg', 'Contemporary towns with access to Vaughan\'s incredible school system, amenities, shopping, and transit routes highlighted by the Black Creek subway extension.', '<p>AVAILABLE UNITS AT WOODBRIDGE PARK IN VAUGHAN</p><p>Contemporary towns with access to Vaughan&rsquo;s incredible school system, amenities, shopping, and transit routes highlighted by the Black Creek subway extension.</p><p>Back-to-back, Park and Conventional units are available.<br />For more information, please visit our Sale Centre:<br />5390 Steeles Ave West, Woodbridge, Ontario<br />Monday-Thursday 1pm-7pm<br />Friday (Closed)<br />Saturday, Sunday &amp; Holidays 11pm-5pm</p><p><a href=\"http://woodbridgepark.ca/\" target=\"_blank\">http://woodbridgepark.ca/</a></p><p>&nbsp;</p>', '', 'available-units-at-woodbridge-park-in-vaughan', 1, '2018-08-07 18:35:07'),
(8, '17 Space-Saving Design Ideas for Small Bedrooms', '0, ', 'Article/bedroom-bunk.jpg', 'Having a small bedroom doesn\'t mean having to have a crowded or unpleasant space. Check here for some design tips and ideas on how you can decorate a small bedroom:', '<p>&nbsp;</p><p>Having a small bedroom doesn&#39;t mean having to have a crowded or unpleasant space. Check here for some design tips and ideas on how you can decorate a small bedroom:</p><p><a href=\"http://www.housebeautiful.com/room-decorating/bedrooms/g2231/small-bedroom-design-tips/\" target=\"_blank\">http://www.housebeautiful.com/&hellip;/&hellip;/small-bedroom-design-tips/</a></p>', '', '17-space-saving-design-ideas-for-small-bedrooms', 1, '2018-08-07 18:49:13'),
(10, 'The Cardiff is Sold Out!', '0, ', 'Article/Sierra%20Blog%20Cardiff.jpg', 'We are happy to announce that The Cardiff, our new condo at Yonge and Eglinton, is sold out! All 92 units now eagerly await occupation by their new owners.', '<p>We are happy to announce that The Cardiff, our new condo at Yonge and Eglinton, is sold out! All 92 units now eagerly await occupation by their new owners.</p><p>When we set out to create The Cardiff, we wanted to create something that not only added value to the area but also resonated with buyers and the community. We wanted to create something that would add an element of luxury to urban living, without compromising its virtues. We&rsquo;re proud to say we&rsquo;ve done just that, and the people have responded exactly as we would have hoped.</p><p>This boutique mid-rise condominium is centrally located in one of Toronto&rsquo;s most desirable areas. With nearby amenities like great schools, restaurants, convenient transit, and entertainment venues, there&rsquo;s no end to the fun and exploration to be had. When you&rsquo;re at the Cardiff, you have the heartbeat of the city right at your very doorstep.</p><p>If location alone isn&rsquo;t enough to pique your interest, perhaps this boutique condominium&rsquo;s wide array of attractive features and finishes will sway you. Residents will enjoy luxury conveniences like smooth and spacious 9&rsquo; ceilings, designer-chosen hard surface flooring, quartz countertops, and an elegant master ensuite. Add to that a selection of premium community amenities such as a billiards room, a BBQ lounge area that overlooks the city, and two individual terraces on the 2nd and 5th floors. Put it all together and what you get is a living experience unlike any other.</p><p>We had always hoped that The Cardiff would accurately represent the spirit of luxury condos in Toronto. Now, based on the public&rsquo;s response, we think we&rsquo;ve managed to achieve exactly that. Thank you Toronto, we wouldn&rsquo;t be here without you.</p>', NULL, 'the-cardiff-is-sold-out!', 1, '2018-08-28 21:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`, `url`) VALUES
(2, 'KleinBurg', 'kleinburg'),
(4, 'aaaaabbbbuuuu', 'aaaaabbbbuuuu'),
(5, 'Some Name', 'some-name'),
(6, 'installation tips', 'installation-tips'),
(7, 'stone news', 'stone-news'),
(8, 'Cardiff', 'cardiff');

-- --------------------------------------------------------

--
-- Table structure for table `customproperty`
--

CREATE TABLE `customproperty` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `sub_title` varchar(500) DEFAULT NULL,
  `architech` varchar(500) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `hero_image` varchar(500) DEFAULT NULL,
  `short_description` varchar(500) DEFAULT NULL,
  `description` text,
  `location` varchar(500) DEFAULT NULL,
  `image1` varchar(500) DEFAULT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `image4` varchar(500) DEFAULT NULL,
  `image5` varchar(500) DEFAULT NULL,
  `image6` varchar(500) DEFAULT NULL,
  `image7` varchar(500) DEFAULT NULL,
  `image8` varchar(500) DEFAULT NULL,
  `image9` varchar(500) DEFAULT NULL,
  `image10` varchar(500) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customproperty`
--

INSERT INTO `customproperty` (`id`, `title`, `sub_title`, `architech`, `logo`, `hero_image`, `short_description`, `description`, `location`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `type`, `sort_order`) VALUES
(64, 'homepage', '', '', '', '', 'We have a vision for a leading seniors care residence in midtown Toronto.', '<p>The southeast corner of Mount Pleasant Road and Balliol Street will be transformed with a newly designed building with uses for seniors and the public.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 6, 1),
(66, '— A daughter', '', '', '', '', '', '<p>&ldquo;The staff were focused on making contact with their guests, understanding the background and idiosyncrasies of each individual. Once my mother moved into SageCare, I quickly came to appreciate that this is specialized, personalized care at its finest. Your devoted staff have kept pace with my mother&acute;s ups and downs to find appropriate medications and helped her gain back the weight she had lost. She is happier, healthier and safer. She is in the best hands possible.&rdquo;</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 7, 1),
(67, '— A son', '', '', '', '', '', '<p>&ldquo;The home-setting made it much easier for my mother to accept her new surroundings. Once she was comfortable in her surroundings, it was the tender loving care shown by all the staff &ndash; from personal caregivers to therapists to nurses and Sagecare directors &ndash; that slowly brought my mother out of her isolation and inactivity. This is truly a very unique and special place for family members suffering from dementia.&rdquo;</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 7, 2),
(68, '— A sister', '', '', '', '', '', '<p>&ldquo;When my sister was diagnosed with dementia, we started looking for accommodations that would be best for her and her needs and at the same time, give us peace of mind in the knowledge that she would be well looked after. She became a resident of SageCare. We got all we had hoped for and much more. SageCare has and continues to be on the cutting edge in the advancement of new treatments and care of people with dementia.&rdquo;</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 7, 3),
(70, 'Thoughtfully Designed Building', '', '', '', 'op1.png', '', '<p>The design of the building is focused on making it part of the existing community fabric. This includes landscaped open space around the building that will enhance the look and feel of the site and surroundings.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 8, 1),
(71, 'Leading Building Design', '', '', '', 'op2.png', '', '<p>Considerations related to dementia and cognitive impairment have been incorporated into the design of the seniors care home. Access to secure good-quality outdoor space, bringing daylight into the buildings, and views are all important considerations to deliver a safe, high-quality living experience for both residents. Specifically, the building would include an enclosed atrium, which will serve as a gathering space for residents and their visitors. This all-season indoor garden will have large glass skylights that will bring substantial natural sunlight into the building.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 8, 2),
(72, 'Retail/Community Use', '', '', '', 'op3.png', '', '<p>Recognizing that the site is along a Priority Retail Street, the proposal includes street-level retail or community space for a community partner (to be determined) in the seniors care building. This space would be publicly accessible and help to create vibrancy at and around the site.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 8, 3),
(73, 'Post-pandemic Design', '', '', '', 'op4.png', '', '<p>The proposed building takes the global pandemic into consideration and includes design innovations that will directly improve its performance in this and future pandemics. One of the emerging metrics in COVID-19 spread in seniors buildings is both the size of units, clusters or neighbourhoods within the building, and a building&rsquo;s overall population size, or the number of residents.<br />\r\n<br />\r\nThis building, with its boutique, &lsquo;small-house&rsquo; living units with just 17 residents per memory care neighbourhood and the modest overall resident population will reduce the likelihood of the spread of viruses such as COVID 19. A smaller resident population also means fewer staff, visitors, volunteers and deliveries, further reducing opportunities for contact.<br />\r\n<br />\r\nFinally, the design includes a number of Infection Prevention and Control best practices, including a healthcare grade ventilation system.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 8, 4),
(74, 'Residential Townhouses', '', '', '', 'op5.png', '', '<p>At the southeast part of the site, separate from the memory care home, would be three 3-storey townhouses with 2 bedrooms. These townhouses will help to provide an appropriate transition in scale between the 9-storey seniors care home and the adjacent neighbourhoods.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 8, 5),
(75, 'Midtown', '', '', '', 'midtown.png', '', '<p>There are insufficient housing and care options to support the expected growth of the seniors population (people aged 65 or more) &ndash; 26% by 2028 in midtown Toronto. There is a critical need for qualified care to serve this population.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 9, 1),
(76, 'City-wide', '', '', '', 'city_wide.png', '', '<p>Toronto&rsquo;s seniors&rsquo; population continues to grow &ndash; by 2041, people 65+ years of age will make up 21% of the population. In addition to being close to family members, being in a familiar neighbourhood or surroundings is beneficial for those with dementia.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 9, 2),
(77, 'Province-wide', '', '', '', 'province_wide.png', '', '<p>By 2036, there would be about 466,000 Ontarians living with dementia. Without new facilities that include memory care, the gap between demand and supply will only grow.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 9, 3),
(79, 'site area', '2,294 m<sup>2</sup>', '', '', 'st1.png', '', '', '', '', '', '', '', '', '', '', '', '', '', 10, 2),
(80, 'leasable office space', '283 m<sup>2</sup>', '', '', 'st3.png', '', '', '', '', '', '', '', '', '', '', '', '', '', 10, 3),
(81, 'memory care suites', '68', '', '', 'st4.png', '', '', '', '', '', '', '', '', '', '', '', '', '', 10, 4),
(82, 'assisted living suites', '18', '', '', 'st5.png', '', '', '', '', '', '', '', '', '', '', '', '', '', 10, 5),
(83, 'car parking spaces', '19', '', '', 'st6.png', '', '', '', '', '', '', '', '', '', '', '', '', '', 10, 6),
(84, 'bicycle parking spaces', '19', '', '', 'st7.png', '', '', '', '', '', '', '', '', '', '', '', '', '', 10, 7),
(85, 'leasable retail/community space', '310 m<sup>2</sup>', '', '', 'st2.png', '', '', '', '', '', '', '', '', '', '', '', '', '', 10, 5),
(87, 'card-1', '', '', '', '', '', '<p>The proposed seniors care<br />\r\nhome will be regulated<br />\r\nunder the&nbsp;<em>Retirement<br />\r\nHomes Act</em>&nbsp;with memory<br />\r\ncare and assisted living<br />\r\nsuites</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 11, 1),
(88, 'card-2', '', '', '', '', '', '<p>The memory care<br />\r\nsuites provide a secure<br />\r\nhome-like setting for<br />\r\nresidents with<br />\r\ndeclining cognitive<br />\r\nabilities</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 11, 2),
(89, 'card-3', '', '', '', '', '', '<p>The assisted living suites<br />\r\nare a key to providing a<br />\r\ncontinuum of care, with<br />\r\noptions for varying levels<br />\r\nof care and to keep<br />\r\ncouples together</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 11, 3),
(90, 'card-4', '', '', '', '', '', '<p>SageCare, the owner and<br />\r\noperator, is a small<br />\r\noperator with a 20-year<br />\r\nhistory of delivering<br />\r\nexceptional care through<br />\r\nanother care home<br />\r\nlocated in Toronto</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 11, 4),
(91, 'card-5', '', '', '', '', '', '<p>SageCare will be a<br />\r\nlong-term neighbour who<br />\r\nwill seek to foster good<br />\r\nrelationships and<br />\r\nmeaningful connections<br />\r\nwith the neighbourhood</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 11, 5),
(92, 'vision', '', '', '', 'theproposal.png', '', '<p>Our&nbsp;VISION&nbsp;is to help meet the current and future needs of seniors and their families by developing a leading seniors care home &ndash; a home-like setting where seniors with dementia and/or other support needs, and their families, find new meaning in their relationships and experience life in all its fullness as cognitive abilities change. The development will also house other ancillary services and resources for the residents and the community. We also envision including a townhouse component to support the transition of the site towards the existing low-rise residential neighbourhood.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 12, 1),
(93, 'Today on the site are:', '', '', '', 'thesite.png', '', '<ul>\r\n	<li>405 Mount Pleasant Road: A 2.5-storey commercial building &ldquo;Hudson Plumbing Supplies&rdquo;</li>\r\n	<li>415 Mount Pleasant Road: A single-storey fast food restaurant &ldquo;Kentucky Fried Chicken&rdquo;</li>\r\n	<li>323 &ndash; 325 Balliol Street: Two 2-storey semi-detached dwellings</li>\r\n	<li>323R Balliol Street: A surface parking lot at the rear</li>\r\n</ul>\r\n', 'https://goo.gl/maps/vJCTMuxGcEQmNNzA6', '', '', '', '', '', '', '', '', '', '', 13, 1),
(94, 'Architectural Plans ', '', 'Planning and Architecture', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14, 1),
(95, 'Application Checklist', '', 'Administrative Documents', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14, 2),
(96, 'Draft Zoning Bylaw Amendment 438-86 ', '', 'Planning and Architecture', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14, 3),
(101, 'Louanne Morra.', '', '', '', 'Louanne.jpg', '', '<p>Louanne Morra is the Vice-President of CasaMorra Homes. and has been in the Residential design field for over 20 years. Louanne graduated from Humber College in their Interior Design and Architecture Program. From 2007 to 2012, Louanne performed Design, Decor and Customer Service duties for CountryWide Homes. At CountryWide, Louanne also staged multiple model Homes and her work was featured on the cover of the Homes Magazine in May 2010. Louanne has also worked in the CountryWide Sales Centres and performed Framing walk-throughs as further evidence of her diverse background in the Residential Construction industry.</p>\r\n\r\n<p>Louanne redesigned the interior of the Graham Robinson Heritage Home in 2016/2017 including the site supervision of all trades required to completely renovate the interior of that home.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 3, 1),
(102, 'Sam Morra', '', '', '', 'Sam.jpg', '', '<p>Sam Morra is the founder and president of CASAMORRA Homes. Sam Morra has been a professional engineer for over 35 years. He grew up helping his father build their first home in Bolton and in 1984 graduated from the University of Western Ontario from the Civil Engineering Program. Since then, he has enjoyed a successful career in the construction industry with 12 years as the Chief Operating Officer of Con-Drain Company (East), overseeing the creation of thousands of serviced residential lots. Sam is the first developer ever to relocate a heritage home from a third party property into a new subdivision, Graham Robinson house. Together with his wife Louanne, they transformed the Graham Robinson house and the residential area into a beautiful community. In 2018, Sam and Louanne received the Town of Caledon Heritage Award in recognition of their work on the Graham Robinson house.</p>\r\n\r\n<p>From 2005 to 2018 Sam served as the Chief Operating Officer of Con-Drain Company (East). In 2018, he became the Senior Vice President of Planning and Development for Con-Drain&rsquo;s Sister company, Condor Properties.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 3, 2),
(104, 'Privacy Policy', '', '', '', '', '', '<p>CASAMORRA Homes respects the privacy of every individual. This Privacy Policy outlines the information CASAMORRA Homes may collect and how we may use that information. CASAMORRA Homes will not collect any personally identifiable information about you (for example, your name, address, telephone number or email address (&ldquo;personal data&rdquo;) unless you have provided it to us voluntarily.</p>\r\n\r\n<p>If you do not want your personal data collected, please do not submit it to us. Unless otherwise stated, when you do provide us with personal data, we may use that information in the following ways: we may store and process that information to better understand your needs and how we can improve our products and services. We may use that information to contact you. We do not now and do not intend to sell, rent or market personal data about you to third parties.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 2, 1),
(107, 'Beyond built, crafted. ', '', '', '', '', '', '<p><strong>At CasaMorra Homes, we create inspired communities and produce award-winning results.</strong></p>\r\n\r\n<p>We are committed to cultivating an exceptional life experience for our customers. We pride ourselves on building beautiful homes with outstanding quality. As leaders in the construction industry for 27 years and guiding homeowners through the design process for the last 20 years, we believe the interior is the soul of the house. Together, we will build the home of your dreams as we work hard to ensure that we&rsquo;re meeting the needs of you and your family.&nbsp;</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 1, 1),
(108, 'HUMBER VALLEY', '', '', 'logohumber.png', 'slideshow01.jpg', '', '<p>COMING SOON</p>\r\n', 'communityhumber', '', '', '', '', '', '', '', '', '', '', 4, 1),
(109, 'Bolton Gateway', '', '', '', 'slideshow02.jpg', '', '<p>sold out</p>\r\n', 'communitybolton', '', '', '', '', '', '', '', '', '', '', 4, 2),
(110, 'Graham Robinson House', '', '', '', 'slideshow03.jpg', '', '<p>sold out</p>\r\n', 'communitygraham', '', '', '', '', '', '', '', '', '', '', 4, 3),
(112, 'HUMBER VALLEY', '', 'coming soon', 'mapva.png', 'HumberValley_sun-head.jpg', 'The Humber Valley Preserve is located at the summit of the Humber River Valley.', '<p>Come home to a picturesque court nestled in a forest with spectacular views. CasaMorra launches its multigenerational home vision in a unique setting that will please those from all walks of life in all stages of life. Quality and commitment to serving our clients is the CasaMorra Homes way. Join our friends and family by registering today.</p>\r\n', 'communityhumber', '', '', '', '', '', '', '', '', '', '', 5, 1),
(113, 'Bolton Gateway', '', 'coming soon', 'Group%201879.png', 'BoltonGateway-head.jpg', 'An enclave of beautiful townhomes and stately singles in Bolton.', '<p>The Bolton Gateway Community was created by CasaMorra Homes in 2012. Sam Morra envisioned the development of beautiful but more affordable townhomes sprinkled with a few stately singles within close proximity to amenities such as a medical center, a park and GO transit. The Bolton Gateway subdivision also facilitated the coming to life of a much-needed Seniors&rsquo; Residence that lay dormant for over 25 years. This enclave of 182 homes is the largest low-rise residential development in Bolton in the last decade.</p>\r\n', 'communitybolton', '', '', '', '', '', '', '', '', '', '', 5, 2),
(114, 'The Graham Robinson House', '', 'coming soon', 'mapGraham.jpg', 'TheGrahamRobinsonHouse-head.jpg', 'History and modernity, now together through the design and décor brilliance of Louanne Morra.', '<p>The Gothic Revival style dwelling was custom-built in 1867. CasaMorra Homes restored this beautiful piece of Caledon&rsquo;s history as its inaugural project, preserving the architecture and creating an absolutely magnificent home boasting a glorious combination of high ceilings, restored features and modern amenities. The revival began in 2016 when Sam Morra became the first developer in history to move a Heritage home from a third-party property to anchor his newly created Bolton Gateway subdivision.</p>\r\n', 'communitygraham', 'v1.jpg', 'h1.jpg', 'asd.png', 'asdasd.png', 'h2.jpg', 'h4.jpg', 'v3.jpg', 'v4.jpg', 'h3.jpg', 'h5.jpg', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `sub_title` text,
  `description` text,
  `short_description` text,
  `hero_image` varchar(500) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `map_lat` varchar(500) DEFAULT NULL,
  `map_lng` varchar(500) DEFAULT NULL,
  `commuting` text,
  `activities` text,
  `dining` text,
  `entertainment` text,
  `education` text,
  `image1` varchar(500) DEFAULT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `image4` varchar(500) DEFAULT NULL,
  `image5` varchar(500) DEFAULT NULL,
  `image6` varchar(500) DEFAULT NULL,
  `image7` varchar(500) DEFAULT NULL,
  `image8` varchar(500) DEFAULT NULL,
  `image9` varchar(500) DEFAULT NULL,
  `image10` varchar(500) DEFAULT NULL,
  `is_signature` int(11) DEFAULT NULL,
  `sqft` varchar(50) DEFAULT NULL,
  `bedroom` varchar(50) DEFAULT NULL,
  `bathroom` varchar(50) DEFAULT NULL,
  `garage` varchar(500) DEFAULT NULL,
  `microsite` varchar(500) DEFAULT NULL,
  `progress_image1` varchar(500) DEFAULT NULL,
  `progress_image2` varchar(500) DEFAULT NULL,
  `progress_image3` varchar(500) DEFAULT NULL,
  `progress_image4` varchar(500) DEFAULT NULL,
  `progress_image5` varchar(500) DEFAULT NULL,
  `progress_image6` varchar(500) DEFAULT NULL,
  `progress_image7` varchar(500) DEFAULT NULL,
  `progress_image8` varchar(500) DEFAULT NULL,
  `progress_image9` varchar(500) DEFAULT NULL,
  `progress_image10` varchar(500) DEFAULT NULL,
  `progress_image_alt1` varchar(500) NOT NULL,
  `progress_image_alt2` varchar(500) NOT NULL,
  `progress_image_alt3` varchar(500) NOT NULL,
  `progress_image_alt4` varchar(500) NOT NULL,
  `progress_image_alt5` varchar(500) NOT NULL,
  `progress_image_alt6` varchar(500) NOT NULL,
  `progress_image_alt7` varchar(500) NOT NULL,
  `progress_image_alt8` varchar(500) NOT NULL,
  `progress_image_alt9` varchar(500) NOT NULL,
  `progress_image_alt10` varchar(500) NOT NULL,
  `tenents` text,
  `address` text,
  `contact` text,
  `brochure` varchar(500) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `sub_title`, `description`, `short_description`, `hero_image`, `logo`, `status`, `map_lat`, `map_lng`, `commuting`, `activities`, `dining`, `entertainment`, `education`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `is_signature`, `sqft`, `bedroom`, `bathroom`, `garage`, `microsite`, `progress_image1`, `progress_image2`, `progress_image3`, `progress_image4`, `progress_image5`, `progress_image6`, `progress_image7`, `progress_image8`, `progress_image9`, `progress_image10`, `progress_image_alt1`, `progress_image_alt2`, `progress_image_alt3`, `progress_image_alt4`, `progress_image_alt5`, `progress_image_alt6`, `progress_image_alt7`, `progress_image_alt8`, `progress_image_alt9`, `progress_image_alt10`, `tenents`, `address`, `contact`, `brochure`, `type`, `sort_order`) VALUES
(16, 'Simcoe Square,  Keswick, Ontario', 'Great Retail Space by Lake Simcoe', '<p>INTRODUCTION: The beautiful lakeshore town of Keswick sits at the base of Lake Simcoe, and sees a heavy tourist presence every year. The aptly named Simcoe Square resides at one of the most heavily trafficked intersections in the town, and benefits greatly from such an ideal location. A retail space for rent, or lease, like Simcoe Square is a great opportunity, and Sierra is happy to offer this property for your retail needs. ABOUT KESWICK: Primarily a tourist town, Keswick offers a number of retail and agricultural attractions along the lakeshore that see increased traffic, especially during the warmer months. While the largest employer of the town is Walmart, and most residents commute south to either Newmarket or Toronto for work, tourists from Toronto have been able to flock to the lakeshore town in even greater numbers thanks to the 404 highway extension that almost leads right into the town itself. In fact, due to the town&rsquo;s increased tourist traffic retail space for lease has become something of a hot commodity in Keswick.</p>', 'Keswick\'s neighborhood shopping centre is located on the ground floor of a 3 storey residential condominium, nestled near one of Keswick\'s busiest intersections. Located on a corner lot with exposure to The Queensway South (Highway 12) Simcoe Square is strategically situated to receive maximum volume. If you\'re looking for the best commercial property for rent in Keswick, then 155 Riverglen Drive is an ideal location and one that sees high traffic throughout the year.', 'Commercial/image-coming-soon.png', '', 1, '44.225749', '-79.463417', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '16,000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Job Skills Ontario, Dentistry at Riverglen, The Cash Store', '	\r\n155 Riverglen Drive,\r\nKeswick, ON', '<p>Rob Kansun</p>\r\n\r\n<p>Sierra</p>\r\n\r\n<p>(416) 642-0032 xt. 224</p>\r\n\r\n<p>rob@sierra.ca</p>\r\n', '', 2, 5),
(17, 'Mint Hill Festival Shopping Center, Charlotte, North Carolina', 'Exceptional Opportunity in a Booming Community', '<p>Located at the intersection of Matthews-Mint Hill Road (Highway 51) and Lawyers Road in Charlotte, North Carolina, Mint Hill Festival Shopping Center is strategically positioned at the center of downtown Mint Hill, one of Charlotte&#39;s fastest growing suburbs. This location is adjacent to a Harris Teeter grocery store, and a new Publix shopping center currently under construction.</p>', 'The Mint Hill Festival Shopping Center is located at the intersection of Matthews-Mint Hill Road (Highway 51) and Lawyers Road in Charlotte, North Carolina. This bustling location sits in the very center of downtown Mint Hill, an area hailed as one of Charlotte\'s fastest growing and best planned communities. Not only is this location adjacent to a Harris Teeter grocery store, but a new Publix shopping center has recently opened up as well, bringing with it a loyal customer base, as well as increased traffic.', 'mint-hill-1.jpg', '', 1, '35.171390', '-80.657458', '', '', '', '', '', 'Commercial/Mint%20Hill%20Festival%20Shopping%20Centre/Mint%2BHill%2BFestival%2BShopping%2BCentre_0717_2018.png', 'Commercial/Mint%20Hill%20Festival%20Shopping%20Centre/floorplans-mint.png', 'Commercial/Mint%20Hill%20Festival%20Shopping%20Centre/floorpalns-mint2.png', '', '', '', '', '', '', '', 0, '59,047', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '	\r\nMonroe Hardware, Dollar Tree, Showmars Restaurant, Burger King.', '6904 Matthews-Mint Hill Road, Charlotte NC  28227', '<p>Derrick Taub</p>\r\n\r\n<p>Sierra</p>\r\n\r\n<p>(416) 642-0032 xt. 228</p>\r\n\r\n<p>derrick@sierra.ca</p>\r\n', 'Commercial/Mint%20Hill%20Festival%20Shopping%20Centre/Mint%2BHill%2BFestival%2B-%2BRetail%2BSpace%2BAvailable%2B-%2B201711.pdf', 2, 15),
(18, 'Crossroads Square Shopping Center, Jacksonville, Florida', 'Incredible Location with Incredible Traffic', '<p>INTRODUCTION: ABOUT JACKSONVILLE: Jacksonville is the leading automotive importer for the United States, due in no small part to its ample deepwater port. However its impressive economic strength lies greatly in its broad diversification. Distribution, biomedical technology, financial services, and information sectors all play a vital role in Jacksonville&#39;s success as an economic entity. Furthermore, Jacksonville sees a huge amount of revenue each year from the tourism industry, which accounts for as much as 10% of all employment within the city. Commercial space for rent, office space for rent, and all other retail space considerations are constantly in high demand, and as such the competitive real estate climate has contributed enormously to Jacksonville&#39;s success.</p>', 'This prime commercial property for rent is located in the Sunshine State\'s most populous city, and also on one of its most heavily trafficked roads. Located on Blanding Boulevard in Jacksonville, Florida, this area sees an average of over 40,000 vehicles passing through each day. This commercial space for rent, and lease, is home to several successful businesses, and for good reason. Its amazing location lends itself to a high degree of customer traffic, and is exactly what every business owner is looking for.', 'Commercial/Crossroads%20Square%20Shopping%20Centre/CR%20Aerial%20-%20004_MD.jpg', '', 1, '26.594573', '-81.942088', '', '', '', '', '', 'Commercial/Crossroads%20Square%20Shopping%20Centre/Crossroads-Square-plan1.png', 'Commercial/Crossroads%20Square%20Shopping%20Centre/Suite_7.png', 'Commercial/Crossroads%20Square%20Shopping%20Centre/Crossroads_Square_Unit_16.png', 'Commercial/Crossroads%20Square%20Shopping%20Centre/Crossroads_Square_Suite_17.png', '', '', '', '', '', '', 0, '174,153', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Floor and Decor, Harbor Freight Tools, Office Depot, Dollar General, RaceTrac, Pizza Hut,  Larry\'s Giant Subs, OneMain Financial, Allstate Insurance, Fast Signs', '	\r\n8102 Blanding Boulevard, \r\nJacksonville, FL 32244', '<p>Derrick Taub</p>\r\n\r\n<p>Sierra</p>\r\n\r\n<p>(416) 642-0032 ext. 228</p>\r\n\r\n<p>derrick@sierra.ca</p>\r\n', 'Commercial/Crossroads%20Square%20Shopping%20Centre/Crossroads%2BSquare%2B-%2BRetail%2BSpace%2BAvailable%2B-%2B201711.pdf', 2, 25),
(19, 'Marlin Center, Cape Coral, Florida', 'Ideal Commercial Space in an Ever-Growing City', '<p>INTRODUCTION: In Cape Coral and Fort Myers, Florida, tourism is a powerful force with which to be reckoned. It accounts for over 5 million visitors each year, and upwards of $3 billion of revenue annually. In order to take full advantage of this incredible statistic, the Marlin Center has been rather poignantly placed on the south eastern edge of Cape Coral, just minutes away from the Cape Coral Parkway. Commercial and business spaces for rent in the Lee County waterfront area represent fantastic opportunities for businesses of all kinds.ABOUT CAPE CORAL AND FORT MYERS BEACH: Known as the &quot;Waterfront Wonderland&quot; Cape Coral, rather famously, has more miles of canals and navigable waterways than any other city in the world. It was rated by Forbes magazine as #9 on the Top 25 Places to Retire in 2016, and #1 out of 25 for America&#39;s Fastest Growing Cities in 2017. This rapid growth is reflected not only in their residential housing market, but also in the commercial real estate market. In addition to an ever expanding tourism industry, Cape Coral&#39;s economy is bolstered by an incredibly strong retail industry. Such conditions create an environment where almost any business can thrive and grow. The vibrant economy surrounding Cape Coral and, nearby Fort Myers Beach, situate the Marlin Center as the ideal choice for a commercial space.</p>', 'Del Prado Boulevard South is one of Cape Coral\'s primary north-south access roads, with traffic counts exceeding 30,000 vehicles per day. Marlin Center is a phenomenal commercial space for lease, just minutes from Cape Coral Parkway and Veterans Memorial Avenue, both of which are the two primary access points that connect Cape Coral to Fort Myers. Both Cape Coral and Fort Myers are two huge tourist areas that attract millions of visitors every year.', 'Commercial/Marlin%20Centre/DJI_0350_MD.jpg', '', 1, '26.594572', '-81.942077', '', '', '', '', '', 'Commercial/Marlin%20Centre/Marlin_Center_Space_Plan_Unit_5.png', '', '', '', '', '', '', '', '', '', 0, '19,135', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3100-3108 Del Prado Boulevard South, Cape Coral, FL  33904', '<p>Derrick Taub</p>\r\n\r\n<p>Sierra</p>\r\n\r\n<p>(416) 642-0032 xt. 228</p>\r\n\r\n<p>derrick@sierra.ca</p>\r\n', 'Commercial/Marlin%20Centre/Marlin%2BCenter%2B-%2BBrochure%2B-%2BUnit%2B5.pdf', 2, 10),
(20, 'Calliope Shopping Center, Houston, Texas', '', '<p>INTRODUCTION: Everything is bigger in Texas, and the Calliope Shopping Center is certainly no exception. With 110,000 square feet of retail and commercial space for rent and lease, this multi-level shopping center set in the heart of Houston&rsquo;s west end represents remarkable opportunity for any business operating out of Space City. It is the chosen home of several affluent figures such as Major League Baseball players, and members of the NFL. The Calliope Shopping Center is ideally situated to take full advantage of its lucrative surroundings, and as such is a prime location for any business operator looking for a commercial property for lease or rental. ABOUT HOUSTON&rsquo;S MEMORIAL AREA: Economically the most influential sector to Houston&rsquo;s West End is the overlapping, and astutely named, Energy Corridor. Houston has always been a major player in the energy industry, most notably big oil and natural gas. It should then come as no surprise as to why this particular area of Houston is so affluent. Commercial buildings for lease and the need that accompanies such spaces is ever growing. The Energy Corridor accounts for approximately 94,000 lucrative jobs in over 300 companies. Several major energy corporations have their headquarters situated in Houston&rsquo;s Memorial Area, and the economic growth that has occurred as a result is substantial.</p>', 'This incredibly large multi-level shopping center sits in the affluent Memorial Neighborhood of West Houston, and enjoys a prestigious reputation as one of the best commercial locations Houston has to offer. The Calliope Shopping Center caters to both local businesses and national chains, and as such has become a renowned one-stop shopping solution for millions of customers.', 'Commercial/Calliope%20Shopping%20Centre/IMG_1028-revised.jpg', '', 1, '29.771613', '-95.603272', '', '', '', '', '', 'Commercial/Calliope%20Shopping%20Centre/IMG_1032-revised.jpg', 'Commercial/Calliope%20Shopping%20Centre/IMG_1031-revised.jpg', 'Commercial/Calliope%20Shopping%20Centre/IMG_1029-revised.jpg', '', '', '', '', '', '', '', 0, '110,000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Memorial Emergency, Jarro Cafe/Rock-n-Juice, Clothes for Kids, Nail and Skin Care, Foot Massage', '	\r\n14520 Memorial Dr\r\nHouston, TX 77079', '<p>Rob Kansun</p>\r\n\r\n<p>Sierra</p>\r\n\r\n<p>(416) 642-0032 xt. 224</p>\r\n\r\n<p>rob@sierra.ca</p>\r\n', '', 2, 20),
(21, '68 Main Street North, Markham, Ontario', 'Retail Space in a Cultural Hub', '<p>INTRODUCTION: Few locales illicit a feeling of comfortable nostalgia like historic downtown Markham. Its rustic, interlocking brick roadways harken back to an age gone-by, and it&#39;s adept at attracting regulars and tourists alike. A heavily trafficked area, Markham&#39;s Main Street is the cultural epicentre of the city. This luxurious commercial property for rent features 6 storeys and is set beneath 143 condominium units. Truly a prime location for any business lease.ABOUT MARKHAM: As the recipient of multiple heritage and environmental awards Markham is a vibrant cultural center situated in Ontario&#39;s York Region. As Canada&#39;s &quot;Hi-Tech Capital&quot; Markham is also home to several noteworthy businesses that maintain prominent roles in the technology sector such as IBM, Toshiba, and Apple, to name a few. Markham enjoys the privilege of being one of Ontario&#39;s most diverse communities, as well as playing host to a bustling local economy.Size: 15,000 sq ftNotable Tenants: Second Cup, Markham Village Dentistry, Subway, Markham Cruise &amp; Travel</p>', 'Markham\'s historic Main Street has remained a favorite location for a wide array of businesses since its founding in 1793. Currently, it is home to over 200 successful businesses, and this success shows no sign of slowing down. Sierra  is proud to offer this condominium building that sports no fewer than 6 retail spaces available for commercial and business lease.', 'Commercial/68%20Main%20Street/ExteriorPano.jpg', '', 1, '43.876716', '-79.260737', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '15,000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Second Cup, Main Street Greek, Markham Village Dentistry, Markham Cruise & Travel.', '68 Main Street North\r\nMarkham, Ontario', '<p>Patrick Smith</p>\r\n\r\n<p>Sierra</p>\r\n\r\n<p>(416) 642 0032 x 310</p>\r\n\r\n<p>patrick@sierra.ca</p>\r\n', '', 2, 30),
(22, 'Applewood Towns', '', '<p>Situated in one of the best areas in Mississauga, Applewood Towns provides easy access to everything you need. These transitional stacked towns are just minutes away from the City Centre and a short drive to Dixie South GO Station, Kipling TTC Station and Highways 401, 403, 427. Enjoy popular shopping centres like the Dixie Outlet Mall,&nbsp; Sherway Gardens and many excellent dining options. Live. Desire. Grow at Applewood Towns.</p>', 'Live. Desire. Grow. New townhomes on Hickory Drive in Mississauga by Sierra  featuring an exciting blend of modern and Georgian-inspired designs. ', '', '', 1, '43.621949', '-79.604312', 'Easy access to Highways 401, 403, 427 and Dixie GO Station, 12 min to Kipling TTC Station', 'Applewood Tennis Club, Burnhamtho rpe Community Centre', 'Wisla Delicatessen, Cora, Arkady, Lezzet Shawarma Falafel House, Pho Soho, La Bonita Latin American Restaurant, Desi Bar\r\nand Grill', 'Playdium Amusement Centre, Cineplex Square One and Art Gallery of Mississauga', 'Golden Orchard Montessori School, Burnhamthorpe Public School', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14),
(23, 'Applewood Towns', '', '<p>Situated in one of the best areas in Mississauga, Applewood Towns provides easy access to everything you need. These transitional stacked towns are just minutes away from the City Centre and a short drive to Dixie South GO Station, Kipling TTC Station and Highways 401, 403, 427. Enjoy popular shopping centres like the Dixie Outlet Mall,&nbsp; Sherway Gardens and many excellent dining options. Live. Desire. Grow at Applewood Towns.</p>', 'Live. Desire. Grow. New townhomes on Hickory Drive in Mississauga by Sierra  featuring an exciting blend of modern and Georgian-inspired designs. ', '', '', 1, '43.621949', '-79.604312', 'Easy access to Highways 401, 403, 427 and Dixie GO Station, 12 min to Kipling TTC Station', 'Applewood Tennis Club, Burnhamtho rpe Community Centre', 'Wisla Delicatessen, Cora, Arkady, Lezzet Shawarma Falafel House, Pho Soho, La Bonita Latin American Restaurant, Desi Bar\r\nand Grill', 'Playdium Amusement Centre, Cineplex Square One and Art Gallery of Mississauga', 'Golden Orchard Montessori School, Burnhamthorpe Public School', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14),
(24, 'Applewood Towns', '', '<p>Situated in one of the best areas in Mississauga, Applewood Towns provides easy access to everything you need. These transitional stacked towns are just minutes away from the City Centre and a short drive to Dixie South GO Station, Kipling TTC Station and Highways 401, 403, 427. Enjoy popular shopping centres like the Dixie Outlet Mall,&nbsp; Sherway Gardens and many excellent dining options. Live. Desire. Grow at Applewood Towns.</p>', 'Live. Desire. Grow. New townhomes on Hickory Drive in Mississauga by Sierra  featuring an exciting blend of modern and Georgian-inspired designs. ', '', '', 1, '43.621949', '-79.604312', 'Easy access to Highways 401, 403, 427 and Dixie GO Station, 12 min to Kipling TTC Station', 'Applewood Tennis Club, Burnhamtho rpe Community Centre', 'Wisla Delicatessen, Cora, Arkady, Lezzet Shawarma Falafel House, Pho Soho, La Bonita Latin American Restaurant, Desi Bar\r\nand Grill', 'Playdium Amusement Centre, Cineplex Square One and Art Gallery of Mississauga', 'Golden Orchard Montessori School, Burnhamthorpe Public School', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14),
(25, 'Applewood Towns', '', '<p>Situated in one of the best areas in Mississauga, Applewood Towns provides easy access to everything you need. These transitional stacked towns are just minutes away from the City Centre and a short drive to Dixie South GO Station, Kipling TTC Station and Highways 401, 403, 427. Enjoy popular shopping centres like the Dixie Outlet Mall,&nbsp; Sherway Gardens and many excellent dining options. Live. Desire. Grow at Applewood Towns.</p>', 'Live. Desire. Grow. New townhomes on Hickory Drive in Mississauga by Sierra  featuring an exciting blend of modern and Georgian-inspired designs. ', '', '', 1, '43.621949', '-79.604312', 'Easy access to Highways 401, 403, 427 and Dixie GO Station, 12 min to Kipling TTC Station', 'Applewood Tennis Club, Burnhamtho rpe Community Centre', 'Wisla Delicatessen, Cora, Arkady, Lezzet Shawarma Falafel House, Pho Soho, La Bonita Latin American Restaurant, Desi Bar\r\nand Grill', 'Playdium Amusement Centre, Cineplex Square One and Art Gallery of Mississauga', 'Golden Orchard Montessori School, Burnhamthorpe Public School', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `email`, `create_date`, `active`) VALUES
(1, '', '', 'Casamorra', 'd6042b0189d954b57f073f94bd3e7f5172f0913e', 'james@bond.ca', '2021-02-06 00:02:26', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customproperty`
--
ALTER TABLE `customproperty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customproperty`
--
ALTER TABLE `customproperty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
