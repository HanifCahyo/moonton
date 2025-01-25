<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Shawshank Redemption',
                'slug' => 'the-shawshank-redemption',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
                'thumbnail' => 'https://static1.moviewebimages.com/wordpress/wp-content/uploads/sharedimages/2024/04/the-shawshank-redemption-movie-poster.jpg?q=50&fit=crop&w=480&dpr=1.5',
                'rating' => 4.3,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Godfather',
                'slug' => 'the-godfather',
                'category' => 'Crime',
                'video_url' => 'https://www.youtube.com/watch?v=sY1S34973zA',
                'thumbnail' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTkhgAYsyt8Oz6qeID7Y378lG3EO7YXnKhZaWZHax3Ni1K7wbWTxNHrChzd55ER4Ott1q7vxqwRgvtnySOt1rhZ0z3xWfvaa9FrL2xyhCk',
                'rating' => 4.2,
                'is_featured' => 0,
            ],
            [
                'name' => 'The Dark Knight',
                'slug' => 'the-dark-knight',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY',
                'thumbnail' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQkUywIUXDjHSQJIaNHYVs08osgBpF5Ot-xmB_omyEZeeRP9Xug',
                'rating' => 4.0,
                'is_featured' => 0,
            ]
        ];
        Movie::insert($movies);
    }
}
