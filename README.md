
🚦 Traffic Police Management System

The  Traffic Police Management System  is a mini web application designed to help traffic police departments efficiently manage traffic violations, issue fines, and maintain a digital record of violators. This system simplifies traditional manual processes and promotes road safety through streamlined operations.

---

  ✨ Features

   🔖 Violation Invoicing 
  Generate violation invoices by entering the vehicle number, date, time, location, type of violation, and optional comments. The system calculates the fine amount based on preset rules and provides a printable invoice.

   📂 Violation Records Management 
  Maintain a complete and searchable record of all violations, including violator and vehicle details, violation type, and fine amount — essential for tracking repeat offenders.

   💳 Fine Payment Tracking 
  Track the payment status of each issued invoice. Update the payment once settled to keep records accurate and up-to-date.

   🔎 Search and Reporting 
  Search for violations by vehicle number, date, location, or violator name. Generate summary reports showing total violations, fines collected, and pending payments.

   👮‍♀️ User Access Control   (Optional for expansion) 
  Ensure only authorized users can access or update sensitive data.

---

 🧰 Technologies Used

   Frontend : HTML5, CSS3, JavaScript, Bootstrap 4
   Backend : PHP
   Database : MySQL (via phpMyAdmin)
   Local Server : XAMPP

---

  🛠️ Installation Guide

   📦 Prerequisites

  [XAMPP](https://www.apachefriends.org/) installed on your system

    📋 Steps to Run the Project

1.  Clone this repository  or download the ZIP file:

   ```bash
   git clone https://github.com/prachichoudhary2004/TrafficPolice-Management.git
   ```

2.  Move the project to your XAMPP `htdocs` directory :

   ```
   C:\xampp\htdocs\TrafficPolice-Management
   ```

3.  Start the XAMPP server :

     Open the XAMPP Control Panel
     Start both  Apache  and  MySQL 

4.  Create the MySQL database :

     Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
     Create a new database named: `traffic`
      (Make sure the name is exactly `traffic`, otherwise the app will not connect.) 

5.  Import the SQL file:

     In the `traffic` database, go to the  Import  tab
     Select the file `traffic.sql` located in your project directory
     Click  Go  to import the database

6. Launch the application:
   Open your browser and visit:
   [http://localhost/TrafficPolice-Management/TrafficPolice/](http://localhost/TrafficPolice-Management/TrafficPolice/)

---

 🗂️ Project Structure

```
TrafficPolice-Management/
├── TrafficPolice/
│   ├── img/                Images used in the UI
│   ├── css/                Stylesheets
│   ├── js/                 JavaScript files
│   ├── status.php          Violation tracking module
│   └── ...                 Other PHP logic files
├── traffic.sql             MySQL database export
└── README.md               Project overview and instructions
```

---

 🚀 Future Enhancements 

  Implement  admin login authentication 
  Enable  email/SMS notification  for issued violations
  Add  data export  options (PDF/CSV)
  Integrate  Google Maps API  for violation location tagging

---

 🙋‍♀️ About the Developer

Prachi Choudhary
💻 Passionate about building meaningful software solutions
📫 Connect with me:

  GitHub: [@prachichoudhary2004](https://github.com/prachichoudhary2004)
  Email: [prachichoudhary2004@gmail.com](mailto:prachichoudhary2004@gmail.com)

---
