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
Yeh hai **$_FILES** ke **har ek key ka explanation** aur **example code** jo **file upload ke waqt use hoti hai.**  

---  

### 🔹 1. **$_FILES['file1']['name']**  
✅ **Yeh uploaded file ka actual naam return karta hai.**  

📌 **Example:**  
```php
if(isset($_FILES['file1'])) {
    echo "Uploaded File Name: " . $_FILES['file1']['name'];
}
```
🖥️ **Output:**  
```
Uploaded File Name: my_photo.png
```

---

### 🔹 2. **$_FILES['file1']['type']**  
✅ **Yeh uploaded file ka MIME type return karta hai (e.g., image/png, application/pdf).**  

📌 **Example:**  
```php
if(isset($_FILES['file1'])) {
    echo "File Type: " . $_FILES['file1']['type'];
}
```
🖥️ **Output:**  
```
File Type: image/png
```

---

### 🔹 3. **$_FILES['file1']['size']**  
✅ **Yeh file ka size (bytes me) return karta hai.**  

📌 **Example:**  
```php
if(isset($_FILES['file1'])) {
    echo "File Size: " . $_FILES['file1']['size'] . " bytes";
}
```
🖥️ **Output:**  
```
File Size: 204800 bytes
```
(Ye **200 KB** file ka size hai kyunki **1 KB = 1024 bytes** hota hai.)

---

### 🔹 4. **$_FILES['file1']['tmp_name']**  
✅ **Yeh temporary location return karta hai jahan file temporarily store hoti hai.**  

📌 **Example:**  
```php
if(isset($_FILES['file1'])) {
    echo "Temporary File Location: " . $_FILES['file1']['tmp_name'];
}
```
🖥️ **Output:**  
```
Temporary File Location: C:\xampp\tmp\phpA1B2.tmp
```
(Yeh file **server ke temporary folder** me store hoti hai jab tak usko manually move nahi karte.)

---

### 🔹 5. **$_FILES['file1']['error']**  
✅ **Yeh file upload hone par error code return karta hai (agar koi issue ho).**  

📌 **Example:**  
```php
if ($_FILES['file1']['error'] == 0) {
    echo "File uploaded successfully!";
} else {
    echo "Error in file upload. Error Code: " . $_FILES['file1']['error'];
}
```
🖥️ **Possible Outputs:**  
✔️ **Success Case:**  
```
File uploaded successfully!
```
❌ **Error Case (Agar koi problem ho to):**  
```
Error in file upload. Error Code: 1
```
(Agar **error code 1** hai, iska matlab file ka size `upload_max_filesize` se zyada hai.)

---

## 🔥 **Full Working Code for File Upload**
```php
<html>
<head>
    <title>File Upload Example</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <p>Name: <input type="text" name="username"/></p>
    <p>File: <input type="file" name="file1"/></p>
    <p><input type="submit" name="submit" value="Upload"/></p>
</form>

<?php
if(isset($_POST['submit'])) {
    echo "User Name: " . $_POST['username'] . "<br>";

    if($_FILES['file1']['size'] > 0) {
        echo "Uploaded File Name: " . $_FILES['file1']['name'] . "<br>";
        echo "File Type: " . $_FILES['file1']['type'] . "<br>";
        echo "File Size: " . $_FILES['file1']['size'] . " bytes<br>";
        echo "Temporary File Location: " . $_FILES['file1']['tmp_name'] . "<br>";

        $path = 'uploads/' . $_FILES['file1']['name'];  
        move_uploaded_file($_FILES['file1']['tmp_name'], $path);
        echo "File successfully uploaded to: " . $path;
    } else {
        echo "File upload failed!";
    }
}
?>

</body>
</html>
```

---

## **✅ Summary:**
| **Key**                          | **Description** |
|----------------------------------|--------------------------------|
| `$_FILES['file1']['name']`       | Uploaded file ka naam return karega. |
| `$_FILES['file1']['type']`       | File ka **MIME type** return karega. |
| `$_FILES['file1']['size']`       | File ka **size (bytes me)** return karega. |
| `$_FILES['file1']['tmp_name']`   | Temporary file location return karega. |
| `$_FILES['file1']['error']`      | Agar upload me koi error hai to uska **error code** return karega. |

Agar **aur detail chahiye ya koi error samajhna ho** to batao! 😃