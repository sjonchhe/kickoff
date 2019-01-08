-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2017 at 03:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `aid` int(11) NOT NULL,
  `atitle` varchar(300) NOT NULL,
  `akeyword` varchar(300) NOT NULL,
  `adescription` varchar(1500) NOT NULL,
  `acategory` varchar(100) NOT NULL,
  `aheading` varchar(300) NOT NULL,
  `ashort` text NOT NULL,
  `afull` text NOT NULL,
  `adate` datetime NOT NULL,
  `astatus` tinyint(4) NOT NULL,
  `aphoto` varchar(200) NOT NULL,
  `mid` tinyint(4) NOT NULL,
  `uid` tinyint(4) NOT NULL,
  `acounter` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`aid`, `atitle`, `akeyword`, `adescription`, `acategory`, `aheading`, `ashort`, `afull`, `adate`, `astatus`, `aphoto`, `mid`, `uid`, `acounter`) VALUES
(4, 'Manchester United vs Ajax LIVE score and goal updates from Europa League final 2017', '', 'United could win the Europa League for the first time', 'normal', '', 'Man Utd face Ajax in the Europa League final in the Friends Arena in Stockholm looking to lift a second major trophy of Jose Mourinho\'s reign................', ' Manchester United are in Stockholm for the Europa League final.\r\n\r\nAjax stand in the way of United lifting their second major trophy of the season, securing Champions League qualification and lifting the only European trophy the club is yet to win in its history.\r\n\r\nJose Mourinho has brought a large squad to Sweden, including long term injury absentees Marcos Rojo, Luke Shaw and Ashley Young.\r\n\r\nHe will pick a strong side capable of ending his first season on a high.\r\n\r\nSergio Romero has been confirmed to start in goal, while the likes of Marcus Rashford, Antonio Valencia and Ander Herrera are all set to return to the XI after being rested in the final Premier League match.\r\n\r\nChris Smalling or Phil Jones is likely to partner Daley Blind after Eric Bailly\'s red card.\r\n\r\nUnited vs Ajax will be shown live on BT Sport 2 from 7pm. Kick-off from the Friends Arena is at 7:45pm . ', '2017-05-24 00:00:00', 1, 'gallery/article/4.jpg', 0, 0, '0'),
(5, 'Chelsea loanee Juan Cuadrado completes 17.3m permanent move to Juventus', '', '', 'transfer', '', 'Juan Cuadrado has completed his move from Chelsea to Juventus after signing a deal with the Italian side until 2020', 'Juventus confirmed the news in a statement released on their website on Monday evening, and revealed they will pay Chelsea £17.3m in three instalments for the Colombia international who has spent this season on loan in Turin.\r\n\r\nThe statement read: \"Juventus announces that, following the meeting of the conditions provided by the contract, its obligation to definitively acquire the registration rights of Juan Cuadrado from Chelsea became due.\r\n\r\n\"The permanent transfer fee of €20 million is to be paid in three annual instalments starting from the 2017/2018 financial year.\r\n\r\n\"The 28-year-old forward has signed a contract that ties him to the Bianconeri until 30 June 2020.\"', '2017-05-26 00:00:00', 1, 'gallery/article/5.jpg', 0, 0, '0'),
(6, 'Manchester United want Antoine Griezmann transfer done by end of June\r\n', 'slider', '', 'transfer', '', 'Manchester United are reportedly growing confident of completing the transfer of Antoine Griezmann and what the deal done by the end of June at the latest.\r\n', 'The report claims that United are hoping to improve their image in terms of operating an efficient business model, having struggled to get high-profile deals over the line in recent years.\r\n\r\nThe signing of Griezmann would be a great way to kick things off this summer, with Jose Mourinho’s side in urgent need of additions up front due to doubts over the futures of Zlatan Ibrahimovic and Wayne Rooney.\r\n\r\nThe 26-year-old has sent mixed messages over his future over the past few days, first suggesting he rated his chances of joining United at ‘6 out of 10’ before seeming to backtrack on the prospect of leaving Atletico.\r\n\r\n‘I’m very happy with the support of the people, the fans, the team-mates. It’s been a great year and I hope I can get better every year and win trophies with this team. I will do everything possible,’ he was quoted as saying today.\r\n\r\n', '2017-05-26 00:00:00', 1, 'gallery/article/6.jpg', 0, 0, '0'),
(7, 'Chelsea closer to signing James Rodriguez than Manchester United - journalist ', '', '', 'transfer', '', '\r\nJAMES RODRIGUEZ is closer to joining Chelsea than he is Manchester United this summer.', '\r\nChelsea closer to signing James Rodriguez than Manchester United - journalist\r\n\r\nJAMES RODRIGUEZ is closer to joining Chelsea than he is Manchester United this summer.\r\n		\r\n	\r\n		\r\n	\r\n		\r\n	\r\n		\r\n	\r\n		\r\n	\r\n845\r\nBy Luke Gardener / Published 24th May 2017\r\nJames Rodriguez appears to say goodbye to Real Madrid fans\r\n\r\nThat’s the claim of Spanish journalist Eduardo Inda.\r\n\r\nSpeaking on Spanish TV programme El Chiringuito de Jugones he claimed the Blues were more likely to pull off a raid for Rodriguez.\r\n\r\nAnd he went on to explain both Cristiano Ronaldo and Marcelo have tried to convince the Colombian to stay at the Bernabeu.\r\n\r\nRodriguez is down the pecking order at Real with Zinedine Zidane willing to let him leave the club this summer.\r\n\r\nThe 25-year-old made just 22 La Liga appearances this season.\r\n\r\n\r\n\r\nAnd Rodriguez has reportedly made his mind up that he needs a new challenge as well as first-team football.\r\n\r\nJorge Mendes is currently trying to secure a new club for his client.\r\n\r\nThe likes of Isco, Asensio and Lucas Vazquez have all moved ahead of Rodriguez in Zidane’s thinking.', '2017-05-26 00:00:00', 1, 'gallery/article/7.jpg', 0, 0, '0'),
(8, 'Manchester United\'s injury-ravaged squad fills the sideline with crutches for Europa League win', '', 'Two of the fit United players who did play in the game dedicated the victory to those killed and hurt in the terror attack at the Manchester Arena', 'normal', '', 'MANCHESTER UNITED’S crocked stars were queueing up to celebrate their Europa League final win over Ajax on Wednesday night.\r\n', 'MANCHESTER UNITED’S crocked stars were queueing up to celebrate their Europa League final win over Ajax on Wednesday night.\r\n\r\nThe injured stars – including Zlatan Ibrahimovic, Ashley Young, Luke Shaw and Marcos Rojo – combined their sharp grey suits with crutches and medical support boots.\r\nAfter the game, the injured Swede posed with a Manchester United fan’s banner – that said he could have SEX with his wife if he stays at the club.\r\n\r\nThe brilliant striker’s future is still unclear with the 35-year-old recovering from a knee injury sustained in the semi-final of the Europa League against Anderlecht at Old Trafford.\r\n\r\nThe former Barcelona and Ajax man had surgery in Miami after last month’s knee ligament injury.\r\n\r\nTwo of the fit United players who did play in the game dedicated the victory to those killed and hurt in the terror attack at the Manchester Arena.', '2017-05-26 00:00:00', 1, 'gallery/article/8.jpg', 0, 0, '0'),
(9, 'Nepali National Football team leaving for Philippines today', '', '', 'nepal', '', 'Nepal national football team is on Saturday leaving for Manila to play the first match of the AFC Asian Cup 2019 Qualifiers against the Philippines.', 'Nepal, who have been pitted in Group F along with the Philippines, Yemen and Tajikistan, will play the first away match on March 28 at the Rizal Memorial Stadium in Manila. A total of 24 teams are taking part in the qualifiers and they are divided into six groups. Top two teams from all groups will make it to the finals of the competition to be held in the United Arab Emirates in 2019.\r\n\r\nNepali squad comprises of 20 players, three coaches, manager and a physio. After regular skipper Anil Gurung was axed from the squad, Biraj Maharjan will lead the team. Bikesh Kuthu, Kiran Kumar Limbu and Bishal Shrestha are three goalkeepers, while Rabin Shrestha, Ananta Tamang, Aditya Chaudhary, Kamal Shrestha, Ranjit Dhimal and Jitendra Karki are defenders. Likewise, Bishal Rai, Rohit Chand, Heman Gurung, Bikram Lama, Anjan Bista and Sujal Shrestha are midfielders, while Bimal Gharti Magar, Ranjan Bista, Bharat Khawas and Karna Limbu are forwards.\r\n\r\nGyotuku Koji is head coach, while Raju Kaji Shakya is assistant coach and Ujwal Manadhar is goalkeeping coach. All Nepal Football Association Treasurer Birat Jung Shahi is team manager and Dr Raju Dangol is team physiotherapist.\r\n\r\nMeanwhile, ANFA President Narendra Shrestha accepted the team’s preparation was not sufficient. “It would have been better had the team got the opportunity of playing a couple of friendly matches before travelling to the Philippines. As ANFA is not financially strong to arrange friendly matches, we need government’s support,” he said. “We will try to arrange practice matches before other matches,” said Shrestha. The ANFA president also asked the players to perform with high spirit.\r\n\r\nMinister for Youth and Sports Daljit Sripaili said he was optimistic of victory in the match. “The event is one of the best opportunities for the Nepali team and we all are hoping that the players will make it to the Asian Cup finals,” said Sripaili.\r\n\r\nHead coach Koji said the highly competitive matches of the qualifiers would provide the Nepali team with learning experiences. “We will go for a win as we had a sound preparation for the match,” said Koji. Skipper Maharjan was also confident of putting up a good show against the Philippines.', '2017-03-24 00:00:00', 1, 'gallery/article/9.jpg', 0, 0, '0'),
(10, 'Nepal go down to Malaysia', 'asd', 'asd', 'nepal', 'asd', 'Nepali national women football team were went down 4-1 to host Malaysia in their second international friendly match at Kota Kinabalu in Malaysia on Wednesday.', 'Nepali national women football team were went down 4-1 to host Malaysia in their second international friendly match at Kota Kinabalu in Malaysia on Wednesday.\r\n\r\nNepal conceded two goals in each half for their first defeat against Malaysia in three meetings. Midfielder Shereilynn Elly Pius netted twice for the home team including the third minute opener for the Malaysian team. Nur Athirah Mamat made it 2-0 three minutes before the break and Pius added to her tally in the 54th minute. Nepal skipper Sajana Rana pulled one back for the visitors in the 80th minute.\r\n\r\nMalaysian FA had invited Nepal for the friendlies as part of their preparations for South East Asian Games to be held there from August 19 to 30. ', '2017-06-11 19:53:07', 1, 'gallery/article/10.jpg', 0, 0, '0'),
(11, 'Nepal Climbs in FIFA Ranking', '', '', 'nepal', '', 'After their Spectacular performance in Banga Bandhu Gold Cup,Nepal has emerged 8 positions in the latest World FIFA Ranking. Nepal are on 188th Position with 44 Points on Total.', 'After their Spectacular performance in Banga Bandhu Gold Cup,Nepal has emerged 8 positions in the latest World FIFA Ranking. Nepal are on 188th Position with 44 Points on Total.\r\n\r\nAfghanistan are the King of South Asia despite slipping oneÂ  position down from previous month.Nepal lies at the sixth position among the SAARC countries.Maldives remain unchanged from last month to lie at 157th position.Â India is on 162nd position andÂ Bangladesh have climbed two position up to 177th position.Pakistan remains unchanged in 185th position.Â Sri Lanka are ranked 189 inÂ this month.Bhutan lies at 193rd position .', '2016-02-06 00:00:00', 1, 'gallery/article/11.jpg', 0, 0, '0'),
(12, 'FIFA 17 Bundesliga Team of the Season LIVE reveal as FIFA 18 hype continues to build ', '', '', 'fifa', '', 'EA SPORTS has revealed the FIFA 17 Bundesliga TOTS Team fo the Season squad, which is dominated by Bayern Munich, Borussia Dortmund and Red Bull Leipzig.', '\r\n\r\nAfter a long voting process, EA SPORTS has today announced the latest instalment in their Team of the Season campaign, this time in the shape of the Bundesliga’s best players from the 2016/17 season.\r\n\r\nUnlike most Team of the Season squads, the starting XI was voted for by the public and is made up of big names such as Manuel Neuer, Arjen Robben, Pierre Americk-Aubumeyang and fan favourite, Phillip Lahm.\r\n–– ADVERTISEMENT ––\r\n\r\nAs many might have expected, Bundesliga champions Bayern Munich dominated the squad, with four players in the starting line-up (Manuel Neuer, Matz Hummels, Thiago Alcantara and Robert Lewandowski), while also managing a further two players on the substitutes bench in the form of Phillip Lahm and Arjen Robben.\r\n\r\nBorussia Dortmund and Red Bull Leipzig also had a lot of joy with both clubs managing to secure four players apiece in the 23 man squad.\r\n\r\nHere\'s your starting XI, as voted by you, which can also be viewed with updated stats in the gallery below:\r\n\r\nStarting XI - Voted by fans on Bundesliga.com\r\n\r\nGK: Manuel Neuer - FC Bayern (Germany) - Germany\r\nRB: Lukasz Piszczek - Borussia Dortmund (Germany) - Poland\r\nLM: Sead Kolasinac - Schalke 04 (Germany) - Bosnia and Herzegovina\r\nCB: Mats Hummels - FC Bayern (Germany) - Germany\r\nCB: Niklas Sule - TSG Hoffenheim (Germany) - Germany\r\nRM: Ousamane Dembele - Borussia Dortmund (Germany) - France\r\nCM: Thiago - FC Bayern (Germany) - Spain\r\nLM: Emil Forsberg - RB Leipzig (Germany) - Sweden\r\nCM: Naby Keita - RB Leipzig (Germany) - Guinea\r\nST: Robert Lewandowski - FC Bayern (Germany) - Poland\r\nST: Pierre-Emerick Aubameyang - Borussia Dortmund (Germany) - Gabon', '2017-05-24 00:00:00', 1, 'gallery/article/12.jpg', 0, 0, '0'),
(13, 'There\'s FIFA 18 - and there\'s EA Sports FIFA on the Nintendo Switch ', '', '', 'fifa', '', 'The concern is whether this custom-built version for Switch is based on the Frostbite-built game, or the edition built on EA\'s older Ignite engine, the one behind the Xbox 360 and PS3 versions.', 'Ever since EA announced FIFA for the Switch, there have been questions surrounding exactly what kind of game owners of Nintendo\'s new console can expect.\r\n\r\nEA\'s Patrick Söderlund announced the title during Nintendo\'s 12th January Switch presentation, saying: \"EA Sports\' FIFA on Nintendo Switch will be the most immersive, social, and authentic sports game ever created for Nintendo players.\"\r\n\r\nHe added: \"It will deliver the FIFA experience custom-built for Nintendo Switch so you can play anywhere, play with anyone, and play how you want to play.\"\r\n\r\nSöderlund\'s comments suggested FIFA on Switch wouldn\'t be the same game as FIFA 18, which is due out on PC, PS4 and Xbox One later this year. But former EA executive Peter Moore (now of Liverpool FC), made a point of referencing the game as FIFA 18 in response to concerns it would not be the same FIFA game released on other consoles.\r\nOver on EA\'s website, the company explains what it\'s going for with the Switch version of FIFA:\r\n\r\n    If you\'re at the park, at your friend\'s house, or on vacation, you can always stay connected to the biggest matches. You\'ll be able to get on the pitch with your favourite players and teams from the world\'s best leagues in iconic stadiums from around the world... all with the unmatched authenticity and depth that FIFA is known for.\r\n\r\nNow, in a press release designed to hype up EA\'s EA Play 2017 event at E3 next month, the mega publisher noted two separate FIFA games: FIFA 18 and EA SPORTS FIFA on the Nintendo Switch, to give the latter its full title.\r\n\r\nEA\'s press release suggests FIFA on Switch is indeed different enough for it not to carry the FIFA 18 title. But what, exactly, are the differences? EA has yet to say. With both games set to appear at E3 next month, we don\'t have long to find out.', '2017-05-27 00:00:00', 1, 'gallery/article/13.jpg', 0, 0, '0'),
(14, 'FIFA 18 Release Date, Pre-Order, (Update: FIFA Sports for Switch), Ultimate Team, Journey Mode, Cover Star', '', '', 'fifa', '', 'All the info on EA’s football game goliath, including new gameplay, graphical improvements, and any tweaks to FIFA 18 Ultimate Team. ', 'FIFA 18 is coming. EA hasn’t said a great deal about it yet, but it’ll arrive at around the same time of the year that it does every year. You might not feel too excited about it now, but jump forward to day of release and you’ll be hunting high and low for the best deal on FIFA 18. In this article we’ll constantly round-up all the latest info on FIFA 18, including the FIFA 18 release date, FIFA 18 pre-order info, details on FIFA for Switch, and the news on what EA is doing with The Journey story mode in FIFA 18. \r\n\r\nUpdate - 26/05/2017: Is FIFA on Switch Called FIFA 18 or Not?  \r\n\r\nEA has revealed its line-up of playable titles for EA Play, the not-E3 but more or less E3 event the publisher runs. This year\'s event takes place from June 10, and FIFA Sports for Switch will be there along with the new Need for Speed, Madden 18, Battlefront 2, and FIFA 18. So why is the game not being grouped in with the other versions of FIFA 18? \r\n\r\nEA referring to the Switch game as FIFA Sports for Switch could well be to give it more prominence, but it might be because it\'s going to be a very different game to the current-gen versions coming to PS4, Xbox One and PC. We saw a similar naming system when FIFA came to PS Vita, almost giving the publisher an excuse to deliver a game that didn\'t match up to the game being played on home consoles. In all likelihood FIFA Sports on Switch will be based on the last-gen 360/PS3 games, and therefore lacking the Journey story mode. It\'s also unlikely to use the Frostbite engine. All will be revealed on June 10. \r\nFIFA 18 Release Date and Pre-order Info - Just Let us Play the Game Already!\r\n\r\nEA is yet to announce the release date for FIFA 18, but we can make a solid stab at guessing going on previous years. Generally FIFA launches on a Tuesday towards the end of September. An ideal date for FIFA 18 to release is Tuesday, September 26. While FIFA 18 is guaranteed to launch on PS4, Xbox One, PC and Nintendo Switch, its appearance on last gen consoles PS3 and Xbox 360 is uncertain. \r\n\r\nFIFA 18 is likely to get numerous substantial gameplay tweaks and additions on PS4, Xbox One, and PC, but older consoles may be dropped completely or given simple roster and stat updates on what is essentially the same game as FIFA 17. EA has confirmed that FIFA 18 is coming to Nintendo Switch, with Patrick Söderlund having made the official announcement during Nintendo’s big Switch reveal event back in January. \r\n\r\n\"EA Sports\' FIFA on Nintendo Switch will be the most immersive, social, and authentic sports game ever created for Nintendo players,\" Söderlund said. \"It will deliver the FIFA experience custom-built for Nintendo Switch so you can play anywhere, play with anyone, and play how you want to play.\" \r\n\r\nFIFA 18 will be revealed during EA Play, Electronic Arts’ event held just prior to E3. The big announcements will take play during a live conference on June 10, but there’s a chance we’ll see a teaser trailer for FIFA 18 before then - like EA did with Madden 18. \r\n\r\nThe quality of FIFA 18 on Nintendo Switch will be a big sign of how EA will approach Switch games in the future. There’s the potential for the Switch version of FIFA 18 to be a wonderful option for gamers on the move, finalising realising the dream of a great portable soccer game that was almost a reality with FIFA on the PS Vita. Switch owners will want their version of the game to feel feature complete and not simply a rebadged version of FIFA 17 for Xbox 360/PS3. ', '2017-05-17 00:00:00', 1, 'gallery/article/14.jpg', 0, 0, '0'),
(15, 'Latest on Salah and van Dijk deals, Solanke in action, Oxlade-Chamberlain \'snub\'', '', '', 'transfer', '', 'Milner on being left back\n', 'Milner on being left back\r\n\r\nIn those quiet summer days, if you hold your ear to the sea closely enough, you can hear the distant echoes of James Milner talking about playing as a left back.\r\n\r\nIt must be his favourite thing, because he’s done approximately 4,000 interviews on the subject now.\r\n\r\nThe latest one, on Liverpoolfc.com, sees him discussing how it has fine-tuned his overall game.\r\n\r\n\r\nI’ve been learning a new role and a more defensive one because I’ve always been a forward-thinking player, and probably still am.\r\n\r\nBut at times you have to curb that and adapt to the match situation and maybe sometimes hold back a bit if the time of the game suits that.\r\n\r\nI think sensing danger early is the biggest thing to learn. When you play in midfield you’re obviously always switched on to defending.\r\n\r\nThat’s something that I’ve always thought is important and I’ve always tried to put in as much to the defensive side of the game as the attacking game, but ultimately when you are in midfield, you’ve got four or five defenders behind you.', '2017-06-22 00:00:00', 1, 'gallery/article/15.jpg', 0, 0, '0'),
(16, 'Real Madrid\'s Cristiano Ronaldo named global cover star of FIFA 18', 'slider', '', 'fifa', '', 'The four-time Ballon d\'Or winner led Los Blancos to their third Champions League title in four years with a 4-1 defeat of Serie A champions Juventus on Saturday.', 'Ronaldo, 32, scored two goals in a man-of-the-match performance in the triumph and on Monday was announced as the face of the latest edition of EA Sports\' popular video game franchise.\r\n\r\n\"It is a real pleasure to be on the cover of FIFA 18,\" Ronaldo said. \"It\'s a great feeling and I am grateful to have been chosen.\"\r\n\r\nRonaldo ran his career goals tally to 600 for both club and country in the Champions League final, and became the only player alongside Alfredo Di Stefano to score in three different European Cup/Champions League finals.\r\n\r\nThe strikes also marked his 105th in the competition, putting him well clear of Lionel Messi at the top of the all-time scoring list. Messi has featured on four FIFA covers.\r\n\r\n\"The world\'s best player has helped fuel the biggest leap forward on the pitch that we\'ve ever delivered,\" said Senior Producer for EA SPORTS FIFA Aaron McHardy.\r\n\"We are extremely excited to partner with Cristiano -- working with him we learned a lot about his unique play style and what makes him so special. His passion, energy and global fanbase make him the perfect ambassador for FIFA 18.\"\r\n\r\nBorussia Dortmund forward Marco Reus featured on the cover last year\'s edition after winning a fan vote.\r\n\r\nThe 27-year-old beat out Real\'s James Rodriguez, Manchester United\'s Anthony Martial and Chelsea\'s Eden Hazard as receiving the most of over 3.1 million votes cast on EA\'s website.\r\n\r\nFIFA 18 is scheduled to be released worldwide on on Sept. 29.', '2017-06-06 00:00:00', 1, 'gallery/article/16.jpg', 0, 0, '0'),
(17, 'FIFA 18 trailer confirms Switch version will be a lesser product (update)', '', '', 'fifa', '', 'The in-engine footage from the trailer of Ronaldo preparing to take a free kick, sweat dripping down his fac ', 'Cristiano Ronaldo, the Portuguese footballer who just led Real Madrid to its third UEFA Champions League title in four years, is the global cover athlete for FIFA 18, publisher Electronic Arts announced today. But in the game’s first trailer, EA also stealthily announced that the Switch version of FIFA 18 is indeed a very different product from what soccer fans expect a current-generation FIFA title to be.\r\n\r\nFIFA 18 will be released Sept. 29 on Nintendo Switch, PlayStation 3, PlayStation 4, Windows PC, Xbox 360 and Xbox One, EA said today. The company previously announced that the game will include a second season of The Journey, the single-player story mode that debuted last year. In the Ronaldo-focused first trailer for FIFA 18, which you can watch above, EA says in some fine print that the mode will be called The Journey: Hunter Returns, indicating that it will once again focus on protagonist Alex Hunter.\r\n\r\nHowever, the fine print also notes that both the Frostbite engine — the technology that has powered the FIFA series on current-generation platforms since last year — and The Journey: Hunter Returns will be available only in the PC, PS4 and Xbox One versions of FIFA 18. That confirms that FIFA 18 on the Switch is a separate product that will probably be more in line with the outdated PS3 and Xbox 360 versions of the game.\r\nThe in-engine footage from the trailer of Ronaldo preparing to take a free kick, sweat dripping down his face? Well, you already knew that the Switch version of FIFA 18 wasn’t going to look like that. But it’s galling to hear that something as huge as an entire mode — the story mode, no less — will be missing in action on the Switch.\r\n\r\nIn other words, sports fans on a Nintendo platform are once again being treated like an afterthought, which makes it essentially meaningless that, as EA says, the game is “custom built for Nintendo Switch.” We’ve reached out to EA for further details on the Switch version, and we’ll update this article with any information we receive.\r\n\r\nRonaldo, 32, scored two goals in Saturday’s Champions League Final as Real Madrid defeated Juventus 4-1. He is the only person to have notched more than 100 goals in European competition. Ronaldo is also the top player in Portugal’s history, with 138 appearances and 71 goals for the national team since his debut in 2003 — both all-time records.\r\n\r\nRELATED\r\n\r\nIt\'s \'EA Sports FIFA,\' not \'FIFA ', '2017-06-06 00:00:00', 1, 'gallery/article/22.jpg', 0, 0, '0'),
(18, 'Manchester United will play Real Madrid in the European Super Cup', 'slider', '', 'normal', '', 'Manchester United will face Real Madrid in the 2017 European Super Cup after the Spanish champions thrashed Juventus in Saturday’s Champions League final.\r\n', 'And Jose Mourinho an co now know they will face Real Madrid after Cristiano Ronaldo helped inspire a convincing 4-1 win over Juventus at the Millennium Stadium to ensure Zinedine Zidane’s men became the first side to defend the Champions League trophy.\r\nThe match is scheduled to take place on August 8, four days before the 2017/18 Premier League season is due to kick off.\r\nA meeting of two of Europe’s traditional heavyweights will throw up a number of intriguing subplots with Mourinho due to take on his former side for the first time since he left the Bernabeu in acrimonious circumstances back in 2013.\r\n\r\nRonaldo will of course come up against his former employers, as could Manchester United goalkeeper David De Gea who is again being strongly linked with a move to the Spanish capital this summer.\r\n', '2017-06-06 00:00:00', 1, 'gallery/article/19.jpg', 0, 0, '0'),
(19, 'Eden Hazard: Chelsea midfielder would \'listen\' to Real Madrid offer', '', '', 'transfer', '', 'Chelsea winger Eden Hazard has said he would \"listen\" if Real Madrid offered him a deal, but added that he could stay with the Blues \"for many years\".', 'Chelsea winger Eden Hazard has said he would \"listen\" if Real Madrid offered him a deal, but added that he could stay with the Blues \"for many years\".Hazard, who broke his right ankle on Sunday while training with Belgium, has been heavily linked with the Champions League winners.\r\n\r\n\"We all have dreams. It could be Spain, it could be staying with Chelsea,\" he told the Het Laatste Nieuws newspaper.\r\n\r\n\"But it\'s not something I\'m thinking about right now. We\'ll see.\"\r\n\r\nReal beat Juventus 4-1 on Saturday to win Europe\'s top competition for a 12th time and claim a third Champions League crown in four years.\r\n\r\nHazard added: \"If I would ever join Real Madrid, I could end up on the bench too. I just want the best solution for myself.\"The 26-year-old, who joined Chelsea from Lille in June 2012, helped the Stamford Bridge side to win the Premier League title last season.\r\n\r\nWhen asked if he could leave Chelsea, he said: \"In football you never know, but at the moment it\'s not something that\'s on my mind.\r\n\r\n\"I\'m a Chelsea player. I still have a contract for three years. We\'ll see.\"\r\n\r\nOn the subject of being offered a new deal by Chelsea, he continued: \"They haven\'t offered me anything yet, but it could happen. We\'ll see after my holidays.\r\n\r\n\"The last few years everyone was talking about PSG [Paris St-Germain], this year it\'s about Real Madrid, next year it will be another club.\"\r\n', '2017-06-06 00:00:00', 1, 'gallery/article/20.jpg', 0, 0, '0'),
(20, 'Real Madrid vs Juventus: 5 Conclusions from Champions League Final', 'slider', '', 'normal', '', 'Real Madrid lifted the UEFA Champions League trophy for a record 12th time by beating Juventus 4-1 at Cardiff\'s Millennium Stadium. In the process, Real Madrid became the first team to successfully defend the Champions League crown.', 'Real Madrid won their record 12th Champions League title on Saturday night when they beat Juventus 4-1 at Cardiff’s Millennium Stadium. The goals came courtesy a brace by Cristiano Ronaldo and were followed up by Casemiro and Asensio even as Mario Mandzukic had levelled matters in sublime fashion (watch highlights here) in the first half.  Here are the assessments and conclusions from the Champions League final and the last game of the season.\r\nAs Real Madrid lifted the trophy, president Florentino Perez spoke to the media and said, “Cristiano should win his fifth Ballon D’Or now, nobody can argue with that, his end of season has been spectacular.” And you can’t really disagree with him. He scored 25 goals in the league and 12 goals in the Champions League and finished with over 40 goals (42 to be precise) for a seventh straight season. In the Champions League, he once again finished as leading goal scorer and finished things off with a double in the Final. He’s won four Ballon d’Or Awards (including two in the newly christened FIFA Ballon d’Or format) and there is little reasoning or competition in someone getting the fifth. Over the course of the past 12 months or so, Ronaldo has led Portugal to European Championships, won La Liga and Champions League with Real Madrid (double by club after 59 years) – and then there are some at the Bernabeu who have the nerve to whistle him!', '2017-06-06 00:00:00', 1, 'gallery/article/21.jpg', 0, 0, '6'),
(25, 'India beat Nepal 2-0 in Mumbai: Match highlights and as it happened', 'nepal', 'national news', 'nepal', 'asdasd', 'India were the better team for most of the match but were unable to find a goal to show. It was Sandesh Jinghan who scored the goal that gave them the lead and Jeje later made it two.', 'India were expected to come out as winners when it was announced that Nepal would be travelling for a friendly in place of Lebanon. India were the better side for most of the match but the Nepalese players did give them a few scares. That is a credit to a team that lack proper training facilities in their home country. Robin Singh wasted quite a few chances but Jejeâ€™s love story with Mumbai continued as he scored another goal in India colours. India now play Kyryz Republic in the AFC Asian Cup qualifiers June 13 at Bengaluru. India 2-0 Nepal: Match highlights  FULL TIME: India beat Nepal 2-0. India were disciplined for the better part of the match and, save for that horror that keeper Gurpreet Singh Sandhu gave the defence towards the end of the first half, this has been a straightforward win for them. It may only be against Nepal, who are minnows on the basis of the rankings, but this match shows a marked difference in Indiaâ€™s confidence going into the match 86 min: Jeje takes a shot on the volley and Limbu makes another good save. The Nepalese keeper has been brilliant throughout the game 77 min: GOAL!! Jeje makes it two for India. And the attacks bear fruit, Rafique runs down the right and provides a ball along the ground into the middle, the Nepalese defence is completely caught out and Jeje takes it first time and turns it into the bottom corner 74 min: Wave after wave of Indian attacks now, it will be a surprise if Jhinganâ€™s strike ends up being the only goal that India score in the match 67 min: Red Card for Biraj Maharjan of Nepal and it is a free-kick just outside the box for India. It crashes into the box 64 min: Yellow card for Sandesh Jhingan, he has been buzzing since scoring that goal, needs to calm down a little 60 min: GOAL!! Sandesh Jhingan puts India in the lead. And finally it is in for India. Jackichand Singh lofts a ball into the box and Jeje, who is completely unmarked, chests it down and Jhingan takes volleys on the bounce and puts India ahead 57 min: Sandhu releases the ball forward and Narzary manages to get away from the Nepalese full back to put a low ball into the middle, Jeje takes the shot first time and yet again it is Kiran Kumar Limbu to the rescue for Nepal. India could have been at least five goals up by now 55 min: Big chance for India! Anas connected from a corner with his head but the Nepalese keeper keeps it out brilliantly 52 min: A Nepalese shot from distance and Gurpreet Singh Sandhu had to make a brilliant save. Things are back to normal it seems for the man with the armband for India 50 min:  The ball falls kindly for Jeje and he takes the shot first time well outside the box. A good connection and it had the direction but there was not enough power behind it and the Nepalese keeper holds on to it 47 min: Nepal restart the match, India retake possession straight away but yet again, they are unable to find a good shot on target HALF TIME: India have been the better side but that was an incredible blunder from the only Indian player to ever play for a top flight club. It will be something that he wonâ€™t be too proud of. Robin Singh also will be ruing some missed chances from the first half. India have shown some incredible fluidity in midfield and have been solid in defence but they are missing the clinical touch in the final third. Nepal, on the other hand, seem to have surprised India with their counter-attacks towards the end. India will also be worried about Roland Borges, who was taken off in the first half 45 min: Oh what a miss and India breath easy! A mistake in judgement for Gurpreet as he dashes forward for a ball that the Nepalese striker was chasing, he comes out of the box but does not clear the ball properly and suddenly, there is an open goal to put the ball into but Nepal miss it. 44 min: Well Nepal switched gears a little bit, pass the ball around in front of the Indian defence. A shot comes at the end of that attack from distance but it is straight into the hands of the keeper 42 min: Nepal now sitting deep and so the keeper gets his shoelaces tied leisurely. Nepal would be the happier team if the first half ends goalless 34 min: Jackichand puts it into the box and Robin Singh meets it with the head, it goes wide off the post 32 min: An absolutely beautiful move from India as Eugeneson makes a run through the middle, plays a one two with Robin Singh, gives it to Jeje and back to Eugeneson in the box, his shot is taken under pressure bit goes wide. That was a world-class move from India but no goal at the end of it 29 min: Eugeneson almost makes a difference as soon as he comes on, lofts a ball into the box and it comes to Robin but his shot sails above the crossbar 28 min: Change for India, Roland Borges taken off for Eugeneson Lyngdoh 23 min: Another big chance there for India, Jackichand sends in a cross from the right and Robin is in the middle. The latter rises above the defender and gets to the ball first but his header is wide. Robin has wasted a few good chances now 21 min: Sandhu makes no mistake with a shot at goal made by Nepal. That was the first real attempt made by the visitors. Thus far, it has been India on top, but no goals yet 15 min: A good move from India and the ball reaches Roland Borges, he was put under pressure  and had to go for the volley. It comes off the foot of a Nepalese defender and out for a corner. The first corner leads to a second and in the second, Borges puts the cross in and Sandesh Jhingan goes for it, Nepalese keeper Kiran Kumar Limbu is the first to it and Jhingan gives away a free kick for colliding with the former 8 min: Robin Singh was released but he had to take the shot from a tight angle to the right of the goalkeeper, misses the far post 5 min: India kick-off proceedings at Mumbai, a reasonable crowd in the stadium and they make their presence known screaming â€˜Vande Mataramâ€™ at the top of their voices. Robin Singh goes down in the box in the fourth minute but referee does not point to the spot 6:52 pm: The teams are out on the pitch, the national anthems are being played, seconds away from kick-off 6:44 pm: So here are the starting XIs for the two side: ', '2017-06-11 19:52:39', 1, 'gallery/article/23.jpg', 0, 0, '12'),
(31, 'Alvaro Morata\'s agent suggests Manchester United transfer is close', 'asd', 'ad', 'transfer', 'asd', 'The forward is expected to complete a medical with United later this week', 'Alvaro Morataâ€™s agent has suggested that the Spaniard is on the verge of joining Manchester United, describing the club as â€œa very interesting optionâ€ while admitting that an â€œimportant proposalâ€ is in place.\r\n\r\nAs revealed by The Independent, United are hoping to bring Morata in for a medical this week after productive talks with Real Madrid took place over the weekend.\r\n\r\nWith veteran pair Zlatan Ibrahimovic and Wayne Rooney expected to leave the club before next season, Jose Mourinho has set his sights on bolstering his front line options at Old Trafford.', '2017-06-22 12:30:13', 1, 'gallery/article/12-06-2017-1497298024.jpg', 0, 0, '14');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `commenter` varchar(100) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `aid` int(11) NOT NULL,
  `cdate` date NOT NULL,
  `cstatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `commenter`, `cemail`, `comment`, `aid`, `cdate`, `cstatus`) VALUES
(1, 'Sandesh jonchhe', 'sjonchhe@outlook.com', 'Comment is not fing working!\n#fadeUp', 25, '2017-06-11', 1),
(2, 'Abhash Dc', 'Abhash@gmail.com', 'Lets JAVA bro!', 25, '2017-06-11', 1),
(3, 'Basanta Shahi', 'bsntashahi@outlook.com', 'Khoi k garne k garne!Jaad khaney ho jaad!', 25, '2017-06-11', 1),
(5, 'Sanjay Bhandari', 'sanajysutuwa@gmail.com', 'Hyaterika!Feri garxu ma!Jati garey ni feri garnu parxa suru dekhi.. :(', 25, '2017-06-11', 1),
(28, 'Sandesh Jonchhe', 'sjonchhe@outlook.com', 'Nepal!Nepal!Nepal!', 11, '2017-06-12', 1),
(29, 'Sandesh', 'sjonchhe@outlook.com', 'Hala MAdrid!', 20, '2017-06-12', 1),
(30, 'Ronaldo', 'cristiano@realmadrid.com', 'Hala Madrid amigo!Gracias!', 20, '2017-06-12', 1),
(31, 'James Rodriguez', 'james@realmadrid.com', 'Will miss this club!Adios amigos!', 20, '2017-06-12', 1),
(32, 'Alvaro Morata', 'morata@realmadrid.com', 'Wait!U r moving too??Where u going to amigo??BTW I might go to United!Mourinho,here comes ur saviour!', 20, '2017-06-12', 1),
(33, 'Mourinho', 'mourinho@manutd.com', 'Come soon boys!Lets win some trophies!', 20, '2017-06-12', 1),
(34, 'Alvaro Morata', 'morata@realmadrid.com', 'I might make a pitstop at Chelsea though!', 20, '2017-06-12', 1),
(35, 'Ram', 'ram@gmail.com', 'JayNepal!', 11, '2017-06-12', 1),
(36, 'Antonio Conte', 'conte@chelsea.com', 'Get Well soon man!', 19, '2017-06-15', 1),
(37, 'jkdas', 'james@realmadrid.com', 'jkaskdaYour Comment...', 25, '2017-06-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `cid` int(11) NOT NULL,
  `cname` varchar(150) NOT NULL,
  `cdescription` varchar(500) NOT NULL,
  `chistory` varchar(500) NOT NULL,
  `cstatus` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`cid`, `cname`, `cdescription`, `chistory`, `cstatus`) VALUES
(1, 'English Premier League', 'The Premier League is an English professional league for men\'s association football clubs. At the top of the English football league system, it is the country\'s primary football competition. Contested by 20 clubs, it operates on a system of promotion and relegation with the English Football League (EFL; known as \"The Football League\" before 2016/17', 'Despite significant European success in the 1970s and early 1980s, the late \'80s marked a low point for English football. Stadiums were crumbling, supporters endured poor facilities, hooliganism was rife, and English clubs were banned from European competition for five years following the Heysel Stadium disaster in 1985.[11] The Football League First Division, the top level of English football since 1888, was behind leagues such as Italy\'s Serie A and Spain\'s La Liga in attendances and revenues,', 1),
(2, 'La Liga', 'The Primera Division, commonly known as La Liga[b] and as La Liga Santander for sponsorship reasons,[1] is the top professional association football division of the Spanish football league system. Administrated by the Liga de Futbol Profesional (LFP), La Liga is contested by 20 teams, with the three lowest-placed teams relegated to the Segunda Division and replaced by the top two teams in that division plus the winner of a play-off.', 'n April 1927, Josï¿½ Marï¿½a Acha, a director at Arenas Club de Getxo, first proposed the idea of a national league in Spain. After much debate about the size of the league and who would take part, the Real Federaciï¿½n Espaï¿½ola de Fï¿½tbol eventually agreed on the ten teams who would form the first Primera Divisiï¿½n in 1929.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `epl_table`
--

CREATE TABLE `epl_table` (
  `eid` int(11) NOT NULL,
  `ephoto` varchar(150) NOT NULL,
  `ename` varchar(300) NOT NULL,
  `emp` varchar(300) NOT NULL,
  `ew` varchar(50) NOT NULL,
  `ed` varchar(50) NOT NULL,
  `el` varchar(50) NOT NULL,
  `egf` varchar(50) NOT NULL,
  `ega` varchar(50) NOT NULL,
  `egd` varchar(50) NOT NULL,
  `epts` varchar(50) NOT NULL,
  `estatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epl_table`
--

INSERT INTO `epl_table` (`eid`, `ephoto`, `ename`, `emp`, `ew`, `ed`, `el`, `egf`, `ega`, `egd`, `epts`, `estatus`) VALUES
(1, 'chelsealogo.png', 'Chelsea', '38', '30', '3', '5', '85', '33', '52', '93', 1),
(2, 'manutdlogo.png', 'Manchester United', '38', '18', '15', '5', '54', '29', '25', '69', 1),
(3, 'mancitylogo.png', 'Manchester City', '38', '23', '9', '6', '80', '39', '41', '78', 1),
(4, 'liverpoollogo.png', 'Liverpool', '38', '22', '10', '6', '78', '42', '36', '75', 1),
(5, 'tottenhamlogo.png', 'Tottenham', '38', '26', '8', '4', '86', '26', '60', '86', 1),
(6, 'arsenallogo.png', 'Arsenal', '38', '23', '6', '9', '77', '44', '33', '75', 1),
(7, 'southamptonlogo.png', 'Southampton', '38', '12', '10', '16', '41', '48', '-7', '46', 1),
(8, 'evertonlogo.png', 'Everton', '38', '17', '10', '11', '62', '44', '18', '61', 1),
(9, 'bournemouthlogo.png', 'Bournemouth', '38', '12', '10', '16', '55', '67', '-12', '46', 1),
(10, 'leicesterlogo.png', 'Leicester City F.C.', '38', '12', '8', '18', '48', '63', '-15', '44', 1),
(11, 'westbromlogo.png', 'West Brom', '38', '12', '9', '17', '43', '51', '-8', '45', 1),
(12, 'westhamlogo.png', 'West Ham', '38', '12', '9', '17', '47', '64', '-17', '45', 1),
(13, 'stokecitylogo.png', 'Stoke City', '38', '11', '11', '16', '41', '556', '-15', '44', 1),
(14, 'crystalpalacelogo.png', 'Crystal Palace', '38', '12', '5', '21', '50', '63', '-13', '41', 1),
(15, 'swansealogo.png', 'Seansea City', '38', '12', '5', '21', '45', '70', '-25', '41', 1),
(16, 'burnleylogo.png', 'Burnley', '38', '11', '7', '20', '39', '55', '-16', '40', 1),
(17, 'watfordlogo.png', 'Watford', '38', '11', '7', '20', '40', '68', '-28', '40', 1),
(18, 'hullcitylogo.png', 'Hull City', '38', '9', '7', '22', '37', '80', '-43', '34', 1),
(19, 'middleslogo.png', 'Middlesbrouigh', '38', '5', '13', '20', '27', '53', '-26', '28', 1),
(20, 'sunderlandlogo.png', 'Sunderland', '38', '6', '6', '26', '29', '69', '-40', '24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(11) NOT NULL,
  `gtype` varchar(150) NOT NULL,
  `gtitle` varchar(300) NOT NULL,
  `vpath` varchar(300) NOT NULL,
  `gdescription` varchar(1000) NOT NULL,
  `gpath` varchar(250) NOT NULL,
  `gdate` date NOT NULL,
  `gstatus` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `gtype`, `gtitle`, `vpath`, `gdescription`, `gpath`, `gdate`, `gstatus`) VALUES
(4, 'gallery', 'Chelsea wins EPL', 'Chelsea', 'Chelsea wins the Englih Premier league after the new boss Conte takes over', 'gallery/11-06-2017-1497205096.jpg', '2017-06-11', 1),
(5, 'gallery', 'Santiago Bernabeu gets renovated', 'Realmadird', 'Santiago Bernabeu gets renovated after the successes in all the competition', 'gallery/11-06-2017-1497205114.jpg', '2017-06-11', 1),
(6, 'gallery', 'United Players on crutches', 'Manunited', '5 of the first team players of Manchester United on cruteches in the Europa finals ', 'gallery/11-06-2017-1497205123.jpg', '2017-06-11', 1),
(7, 'gallery', ' Real Madrid\'s domination of Juventus for their second straight Champions League title.', '', ' Real Madrid\'s domination of Juventus for their second straight Champions League title.', 'gallery/21.jpg', '0000-00-00', 1),
(24, 'video', 'Real Madrid All 173 Goals 2016/2017', 'https://www.youtube.com/embed/xBzxOmo21D4?ecver=2', 'Highlights of Juventus vs Real Madrid', '', '0000-00-00', 1),
(25, 'video', 'Singapore vs Argentina 0-6 - All Goals & Extended Highlights - Friendly 13/06/2017', 'https://www.youtube.com/embed/zHyho37VRFg?ecver=2', '', '', '0000-00-00', 1),
(45, 'gallery', 'Chelsea lifts the trophy', '', 'Chelsea wins the English Premier League', 'gallery/12-06-2017-1497297888.jpg', '2017-06-12', 1),
(46, 'gallery', 'India wins against Nepal ', '', '', 'gallery/12-06-2017-1497297955.jpg', '2017-06-12', 1),
(49, 'video', 'asda', 'https://www.youtube.com/embed/ek33EPm022Y?ecver=2', 'asda', 'gallery/19-06-2017-1497880712.jpg', '2017-06-19', 1),
(50, 'video', 'France Vs England', 'https://www.youtube.com/embed/3-hLJYkCf3w?ecver=2', '', 'gallery/19-06-2017-1497880765.jpg', '2017-06-19', 1),
(85, 'video', '', 'https://www.youtube.com/embed/U2o3AlT8yjc?ecver=2', '', 'gallery/23-06-2017-1498245877Football.png', '2017-06-23', 1),
(86, 'gallery', '', '', '', 'gallery/23-06-2017-1498251049Image-paypal.png', '2017-06-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `laliga_table`
--

CREATE TABLE `laliga_table` (
  `lid` int(11) NOT NULL,
  `lphoto` varchar(150) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `lmp` varchar(50) NOT NULL,
  `lw` varchar(50) NOT NULL,
  `ld` varchar(50) NOT NULL,
  `ll` varchar(50) NOT NULL,
  `lgf` varchar(50) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `lgd` varchar(50) NOT NULL,
  `lpts` varchar(50) NOT NULL,
  `lstatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laliga_table`
--

INSERT INTO `laliga_table` (`lid`, `lphoto`, `lname`, `lmp`, `lw`, `ld`, `ll`, `lgf`, `lga`, `lgd`, `lpts`, `lstatus`) VALUES
(1, 'rmadridlogo.png', 'Real Madrid', '38', '29', '6', '3', '106', '41', '65', '93', 1),
(2, 'barcalogo.png', 'FC Barcelona', '38', '28', '6', '4', '116', '37', '79', '90', 1),
(3, 'amadridlogo.png', 'Atletico Madrid', '38', '23', '9', '6', '70', '27', '43', '78', 1),
(4, 'villareallogo.png', 'Villareal', '38', '19', '10', '9', '56', '33', '23', '67', 1),
(5, 'sociedadlogo.png', 'Real Sociedad', '38', '19', '7', '12', '59', '53', '6', '64', 1),
(6, 'bilbaologo.png', 'Ath. Bilbao', '38', '19', '6', '13', '53', '43', '10', '63', 1),
(7, 'espanyollogo.png', 'Espanyol', '38', '15', '11', '12', '49', '50', '-1', '56', 1),
(8, 'alaveslogo.png', 'Alaves', '38', '14', '13', '11', '41', '43', '-2', '55', 1),
(9, 'eibarlogo.png', 'Eibar', '38', '15', '9', '14', '56', '51', '5', '54', 1),
(10, 'malagalogo.png', 'Malaga', '38', '12', '10', '16', '49', '55', '-6', '46', 1),
(11, 'valencialogo.png', 'Valencia', '38', '13', '7', '18', '56', '65', '-9', '46', 1),
(12, 'celtavigologo.png', 'Celta Vigo', '38', '13', '6', '19', '53', '69', '-16', '45', 1),
(13, 'laspalmaslogo.png', 'Las Palmas', '38', '10', '9', '19', '53', '74', '-21', '39', 1),
(14, 'realbetislogo.png', 'Real Betis', '38', '10', '9', '19', '41', '64', '-23', '39', 1),
(15, 'deportivologo.png', 'Deportivo', '38', '8', '12', '18', '43', '61', '-18', '36', 1),
(16, 'leganeslogo.png', 'Leganes', '38', '8', '11', '19', '36', '55', '-19', '35', 1),
(17, 'sportinggijonlogo.png', 'Sporting Gijon', '38', '7', '10', '21', '42', '72', '-30', '31', 1),
(18, 'osasunalogo.png', 'Osasuna', '38', '4', '10', '24', '40', '94', '-54', '22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `mid` int(11) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `mdescription` varchar(250) NOT NULL,
  `morder` tinyint(4) NOT NULL,
  `mparent` tinyint(4) NOT NULL,
  `mstatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`mid`, `mname`, `mdescription`, `morder`, `mparent`, `mstatus`) VALUES
