**🩸 Blood Bank Management System**

A complete web-based Blood Bank Management System built using PHP, MySQL, HTML5, CSS/SCSS, and JavaScript.
This system streamlines blood donation, inventory tracking, and request management for donors, recipients, and hospitals.

**🌍 Overview**

The Blood Bank Management System is designed to digitize and simplify the process of blood donation and distribution.
It enables donors to register and manage their profiles, hospitals to track blood stock in real time, and recipients to request compatible blood types efficiently.

**🚀 Features**

**👨‍⚕️ Donor Portal**

Register and manage donor profiles.

Update personal information and blood type.

View donation history and eligibility status.

Receive notifications when eligible to donate again.

**🏥 Admin / Hospital Panel**

Add, edit, or delete blood stock data.

Manage donor and recipient records.

Approve or reject blood requests.

Generate detailed reports and analytics.

Monitor real-time blood inventory.

**❤️ Recipient Portal**

Submit online blood requests.

Track request status and approvals.

Search for compatible donors by blood type and location.

**⚙️ System Features **
Secure login and authentication system.

Responsive UI for desktop and mobile devices.

Built-in blood type compatibility checker.

Dashboard with data visualization and alerts.

Automated stock updates and activity logs.

**🧰 Tech Stack**

Technology	Role
🐘 PHP	Backend logic & server-side processing
🗄️ MySQL	Database for users, stock, and transactions
🎨 CSS / SCSS	Styling and visual design
⚡ JavaScript	Client-side interactivity and validation
🧱 HTML5 / Bootstrap	Page structure and responsive layout


**🗂️ Project Structure**

``Blood-Bank/
│
├── admin/                # Admin panel (manage stock, users, reports)
├── donor/                # Donor dashboard and profile management
├── recipient/            # Recipient portal for requests
├── includes/             # Shared PHP includes (config, db connection)
├── assets/               # CSS, JS, images, and SCSS files
├── database/             # SQL files and schema
├── index.php             # Homepage / login
└── README.md             # Project documentation``

**⚙️ Setup Instructions**

Unzip the admin folder and place it in your project directory.

Import the SQL database from the /database folder into your MySQL server.

Update the database credentials in includes/config.php.

Run the project using XAMPP or WAMP and open in your browser at:

``http://localhost/Blood-Bank/``


**Default Admin Login:**
``
Username: admin
Password: admin123``

**🔒 Security Notes**

All authentication forms include input sanitization and session handling.

Admin actions are restricted to authorized users only.

CSRF and SQL Injection protection implemented using prepared statements.

**📈 Future Enhancements**

SMS and email notification system.

Donor location tracking via Google Maps API.

AI-based demand forecasting for blood stock.

Multi-language support.

**👨‍💻 Author**

SYED ZOHAIB ALI
Full Stack Developer | PHP, MySQL, JavaScript
