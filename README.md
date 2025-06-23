# 🛠️ Bliss Car Spa

A PHP & MySQL-based Car Repair Service Web Application built for managing car service bookings, user profiles, services, and more. Ideal for garages and vehicle service centers to streamline their operations.

---

## 🚀 Features

- 🔐 **User Authentication** (Signup/Login)
- 📅 **Service Booking System**
- 👤 **User Profile Management**
- 🛠️ **Service Listings** and team info
- 📍 **Contact Page**
- 🌐 Clean UI with images and responsive layout
- 🔒 Prepared for secure deployment (no secrets committed)

---

## 🧰 Technologies Used

- **Frontend:** HTML, CSS, JS, Bootstrap
- **Backend:** PHP
- **Database:** MySQL
- **Authentication:** Google OAuth 2.0 (handled via `.env` - not pushed)
- **Package Manager:** Composer (`vendor/` dependencies)
- **QR Code/PDF:** `phpqrcode`, etc. (if applicable)

---

## 📁 Project Structure
car-repair/
│
├── css/ # Stylesheets
├── js/ # JavaScript files
├── img/ # Images
├── scss/ # Optional SCSS source
├── vendor/ # Composer dependencies (ignored in Git)
├── includes/ # PHP includes (header, footer, etc.)
├── data/ # Any storage/data config
│
├── index.php # Landing Page
├── login.php # Login Page
├── signup.php # Signup Page (OAuth support originally)
├── booking.php # Book a repair service
├── profile.php # User dashboard
├── about.php # About page
├── contact.php # Contact form
├── service.php # Services overview
├── team.php # Mechanics/staff
├── db.php # Database connection
├── composer.json # Dependency declarations
├── .gitignore # Excludes vendor/, logs, secrets
└── README.md # Project documentation

