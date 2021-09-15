<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => 2,
            'user_id' => 15,
            'content' => "Let me interject for a moment. What you guys are referring to as Linux, is in fact, GNU/Linux, or as I've recently taken to calling it, 
            GNU plus Linux. Linux is not an operating system unto itself, but rather another free component of a fully 
            functioning GNU system made useful by the GNU corelibs, shell utilities and vital system components comprising 
            a full OS as defined by POSIX. Many computer users run a modified version of the GNU system every day, without realizing it. 
            Through a peculiar turn of events, the version of GNU which is widely used today is often called 'Linux', and many of its users 
            are not aware that it is basically the GNU system, developed by the GNU Project. 
            There really is a Linux, and these people are using it, but it is just a part of the system they use. Linux is the kernel: 
            the program in the system that allocates the machine's resources to the other programs that you run. 
            The kernel is an essential part of an operating system, but useless by itself; it can only function in the context of a complete operating system. Linux is normally used in combination with the GNU operating system: the whole system is basically GNU with Linux added, or GNU/Linux. All the so-called 'Linux' distributions are really distributions of GNU/Linux. Thank you for taking your time to cooperate with with me, your friendly GNU+Linux neighbor, Richard Stallman."
        ];
    }
}

// Post::factory()
//User::factory()$this->faker->paragraph()