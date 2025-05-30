<?php
class DB {
    public static function connect() {
        return new PDO("mysql:host=localhost;dbname=hotel_booking", "zaid", "Zaid7474");
    }
}
