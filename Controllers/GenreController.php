<?php

namespace App\Controllers;

use App\Models\Genre;

class GenreController extends BaseController
{
    public static function index()
    {
        $search = $_GET['search'] ?? null;
        $genres = Genre::search($search);

        self::loadView('genre/page', [
            'genres' => $genres,
            'search' => $search
        ]);
    }

    public static function add()
    {
        self::loadView('genre/form');
    }

    public static function save()
    {
        $genre = new Genre();
        $genre->name = $_POST['name'];
        $genre->description = $_POST['description'];

        $success = $genre->save();

        if ($success) {
            parent::redirect('/genre');
        } else {
            echo 'Error, cannot add genre';
        }
    }

    public static function delete($id)
    {
        $genre = Genre::find($id);

        if ($genre) {
            $genre->delete();
        }

        header('Location: /genre');
    }
}
