CREATE DATABASE whiteboard

CREATE TABLE person(
  person_id int(10) NOT NULL,   
  f_name varchar(15) default NULL, 
  l_name varchar(15) default NULL,    
  phone varchar(12) default NULL,
  email varchar(25) default NULL,
  username varchar(20) DEFAULT NULL,
  password varchar(20) DEFAULT NULL,
  PRIMARY KEY (Student_id),
  UNIQUE KEY `UNIQUE_UserUsername` ('username'),
);

CREATE TABLE professor(
  professor_id int(8) NOT NULL,   
  person_id int(10) NOT NULL,
  course_id int (8) NOT NULL,
  PRIMARY KEY (professor_id),
  KEY 'FK_PersonProfessor' ('person_id'),
  CONSTRAINT 'FK_PersonProfessor' FOREIGN KEY ('person_id') REFERENCES 'person' ('person_id'),
KEY 'FK_CourseProfessor' ('course_id'),
  CONSTRAINT 'FK_PersonProfessor' FOREIGN KEY ('course_id') REFERENCES 'courses' ('course_id')
);

CREATE TABLE student(
  student_id int(8) NOT NULL,   
  person_id int(10) NOT NULL,
  PRIMARY KEY (student_id),
  KEY 'FK_PersonStudent' ('person_id'),
  CONSTRAINT 'FK_PersonStudent' FOREIGN KEY ('person_id') REFERENCES 'person' ('person_id')
);

CREATE TABLE admin(
  user_id int(8) NOT NULL,  
  person_id varchar(20) DEFAULT NULL,
  PRIMARY KEY (user_id),
  KEY 'FK_PersonUser' ('person_id'),
  CONSTRAINT 'FK_PersonUser' FOREIGN KEY ('person_id') REFERENCES 'person' ('person_id')
);

CREATE TABLE courses(
  course_id int(8) NOT NULL,  
  name varchar(20) DEFAULT NULL,
  credits int(2) DEFAULT NULL,
  PRIMARY KEY (course_id)
);

CREATE TABLE tasks(
  student_id int(8) NOT NULL,  
  course_id int (8) NOT NULL,
  task varchar(100) DEFAULT NULL,
  grade int(3) DEFAULT NULL,
  KEY 'FK_StudentCourses1' ('student_id'),
  CONSTRAINT 'FK_StudentCourses1' FOREIGN KEY ('student_id') REFERENCES 'student' ('student_id'),
  KEY 'FK_StudentCourses2' ('course_id'),
  CONSTRAINT 'FK_StudentCourses2' FOREIGN KEY ('course_id') REFERENCES 'courses' ('course_id')
);

CREATE TABLE message(
  message_id int(8) NOT NULL AUTO_INCREMENT,
   student_idSent int(8) DEFULT NULL,
   student_idGet int(8) DEFULT NULL,
   professor_idSent int(8) DEFULT NULL,
   professor_idGet int(8) DEFULT NULL,
  PRIMARY KEY (message_id)
);