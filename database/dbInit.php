<?php

require_once __DIR__ . '/../includes/dbOpenConn.php';

$db->exec("CREATE TABLE IF NOT EXISTS musics (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom TEXT NOT NULL,
    nomArtistic TEXT NOT NULL,
    biografia TEXT NOT NULL,  
    foto TEXT NOT NULL,
    videoMusical TEXT NOT NULL,
    recopilacio TEXT
)");

$db->exec("");