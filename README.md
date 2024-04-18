# Laravel Blog Project

This project is a simple blog built using Laravel, where users can register, log in, create, update, and delete blog posts.
o	User Registration Page
		the registration form can contain a Username, email, and Password input field.
o	User Login Page
o	Create / Update / Delete Blog Posts Page
		Users can only update and delete their own Blog Posts
o	Blog Display (Can be viewed without logging in)
		List Page
		Post Detail Page


## Environment Setup

### Prerequisites

Before you begin, ensure you have the following installed:

- PHP (version 8.1  or higher)
- Composer
- Node.js and npm
- MySQL or another compatible database server

### Installation Steps

1. Clone the repository:

   ```bash
   git clone https://github.com/sadeka093/Blog-Site.git
   ```

2. Navigate to the project directory:

   ```bash
   cd Blog-site
   ```

3. Install PHP dependencies:

   ```bash
   composer install
   ```

4. Install JavaScript dependencies:

   ```bash
   npm install
   ```

5. Copy the `.env.example` file to `.env`:

   ```bash
   cp .env.example .env
   ```

6. Generate an application key:

   ```bash
   php artisan key:generate
   ```

7. Configure your database settings in the `.env` file.

8. Run database migrations and seeders:

   ```bash
   php artisan migrate --seed
   ```
   ```bash
   php artisan db:seed --class=BlogSeeder
   ```

9. Start the development server:

   ```bash
   php artisan serve
   ```
 
10. Access the application in your web browser at `http://localhost:8000`.

## Usage

1. Register a new user account
2. Create new blog posts by clicking the "Add Blogs" button. You can Create a Blog without Registration.
3. View all blog posts by clicking "Read Blogs".
4. Click on "Read More" to view its details.
5. Login to Update or delete your blog posts.
6. Click "Edit Blog" to edit a blog.
7. Click "delete" to delete a blog.
