## Personal Website
A personal portfolio showcasing your skills, work areas, and contact details in a clean, minimal layout

## Requirements
- Php version 8.4.6
- Composer 2.8.6
- MySQL 8.0.41

## Installation

1. Clone this repository.
   ```shell
   git clone git@github.com:divyashrestha/divyashr.git
   ```
2. Navigate to the project, copy `config.sample.php` to `config.php` and update `config.php` with the database and mail detail.
   ```shell
   cd divyashr
   cp config.sample.php config.php
   ```
3. Install composer.
   ```shell
    composer install
   ```
4. Start the server
   ```shell
   cd public
   php -S localhost:8000
   ```
5. Open your browser and navigate to [http://localhost:8000](http://localhost:8000).


