# Cloud Book

Welcome to the Cloud Books This Laravel-based project allows you to create and manage sections, subsections, and assign roles such as author and collaborator.

## Getting Started

### Prerequisites

Before you begin, ensure you have met the following requirements:
- [PHP](https://www.php.net/) (>=7.2)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) and [NPM](https://www.npmjs.com/) (for frontend assets)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/mirza407/cloud_book.git
   
2.  Navigate to the project directory:
	cd project-name
	
3. Install PHP dependencies:
	- composer install
	- npm install
	- cp .env.example .env
	- Configure your database connection in the .env file
	- php artisan key:generate
	- php artisan migrate
	- Run the seeder
	- php artisan serve
	
	The application should now be running. You can access it at http://localhost:8000
		
### Usage 
- Creating Sections and Subsections
- Log in as an administrator or a user with the necessary permissions.
- Navigate to the "Sections" or "Subsections" section of the application.
- Create, edit, or delete sections and subsections as needed.

###  Assigning Roles
- Log in as an administrator.
- Navigate to the "Roles" section of the application.
- Create author and collaborator roles.
- Assign these roles to users who need them.
