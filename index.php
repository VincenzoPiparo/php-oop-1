<!-- Create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php
class Movie{
    public $title;
    public $time;
    public $genre;
    public $year;
   

    public function __construct($_title, $_year, $_genre ,$_time)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->time = $_time;
    }

    public function getInfoMovie(){
        return 'Title: '.$this->title .' /Year: '.$this->year .' /Genre: '.$this->genre .' /Duration: '.$this->time;
    }
}

$movies = new Movie('The Lord Of The Rings', '2001', ' Colossal Fantasy', '2h 58m');
$movies2 = new Movie('Blade', '1975', 'Comic Book/Horror/Action/Fantasy', '2h 3m');
?>

<h2><?php echo $movies->getInfoMovie()?></h2>

<h2><?php echo $movies2->getInfoMovie()?></h2>