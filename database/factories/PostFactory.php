<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Lorem Ipsum',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nulla ante, elementum et mi at, luctus hendrerit diam.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum ex sed mi posuere, eget rutrum nisi luctus. Quisque ultrices orci ac erat placerat, a pretium est aliquet. Fusce facilisis orci in euismod imperdiet. Sed ullamcorper scelerisque lectus ac fringilla. Vestibulum feugiat accumsan erat et sodales. Aliquam imperdiet egestas erat, non auctor nunc. Nam at nulla viverra, congue eros sit amet, ullamcorper metus. Aliquam vitae dolor felis. Integer sed malesuada augue, non aliquam enim. Sed in erat imperdiet, varius ante ac, dapibus mauris. Morbi ornare felis arcu, maximus aliquam nunc faucibus sit amet. Phasellus viverra auctor mauris sit amet porta.

            Phasellus ac justo ut nisl sollicitudin tristique vel in lectus. Fusce placerat ex in orci fermentum posuere. Sed vel eleifend lectus. Cras vehicula massa eu nulla vehicula, in egestas libero lacinia. Nunc non justo id ex sollicitudin bibendum ut non augue. In at sollicitudin augue, vitae porta sem. Nam quis sapien ac erat volutpat condimentum. Praesent urna risus, sagittis vitae eros ac, consectetur aliquam libero. Phasellus dignissim ipsum diam, a malesuada turpis pulvinar et. Praesent enim justo, tempor eu congue eget, suscipit quis nunc.

            Donec sodales non nisl non laoreet. Praesent interdum ante ut tortor lobortis convallis. Sed risus velit, tincidunt ut hendrerit ut, varius ut ex. Nullam urna est, semper in lectus ut, venenatis eleifend felis. Quisque vulputate nisi in lorem viverra faucibus. Aliquam erat volutpat. Suspendisse potenti. Curabitur mollis, eros non molestie pulvinar, nulla turpis finibus nulla, ut placerat nisi dui et nisi. Mauris mollis nulla sit amet justo finibus, eu tincidunt elit iaculis. Nullam ullamcorper ex lectus, lobortis convallis ex iaculis in. Vestibulum consectetur eget libero vel eleifend. Quisque tincidunt ipsum a massa porta, id facilisis nunc vestibulum. Pellentesque sit amet ultrices neque. Vivamus id nulla nec mauris egestas rutrum. Morbi vulputate nisl in nisl auctor, id porta lorem pretium. ',
            'category' => 'lipsum'
        ];
    }
}
