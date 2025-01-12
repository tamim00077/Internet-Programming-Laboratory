# Simple CGPA Calculator System

## Project Overview
This project is a basic web-based CGPA (Cumulative Grade Point Average) calculator system developed as part of the Internet Programming Laboratory course at my university. It provides a simple interface for students to calculate their CGPA based on course grades and credits.

## Grading System
The following table outlines the grading system used by North Westren University, Khulna:

| Numerical Grade | Letter Grade | Grade Point |
|----------------|--------------|-------------|
| 80% and above | A+ | 4.00 |
| 75% to less than 80% | A | 3.75 |
| 70% to less than 75% | A- | 3.50 |
| 65% to less than 70% | B+ | 3.25 |
| 60% to less than 65% | B | 3.00 |
| 55% to less than 60% | B- | 2.75 |
| 50% to less than 55% | C+ | 2.50 |
| 45% to less than 50% | C | 2.25 |
| 40% to less than 45% | D | 2.00 |
| Less than 40% | F | 0.00 |
| Incomplete | I | --- |
| Withdrawn | W | --- |
| Continuous Assessment | X | --- |

## Features
* User-friendly CGPA calculation interface
* Input options include:
   * Number of courses (1-15)
   * Grade selection for each course
   * Credit hour selection for each course
* Results page displaying:
   * Individual course information
   * Final calculated CGPA
* Support for various grade points (A+ to F)
* Multiple credit hour options (0.75 to 4.00)

## Technologies Used
* HTML5
* CSS3
* JavaScript
* PHP
* POST method for form submission

## Project Structure
```
├── cgpa_calculator.html    # Main calculator form
├── display_cgpa.php        # Result display page
└── README.md              # Project documentation
```

## Installation and Setup
1. Ensure you have a web server with PHP support (e.g. XAMPP)
2. Clone this repository to your web server's root directory
3. Access the calculator through your web browser

```
# Example using XAMPP
git clone [your-repository-url]
# Place in htdocs folder
# Access via: localhost/[project-folder]/cgpa_calculator.html
```

## Usage
1. Open the CGPA calculator in a web browser
2. Enter the number of courses (1-15)
3. For each course:
   * Select the grade obtained (A+ to F)
   * Choose the credit hours (0.75 to 4.00)
4. Click "Calculate CGPA" to view your results

## Learning Objectives
This project demonstrates understanding of:
* HTML form creation and styling
* JavaScript for dynamic form generation
* PHP calculations and data processing
* Basic web security concepts (form method selection)
* User interface design principles
* Client-server communication basics

## Future Improvements
* Add semester-wise CGPA calculation
* Implement grade point scale selection
* Add result saving functionality
* Include GPA to percentage conversion
* Add print/download result option

## Contributing
This is an academic project created for educational purposes. While it's not open for direct contributions, feedback and suggestions are welcome.

## Author
J.M. Tamimur Rahman<br>
Computer Science and Engineering Department <br>
North Western University, Khulnaa<br>
Third Year - Internet Programming Laboratory<br>

## Acknowledgments
Course Instructor: Abu Naim Khan<br>
Lecturer<br>
Department of Computer Science and Engineering<br>
North Western University, Khulna<br>
## License
This project is created for educational purposes and is part of university coursework.

## Contact
For any inquiries or suggestions, feel free to contact:
Email: jmtamimurrahman@gmail.com
