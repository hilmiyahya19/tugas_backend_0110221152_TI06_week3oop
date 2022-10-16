<?php

class Animal
{
    # property animals
    public $animals;

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($animals)
    {
        $this->animals = $animals;
    }

    # method index - menampilkan data animals
    public function index()
    {
        foreach ($this->animals as $hewan) {
            echo '-' . $hewan . '<br>';
        }
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($newAnimals)
    {
        array_push($this->animals, $newAnimals);
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $uptAnimals)
    {
        $this->animals[$index] = $uptAnimals;

    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        unset($this->animals[$index]);
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(["Anjing", "Monyet", "Kuda Nil"]);

echo "<i><b>Index - Menampilkan seluruh hewan</b></i> <br>";
$animal->index();
echo "<br>";

echo "<i><b>Store - Menambahkan hewan baru</b></i> <br>";
$animal->store('Biawak');
$animal->index();
echo "<br>";

echo "<i><b>Update - Mengupdate hewan</b></i> <br>";
$animal->update(2, 'Babi');
$animal->index();
echo "<br>";

echo "<i><b>Destroy - Menghapus hewan</b></i> <br>";
$animal->destroy(3);
$animal->index();
echo "<br>";

/*
    Nama    : Hilmi Yahya
    Nim     : 0110221152
    Rombel  : TI06
*/
