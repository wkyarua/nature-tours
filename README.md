# 🌍 Naturewise Tours | Premium African Safaris

[![Website Status](https://img.shields.io/website?url=https%3A%2F%2Fnaturewise.tours&up_message=Live&down_message=Offline&style=flat-square&label=Live%20Demo)](https://naturewise.tours)
[![Tech Stack](https://img.shields.io/badge/Stack-PHP%20%7C%20MySQL%20%7C%20JS%20%7C%20CSS3-orange?style=flat-square)](#)
[![Developer](https://img.shields.io/badge/Developer-Wesley%20Kyarua-blue?style=flat-square)](#)

A full-stack, highly dynamic, and responsive web platform built for **Naturewise Tours**, a luxury safari and mountain trekking outfitter based in East Africa. The platform is designed to handle dynamic tour package rendering, seamless user booking inquiries via SMTP, and multi-language support, all wrapped in a premium, modern UI.

**🔗 Live Website:** [naturewise.tours](https://naturewise.tours)

---

## 🚀 Project Overview

The core objective of this project was to engineer a robust, scalable tour agency platform from scratch, avoiding heavy CMS frameworks to ensure maximum performance and bespoke design control. The architecture relies on a custom PHP backend, a relational MySQL database for managing dynamic content, and a lightweight, vanilla front-end stack heavily optimized for mobile responsiveness.

### ✨ Key Features

* **Custom Premium UI/UX:** Built a highly customized, mobile-first interface utilizing CSS Flexbox/Grid, dynamic hero videos, and `IntersectionObserver` for performant scroll animations.
* **Dynamic Content Rendering:** Packages, destinations, and mountain trekking details are fetched dynamically from the MySQL database.
* **Automated Booking Engine:** Integrated **PHPMailer** to process client booking requests securely via SMTP, capturing form data and firing heavily styled HTML confirmation emails to both the client and the admin.
* **Hybrid Multi-Language System:** Engineered a custom, cookie-based trigger for the Google Translate API, allowing instant DOM translation via custom UI dropdowns while preserving the translation state across page navigations.
* **Strict Mobile Responsiveness:** Implemented granular `@media` queries to ensure complex card layouts, booking forms, and navigation menus adapt flawlessly to all screen sizes.

---

## 💻 Tech Stack

### Frontend
* **HTML5 & CSS3:** Custom Flex/Grid architecture, CSS Variables for strict brand theming.
* **Vanilla JavaScript:** DOM manipulation, scroll animations, cookie management.
* **Typography:** *Jost* (Headings) & *Open Sans* (Body).

### Backend & Infrastructure
* **PHP (8.x):** Server-side logic, routing, and form sanitization.
* **MySQL / MariaDB:** Relational database for storing bookings and package details.
* **PHPMailer:** Secure, encrypted SMTP email transmission.
* **Deployment:** Live on LiteSpeed Web Server.

---

## 🧠 Technical Highlights & Solutions

As a full-stack developer and graphic designer, several unique technical and visual challenges were solved during this build:

### 1. The "Hidden" Translation Engine
Standard Google Translate widgets break UI immersion. I built a script that injects an official `googtrans` cookie into the browser and dispatches a synthetic `change` event to a hidden Google script. This allows the custom header UI to translate the site instantly while keeping the Google branding completely invisible.

### 2. Binary Image Rendering (LONGBLOB)
Instead of storing simple file paths, some database tables store images directly as raw binary code (`LONGBLOB`). I implemented a fast, server-side encoding method to render these inline safely:
```php
<img src="data:image/jpeg;base64,<?php echo base64_encode($row['image_path']); ?>" alt="Dynamic Tour Image">
