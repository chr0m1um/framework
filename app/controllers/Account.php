<?php 

    class Account extends Controller {

        public function __construct() {
            $this->userModel = $this->model('User');
        }

        public function index() {

            $users = $this->userModel->getUser();

            $data = [

                'users' => $users

            ];

            $this->view('account/index', $data);
        }

        public function addVisitor() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [

                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'phone' => trim($_POST['phone']) 
    
                ];

                if($this->userModel->addVisitor($data)) {
                    redirect('account');
                } else {
                    die('Помилка додавання відвідувача');
                }
            } else {
                $data = [
                    'name' => '',
                    'email' => '',
                    'phone' => '',
                ];
            } 
            $this->view('account', $data);
        }

        public function editVisitor($id) {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [

                    'id' => $id,
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'phone' => trim($_POST['phone']) 
    
                ];

                if($this->userModel->editVisitor($data)) {
                    redirect('account');
                } else {
                    die('Помилка зміни даних');
                }
            } else {
                $user = $this->userModel->getUserId($id);

                $data = [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'phone' => $user->phone
                ];
             } 
           $this->view('account/editVisitor', $data); 
        }

        public function deleteVisitor($id) {

            $user = $this->userModel->getUserId($id);

                $data = [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'phone' => $user->phone
                ];

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $data = [

                    'id' => $id,
    
                ];

                if($this->userModel->deleteVisitor($data)) {
                    redirect('account');
                } else {
                    die('Помилка видалення');
                }
            }
            $this->view('account/deleteVisitor', $data); 
           
        }

        public function genres() {
            $genres = $this->userModel->getGenre();

            $data = [

                'genres' => $genres

            ];

            $this->view('account/genres', $data);
        }

        public function addGenre() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [

                    'genre' => trim($_POST['genre']),
    
                ];

                if($this->userModel->addGenre($data)) {
                    redirect('account/genres');
                } else {
                    die('Помилка додавання жанру');
                }
            } else {
                $data = [

                    'genre' => '',

                ];
            } 
            $this->view('account/genres', $data);
        }

        public function editGenre($id_genre) {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [

                    'id' => $id_genre,
                    'name' => trim($_POST['genre']),
    
                ];

                if($this->userModel->editGenre($data)) {
                    redirect('account/genres');
                } else {
                    die('Помилка зміни даних');
                }
            } else {
                $genre = $this->userModel->getGenreId($id_genre);

                $data = [
                    'id_genre' => $genre->id_genre,
                    'genre' => $genre->genre,

                ];
             } 
           $this->view('account/editGenre', $data); 
        }

        public function deleteGenre($id_genre) {
            $genre = $this->userModel->getGenreId($id_genre);
                $data = [
                    'id_genre' => $genre->id_genre,
                    'genre' => $genre->genre,
                ];
    
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [
                    'id' => $id_genre,
                ];
    
                if($this->userModel->deleteGenre($data)) {
                    redirect('account/genres');
                } else {
                    die('Помилка видалення');
                }
            }
            $this->view('account/deleteGenre', $data); 
        }
    
        public function books() {
            $books = $this->userModel->getBooks();

            $data = [

                'books' => $books

            ];

            $this->view('account/books', $data);
        }

        public function addBook() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [

                    'title' => trim($_POST['title']),
                    'author' => trim($_POST['author']),
                    'year' => trim($_POST['year']),
    
                ];

                if($this->userModel->addBook($data)) {
                    redirect('account/books');
                } else {
                    die('Помилка додавання книги');
                }
            } else {
                $data = [

                    'title' => '',
                    'author' => '',
                    'year' => '',

                ];
            } 
            $this->view('account/books', $data);
        }

        public function editBook($id_book) {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [

                    'id' => $id_book,
                    'title' => trim($_POST['title']),
                    'author' => trim($_POST['author']),
                    'year' => trim($_POST['year']),
    
                ];

                if($this->userModel->editBook($data)) {
                    redirect('account/books');
                } else {
                    die('Помилка зміни даних');
                }
            } else {
                $book = $this->userModel->getBookId($id_book);

                $data = [
                    'id_book' => $book->id_book,
                    'title' => $book->title,
                    'author' => $book->author,
                    'year' => $book->year,

                ];
             } 
           $this->view('account/editBook', $data); 
        }

        public function deleteBook($id_book) {

            $book = $this->userModel->getBookId($id_book);
    
                $data = [
                    'id_book' => $book->id_book,
                    'title' => $book->title,
                    'author' => $book->author,
                    'year' => $book->year,
    
                ];
    
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $data = [
    
                    'id' => $id_book,
    
                ];
    
                if($this->userModel->deleteBook($data)) {
                    redirect('account/books');
                } else {
                    die('Помилка видалення');
                }
            }
            $this->view('account/deleteBook', $data); 
        
        }

        public function issue() {
            $issues = $this->userModel->getIssue();

            $data = [

                'issues' => $issues

            ];

            $this->view('account/issue', $data);
        }

        public function addIssue() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $today = date("d-m-Y");
                $data = [

                    'name_issue' => trim($_POST['name_issue']),
                    'genre_issue' => trim($_POST['genre_issue']),
                    'book_issue' => trim($_POST['book_issue']),
                    'date_out' => $_POST[$today] 
    
                ];

                if($this->userModel->addIssue($data)) {
                    redirect('account/issue');
                } else {
                    die('Помилка додавання відвідувача');
                }
            } else {
                $data = [
                    'name_issue' => '',
                    'genre_issue' => '',
                    'book_issue' => '',
                    'date_out' => ''
                ];
            } 
            $this->view('account/issue', $data);
        }

        public function status() {

            $status = $this->userModel->updateStatus();

            $data = [

                'status' => $status

            ];

            $this->view('account/status', $data);
        }
}


?>