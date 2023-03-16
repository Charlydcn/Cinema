<?php 

    class Director
        {
            private string $_firstName;
            private string $_lastName;
            private string $_genre;
            private DateTime $_birthDate;
            private array $_directorMovies;

            public function __construct(string $_firstName, string $_lastName, string $_genre, string $_birthDate)
            {
                $this->_firstName = $_firstName;
                $this->_lastName = $_lastName;
                $this->_genre = $_genre;
                $this->_birthDate = new DateTime($_birthDate);
                $this->_directorMovies = [];
            }


// ************************************************ MÉTHODES ************************************************ 
// ************************************** ACCESSEURS (getters) **************************************
        
            public function getFirstName() // A TESTER
            {
                return $this->_firstName;
            }

            public function getLastName() // A TESTER
            {
                return $this->_lastName;
            }

            public function getGenre() // A TESTER
            {
                return $this->_genre;
            }

            public function getBirthDate() // A TESTER
            {
                return $this->_birthDate->format("Y-m-d");
            }

            public function getAge() {
                $now = new DateTime();
                $diff = $this->_birthDate->diff($now);
                return $diff->y." years old";
            }

            public function getDirectorMovies() // A TESTER
            {
                $result = "<ul>";
                foreach ($this->_directorMovies as $movie) {
                    $result .= "<li>" . $movie . "</li>";
                }
                $result .= "</ul>";
                return $result;
            }

    // *************************************************************************************************
    // ************************************** MUTATEURS (setters) ************************************** 
            
            public function setFirstName($firstName) // A TESTER
            {
                $this->_firstName = $firstName;
            }
            
            public function setLastName($lastName) // A TESTER
            {
                $this->_lastName = $lastName;
            }
                        
            public function setGenre($genre) // A TESTER
            {
                $this->_genre = $genre;
            }

            public function setBirthDate($birthDate) // A TESTER
            {
                $this->_birthDate = new Datetime($_birthDate);
            }
            
            public function setDirectorMovies(array $directorMovies) // A TESTER
            {
                $this->_directorMovies = $directorMovies;
            }

    // *************************************************************************************************

            public function __toString() // A TESTER
            {
                return "<strong>Director's name : </strong>" . $this->_firstName . " " . $this->_lastName . "<br>"
                . "<strong>Genre : </strong>". $this->_genre . "<br>"
                . "<strong>Age : </strong>". $this->getAge() . "<br>"
                . "<strong>Movies : </strong>" . $this->getDirectorMovies();
            }
        }

?>