(1, 'Home', 'Contains all sorts of news related to website.sads', 1, 0, 1),
(2, 'League Table', 'League table containing epl and laliga standing', 2, 0, 1),
(3, 'Transfers', 'Tranfer news and gossips/rumours.\r\n', 4, 9, 1),
(7, 'Gallery', 'Gallery containing all the photos and videos', 10, 0, 1),
(8, 'Fifa', 'News on the EA Sports fifa game', 4, 9, 1),
(9, 'News', 'All the news articles', 3, 0, 1),
(13, 'National', 'News about national team', 14, 9, 1),
(34, 'English Premier League', 'Epl Standing', 18, 2, 1),
(35, 'Laliga Santander', 'Laliga standings', 19, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pposition` varchar(50) NOT NULL,
  `pleague` varchar(150) NOT NULL,
  `pteam` varchar(200) NOT NULL,
  `pnationality` varchar(100) NOT NULL,
  `pdob` varchar(50) NOT NULL,
  `page` varchar(10) NOT NULL,
  `pfname` varchar(150) NOT NULL,
  `plname` varchar(50) NOT NULL,
  `psnum` int(11) NOT NULL,
  `pfoot` varchar(15) NOT NULL,
  `pheight` varchar(50) NOT NULL,
  `ppath` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`pid`, `pname`, `pposition`, `pleague`, `pteam`, `pnationality`, `pdob`, `page`, `pfname`, `plname`, `psnum`, `pfoot`, `pheight`, `ppath`) VALUES
(1, 'Cristiano Ronaldo', 'Forward', 'La liga', 'Real Madrid', 'Portugese', '1985-02-05', '32', 'Cristiano Ronaldo dos Santos Aveiro', '', 7, 'Right', '	1.85 m (6 ft 1 in)', 'gallery/players/cristiano.jpg'),
(4, 'Lionel Messi', 'Forward', 'La Liga', 'Barcelona', 'Argentina', '1987-06-24', '29', 'Lionel AndrÃ©s Messi', 'a', 10, 'Left', '1.70 m (5 ft 7 in)', 'gallery/players/messi.jpg'),
(5, 'Eden Hazard', 'Forward', 'English Premier League', 'Chelsea', 'Belgium', '1991-01-07', '26', 'Eden Michael Hazard', 'a', 10, 'Right', '1.73 m (5 ft 8 in)', 'gallery/players/hazard.jpg'),
(7, 'Gareth Bale', 'Forward', 'La liga ', 'Real Madrid', 'Welsh, British', '1989-07-16', '27', 'Gareth Frank Bale', '', 7, 'Left', '1.83 m (6 ft 0 in)', 'gallery/players/bale.jpg'),
(12, 'SandeshJ', 'GoalKeeper', 'La LIga', 'Real Madrid', 'Nepali', '03/18/1996', '21', 'Sandesh Jonchhe', '', 23, 'Right', '5ft 11inch', 'gallery/players/17-06-2017-1497703834.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `tid` int(11) NOT NULL,
  `tname` varchar(150) NOT NULL,
  `tdescription` varchar(550) NOT NULL,
  `tcompetition` varchar(550) NOT NULL,
  `tstatus` tinyint(4) NOT NULL,
  `tpath` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`tid`, `tname`, `tdescription`, `tcompetition`, `tstatus`, `tpath`) VALUES
(4, 'Manchester United F.C.', 'Manchester United Football Club is a professional football club based in Old Trafford, Greater Manchester, England, that competes in the Premier League, the top flight of English football. Nicknamed \"the Red Devils\", the club was founded as Newton Heath LYR Football Club in 1878, changed its name to Manchester United in 1902 and moved to its current stadium, Old Trafford, in 1910.', 'English Premier League', 1, '../gallery/manchesterutd/manutdlogo.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contact` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `uabout` text NOT NULL,
  `udescription` varchar(300) NOT NULL,
  `ustatus` tinyint(1) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `upath` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `first_name`, `last_name`, `email`, `contact`, `password`, `address`, `uabout`, `udescription`, `ustatus`, `utype`, `upath`) VALUES
(31, 'sjonchhe', 'Sandesh', 'Jonchhe', 'sjonchhe@outlook.com', '9849128762', 'apple', 'Maharajgunj', 'I\'m currently a student at Bachelors level studying BSc CSIT at St.Lawrence College.', 'Web Designer/Developer', 3, 'Admin', 'gallery/profile/asd.jpg'),
(40, 'sandiij', 'Sandesh', 'Jonchhe', 'sandeshjon@gmail.com', '9813068813', 'apple', 'Maharajgunj', 'dkasmdia msdmad masmdamd ksaj dmsakjdjs adjsadk jasndkjas dkandjadnjksandkjadjandkjasn djndakasdaddkasmdia msdmad masmda adjjsandkjsan kjdsn', 'Web Developer', 1, 'Admin', 'gallery/profile/sad.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `epl_table`
--
ALTER TABLE `epl_table`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `laliga_table`
--
ALTER TABLE `laliga_table`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `epl_table`
--
ALTER TABLE `epl_table`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `laliga_table`
--
ALTER TABLE `laliga_table`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
