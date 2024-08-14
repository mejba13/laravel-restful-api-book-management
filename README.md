
# Laravel RESTful API for Book Management

**A Laravel-based RESTful API for managing books, providing endpoints for CRUD operations with a focus on simplicity and scalability.**

## Table of Contents

- [Project Setup](#project-setup)
- [API Endpoints](#api-endpoints)
- [Technologies Used](#technologies-used)
- [Contributing](#contributing)
- [License](#license)

## Project Setup

### Prerequisites

- PHP >= 7.3
- Composer
- MySQL or any other supported database
- Laravel 8.x

### Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-username/laravel-restful-api-book-management.git
   cd laravel-restful-api-book-management
   ```

2. **Install dependencies:**

   ```bash
   composer install
   ```

3. **Copy the `.env` file:**

   ```bash
   cp .env.example .env
   ```

4. **Set up your environment variables in the `.env` file, especially the database configuration:**

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Run the migrations:**

   ```bash
   php artisan migrate
   ```

6. **Start the development server:**

   ```bash
   php artisan serve
   ```

7. **Your API should now be accessible at:**

   ```
   http://127.0.0.1:8000/api/books
   ```

## API Endpoints

- `GET /api/books` - Retrieve all books
- `POST /api/books` - Create a new book
- `GET /api/books/{id}` - Retrieve a single book by ID
- `PUT /api/books/{id}` - Update a book by ID
- `DELETE /api/books/{id}` - Delete a book by ID

## Technologies Used

- **Laravel** - A PHP framework for building web applications
- **MySQL** - Database for storing book records
- **Composer** - Dependency manager for PHP

## Contributing

Contributions are welcome! Please fork this repository, make your changes, and submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
