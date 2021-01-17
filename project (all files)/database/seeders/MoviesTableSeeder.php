<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert(array(
            array(
                'id' => 1,
                'status' => 'true',
                'title' => '3 Days to Kill',
                'director' => "McG", 
                'category' => "Action, Drama, Thriller", 
                'release' => 2014,
                'summary' => "A dying CIA agent trying to reconnect with his estranged daughter is offered an experimental drug that could save his life in exchange for one last assignment.",
                'updated_at' => null,
            ),
            array(
                'id' => 2,
                'status' => 'true',
                'title' => 'Black Friday',
                'director' => "Anurag Kashyap", 
                'category' => "Action, Crime, Political", 
                'release' => 2004,
                'summary' => "A film about the investigations following the 1993 serial Bombay bomb blasts, told through the different stories of the people involved--police, conspirators, victims, middlemen.",
                'updated_at' => null,
            ),
            array(
                'id' => 3,
                'status' => 'true',
                'title' => 'Bodyguard',
                'director' => "Siddique", 
                'category' => "Action, Comedy, Drama", 
                'release' => 2011,
                'summary' => "The daughter of a wealthy nobleman secretly falls in love with her bodyguard.",
                'updated_at' => null,
            ),
            array(
                'id' => 4,
                'status' => 'true',
                'title' => 'Doom',
                'director' => "Andrzej Bartkowiak", 
                'category' => "Action, Horror, Sci-Fi", 
                'release' => 2005,
                'summary' => "Space Marines are sent to investigate strange events at a research facility on Mars but find themselves at the mercy of genetically enhanced killing machines.",
                'updated_at' => null,
            ),
            array(
                'id' => 5,
                'status' => 'true',
                'title' => 'Jurassic Park',
                'director' => "Steven Spielberg", 
                'category' => "Adventure, Sci-Fi", 
                'release' => 1993,
                'summary' => "A pragmatic paleontologist visiting an almost complete theme park is tasked with protecting a couple of kids after a power failure causes the parks cloned dinosaurs to run loose.",
                'updated_at' => null,
            ),
            array(
                'id' => 6,
                'status' => 'true',
                'title' => 'The Shawshank Redemption',
                'director' => "Frank Darabont", 
                'category' => "Drama", 
                'release' => 1994,
                'summary' => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
                'updated_at' => null,
            ),
            array(
                'id' => 7,
                'status' => 'true',
                'title' => 'Tangled',
                'director' => "Nathan Greno, Byron Howard", 
                'category' => "Animation, Adventure, Comedy", 
                'release' => 2010,
                'summary' => "The magically long-haired Rapunzel has spent her entire life in a tower, but now that a runaway thief has stumbled upon her, she is about to discover the world for the first time, and who she really is.",
                'updated_at' => null,
            ),
            array(
                'id' => 8,
                'status' => 'true',
                'title' => '3 Idiots',
                'director' => "Vidhu Vinod Chopra", 
                'category' => "Comedy, Drama", 
                'release' => 2009,
                'summary' => "Two friends are searching for their long lost companion. They revisit their college days and recall the memories of their friend who inspired them to think differently, even as the rest of the world called them idiots.",
                'updated_at' => null,
            ),
            array(
                'id' => 9,
                'status' => 'true',
                'title' => 'Avengers Assemble',
                'director' => "Joss Whedon", 
                'category' => "Action", 
                'release' => 2012,
                'summary' => "Earth's mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.",
                'updated_at' => null,
            ),
            array(
                'id' => 10,
                'status' => 'true',
                'title' => 'Onward',
                'director' => "Dan Scanlon", 
                'category' => "Animation, Adventure, Comedy", 
                'release' => 2020,
                'summary' => "Two elven brothers embark on a quest to bring their father back for one day.",
                'updated_at' => null,
            ),
            array(
                'id' => 11,
                'status' => 'true',
                'title' => 'Inside Job',
                'director' => "Charles Ferguson", 
                'category' => "Documentary, Crime", 
                'release' => 2010,
                'summary' => "Takes a closer look at what brought about the 2008 financial meltdown.",
                'updated_at' => null,
            ),
            array(
                'id' => 12,
                'status' => 'true',
                'title' => 'Lady Bird',
                'director' => "Greta Gerwig", 
                'category' => "Comedy, Drama", 
                'release' => 2017,
                'summary' => "In 2002, an artistically inclined seventeen-year-old girl comes of age in Sacramento, California.",
                'updated_at' => null,
            ),
            array(
                'id' => 13,
                'status' => 'true',
                'title' => 'Hereditary',
                'director' => "Ari Aster", 
                'category' => "Drama, Horror, Mystery", 
                'release' => 2018,
                'summary' => "A grieving family is haunted by tragic and disturbing occurrences.",
                'updated_at' => null,
            ),
            array(
                'id' => 14,
                'status' => 'true',
                'title' => 'Black Panther',
                'director' => "Ryan Coogler", 
                'category' => "Action", 
                'release' => 2018,
                'summary' => "T'Challa, heir to the hidden but advanced kingdom of Wakanda, must step forward to lead his people into a new future and must confront a challenger from his country's past.",
                'updated_at' => null,
            ),
            array(
                'id' => 15,
                'status' => 'true',
                'title' => 'My Neighbour Totoro',
                'director' => "Hayao Miyazaki", 
                'category' => "Animation, Family, Fantasy", 
                'release' => 1988,
                'summary' => "When two girls move to the country to be near their ailing mother, they have adventures with the wondrous forest spirits who live nearby.",
                'updated_at' => null,
            ),
          ));
    }
}
