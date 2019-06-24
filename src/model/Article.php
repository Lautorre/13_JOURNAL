<?php

class Article extends Db {

const TABLE_NAME = "Articles";

protected $id;
protected $title;
protected $content;
protected $authorId;
protected $createdAt;
protected $updatedAt;

public function setId($id) {
    $this->id = $id;
}
public function setTitle($title) {
    if (strlen($title) < 4) {
        throw new Exception('Le titre est trop court.');
    }

    if (strlen($title) > 255) {
        throw new Exception('Le titre est trop long.');
    }

    $this->title = $title;
}

public function setContent($content) {
    if (strlen($content) < 5) {
        throw new Exception('Le contenu est trop court.');
    }

    $this->content = $content;
}

public function setAuthorId($authorId) {
    if (!is_numeric($authorId)) {
        throw new Exception('\'author_id doit être un entier.');
    }

    $this->authorId = $authorId;
}

public function setCreatedAt($createdAt) {
    $date = DateTime::createFromFormat('Y-m-d', $createdAt);

    if (!$date) {
        throw new Exception('La date n\'est pas au format YYYY-MM-DD.');
    }

    $this->createdAt = $createdAt;
}

public function setUpdatedAt($updatedAt) {
    $date = DateTime::createFromFormat('Y-m-d', $updatedAt);

    if (!$date) {
        throw new Exception('La date n\'est pas au format YYYY-MM-DD.');
    }

    $this->updatedAt = $updatedAt;
}


public function getId() {
    return $this->id;
}

public function getTitle() {
    $titleUppercase = ucfirst($this->title);
    return $titleUppercase;
}

public function getContent() {
    return $this->content;
}

public function getAuthorId() {
    return $this->authorId;
}

public function getCreatedAt() {
    return $this->createdAt;
}

public function getCreatedAtFr() {
    $timestamp = strtotime($this->createdAt);
    $dateFr = date('d/m/Y', $timestamp);

    return $dateFr;
}

public function getUpdatedAt() {
    return $this->updatedAt;
}

public function getUpdatedAtFr() {

    $timestamp = strtotime($this->updatedAt);
    $dateFr = date('d/m/Y', $timestamp);

    return $dateFr;
}

/**
 * LISTE DES SETTERS : METHODES CRUD
 */

public function save() {

    $data = [
        "title"     => $this->getTitle(),
        "content"   => $this->getContent(),
        "author_id" => $this->getAuthorId(),
    ];

    $id = $this->dbCreate(self::TABLE_NAME, $data);
    $this->id = $id;

    return $this;
}
}