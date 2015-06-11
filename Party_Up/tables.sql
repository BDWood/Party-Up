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
    created_at datetime,
    updated_at datetime
);

create table game_plays (
    id int auto_increment primary key,
    user_id int,
    friend_user_id int,
    date date,
    friend_rating int
);

create table game (
    id int auto_increment primary key,
    name varchar(255),
    image varchar(255)
);

create table game_activities (
    id int auto_increment primary key,
    game_id int,
    activity varchar(255),
    image varchar(255)
);

create table user_games (
    user_id int,
    game_id int,
    active tinyint(1),
    date datetime
);
