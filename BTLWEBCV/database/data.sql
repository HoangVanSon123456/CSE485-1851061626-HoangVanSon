INSERT INTO `users`(`name`, `age`, `address`, `email`, `username`, `password`, `carrer`, `phone`, `description`,`get_in_touch`, `image`) 
VALUES ('Ta Anh Tu','20','Ha Noi','tu1602@gmail.com','Tu1602','160200','Student','0363214758','My name is Ta Anh Tu. I’m 20 years old and I’m single. I have just graduated from university in August with the major in IT. I got 15 months experience as an internship at A company. I like reading books and listening to music. I’m a careful and hard-working person. I’m eager to learn new things and willing to work in team. I easily adapt to with new working environment and take initiative in work.','In the process of designing and building the website, it may has some errors. I hope to receive your opinions and comments for the better improvement of my website. You can also contact me on the social network below.
Sincerely Thank you!',''),
('Hoang Van Son','20','Ha Noi','son1234@gmail.com','Son1234','1234','Student','0393667585','My name is Hoang Van Son. I’m 20 years old and I’m single. I have just graduated from university in August with the major in IT. I got 15 months experience as an internship at B company. I like reading books and playing soccer. I’m a careful and hard-working person. I’m eager to learn new things and willing to work in team. I easily adapt to with new working environment and take initiative in work.','In the process of designing and building the website, it may has some errors. I hope to receive your opinions and comments for the better improvement of my website. You can also contact me on the social network below.
Sincerely Thank you!','');
INSERT INTO `users`(`name`, `age`, `address`, `email`, `carrer`, `phone`, `description`,`get_in_touch`) 
VALUES
('GroupTS','20','Ha Noi','GroupTS@gmail.com','Student','0953213358',
 'We are Group TS. We are studying at Thuy Loi university to graduate IT major. We got 15 months experience as an internship at A company. We are careful and hard-working people. We are eager to learn new things and willing to work in team. We easily adapt to with new working environment and take initiative in work.',
 'In the process of designing and building the website, it may has some errors. We hope to receive your opinions and comments for the better improvement of our website. You can also contact on the social network below
Sincerely Thank you!')

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

INSERT INTO `services`(`serviceId`, `name`, `decription`) 
VALUES ('1','WEB DESIGN','Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development rather than software development.',1),
('2','WEB DEVELOPMENT','Web development is the building and maintenance of websites; it’s the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience.'),
('3','ADVERTISING','Advertising is a means of communication with the users of a product or service. Advertisements are messages paid for by those who send them and are intended to influence people who receive them.',1),
('4','MOBILE APP DESIGN','Mobile app design is the task of designing mobile applications. Even though mobile apps have a wide variety of uses, what unifies them is the need for optimal usability, accessibility, engagement, and overall user experience.'),
('5','GRAPHIC DESIGN','Graphic design is defined as “the art and practice of planning and projecting ideas and experiences with visual and textual content.” In other terms, graphic design communicates certain ideas or messages in a visual way.'),
('6','MARTKETING SERVICES','Services marketing is a broad category of marketing strategies focused on selling anything that is not a physical product. This includes everything from personal services like medical care and spa treatments, to the rental of vehicles and spaces...');

INSERT INTO `history`(`historyId`, `name`, `content`,) VALUES 
("1","FACEBOOK","Facebook is a website which allows users, who sign-up for free profiles, to connect with friends, work colleagues or people they don't know, online. It allows users to share pictures, music, videos, and articles, as well as their own thoughts and opinions with however many people they like."),
("2","GOOGLE","Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, software, and hardware.It is considered one of the Big Five technology companies in the U.S."),
("3","YOUTUBE","YouTube allows users to upload, view, rate, share, add to playlists, report, comment on videos, and subscribe to other users. It offers a wide variety of user-generated. Available content includes video clips, music videos, live streams, and other content such as video blogging, and educational videos."),
("4","SAMSUNG","Samsung, South Korean company that is one of the world's largest producers of electronic devices. Samsung specializes in the production of a wide variety of consumer and industry electronics, including appliances, digital media devices, semiconductors, memory chips, and integrated systems.");

INSERT INTO `education_history`(`educationId`, `name`, `content`, `year_start`, `course_time`) VALUES 
("1","Visual Art & Design","Visual Art includes many forms such as drawing, painting, sculpture and photography and artists work across various mediums from textiles, metal and woodwork, to found objects, 3D printing and digital media.","2013","2 Years"),
("2","Product Designer","Product designers are in charge of the entire product creation process. They are ultimately responsible for discovering and defining a problem, and then empathically designing a solution.","2015","1 Year"),
("3","Web Designer","Web designers plan, create and code internet sites and web pages, many of which combine text with sounds, pictures, graphics and video clips. A web designer is responsible for creating the design and layout of a website or web pages","2016","2 Years"),
("4","Graphic Designer","Graphic designers create visual concepts, using computer software or by hand, to communicate ideas that inspire, inform, and captivate consumers. They develop the overall layout and production design for applications such as advertisements, brochures, magazines, and reports.","2018","3 Years");

INSERT INTO `teams`(`teamId`, `name`, `description`) VALUES (1,'Ta Anh Tu','I am highly organized. I always take notes, and I use a series of tools to help myself stay on top of deadlines. I like to keep a clean workspace and create a logical filing method so I’m always able to find what I need. I find this increases efficiency and helps the rest of the team stay on track, too. In my last role, I created a new filing process that increased departmental efficiency 25%.'),
(2,'Hoang Van Son','I am results-oriented, constantly checking in with the goal to determine how close or how far away we are and what it will take to make it happen. I find this pressure inspiring and a great motivator for the rest of the team. In fact, over the past year, I was able to help my team shorten our average product time to market by two weeks');

INSERT INTO `product`(`productId`, `name`, `product_date`) VALUES 
('1','One-page layout','16 April, 2015'),
('2','Login authentication ','25 May, 2015'),
('3','JavaScript quiz game','02 Dec, 2016'),
('4','Product landing page','26 June, 2017'),
('5','Survey form','28 Nov, 2018'),
('6','Countdown timer','12 July, 2019');

INSERT INTO `product_detail`(`pro_detailID`, `client`, `project_url`, `content`, `title`, `category`,`productID`) VALUES 
(1,'TS Company','www.tscompany.com','This project aims to recreate a pixel perfect design and make a one-page responsive layout. This is also a beginner-level project that allows freshers to test their newly acquired knowledge and skill level. 
You can use the Conquer template to build this project. This template comes loaded with a host of unique layouts. Also, it brings before you a series of challenges that Web Developers often face in real-world scenarios. As a result, you are pushed to experiment with new technologies like Floats and Flexbox to hone the implementation of CSS layout techniques.','One-page layout','Web Development','1'),

(2,'TS Company','www.tscompany.com','This is a beginner-level project that is great for honing your JavaScript skills. In this project, you will design a website’s login authentication bar – where users enter their email ID/username and password to log in to the site. Since almost every website now comes with a login authentication feature, learning this skill will come in handy in your future web projects and applications.','Login authentication ','Web Development','2'),

(3,'TS Company','www.tscompany.com','This web development project aims to create a JavaScript quiz game that can take multiple answers and show the correct result to users. While gaining JavaScript knowledge isn’t tricky, applying that knowledge in real-world scenarios is usually challenging. However, you can experiment with your skills by working on a small JavaScript-based quiz game. 
While building this project, you will not only deal with complex logic, but you will also learn a lot about data management and DOM manipulation. Depending on your JavaScript skills and ability to handle complex logic, you can make the game as simple or complicated as you want it to be!','JavaScript quiz game','Web Development','3'),

(4,'TS Company','www.tscompany.com','To develop a product landing page of a website, you must have sound knowledge of HTML and CSS. In this project, you will create columns and align the components of the landing page within the columns. You will have to perform basic editing tasks like cropping and resizing images, using design templates to make the layout more appealing, and so on. ','Product landing page','Web Development','4'),

(5,'TS Company','www.tscompany.com','Building a survey form or questionnaire is easy if you are proficient in HTML or HTML5. Even today, lots of companies use survey forms as a means of collecting relevant data about their target audience. 
In this project, you will have to design a full-fledged survey form that includes relevant questions like name, age, email, address, contact number, and other questions, depending on the type of company or organization you are shaping the form. This project will put to the test your webpage structuring skills','Survey form','Web Development','5'),

(6,'TS Company','www.tscompany.com','Another simple project on our list is a countdown timer or clock. For this project, you just need to create a simple webpage that can update the time every second. With JavaScript as its foundation, you can make the page more appealing by including start, stop, and pause buttons on the page.','Countdown timer','Web Development','6');



