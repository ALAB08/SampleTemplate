-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2023 at 10:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devmetropost`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `category` varchar(250) DEFAULT NULL,
  `article_date` date DEFAULT NULL,
  `author` varchar(250) DEFAULT NULL,
  `article_body` longtext DEFAULT NULL,
  `article_link` varchar(250) DEFAULT NULL,
  `slug` varchar(500) DEFAULT NULL,
  `article_image` varchar(250) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `category`, `article_date`, `author`, `article_body`, `article_link`, `slug`, `article_image`, `user_id`, `date_added`, `status`) VALUES
(10, 'To postpone or not to postpone', 'Editorial', '2023-05-14', '', '\n<table align=\"Center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"1\">\n<tr><td align=\"Center\">\n<span><img class=\"pagephoto layout_pagephoto\" src=\"https://metropost-online.com/18-05-2023-06-55-15-am-8508494.jpg\"></span></td>\n</tr>\n<tr>\n<td>\n<div class=\"pagephotocaption layout_pagephotocaption \"></div>\n</td>\n</tr>\n</table>\n\n\n<div class=\"default-article-body\"><script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4414480388811847\" crossorigin=\"anonymous\"></script><br><br>Acting on the information they have been getting from the testimonies presented during the investigation of the Senate Committee on Public Order and Dangerous Drugs, Senators Robinhood Padilla, Francis Tolentino and Ronald dela Rosa want to either postpone the holding of the Barangay and SK elections in Negros Oriental or place the Province under Comelec control during the election period starting August until October.<br><br>Senator Padilla said based on what he has been hearing in the Senate investigation, the people of Negros Oriental have lost faith in the authorities. He said the political violence in Negros Oriental may not yet be over.<br><br>With all due respect, the conclusion of our senators about the prevailing peace and order condition in Negros Oriental is flawed. It may be true that, from what we have heard and seen during the televised Senate investigation, there have been killings which have not been solved. It may be true that there have been people who have been harassed, maltreated and unfortunately have been unable to get justice.<br><br>In Negros Oriental, as is also the case in many parts of the country, police investigations and court cases do not move forward mostly because of the lack of witnesses. Definitely, this situation could not be a ground to postpone the barangay elections.<br><br>We don’t need another Senate investigation to get things right in Negros Oriental. We just need all of us to step up to the challenge of doing our civic duties in order to make our society a better place to live in.<br><br>This involves simple and basic things, like the proper disposal of our garbage, obedience to traffic rules, adopting proper environmental practices, and other things we were supposed to have learned in kindergarten.<br><br>Postponing elections is not the answer to our problems. In fact, postponing elections will further result in the preservation of the status quo that we all so desperately want to change.<br><br>We have to make democracy work. We should not just wait for our leaders to shape up but we all have responsibilities to make democracy alive. This involves vigilance in the affairs of government and the willingness to call out our leaders whenever they do wrong and commend them for doing right.<br><br>Do we deserve to live in a democracy?<br><br><br> <br><br>         <br>         </div>\n\n\n', 'https://metropost-online.com/to-postpone-or-not-to-postpone-p15823-76.htm', 'to-postpone-or-not-to-postpone-p15823-76', 'https://metropost-online.com/18-05-2023-06-55-15-am-8508494.jpg', 1, '2023-05-21 22:03:52', 0),
(11, 'DA offers P14M to coffee and cacao farmers', 'In the News', '2023-05-14', 'Jennifer Catan Tilos', '\r\n<table align=\"Center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"1\">\r\n<tr><td align=\"Center\">\r\n<span></span></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div class=\"pagephotocaption layout_pagephotocaption \"></div>\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n\r\n<div class=\"default-article-body\"><script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4414480388811847\" crossorigin=\"anonymous\"></script><br><br>The Department of Agriculture (DA) here has apportioned of P14 million for the production of coffee and cacao under the Coconut Farmers and Industry Development Plan (CFIDP) components.<br><br>This is part of the Coconut Farmers and Industry Fund Act, in which the government has finally used the multibillion-peso coco levy fund to revive and modernize the country’s coconut industry.<br><br>With that, the agriculture department in the province has 3.33% of the total budget from the national budget to focus on the development of the coconut value chain.<br><br>This is to support smallholder coconut farmers through intercropping with coffee and cacao, and maximize use of coconut lands.<br><br>This is also to increase the sufficiency of local coffee and cacao farmers which the province has large potential to produce, said Mary Ronville Aba, focal officer of high value crop development program of DA.  <br><br>“Why not produce our own coffee and cacao since we have a lot of buyers from coffee shops, we have chocolate makers here in Valencia, so why not produce our own raw materials,” said Aba.<br><br>The DA is expected to distribute planting materials of cacao beans and coffee seedlings, ferilizers and other postharvest equipment to lower the cost of processing and will increase income due to value adding.<br><br>Under the CFIDFP, the Philippine Coconut Authority (PCA) is tasked to carry out coco programs and project initiatives in partnership with other government agencies.<br><br>Coconut farmers interested in CFIDP projects must enroll at the National Coconut Farmers’ Registry System (NCFRS).<br><br>Eligible members include farm owners and/or owner-tillers, coconut growers who own at least half a hectare of land with a minimum of 20 coconut trees, tenants or tenant-workers and farm workers or laborers.<em><strong> (JCT/PIA7 Negros Oriental)</strong></em><br><br><br> <br><br>         <br>         </div>\r\n\r\n\n', 'https://metropost-online.com/da-offers-pm-to-coffee-and-cacao-farmers-p15825-422.htm', 'da-offers-pm-to-coffee-and-cacao-farmers-p15825-422', '', 1, '2023-05-21 22:33:24', 0),
(12, 'Dgte cements tag as triathlon host', 'Sports and Wellness', '2023-05-14', 'Judy Flores-Partlow', '\r\n<table align=\"Center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"1\">\r\n<tr><td align=\"Center\">\r\n<span><img class=\"pagephoto layout_pagephoto\" src=\"https://metropost-online.com/18-05-2023-06-59-40-am-3465763.jpg\"></span></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div class=\"pagephotocaption layout_pagephotocaption \"></div>\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n\r\n<div class=\"default-article-body\"><script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4414480388811847\" crossorigin=\"anonymous\"></script><br><br>Dumaguete City has cemented its reputation as a triathlon venue as it hosts Sunday’s 4th Triathlon 2023, which is participated in by some 400 local, national and foreign participants. <br><br>In a press conference on Wednesday, Mayor Felipe Antonio Remollo is expecting the yearly triathlon competition will bring in more tourists here as the city aspires to become a sports tourism capital.<br><br>“Triathlon has become one of our exciting events in commemoration of the 75th charter day anniversary of the city of Dumaguete,” Remollo said.<br><br>“Of course, sports tourism through triathlon is one of the crown drawers and favorites of our city and of our province,” he added.<br><br>At least six foreign triathletes, including a female sexagenarian, have also registered for the event, said Kathy Aguilar, city information officer.<br><br>Aguilar said broadcast journalist Kara David of GMA Network, Department of Tourism Undersecretary Elaine Bathan, and a few other celebrities and VIPs are participating in the swim-bike-run event, although their names were not disclosed to surprise the spectators.<br><br>Popular TV/Radio sports commentator Chiqui Reyes will host the triathlon.<br><br>Several athletes participating in the ongoing Southeast Asian Games have also signified their intention to join the event although arrangements are still being made, Aguilar said.<br><br>Last year, around 600 participants took part in the triathlon. This year’s number dropped after it was rescheduled from April to May, to give way to the Annual Communication 2023 of the Grand Lodge of the Free and Accepted Masons of the Philippines.<br><br>After the gun start is at 5:30 a.m. at Rizal Boulevard, participants have to swim 1,500 meters and go on a 40-kilometer bike ride and followed by a 10-kilometer run. <br><br>Gilbert Ablong, chief of the Traffic Management Office (TMO), said 40 enforcers from the Discipline Zone team and 90 from the TMO, will be deployed to secure the athletes and to ensure smooth traffic flow. <em><strong>(Judy F. Partlow/PNA)</strong></em><br><br><br> <br><br>         <br>         </div>\r\n\r\n\n', 'https://metropost-online.com/dgte-cements-tag-as-triathlon-host-p15824-500.htm', 'dgte-cements-tag-as-triathlon-host-p15824-500', 'https://metropost-online.com/18-05-2023-06-59-40-am-3465763.jpg', 1, '2023-05-21 22:35:10', 0),
(13, 'LGUs, church support peace initiative', 'In the News', '2023-05-14', '', '\r\n<table align=\"Center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"1\">\r\n<tr><td align=\"Center\">\r\n<span></span></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div class=\"pagephotocaption layout_pagephotocaption \"></div>\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n\r\n<div class=\"default-article-body\"><script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4414480388811847\" crossorigin=\"anonymous\"></script><br><br>Several mayors in Negros Oriental and Bishop Julito Cortes of the Diocese of Dumaguete have thrown in their support for a peace initiative that would pave the way for “healing and recovery” of the people and the province after the March 4 gruesome murders in Pamplona.<br><br>Col. Alex Recinto, acting police provincial director, said on Tuesday that with Dauin Mayor Galicano Truita backing the proposed peace pact, he has started going around, paying courtesy calls on local officials and other agency heads to invite them to the proposed peace covenant.<br><br>“After the Pamplona mass shooting incident, we had consultations, for example with the business sector, and we have seen the effect of this, particularly on the economy of Negros Oriental,” Recinto said partly in Filipino.<br><br>He consulted the Dauin mayor and both decided to undertake an activity so people could move on from the effects of the Pamplona massacre.<br><br>“We (Truita and I) have appointed ourselves as ambassadors for peace and prosperity and we will visit all the mayors in the 25 cities and municipalities and invite them to a one-day peace covenant,” Recinto said.<br><br>He also emphasized that the activity is not just for peace but for prosperity as well, united in shared efforts to move forward amid the tragedy.<br><br>Recinto took over as acting provincial director on March 24, replacing Col. Reynaldo Lizardo, who headed the Negros Oriental Provincial Police Office at the time of the murder of Governor Roel Degamo and many others inside his residential compound in Pamplona on March 4.<br><br>Aside from Truita, other mayors who have already committed to supporting this advocacy are from Dumaguete City, Amlan, Zamboanguita, Bayawan City, and Tanjay City.<br><br>Recinto said there is still no permanent date for the peace covenant, pending the completion of the courtesy calls and visits to the rest of the mayors.<br><br>Meanwhile, Recinto reassured Negros Oriental constituents that the police organization could still be trusted despite the alleged involvement of some of its uniformed personnel in crimes perpetrated in the province or having links to politicians implicated in the killings.<br><br>He apologized to the public for the many offenses committed against them by some PNP members as he urged the public to unite in maintaining peace and order in the province while aiming for progress and development.<em><strong> (PNA)</strong></em><br><br><br> <br><br>         <br>         </div>\r\n\r\n\n', 'https://metropost-online.com/lgus-church-support-peace-initiative-p15827-422.htm', 'lgus-church-support-peace-initiative-p15827-422', '', 1, '2023-05-21 22:35:48', 0),
(15, 'Microplastics in fishery products in central PH', 'Environment Connection', '2021-01-24', 'A. C. Alcala', '\r\n<table align=\"Left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"1\">\r\n<tr><td align=\"Left\">\r\n<span><img class=\"pagephoto layout_pagephoto\" src=\"https://metropost-online.com/1-25-2021-8-46-31-PM-4079949.jpg\"></span></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div class=\"pagephotocaption layout_pagephotocaption \"></div>\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n\r\n<div class=\"default-article-body\"><br>This SUAKCREM (Silliman University) article summarizes what is presently known about microplastic pollution and other pollutants in fishery products and the marine environment in Central Visayas, Philippines, with some recommendations for our people.   <br><br>A study in 2020 by A.C. Alcala and Abner Bucol funded by the National Academy of Science &amp; Technology assessed the occurrence of microplastics in marketed seafood products in the provinces of Negros Oriental, Siquijor, Cebu, and Bohol  in Central Visayas. <br><br>Researchers from the Biology and Chemistry departments of Negros Oriental State University were invited as collaborators. <br><br>Products examined included three species of dried fish of rabbitfish <em>Siganus fuscescens</em>, sardine <em>Sardinella pacifica</em>, and scad <em>Decapterus sp.</em>, fermented anchovies/sprats (bagoong/ginamos), and bottled mussel <em>Perna viridis</em> and sea urchin <em>Tripneustes gratilla</em> roe. <br><br>A total of 778 microplastic particles were isolated using microscopic examination and hot-needle tests. Microplastics were dominated by fibers and only a few fragments and foams. <br><br>Quantities of microplastics from dried fish (2.7-4 particles/fish) and fermented anchovies (1.3-4 particles/25g sample) did not differ significantly between sampling locations. <br><br>Among samples of bottled mussel, only those from Negros Oriental had microplastics with a mean density of 0.3 particles/25g sample. <br><br>Sea urchin roe samples obtained from Siquijor also tested positive for microplastics (density=1 particle/25g sample), despite having low human population density. <br><br>Out of the 66 particles subjected to Fourier-Transformed Infrared (FTIR) Spectroscopy, only 24 were identified to specific polymer types, dominated by regenerated cellulose (e.g., rayon) followed by alginate, and few particles identified as polyvinyl chloride (PVC) and polyester. <br><br>These marketed seafood products may have been contaminated by microplastics through ingestion, during processing, and open display in the market. <br><br>There is a need to quantify microplastics and organic contaminants in other shellfish products (e.g., bottled shrimp pastes) in the Philippine market, and refine the processing of these products to minimize exposure to microplastics.<br><br>Other studies that were done recently in the Philippines also revealed microplastic ingestion in sardines (Palermo et al. 2020), and siganids in Tañon Strait (Bucol et al. 2020; Paler 2020). <br><br>Lira et al. (2020) also showed contamination of microplastics in fermented fish pastes (bagoong) in Batangas, Luzon Island.  <br><br>Two undergraduate theses conducted by students (Jazzy Mae Enero and Allen Empeynado) at the Biology department at NORSU revealed the presence of microplastics and organic pollutants in mangrove sediments and in tissues of the commonly harvested bivalve shell <em>Polymesoda expansa</em> (locally known as <em>imbaw</em>) in selected sites in Negros Oriental. <br><br>Quantified organic pollutants included polyaromatic hydrocarbons (PAHs, e.g., benzo[ghi]pyrelene, dibenz(a,h)anthracene, indeno[1,2,3-cd]pyrene, and benzo[a]pyrene), phthalates, polychlorinated biphenyls (PCBs), and pesticides (n=18, e.g., Chloroneb, Carbaryl, Ethion) found in the mangrove sediments and edible marsh clam (<em>Polymesoda expansa</em>) tissues from selected (three for mangrove sediments; three for marsh clam) coastal areas of Negros Oriental, central Philippines. <br><br>Of the 30 clam samples, microplastic density ranged from 4.1-6.1 particles/clam but did not differ significantly between sites. Microplastics in both sediment and clam samples were mainly composed of fibers. <br><br>Using gas chromatography-mass spectroscopy (GC-MS) at Arizona State University, USA, through Dr. Beth Polidoro, a leading expert on environmental toxicology, 45 different chemical contaminants were identified in the mangrove sediment samples while 27 chemical contaminants in the marsh clam tissues. <br><br>Among the sites, the concentration of PCBs and PAHs were highest in the mangroves in Bindoy while pesticides and phthalates were highest in the mangroves of Bais Bay, an urbanized area surrounded by extensive sugarcane plantations and proximate to industries. <br><br>The concentration of phthalates, PAH, and pesticides were also highest in the clam samples from Bais and Tanjay cities while the concentration of PCBs was highest in Ayungon. <br><br>It should be emphasized that these contaminants are hazardous to human health. <br><br>For example, some PAHs and pesticides are known as cancer-causing agents (carcinogens) while certain phthalates can mimic hormones such as estrogen, thereby causing other health problems. <br><br>At the present time, our team and collaborators continue gathering pertinent baseline data on microplastics as well as other pollutants, especially persistent organic pollutants. <br><br>We also hope to include quantification of heavy metals, whenever possible, in the near future. In addition, we are also embarking on expanding our study to cover selected estuarine sites. <br><br>We are urging the local government units and concerned national agencies to conduct a widespread education campaign on the negative impacts of plastic pollution on the environment, aquatic organisms, and humans. <br><br>We are also recommending that local communities discourage the practices of eating or ingesting un-gutted small-sized fish and fermenting fish viscera (including guts) of siganids for the local delicacy called <em>dayok</em> because of the presence of microplastics in siganid guts, which could cause various human ailments, such as those mentioned in this paper and in our first article. <br><br>________________________________<br><br><br><br><br><br><br><br><script data-cfasync=\"false\" src=\"/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script></div>\r\n\r\n\n', 'https://metropost-online.com/microplastics-in-fishery-products-in-central-ph-p13101-98.htm', 'microplastics-in-fishery-products-in-central-ph-p13101-98', 'https://metropost-online.com/1-25-2021-8-46-31-PM-4079949.jpg', 1, '2023-05-24 21:19:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `lastname`, `firstname`, `username`, `password`, `status`) VALUES
(1, 'Labrador', 'Aldwin', 'ALAB08', '1@@', 1),
(2, 'Aba', 'Rosel Ann', 'ROSEL08', '1@@', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
