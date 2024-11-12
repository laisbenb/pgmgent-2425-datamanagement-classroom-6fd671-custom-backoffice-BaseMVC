<?php

namespace App\Controllers;

use App\Models\Movie;

class MovieController extends BaseController
{
    public static function index()
    {
        $search = $_GET['search'] ?? null;
        $movies = Movie::search($search);



        self::loadView('movie/page', [
            'movies' => $movies,
            'search' => $search
        ]);
    }

    public static function detail($id)
    {
        $movie = Movie::find($id);

        self::loadView('movie/detail', [
            'movie' => $movie
        ]);
    }

    public static function add()
    {
        self::loadView('movie/form');
    }

    public static function save()
    {

        $movie = new Movie();
        $movie->title = $_POST['title'];
        $movie->description = $_POST['description'];
        $movie->short_description = $_POST['short_description'];
        $movie->duration = $_POST['duration'];
        $movie->rating = $_POST['rating'];
        $movie->genre_id = $_POST['genre_id'];

        $success = $movie->save();

        if ($success) {
            parent::redirect('/movie');
        } else {
            echo 'Error, cannot add book';
        }
    }

    public static function delete($id)
    {
        $movie = Movie::find($id);

        if ($movie) {
            $movie->delete();
        }

        header('Location: /movie');
    }
}
