# 1. first drop comment and then attraction 
# 2. execute the whole query 

#DROP TABLE comment;
#DROP TABLE attractions;

#SELECT * FROM comment;
#SELECT * FROM attractions;
#show databases;

use mirrorad;
CREATE TABLE `attractions` (
`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`body` varchar(50000) NOT NULL,
`title` varchar(256) NOT NULL,
`state` varchar(25) NOT NULL,
`image` TEXT NOT NULL
);

CREATE TABLE `comment` (
`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`text` varchar(256) NOT NULL,
`att_id` int(11),
FOREIGN KEY (att_id) REFERENCES attractions(id) ON UPDATE CASCADE
);

INSERT INTO `attractions`(id,body,title,image,state)
VALUES(10,'Be ready to be involved with the experience of a lifetime with
            African continent animal.If your kids love Disney Movie "The
            Lion King", they will love this exibit. Some of the Animals include
            lions, hyenas and honey badger etc. We also have fun Safari ride
            that gives your aerial view of the beautiful African Animals ',"Fort Wayne Zoo",'childrenzoo.jpg',"IN");

INSERT INTO `attractions`(id,body,title,image,state)
VALUES(20,"Explore the beautfiful nature of Indiana Dunes. Relax on the beach
            or take a calm walk in the Indiana Dunes State Park. People are often
            suprised by the majestic offering of the Indiana Dunes.","Indiana Dunes",'indianadunes.jpg',"IN");

INSERT INTO `attractions`(id,body,title,image,state)
VALUES(30,"The Eiteljorg Museum of American Indians and Western Art is located in  heart of Indianapolis downtown. The museum has the finest
collection of Native contemporary art in the world. We are proud to
offer engaging exibitions to promote our founder, Harrison Eiteljorg's
vision to acknowledge art and culture of Native American and American
west.","Eiteljorg Museum of American Indians and Western Art",'bambole.jpg',"IN");

INSERT INTO `attractions`(id,body,title,image,state)
VALUES(40,"The one and only, most incredible, largest ball of Twine in the world. 
Located in Cawker City, Kansas. It is free for all to see, 24 hours a day, 7 days a week. The ball began its journey back in 1953 when Frank Stoeber started it. Within 4 years it stood over 8 feet tall and weighed 5,000 pounds. As of September 2013, 
it weighed 19,873 pounds. Stoeber gave the giant ball to Cawker City, Kansas back in 1961. You may wonder how the giant ball becamse so giant! Well, it's not that theres some crazy twiners adding to it (though maybe there are!). 
Each August, Cawker City holds a <b>twine-a-thon</b> that allows residents and tourists to add more twine to the giant ball! So if you want to see one of the largest balls in the world, come to Cawker City, Kansas and get your twine on!","Largest Twine Ball in the World",'twine.jpg',"KS");

INSERT INTO `attractions`(id,body,title,image,state)
VALUES(50,"S.P. Dinsmoor, a retired schoolteacher and Civil War veteran, 
began building a unique 11-room log cabin, with logs up to 27 feet long in 1891. 
In 1907, he finished and then began building the garden that would surround his him for 
the next 22 years. This garden was built from 113 tons of concrete and limestone, 
telling the story of the world's creation. There is plenty of variety to see and experience, 
from the 150 and more figures, various insects, and 40 foot-tall trees. Although the open hours at the Garden of Eden are limited, many of the attractions this has to offer can be seen from the outside as well. 
It is certainly a worthwhile visit! ","Garden of Eden",'gardenofeden.jpg',"KS");

INSERT INTO `attractions`(id,body,title,image,state)
VALUES(60,"Safari Zoological Park is a private zoo and animal rescue facility located in the city of Caney, 
Kansas. Safari Zoological Park offers multiple exhibits including, but not limited to: Tigers, Tiger Pups, Lions, Bears, Cats, Primates, Wolves. Safari Zoological Park's mission statement is to 'showcase the awesomeness of our God in the individual wonder and uniqueness of all His creation.'","Safari Zoological Zoo",'lion.jpg',"KS");





