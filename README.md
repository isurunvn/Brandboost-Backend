-- Controllers (/app/controllers/): Handle incoming requests, process them, and decide what data to display.

-- Models (/app/models/): Represent the data and business logic, interacting with the database.

-- Core (/app/core/): Contains the foundational classes (App, Controller, Model, and Database) that implement the core functionality of the MVC framework.

-- Config (/config/): Holds configuration settings (config.php) and routing information (routes.php).

-- Public (/public/): Contains the index.php file, which is the entry point for all HTTP requests.

-- .htaccess: Directs all requests to the index.php file, enabling clean URLs.

-- [optional]Vendor (/vendor/): Manages third-party dependencies via Composer, keeping them organized and separate from your core application code.

** This structure follows the MVC architecture, ensuring a clean separation of concerns, which makes the application more maintainable, scalable, and easier to understand.