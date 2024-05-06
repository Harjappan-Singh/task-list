<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        // Task::factory(10)->create();
        User::factory(3)->unverified()->create();

        $tasks = [
            [
                'title' => 'Finish writing report',
                'description' => 'Compile data and finalize the marketing report due Friday.',
                'long_description' => 'Review all the marketing data collected over the past month. Analyze trends and create charts to represent the findings. Write a concise report summarizing the key insights and recommendations.',
                'completed' => false,
            ],
            [
                'title' => 'Grocery shopping',
                'description' => 'Pick up milk, bread, eggs, and vegetables.',
                'long_description' => 'Make a list of all the groceries needed for the week. Check the pantry and fridge to avoid buying duplicates. Head to the grocery store and stick to the list to avoid impulse purchases.',
                'completed' => false,
            ],
            [
                'title' => 'Clean the kitchen',
                'description' => 'Wash dishes, wipe down counters, and sweep the floor.',
                'long_description' => 'Empty the dishwasher and wash all the dirty dishes by hand. Wipe down the countertops and stovetop. Sweep the floor and mop if necessary. Take out the trash.',
                'completed' => true,
            ],
            [
                'title' => 'Call mom',
                'description' => 'Catch up and see how she is doing.',
                'long_description' => 'Find a quiet time to call mom and have a conversation. Ask her about her day and share updates about your life. Express your love and appreciation.',
                'completed' => false,
            ], [
                'title' => 'Exercise Routine',
                'description' => 'Complete a 30-minute workout session focusing on cardio and strength training.',
                'long_description' => 'Warm up with stretches, then proceed with a mix of jogging, squats, push-ups, and planks. Cool down with more stretches.',
                'completed' => false,
            ],
            [
                'title' => 'Pay Bills',
                'description' => 'Settle electricity, water, and internet bills for the month.',
                'long_description' => 'Log in to online accounts or visit respective offices to pay outstanding bills to avoid late fees.',
                'completed' => false,
            ],
            [
                'title' => 'Study for Exam',
                'description' => 'Review notes and textbook chapters for upcoming biology exam.',
                'long_description' => 'Create flashcards for key terms and concepts. Practice answering sample questions to gauge understanding.',
                'completed' => false,
            ],
            [
                'title' => 'Laundry Day',
                'description' => 'Wash clothes, dry, and fold.',
                'long_description' => 'Separate whites and colors. Use appropriate detergent and settings for each load. Fold clothes neatly and put them away.',
                'completed' => false,
            ],
            [
                'title' => 'Exercise Routine',
                'description' => 'Complete a 30-minute workout session focusing on cardio and strength training.',
                'long_description' => 'Warm up with stretches, then proceed with a mix of jogging, squats, push-ups, and planks. Cool down with more stretches.',
                'completed' => false,
            ],
            [
                'title' => 'Pay Bills',
                'description' => 'Settle electricity, water, and internet bills for the month.',
                'long_description' => 'Log in to online accounts or visit respective offices to pay outstanding bills to avoid late fees.',
                'completed' => false,
            ],
            [
                'title' => 'Study for Exam',
                'description' => 'Review notes and textbook chapters for upcoming biology exam.',
                'long_description' => 'Create flashcards for key terms and concepts. Practice answering sample questions to gauge understanding.',
                'completed' => false,
            ],
            [
                'title' => 'Laundry Day',
                'description' => 'Wash clothes, dry, and fold.',
                'long_description' => 'Separate whites and colors. Use appropriate detergent and settings for each load. Fold clothes neatly and put them away.',
                'completed' => false,
            ],
            [
                'title' => 'Meal Prep for the Week',
                'description' => 'Plan and prepare meals for the upcoming week.',
                'long_description' => 'Create a meal plan, make a grocery list, and cook meals in advance to save time during busy weekdays.',
                'completed' => false,
            ],
            [
                'title' => 'Call Family',
                'description' => 'Catch up with family members over the phone.',
                'long_description' => 'Check in with parents, siblings, or relatives. Share updates and listen to their news.',
                'completed' => false,
            ],
            [
                'title' => 'Organize Workspace',
                'description' => 'Declutter desk and organize supplies.',
                'long_description' => 'Sort through papers, files, and office supplies. Create a system for better organization and productivity.',
                'completed' => false,
            ],
            [
                'title' => 'Read a Book',
                'description' => 'Spend 30 minutes reading a book.',
                'long_description' => 'Choose a book from your reading list and dedicate uninterrupted time to reading.',
                'completed' => false,
            ],
            [
                'title' => 'Practice Instrument',
                'description' => 'Practice playing the guitar for 1 hour.',
                'long_description' => 'Work on scales, chords, and learn new songs. Focus on improving technique and timing.',
                'completed' => false,
            ],
            [
                'title' => 'Write in Journal',
                'description' => 'Reflect on the day and jot down thoughts.',
                'long_description' => 'Write about experiences, emotions, or goals. Use journaling as a tool for self-reflection.',
                'completed' => false,
            ],
            [
                'title' => 'Water Indoor Plants',
                'description' => 'Give indoor plants a thorough watering.',
                'long_description' => 'Check soil moisture and water plants as needed. Trim any dead leaves or branches for healthier growth.',
                'completed' => false,
            ],
            [
                'title' => 'Review Monthly Budget',
                'description' => 'Review income and expenses for the month.',
                'long_description' => 'Check bank statements and bills to track spending. Identify areas for saving or cutting back.',
                'completed' => false,
            ],
            [
                'title' => 'Schedule Dentist Appointment',
                'description' => 'Book a dental check-up appointment.',
                'long_description' => 'Call the dentist office or use an online booking system to schedule a routine check-up.',
                'completed' => false,
            ],
            [
                'title' => 'Practice Meditation',
                'description' => 'Spend 15 minutes practicing mindfulness meditation.',
                'long_description' => 'Find a quiet space, sit comfortably, and focus on your breath or a guided meditation. Allow thoughts to come and go without judgment.',
                'completed' => false,
            ],
            [
                'title' => 'Research Vacation Destinations',
                'description' => 'Browse travel websites and plan a future vacation.',
                'long_description' => 'Explore different destinations, accommodations, and activities. Consider budget, travel restrictions, and interests.',
                'completed' => false,
            ],
            [
                'title' => 'Learn a New Recipe',
                'description' => 'Try cooking a new recipe for dinner.',
                'long_description' => 'Find a recipe online or in a cookbook and gather the necessary ingredients. Follow the instructions step by step.',
                'completed' => false,
            ],
            [
                'title' => 'Update Resume',
                'description' => 'Revise and update your resume.',
                'long_description' => 'Add recent experiences, skills, and achievements. Tailor the resume for specific job applications if necessary.',
                'completed' => false,
            ],
            [
                'title' => 'Attend Online Seminar',
                'description' => 'Register for and attend a virtual seminar on a topic of interest.',
                'long_description' => 'Find relevant online seminars or webinars and sign up. Take notes and participate in discussions during the event.',
                'completed' => false,
            ],
            [
                'title' => 'Clean Out Inbox',
                'description' => 'Sort through emails and organize inbox.',
                'long_description' => 'Delete or archive old emails, respond to pending messages, and unsubscribe from unwanted newsletters.',
                'completed' => false,
            ],
            [
                'title' => 'Practice Yoga',
                'description' => 'Follow a yoga routine for relaxation and flexibility.',
                'long_description' => 'Find a guided yoga video online or attend a local class. Focus on deep breathing and gentle stretches.',
                'completed' => false,
            ]
        ];

        Task::insert($tasks);
    }
}
