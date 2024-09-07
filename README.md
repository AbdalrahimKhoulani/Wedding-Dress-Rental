# Wedding-Dress-Rental
## Project Setup

Follow these steps to set up the project:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/AbdalrahimKhoulani/Wedding-Dress-Rental
   ```

2. **Install Composer dependencies**:
   ```bash
   composer install
   ```

3. **Install NPM dependencies**:
   ```bash
   npm install
   ```

4. **Set up the `.env` file and configure the database**:
   - Copy the example `.env` file:
     ```bash
     cp .env.example .env
     ```
   - Open the `.env` file and update the database settings:
     ```env
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_username
     DB_PASSWORD=your_database_password
     ```

5. **Generate the application key**:
   ```bash
   php artisan key:generate
   ```

6. **Run the database migrations**:
   ```bash
   php artisan migrate
   ```

7. **Seed the database**:
   ```bash
   php artisan db:seed
   ```
   - This will add a set of test dresses to the database.

8. **Register a new account**:
   - Open the application and register a new account.

9. **Make a reservation for a selected dress**:
   - After logging in, choose a dress and make a reservation.


## ToDo List:
1. **Set Up Project with React.js**
   - Initialize a new React.js project.
   - Configure project structure and dependencies.

2. **Build Admin Dashboard**
   - Design and implement the admin dashboard layout.
   - Integrate user authentication and authorization.
   - Add functionalities for managing content (e.g., wedding dresses, rentals, users).

3. **Enhance Homepage**
   - Add a **Banner** section with key information and call-to-action buttons.
   - Implement a **Slider** to showcase featured wedding dresses or promotions.


4. **Add New Features**
   - Implement a search functionality for users to find specific wedding dresses.
   - Add a booking system for users to reserve dresses.
   - Integrate a review and rating system for user feedback.
   - Enhance the user profile section with additional features (e.g., wishlist, order history).

> **Note:**  Although the project meets the basic requirements, there are several areas that need improvements and additional validation. Unfortunately, due to time constraints, I was unable to implement these improvements. I appreciate your understanding and look forward to any feedback you may have.
