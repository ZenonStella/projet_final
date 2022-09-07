DROP TABLE IF EXISTS users;
CREATE TABLE users(
        u-id   INT  Auto_increment,
        u-email     Varchar (250),
        u-password     Varchar (250),
        u-role     Varchar (250),
        PRIMARY KEY (u-id)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS missives;
CREATE TABLE missives(
        mi-id  INT   Auto_increment,
        mi-missive     Text,
        mi-responce     Bool ,
        mi-created_at     Date ,
        c-id_clients     INT,
        PRIMARY KEY (mi-id)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS meets;
CREATE TABLE meets(
        me-id  INT   Auto_increment,
        me-created_at     Date,
        me-meet_date     Date,
        me-meet_at     Time,
        me-responce     Bool,
        u-id_users     INT,
        c-id_clients     INT,
        PRIMARY KEY (me-id)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS articles;
CREATE TABLE articles(
        a-id   INT   Auto_increment,
        a-created_at     Date,
        a-posted_at     Date,
        a-edit_at     Date,
        a-titles     Varchar (250),
        a-preveiw     Varchar (250),
        a-text     Text,
        a-img     Varchar (250),
        u-id_users    INT,
        PRIMARY KEY (a-id)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS galery;
CREATE TABLE galery(
        g-id   INT  Auto_increment,
        g-name     Varchar (250),
        g-category     Varchar (250),
        g-after     Bool,
        PRIMARY KEY (g-id)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS estimations;
CREATE TABLE estimations(
        e-id   INT  Auto_increment,
        e-zip     Int (5),
        e-city     Varchar (250),
        e-request     Text,
        e-created_at     Date,
        e-responce     Bool,
        c-id_clients     INT,
        PRIMARY KEY (e-id)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS categorys-postes;
CREATE TABLE categorys-postes(
        c-id   INT  Auto_increment,
        c-name     Varchar (250),
        PRIMARY KEY (c-id)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS clients;
CREATE TABLE clients(
        c-id   INT  Auto_increment,
        c-lastname     Varchar (250),
        c-firstname     Varchar (250),
        c-mail     Varchar (250),
        c-phone     Varchar (10),
        PRIMARY KEY (c-id)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS type-of-postes;
CREATE TABLE type-of-postes(
        tp-id    INT  Auto_increment,
        tp-name     Varchar (250),
        c-id_categorys-postes     INT,
        PRIMARY KEY (tp-id)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS jobs;
CREATE TABLE jobs(
        p-id   INT  Auto_increment,
        p-name     Varchar (250),
        p-propriety     Varchar (250),
        p-price     Int,
        tp-id_type-of-postes     INT,
        PRIMARY KEY (p-id)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS estimations_need_meets;
CREATE TABLE estimations need meets(
        me-id_meets   INT,
        e-id_estimations     INT,
        PRIMARY KEY (me-id_meets,e-id_estimations)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS pictures_belonging_to_the_articles;
CREATE TABLE pictures belonging to the articles(
        a-id_articles   INT,
        g-id_galery     INT,
        PRIMARY KEY (a-id_articles,g-id_galery)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS jobs to do estimations;
CREATE TABLE jobs to do estimations(
        p-id_jobs     INT,
        e-id_estimations     INT,
        PRIMARY KEY (p-id_jobs,e-id_estimations)
)ENGINE=InnoDB;



ALTER TABLE missives ADD CONSTRAINT FK_missives_c-id_clients FOREIGN KEY (c-id_clients) REFERENCES clients(c-id)
ALTER TABLE meets ADD CONSTRAINT FK_meets_u-id_users FOREIGN KEY (u-id_users) REFERENCES users(u-id)
ALTER TABLE meets ADD CONSTRAINT FK_meets_c-id_clients FOREIGN KEY (c-id_clients) REFERENCES clients(c-id)
ALTER TABLE articles ADD CONSTRAINT FK_articles_u-id_users FOREIGN KEY (u-id_users) REFERENCES users(u-id)
ALTER TABLE estimations ADD CONSTRAINT FK_estimations_c-id_clients FOREIGN KEY (c-id_clients) REFERENCES clients(c-id)
ALTER TABLE type-of-postes ADD CONSTRAINT FK_type-of-postes_c-id_categorys-postes FOREIGN KEY (c-id_categorys-postes) REFERENCES categorys-postes(c-id)
ALTER TABLE jobs ADD CONSTRAINT FK_jobs_tp-id_type-of-postes FOREIGN KEY (tp-id_type-of-postes) REFERENCES type-of-postes(tp-id)
ALTER TABLE estimations_need_meets ADD CONSTRAINT FK_estimations need meets_me-id_meets FOREIGN KEY (me-id_meets) REFERENCES meets(me-id)
ALTER TABLE estimations_need_meets ADD CONSTRAINT FK_estimations_need_meets_e-id_estimations FOREIGN KEY (e-id_estimations) REFERENCES estimations(e-id)
ALTER TABLE pictures_belonging_to_the_articles ADD CONSTRAINT FK_pictures_belonging_to_the_articles_a-id_articles FOREIGN KEY (a-id_articles) REFERENCES articles(a-id)
ALTER TABLE pictures_belonging_to_the_articles ADD CONSTRAINT FK_pictures_belonging_to_the_articles_g-id_galery FOREIGN KEY (g-id_galery) REFERENCES galery(g-id)
ALTER TABLE jobs_to_do_estimations ADD CONSTRAINT FK_jobs_to_do_estimations_p-id_jobs FOREIGN KEY (p-id_jobs) REFERENCES jobs(p-id)
ALTER TABLE jobs_to_do_estimations ADD CONSTRAINT FK_jobs_to_do_estimations_e-id_estimations FOREIGN KEY (e-id_estimations) REFERENCES estimations(e-id)
