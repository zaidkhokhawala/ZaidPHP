<?php

// Student Management System
$students = [];

// Function to display menu
function displayMenu() {
    echo "\nSelect an option:\n";
    echo "1. Counselor Menu\n";
    echo "2. Faculty Menu\n";
    echo "3. Exit\n";
    echo "Enter your choice: ";
}

// Function to add a student
function addStudent() {
    global $students;

    echo "\nEnter Student ID: ";
    $id = trim(fgets(STDIN));

    // Validate First Name
    while (true) {
        echo "Enter First Name: ";
        $firstName = trim(fgets(STDIN));
        if (preg_match("/^[A-Za-z]+$/", $firstName)) {
            break;
        }
        echo "Invalid First Name. Only letters are allowed. Try again.\n";
    }

    // Validate Contact Number
    while (true) {
        echo "Enter Contact Number: ";
        $contact = trim(fgets(STDIN));
        if (preg_match("/^[0-9]{10}$/", $contact)) {
            break;
        }
        echo "Invalid Contact Number. Enter a 10-digit number.\n";
    }

    echo "Enter Course: ";
    $course = trim(fgets(STDIN));

    $students[$id] = [
        'first_name' => $firstName,
        'contact' => $contact,
        'course' => $course
    ];
    echo "Student added successfully!\n";
}

// Function to view all students
function viewAllStudents() {
    global $students;
    if (empty($students)) {
        echo "No students found.\n";
        return;
    }
    echo "\nList of Students:\n";
    foreach ($students as $id => $student) {
        echo "ID: $id | Name: {$student['first_name']} | Contact: {$student['contact']} | Course: {$student['course']}\n";
    }
}

// Function to view a specific student
function viewStudent() {
    global $students;
    echo "Enter Student ID to search: ";
    $id = trim(fgets(STDIN));
    
    if (isset($students[$id])) {
        $student = $students[$id];
        echo "ID: $id | Name: {$student['first_name']} | Contact: {$student['contact']} | Course: {$student['course']}\n";
    } else {
        echo "Student does not exist.\n";
    }
}

// Function to delete a student
function deleteStudent() {
    global $students;
    echo "Enter Student ID to delete: ";
    $id = trim(fgets(STDIN));

    if (isset($students[$id])) {
        echo "Delete student ID $id? (Y/N): ";
        $confirm = trim(fgets(STDIN));
        
        if (strtoupper($confirm) === 'Y') {
            unset($students[$id]);
            echo "Student removed successfully!\n";
        } else {
            echo "Operation cancelled.\n";
        }
    } else {
        echo "Student does not exist.\n";
    }
}

// Function for counselor menu
function counselorMenu() {
    while (true) {
        echo "\nCounselor Menu:\n";
        echo "1. Add Student\n";
        echo "2. Remove Student\n";
        echo "3. View All Students\n";
        echo "4. View Specific Student\n";
        echo "5. Back to Main Menu\n";
        echo "Enter your choice: ";

        $choice = trim(fgets(STDIN));

        switch ($choice) {
            case '1': addStudent(); break;
            case '2': deleteStudent(); break;
            case '3': viewAllStudents(); break;
            case '4': viewStudent(); break;
            case '5': return;
            default: echo "Invalid choice. Try again.\n";
        }
    }
}

// Function for faculty menu (Feature to be implemented)
function facultyMenu() {
    echo "Faculty Menu (Feature to be implemented)\n";
}

// Main Program Loop
while (true) {
    displayMenu();
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case '1': counselorMenu(); break;
        case '2': facultyMenu(); break;
        case '3': exit("Exiting the program. Goodbye!\n");
        default: echo "Invalid choice. Try again.\n";
    }
}
