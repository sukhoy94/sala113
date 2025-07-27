# Sala113.pl

A business card website for Sala113 - a venue located in Lublin, Poland.

## Overview

This is a simple, multilingual business card website built with Laravel that showcases Sala113, providing essential information about the venue to visitors in multiple languages.

## Features

- **Multilingual Support**: Available in 3 languages:
  - Polish (pl)
  - Ukrainian (uk) 
  - English (en)
- **Responsive Design**: Optimized for desktop and mobile devices
- **Business Information**: Essential details about Sala113 venue
- **Laravel Framework**: Built with modern PHP framework for reliability and maintainability

## Requirements

- PHP >= 8.1
- Composer
- Node.js & NPM

## Installation

1. Clone the repository:
```bash
git clone https://github.com/your-username/sala113.pl.git
cd sala113.pl
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install Node.js dependencies:
```bash
npm install
```

4. Copy environment file and configure:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure your database settings in `.env` file

7. Run database migrations:
```bash
php artisan migrate
```

8. Build assets:
```bash
npm run build
```

## Usage

### Development
Start the development server:
```bash
php artisan serve
```

The website will be available at `http://localhost:8000`

### Production
Configure your web server to point to the `public` directory and ensure proper file permissions are set.

## Language Support

The website automatically detects user's preferred language or allows manual language selection. Translation files are located in the `resources/lang` directory:

- `resources/lang/pl.json` - Polish translations
- `resources/lang/uk.json` - Ukrainian translations  
- `resources/lang/en.json` - Russian translations

## Project Structure

```
sala113.pl/
├── app/                    # Application logic
├── resources/
│   ├── views/             # Blade templates
│   ├── lang/              # Translation files
│   └── assets/            # CSS, JS, images
├── public/                # Public web directory
├── routes/                # Route definitions
└── config/                # Configuration files
```

## Contributing

This is a business website project. If you notice any issues or have suggestions for improvements, please feel free to open an issue or submit a pull request.

## License

This project is proprietary software for Sala113 venue.

## Contact

Author: Andrii Sukhoi

You can contact me via my email: andrii.sukhoi@gmail.com