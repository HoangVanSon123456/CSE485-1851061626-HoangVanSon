INSERT INTO `account`(`name`, `age`, `address`, `email`, `username`, `password`, `carrer`, `phone`, `description`,`get_in_touch`, `image`) 
VALUES ('Ta Anh Tu','20','Ha Noi','tu1602@gmail.com','Tu1602','160200','Student','0363214758','My name is Ta Anh Tu. I’m 20 years old and I’m single. I have just graduated from university in August with the major in IT. I got 15 months experience as an internship at A company. I like reading books and listening to music. I’m a careful and hard-working person. I’m eager to learn new things and willing to work in team. I easily adapt to with new working environment and take initiative in work.','In the process of designing and building the website, it may has some errors. I hope to receive your opinions and comments for the better improvement of my website. You can also contact me on the social network below.
Sincerely Thank you!',''),
('Hoang Van Son','20','Ha Noi','son1234@gmail.com','Son1234','1234','Student','0393667585','My name is Hoang Van Son. I’m 20 years old and I’m single. I have just graduated from university in August with the major in IT. I got 15 months experience as an internship at B company. I like reading books and playing soccer. I’m a careful and hard-working person. I’m eager to learn new things and willing to work in team. I easily adapt to with new working environment and take initiative in work.','In the process of designing and building the website, it may has some errors. I hope to receive your opinions and comments for the better improvement of my website. You can also contact me on the social network below.
Sincerely Thank you!','');
INSERT INTO `account`(`name`, `age`, `address`, `email`, `carrer`, `phone`, `description`,`get_in_touch`, `image`) 
('GroupTS','20','Ha Noi','GroupTS@gmail.com','Student','0953213358','We are Group TS. We are studying at Thuy Loi university to graduate IT major. We got 15 months experience as an internship at A company. We are careful and hard-working people. We are eager to learn new things and willing to work in team. We easily adapt to with new working environment and take initiative in work.','In the process of designing and building the website, it may has some errors. We hope to receive your opinions and comments for the better improvement of our website. You can also contact on the social network below
Sincerely Thank you!','');

INSERT INTO `skills`(`skillId`, `name`, `parameter`) 
VALUES ('1','HTML','75%'),
('2','CSS','65%'),
('3','PHP','60%'),
('4','JAVASCRIPT','80%');
('5','SQL','65%')


INSERT INTO `achievement`(`achievementID`, `name`, `parameter`) 
VALUES ('1','WORKS COMPLETED','45'),
('2','MONTHS OF EXPERIENCE','15'),
('3','TOTAL CLIENTS','100'),
('4','AWARDS WON','10');

INSERT INTO `services`(`serviceId`, `name`, `decription`,`userId`) 
VALUES ('1','WEB DESIGN','Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development rather than software development.',1),
('2','WEB DEVELOPMENT','Web development is the building and maintenance of websites; it’s the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience.',1),
('3','ADVERTISING','Advertising is a means of communication with the users of a product or service. Advertisements are messages paid for by those who send them and are intended to influence people who receive them.',1),
('4','MOBILE APP DESIGN','Mobile app design is the task of designing mobile applications. Even though mobile apps have a wide variety of uses, what unifies them is the need for optimal usability, accessibility, engagement, and overall user experience.',1),
('5','GRAPHIC DESIGN','Graphic design is defined as “the art and practice of planning and projecting ideas and experiences with visual and textual content.” In other terms, graphic design communicates certain ideas or messages in a visual way.',1),
('6','MARTKETING SERVICES','Services marketing is a broad category of marketing strategies focused on selling anything that is not a physical product. This includes everything from personal services like medical care and spa treatments, to the rental of vehicles and spaces...',1);

INSERT INTO `history`(`historyId`, `name`, `content`, `userId`) VALUES 
("1","FACEBOOK","Facebook is a website which allows users, who sign-up for free profiles, to connect with friends, work colleagues or people they don't know, online. It allows users to share pictures, music, videos, and articles, as well as their own thoughts and opinions with however many people they like.",""),
("2","GOOGLE","Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, software, and hardware.It is considered one of the Big Five technology companies in the U.S.",""),
("3","YOUTUBE","YouTube allows users to upload, view, rate, share, add to playlists, report, comment on videos, and subscribe to other users. It offers a wide variety of user-generated. Available content includes video clips, music videos, live streams, and other content such as video blogging, and educational videos.",""),
("4","SAMSUNG","Samsung, South Korean company that is one of the world's largest producers of electronic devices. Samsung specializes in the production of a wide variety of consumer and industry electronics, including appliances, digital media devices, semiconductors, memory chips, and integrated systems.","");

INSERT INTO `education_history`(`educationId`, `name`, `content`, `year_start`, `course_time`) VALUES 
("1","Visual Art & Design","Visual Art includes many forms such as drawing, painting, sculpture and photography and artists work across various mediums from textiles, metal and woodwork, to found objects, 3D printing and digital media.","2013","2 Years"),
("2","Product Designer","Product designers are in charge of the entire product creation process. They are ultimately responsible for discovering and defining a problem, and then empathically designing a solution.","2015","1 Year"),
("3","Web Designer","Web designers plan, create and code internet sites and web pages, many of which combine text with sounds, pictures, graphics and video clips. A web designer is responsible for creating the design and layout of a website or web pages","2016","2 Years"),
("4","Graphic Designer","Graphic designers create visual concepts, using computer software or by hand, to communicate ideas that inspire, inform, and captivate consumers. They develop the overall layout and production design for applications such as advertisements, brochures, magazines, and reports.","2018","3 Years");

INSERT INTO `teams`(`teamId`, `name`, `decription`) VALUES (1,'TA ANH TU','I am highly organized. I always take notes, and I use a series of tools to help myself stay on top of deadlines. I like to keep a clean workspace and create a logical filing method so I’m always able to find what I need. I find this increases efficiency and helps the rest of the team stay on track, too. In my last role, I created a new filing process that increased departmental efficiency 25%.'),
(2,'Hoang Van Son','I am results-oriented, constantly checking in with the goal to determine how close or how far away we are and what it will take to make it happen. I find this pressure inspiring and a great motivator for the rest of the team. In fact, over the past year, I was able to help my team shorten our average product time to market by two weeks');