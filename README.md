# Doctorlab

**Doctorlab** is a modern web application designed to serve as a reliable digital bridge between patients and doctors. It enables fast, simple, 
and efficient scheduling of all types of medical appointments online, without the need for phone calls or in-person visits.
The application offers an intuitive user interface fully optimized for use on mobile phones, tablets, and desktop devices, making it accessible anytime and from any location. 
Patients can select the type of examination, preferred time slot, and doctor, while doctors have centralized access to all scheduled appointments and the ability to manage their content.
Doctorlab further enhances the user experience with the integration of a virtual assistant powered by artificial intelligence, helping patients receive quick advice based on their symptoms.

## Key Features
- 🗓️ **Online Appointment Booking** – Patients can choose available time slots, appointment types, and preferred doctors.
- 👨‍⚕️ **Doctor Dashboard** – Doctors have an overview of their scheduled appointments and can manage content.
- 📱 **Responsive Design** – The application is fully optimized for all devices: smartphones, tablets, and desktop computers.
- 🤖 **Virtual Assistant** – An integrated AI-powered assistant helps patients get quick advice based on their symptoms.

## 🛠️ Technologies Used

### 🔧 Backend
- PHP 8 – Primary server-side language.  
- Custom PHP MVC Framework – A manually developed Model-View-Controller system for organizing application architecture.  
- MySQL  
- Twig  

### 📦 Composer (PHP Dependency Manager)
- PHPMailer – Library for sending email messages.
- Codeguy/upload – Library for secure and efficient file/image uploading with validation and file system handling.
- Opencage/geocode - A PHP library that provides a simple interface for interacting with the OpenCage Geocoding API, enabling address-to-coordinate and coordinate-to-address conversions.

### 🎨 Frontend
- HTML5 & CSS3  
- Bootstrap 5  
- JavaScript, jQuery, AJAX  
- JSON – Used on both backend and frontend for data exchange, configuration, and file-based storage.

### 🌐 API Services
- Pusher – Real-time API service for implementing features like notifications and live updates.  
- OpenAI ChatGPT API – AI-powered service for text generation and automated user interactions.
- Google Identity Services (OAuth 2.0) – Used for user registration and login via Google accounts.
- OpenCage Geocoding API -  A service for converting addresses into geographic coordinates (geocoding) and vice versa, useful for locating places on a map.
- Google Maps JavaScript API – Enables embedding and customizing interactive maps on web pages, including features like markers, geolocation, and route display.

