
# Task List

Task List is a simple todo list application built with Laravel, utilizing the MVC architecture. It allows users to create, update, delete, and view tasks, providing a user-friendly interface for managing tasks efficiently. The application's styling is done using Tailwind CSS, ensuring a clean and modern look, while interactivity is enhanced using Alpine.js for session messages. Additionally, the application features both client-side and server-side validation to ensure data integrity and user satisfaction.

## Features

-   Create new tasks
-   Update existing tasks
-   Delete tasks
-   View all tasks

## Screenshots
Viewing all tasks
<img width="1470" alt="viewing_all_tasks" src="https://github.com/Harjappan-Singh/task-list/assets/105536922/7fce2e12-068f-416a-b2e4-a3e10a1bdae3">

Adding a task
<img width="1470" alt="adding_a_task" src="https://github.com/Harjappan-Singh/task-list/assets/105536922/96739c35-8945-4a81-9333-58e9c7947fd9">

Viewing a specific task
<img width="1470" alt="comleted_task" src="https://github.com/Harjappan-Singh/task-list/assets/105536922/ce9b8bc5-e447-432b-bf26-283436ead1cd">

Deleting a specific task
<img width="1470" alt="deleting_a_task" src="https://github.com/Harjappan-Singh/task-list/assets/105536922/ccada161-70bc-4086-b9ad-2bfe842487c0">

Updating a specific task
<img width="1469" alt="updating_a_task" src="https://github.com/Harjappan-Singh/task-list/assets/105536922/c5135203-60b9-4c41-943c-b99c41de0404">

## Technologies Used

-   Laravel
-   Tailwind CSS
-   Alpine.js


## Getting Started

To get started with Task List, follow these steps:

1.  Clone the repository:
`git clone <https://github.com/Harjappan-Singh/task-list.git>` 

2.  Install dependencies:
`composer install`
`npm install` 

3.  Set up environment variables:
`cp .env.example .env`
`php artisan key:generate` 

4.  Run migrations and seed the database:
`php artisan migrate --seed` 

5.  Start the development server:
`php artisan serve` 

6.  Visit your localhost in your web browser to access Task List.

## Contributing

Contributions are welcome! If you'd like to contribute to Task List, please fork the repository and submit a pull request with your changes.

## License

Task List is open-source software licensed under the MIT License.
