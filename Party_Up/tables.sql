drop database Party_Up;
create database Party_Up;
use Party_up;

create table user (
    id int auto_increment primary key,
    username varchar(255),
    email varchar(255),
    password varchar(255),
    date_of_birth date,
    region varchar(255),
    play_style varchar(255),
    remember_token varchar(255),
    image varchar(255),
    bio text,
    created_at datetime,
    updated_at datetime
);

INSERT INTO user (username, email, password, date_of_birth, region, play_style)
    VALUES 
    ('BDWood', 'bryan@gmail.com', '$2y$10$7tX6sHaO6oamDigMmBsX/eXp7Xa9YbbD5maAHX2C1T3HdqWvdMh5u',
        '1995-10-28', 'usa', 'casual'),
    ('TheChurd', 'kyle@gmail,com', '$2y$10$7tX6sHaO6oamDigMmBsX/eXp7Xa9YbbD5maAHX2C1T3HdqWvdMh5u',
        '2001-01-15', 'usa', 'casual'),
    ('BlastCrater', 'antonio@gmail.com', '$2y$10$7tX6sHaO6oamDigMmBsX/eXp7Xa9YbbD5maAHX2C1T3HdqWvdMh5u', 
        '1996-04-03', 'usa', 'hardcore');
    -- ('LovelyEliza', 'liza@gmail.com', '$2y$10$7tX6sHaO6oamDigMmBsX/eXp7Xa9YbbD5maAHX2C1T3HdqWvdMh5u',
    --     '1996-08-14', 'usa', 'hardcore'),
    -- ('DiamondBiscuit', 'elaine@gmail.com', '$2y$10$7tX6sHaO6oamDigMmBsX/eXp7Xa9YbbD5maAHX2C1T3HdqWvdMh5u',
    --     '1995-12-14', 'usa', 'casual'),
    -- ('Johnmc2696', 'jon@gmail.com', '$2y$10$7tX6sHaO6oamDigMmBsX/eXp7Xa9YbbD5maAHX2C1T3HdqWvdMh5u',
    --     '1996-07-26', 'usa', 'casual'),
    -- ('Salehi21', 'sale@gmail.com', '$2y$10$7tX6sHaO6oamDigMmBsX/eXp7Xa9YbbD5maAHX2C1T3HdqWvdMh5u',
    --     '1995-04-25', 'UAE', 'casual');

create table friend (
    id int auto_increment primary key,
    user_id int,
    friend_user_id int,
    date date,
    friend_rating int
);

INSERT INTO friend (user_id, friend_user_id, date, friend_rating)
    VALUES
    (1, 2, '2001-01-15', 6),
    (1, 3, '2010-06-15', 10),
    (2, 1, '2001-01-15', 4),
    (3, 1, '2010-06-15', 8);
    -- (3, 4, '2014-12-20', 8),
    -- (3, 5, '2010-11-13', 10),
    -- (3, 7, '2015-05-20', 10);
    -- (2, 6, '2011-04-24', 4),
    -- (2, 4, '2001-01-15', 2),
    -- (1, 4, '2013-02-23', 10),
    -- (1, 5, '2010-11-13', 5),
    -- (1, 6, '2009-12-14', 10),
    -- (1, 7, '2015-05-20', 7),
    -- (4, 1, '2013-02-23', 10),
    -- (4, 2, '2013-05-20', 3),
    -- (4, 3, '2014-12-20', 2),
    -- (4, 6, '2013-03-23', 5),
    -- (5, 1, '2010-11-13', 8),
    -- (5, 3, '2010-11-13', 3),
    -- (6, 1, '2009-12-14', 10),
    -- (6, 2, '2011-04-24', 5),
    -- (6, 4, '2013-03-23', 5),
    -- (7, 1, '2015-05-20', 8),
--     (7, 3, '2015-05-20', 7);

create table game (
    id int auto_increment primary key,
    console_id int,
    name varchar(255),
    image varchar(255)
);

INSERT INTO game (console_id, name)
    VALUES
    -- (NULL, 'destiny'),

    (1, 'destiny-playstation'),
    (2, 'destiny-xbox'),
    (3, 'destiny-pc'),
    (1, 'borderlands-playstation'),
    (2, 'borderlands-xbox'),
    (3, 'borderlands-pc'),
    (1, 'call of duty-playstation'),
    (2, 'call of duty-xbox'),
    (3, 'call of duty-pc');

create table game_activity (
    id int auto_increment primary key,
    game_id int,
    activity varchar(255),
    image varchar(255)
);

INSERT INTO game_activity (game_id, activity)
    VALUES
    (1, 'VOG raid'),
    (1, 'Crota raid'),
    (1, 'POE'),
    (1, 'Multiplayer'),
    (2, 'VOG raid'),
    (2, 'Crota raid'),
    (2, 'POE'),
    (2, 'Multiplayer'),
    (3, 'VOG raid'),
    (3, 'Crota raid'),
    (3, 'POE'),
    (3, 'Multiplayer'),
    (4, 'COOP story'),
    (5, 'COOP story'),
    (6, 'COOP story'),
    (7, 'Zombies'),
    (7, 'COOP story'),
    (7, 'Multiplayer'),
    (8, 'Zombies'),
    (8, 'COOP story'),
    (8, 'Multiplayer'),
    (9, 'Zombies'),
    (9, 'COOP story'),
    (9, 'Multiplayer');

create table user_game (
    user_id int,
    game_id int,
    active tinyint(1),
    date datetime
);

INSERT INTO user_game (user_id, game_id, active)
    VALUES 
    (1, 1, 1),
    (1, 7, 0),
    (2, 1, 0),
    (2, 4, 0),
    (3, 1, 1),
    (3, 7, 0);
    -- (4, 1, 0),
    -- (4, 2, 0),
    -- (5, 3, 0),
    -- (6, 1, 0),
    -- (6, 2, 0),
    -- (6, 3, 0),
    -- (7, 1, 0);

create table console (
    id int auto_increment primary key,
    name varchar(255)
);

INSERT INTO console (name)
    VALUES 
    ('playstation'),
    ('xbox'),
    ('pc');


/**********************************************
    The below SQL statement selects 8 
    columns, the age, username, game name,
    console, playstyle of the user,
    region of the user, the activity to be
    played and only selects things if the
    User is active in that game. If they 
    aren't they shouldn't be shown.
**********************************************/


SELECT datediff(now(), date_of_birth)/365 as age, username, game.name, console.name, 
    play_style, region, game_activity.activity, user_game.active FROM
    user, game, user_game, game_activity 
    WHERE 
    user.id = user_game.user_id and
    game.id = user_game.game_id and
    game.id = game_activity.game_id and
    user_game.active = 1 and
    game_activity.id = :activity and
    datediff(now(), date_of_birth)/365 >= 18 and
    game.id = :game_id;


/**********************************************
    May or may not use this SQL statement
    it's current purpose is going to be to
    select the user's friends.
**********************************************/

SELECT * FROM 
    user, friend
    WHERE 
    user.id = friend.user_id;
    
    