<?php

    class User {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getUser() {
            $this->db->query('SELECT * FROM visitors');
            $result = $this->db->records();
            return $result;
        }

        public function addVisitor($data) {
            $this->db->query('INSERT INTO visitors (name, email, phone) VALUES (:name, :email, :phone)');
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':phone', $data['phone']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function updateVisitor($data) {
            $this->db->query('UPDATE visitors SET name = :name, email = :email, phone = :phone WHERE id = :id');
            $this->db->bind(':id', $data['id']);
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':phone', $data['phone']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function getUserId($id) {
            $this->db->query('SELECT * FROM visitors WHERE id = :id');
            $this->db->bind(':id', $id);
            $line = $this->db->record();
            return $line;
        }

        public function deleteVisitor($data) {
            $this->db->query('DELETE FROM visitors WHERE id = :id');
            $this->db->bind(':id', $data['id']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function getGenre() {
            $this->db->query('SELECT * FROM genres');
            $result = $this->db->records();
            return $result;
        }

        public function addGenre($data) {
            $this->db->query('INSERT INTO genres (genre) VALUES (:genre)');
            $this->db->bind(':genre', $data['genre']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function getGenreId($id_genre) {
            $this->db->query('SELECT * FROM genres WHERE id_genre = :id_genre');
            $this->db->bind(':id_genre', $id_genre);
            $line = $this->db->record();
            return $line;
        }

        public function updateGenre($data) {
            $this->db->query('UPDATE genres SET genre = :genre WHERE id_genre = :id_genre');
            $this->db->bind(':id_genre', $data['id_genre']);
            $this->db->bind(':genre', $data['genre']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function deleteGenre($data) {
            $this->db->query('DELETE FROM genres WHERE id_genre = :id_genre');
            $this->db->bind(':id_genre', $data['id_genre']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function getBooks() {
            $this->db->query('SELECT * FROM books');
            $result = $this->db->records();
            return $result;
        }

        public function addBook($data) {
            $this->db->query('INSERT INTO books (title, author, year) VALUES (:title, :author, :year)');
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':author', $data['author']);
            $this->db->bind(':year', $data['year']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function getBookId($id_book) {
            $this->db->query('SELECT * FROM books WHERE id_book = :id_book');
            $this->db->bind(':id_book', $id_book);
            $line = $this->db->record();
            return $line;
        }

        public function updateBook($data) {
            $this->db->query('UPDATE books SET title = :title, author = :author, year = :year WHERE id_book = :id_book');
            $this->db->bind(':id_book', $data['id_book']);
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':author', $data['author']);
            $this->db->bind(':year', $data['year']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function deleteBook($data) {
            $this->db->query('DELETE FROM books WHERE id_book = :id_book');
            $this->db->bind(':id_book', $data['id_book']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function getIssue() {
            $this->db->query('SELECT * FROM issues');
            $result = $this->db->records();
            return $result;
        }

        public function addIssue($data) {
            $today = date("d-m-Y");
            $this->db->query('INSERT INTO issues (name_issue, genre_issue, book_issue, date_out) VALUES (:name_issue, :genre_issue, :book_issue, :date_out)');
            $this->db->bind(':name_issue', $data['name_issue']);
            $this->db->bind(':genre_issue', $data['genre_issue']);
            $this->db->bind(':book_issue', $data['book_issue']);
            $this->db->bind(':date_out', $today);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function updateStatus($data) {
            $this->db->query('UPDATE issues SET status = :status WHERE id_issue = :id_issue');
            $this->db->bind(':id_issue', $data['id_issue']);
            $this->db->bind(':status', $data['status']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

    }

?>