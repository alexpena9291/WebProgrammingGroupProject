CREATE DATABASE IF NOT EXISTS whiteboard;
USE whiteboard;

INSERT INTO person VALUES (1, 'Ken', 'Ryumae', '8597772672', 'ken.ryumae862@topper.wku.edu', 'kenryumae', 'password');
INSERT INTO person VALUES (2, 'Alex', 'Pena', '2705291692', 'martin.pena482@topper.wku.edu', 'alexpena', 'Goozy777');
INSERT INTO person VALUES (3, 'Jackson', 'Chumbler', '1234567890', 'jackson.chumbler283@topper.wku.edu', 'jacksonchumbler', 'jc123');
INSERT INTO person VALUES (4, 'Tige', 'Littlefield', '2228377186', 'tige.littlefield163@topper.wku.edu', 'tigelittlefield', 'TIGE');
INSERT INTO person VALUES (5, 'Izze', 'Hedrick', '6573642839', 'izze.hedrick666@topper.wku.edu', 'izze', 'hedrick4');

INSERT INTO user_courses VALUES (1, 1, 'CS270: INTRO TO WEB PROGRAMMING', 12, 'Ismail Abumuhfouz', '');
INSERT INTO user_courses VALUES (1, 2, 'GERM102: ELEMENTARY GERMAN II', 94, 'Timothy Straubel', '');
INSERT INTO user_courses VALUES (1, 3, 'ENG300: WRITING IN THE DISCIPLINES', 89, 'Joseph Austin', '');
INSERT INTO user_courses VALUES (1, 4, 'STAT301: PROB/APPLIED STAT', 91, 'Melanie Autin', '');

INSERT INTO user_courses VALUES (2, 1, 'CS270: INTRO TO WEB PROGRAMMING', 12, 'Ismail Abumuhfouz', '');
INSERT INTO user_courses VALUES (2, 5, 'PHYS255: UNIVERSITY PHYSICS I', 83, 'Jason Boyles', '');
INSERT INTO user_courses VALUES (2, 3, 'ENG300: WRITING IN THE DISCIPLINES', 90, 'Joseph Austin', '');
INSERT INTO user_courses VALUES (2, 4, 'STAT301: PROB/APPLIED STAT', 94, 'Melanie Autin', '');

INSERT INTO course_announcements VALUES (1, "Welcome to Web Programming!");
INSERT INTO course_announcements VALUES (1, "You have an assignment due on 4/30!");
INSERT INTO course_announcements VALUES (4, "Test on Thursday!");
INSERT INTO course_announcements VALUES (2, "Wilkommen zu Deutsch 102!");
INSERT INTO course_announcements VALUES (3, "Paper due on Wednesday!");
INSERT INTO course_announcements VALUES (5, "Test on Tuesday!");