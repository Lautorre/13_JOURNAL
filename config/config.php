<?php

/**
 * Config files
 */

ini_set('allow_url_include', 1);

const DB_HOST = 'localhost';
const DB_PORT = '8889';
const DB_NAME = 'Journal';
const DB_USER = 'root';
const DB_PWD  = 'root';

const WEBSITE_TITLE = "NEW_BLOG";
const BASE_URL = "http://localhost:8888/13_JOURNAL";

const CLASSES_SOURCES = [
    'src/controller',
    'config',
    'src/model',
];
