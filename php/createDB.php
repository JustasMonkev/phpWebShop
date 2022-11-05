<?php

class CreateDb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;


    // class constructor
    public function __construct(
        $dbname = "Newdb",
        $tablename = "Productdb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con) {
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if (mysqli_query($this->con, $sql)) {

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
            $sql = "CREATE TABLE IF NOT EXISTS $tablename(
                            id INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             product_name VARCHAR (25) NOT NULL,
                             product_price FLOAT,
                             product_image VARCHAR (500),
                             product_data DATE
                            );";

            if (!mysqli_query($this->con, $sql)) {
                echo "Error creating table : " . mysqli_error($this->con);
            }

        } else {
            return false;
        }
        return true;
    }

    // get product from the database
    public function getData()
    {
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con, $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
    }

//Products  data
//INSERT INTO
//`albums`(
//`product_name`,
//`product_price`,
//`product_image`,
//`product_data`
//)
//VALUES
//(
//'ILLMATIC',
//'12',
//'https://upload.wikimedia.org/wikipedia/en/thumb/2/27/IllmaticNas.jpg/280px-IllmaticNas.jpg',
//'1996-11-12'
//),(
//'IT WAS WRITTEN
//',
//'16',
//'https://upload.wikimedia.org/wikipedia/en/c/cc/Nas-it-was-written-music-album.jpg',
//'1998-11-12'
//),(
//'I Am ...',
//'18',
//'https://upload.wikimedia.org/wikipedia/en/thumb/0/0f/Nas_-_I_Am....jpg/220px-Nas_-_I_Am....jpg',
//'1999-12-12'
//),(
//'Nastradamus',
//'8',
//'https://upload.wikimedia.org/wikipedia/en/thumb/1/1f/Nas-NastradamusAlbumCover.jpg/220px-Nas-NastradamusAlbumCover.jpg',
//'2000-02-12'
//),(
//'Stillmatic',
//'212',
//'https://upload.wikimedia.org/wikipedia/en/thumb/5/56/Nas-stillmatic-music-album.jpg/220px-Nas-stillmatic-music-album.jpg',
//'2002-02-12'
//),(
//'The Lost Tapes',
//'112',
//'https://upload.wikimedia.org/wikipedia/en/thumb/5/5a/Nas-the-lost-tapes-lp.jpg/220px-Nas-the-lost-tapes-lp.jpg',
//'2003-05-15'
//),(
//'Gods Son',
//'88',
//'https://upload.wikimedia.org/wikipedia/en/thumb/b/b5/Nas-gods-son-music-album.jpg/220px-Nas-gods-son-music-album.jpg',
//'2000-07-15'
//),(
//'Streets Disciple',
//'98',
//'https://upload.wikimedia.org/wikipedia/en/thumb/5/57/StreetsDisciple.jpg/220px-StreetsDisciple.jpg',
//'2006-07-15'
//),(
//'Hip Hop Is Dead',
//'981',
//'https://upload.wikimedia.org/wikipedia/en/thumb/2/22/Hiphopisdead1.jpg/220px-Hiphopisdead1.jpg',
//'2007-03-20'
//),(
//'NAS',
//'11',
//'https://upload.wikimedia.org/wikipedia/en/2/21/Nas_-_Untitled.jpg',
//'2010-05-20'
//),(
//'NASIR',
//'113',
//'https://upload.wikimedia.org/wikipedia/en/thumb/3/3a/Nasir_by_Nas_cover.jpg/220px-Nasir_by_Nas_cover.jpg',
//'2010-07-27'
//),(
//'THE LOST TAPES 2',
//'115',
//'https://upload.wikimedia.org/wikipedia/en/thumb/5/58/The_Lost_Tapes_II_by_Nas.jpg/220px-The_Lost_Tapes_II_by_Nas.jpg',
//'2016-07-27'
//);
}