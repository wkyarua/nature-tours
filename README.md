#🌍 Naturewise Tours | Premium African Safaris
A full-stack, highly dynamic, and responsive web platform built for Naturewise Tours, a luxury safari and mountain trekking outfitter based in East Africa. The platform is designed to handle dynamic tour package rendering, seamless user booking inquiries via SMTP, and multi-language support, all wrapped in a premium, modern UI inspired by top-tier travel agencies.

🔗 Live Website: https://naturewise.tours

🚀 Project Overview
The goal of this project was to build a robust, scalable tour agency platform from scratch without relying on heavy CMS frameworks like WordPress. The architecture relies on a custom PHP backend, a relational MySQL database for managing dynamic content (like itineraries and climbing packages), and a lightweight, vanilla front-end stack heavily optimized for mobile responsiveness and fast load times.

✨ Key Features
Custom Premium UI/UX: Built a highly customized, mobile-first interface utilizing CSS Grid/Flexbox, dynamic hero videos, and IntersectionObserver for performant scroll animations.

Dynamic Content Rendering: Packages, destinations, and mountain trekking details are fetched dynamically from the MySQL database. Handled direct LONGBLOB binary data conversion to Base64 for secure image rendering.

Automated Booking Engine: Integrated PHPMailer to process client booking requests. The system captures form data, sanitizes it, stores it in the database, and automatically fires heavily styled HTML confirmation emails (using CID embedded server-side images) to both the client and the admin.

Hybrid Multi-Language System: Engineered a custom, cookie-based trigger for the Google Translate API. It completely hides the intrusive Google widget and translates the DOM instantaneously via custom UI dropdowns, preserving the translation state across page navigations.

Strict Mobile Responsiveness: Implemented granular @media queries to ensure complex card layouts, booking forms, and navigation menus adapt flawlessly to all screen sizes without overflow bugs.

💻 Tech Stack
Frontend:

HTML5 & CSS3 (Custom Grid/Flex architecture, CSS Variables for strict brand theming)

Vanilla JavaScript (DOM manipulation, scroll animations, cookie management)

Fonts: Jost (Headings) & Open Sans (Body)

Backend & Infrastructure:

PHP (8.x): Server-side logic, routing, and form sanitization.

MySQL / MariaDB: Relational database for storing bookings and package details.

PHPMailer: For secure, encrypted SMTP email transmission.

LiteSpeed Web Server: Live deployment environment.

🧠 Technical Highlights & Solutions
As a full-stack developer, several unique challenges were solved during this build:

1. The "Hidden" Translation Engine
Standard Google Translate widgets break UI immersion. I built a script that injects an official googtrans cookie into the browser and dispatches a synthetic change event to a hidden Google script. This allows the custom header UI to translate the site instantly while keeping the Google branding completely invisible.

2. Binary Image Rendering (LONGBLOB)
Instead of storing simple file paths, some database tables store images directly as raw binary code (LONGBLOB). I implemented a fast, server-side encoding method to render these inline:

PHP
<img src="data:image/jpeg;base64,<?php echo base64_encode($row['image_path']); ?>" alt="Dynamic Tour Image">

3. SMTP Embedded Email Assets
To prevent HTML emails from displaying "broken image" squares in clients like Gmail or Outlook, the booking engine utilizes PHPMailer's addEmbeddedImage() function to attach the company logo directly into the MIME payload and reference it via cid:, bypassing external HTTPS image blocking.

⚙️ Local Installation & Setup
To run this project locally, you will need a local server environment like XAMPP, WAMP, or MAMP.

Clone the repository:

Bash
git clone https://github.com/wkyarua/naturew-tours.git

Setup the Database:

Open phpMyAdmin.

Create a new database (e.g., naturewise_db).

Import the provided database.sql file (if included in the repo) to generate the bookings, destinations, and mountains tables.

Configure Environment:

Open includes/db.php and update the database credentials (hostname, username, password, dbname) to match your local setup.

Note: The SMTP credentials in process_booking.php should be updated with your own Mailtrap or testing SMTP server details to prevent sending test emails from the live domain.

Run the Application:

Place the project folder in your htdocs (XAMPP) or www (WAMP) directory.

Navigate to http://localhost/naturewise-tours in your browser.

👨‍💻 Developer
Wesley Kyarua

Full-Stack Developer & Graphic Designer

Portfolio / GitHub Profile

Built with passion in Arusha, Tanzania. 🌍
