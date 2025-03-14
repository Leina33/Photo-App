
# PhotoApp Project

PhotoApp is a web application that allows users to view and explore users, albums, and photos fetched from an external API. The app provides an intuitive interface to browse through data, search for specific albums or photos, and view detailed information for each user, album, and photo.

## Features

- **View Users**: Browse through a list of users fetched from the API.
- **View Albums**: Explore albums associated with the users.
- **View Photos**: View photos from the albums.
- **Search Functionality**: Search for albums or photos based on keywords.

## Getting Started

### Prerequisites

Ensure the following are installed:

1. **PHP** (>=7.3)
2. **Composer** for PHP dependency management.
3. **Node.js** for running test automation scripts.
4. **ChromeDriver** (or any other browser driver) for WebDriverIO tests.

### Installation

Follow the steps below to set up the project:

1. **Clone the repository**:
   ```bash
   git clone <repository_url>
   cd PhotoApp
   ```

2. **Install PHP dependencies**: Install Composer dependencies for Laravel:
   ```bash
   composer install
   ```

3. **Set up environment variables**: Copy the `.env.example` file to `.env` and update it as needed:
   ```bash
   cp .env.example .env
   ```

4. **Generate application key**: Run the following command to generate a unique application key:
   ```bash
   php artisan key:generate
   ```

5. **Run database migrations (if applicable)**: If your app requires a database, run migrations:
   ```bash
   php artisan migrate
   ```

6. **Start the Laravel development server**: You can now serve your Laravel application locally:
   ```bash
   php artisan serve
   ```
   The application will be accessible at http://127.0.0.1:8000.

7. **Install Node.js dependencies**: Install dependencies for running the automated tests:
   ```bash
   npm install
   ```

8. **Run the automated tests**: To run the automation tests with WebDriverIO, use the following:
   ```bash
   npx wdio run wdio.conf.js
   ```
