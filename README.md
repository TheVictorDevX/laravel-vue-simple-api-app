# Simple Laravel 10 + Vue 3 API Application

This project is a simple demonstration of a web application with a separate Laravel 10 backend API and a Vue 3 frontend. The backend serves data that the frontend consumes and displays.

## Project Description

This application showcases a common architecture where the backend is responsible for providing data via an API, and the frontend is a single-page application that interacts with this API to fetch and display information.

## Technologies Used

### Backend (Laravel 10)

* PHP 8+
* Laravel 10
* Composer
* Laravel CORS package

### Frontend (Vue 3)

* Vue 3
* Vite
* npm or yarn
* Axios

## Setup Instructions

To get this project running locally, you need to set up both the backend and the frontend.

### Backend Setup

1.  **Clone the repository:**

    ```bash
    git clone [https://github.com/TheVictorDevX/laravel-vue-simple-api-app-backend.git](https://github.com/TheVictorDevX/laravel-vue-simple-api-app-backend.git) # Replace with your actual backend repo URL
    cd laravel-vue-simple-api-app-backend
    ```

2.  **Install Composer dependencies:**

    ```bash
    composer install
    ```

3.  **Copy the environment file:**

    ```bash
    cp .env.example .env
    ```

4.  **Generate application key:**

    ```bash
    php artisan key:generate
    ```

5.  **Configure your database (Optional):**

    Update the database credentials in your `.env` file if you plan to use a database. For this simple example, hardcoded data is used, so a database isn't strictly necessary unless you extend the project.

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

6.  **Run database migrations (Optional):**

    ```bash
    php artisan migrate
    ```

7.  **Configure CORS:**

    Ensure your `config/cors.php` file is configured to allow requests from your Vue frontend's origin (e.g., `http://localhost:5173`).

    ```php
    // config/cors.php
    'allowed_origins' => ['http://localhost:5173'],
    ```

### Frontend Setup

1.  **Clone the repository:**

    ```bash
    git clone [https://github.com/TheVictorDevX/laravel-vue-simple-api-app-frontend.git](https://github.com/TheVictorDevX/laravel-vue-simple-api-app-frontend.git) # Replace with your actual frontend repo URL
    cd laravel-vue-simple-api-app-frontend
    ```

2.  **Install npm dependencies:**

    ```bash
    npm install
    # or yarn install
    ```

## Running the Application

1.  **Start the Laravel Backend Server:**

    In the `laravel-vue-simple-api-app-backend` directory:

    ```bash
    php artisan serve
    ```

    This will typically run on `http://127.0.0.1:8000`.

2.  **Start the Vue Frontend Development Server:**

    In the `laravel-vue-simple-api-app-frontend` directory:

    ```bash
    npm run dev
    # or yarn dev
    ```

    This will typically run on `http://localhost:5173`.

Open your browser and visit the Vue frontend URL (e.g., `http://localhost:5173`). The frontend should fetch and display the data from the Laravel backend API.

## API Endpoints

The Laravel backend provides the following simple API endpoint:

* `GET /api/data`: Returns a JSON array of sample data items.

(You can add descriptions for other API endpoints if you add more)

## Contributing

Feel free to fork this repository and contribute! Pull requests are welcome.

## License

This project is open-sourced under the MIT license. (You can change this if you prefer a different license)
