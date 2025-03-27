<?php
//Module 6 – HTML, CSS and JS in PHP//
//HTML Basics
/*1. HTML Basics
1.1 What is HTML? Explain its structure.
HTML (HyperText Markup Language) is used to create and structure web pages. It consists of elements (tags) enclosed in angle brackets.
Basic Structure:
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <h1>Heading</h1>
    <p>Paragraph</p>
</body>
</html>

1.2 Purpose of HTML Tags & Examples
HTML tags define elements on a webpage.
Examples:
<h1> - <h6> → Headings
<p> → Paragraph
<a href="url"> → Link
<img src="image.jpg"> → Image
<ul> & <li> → Lists

1.3 Block-level vs. Inline Elements
Block-level elements take full width & start on a new line.
Examples: <div>, <p>, <h1>, <section>
Inline elements take only as much width as needed & stay in the same line.
Examples: <span>, <a>, <img>, <b>, <i>

1.4 Semantic HTML & Importance
Semantic HTML uses meaningful tags for better readability & SEO.
Examples: <header>, <nav>, <article>, <footer>
Importance: Improves accessibility & SEO, helps search engines understand content.

2. CSS Fundamentals
2.1 What is CSS? How is it different from HTML?
CSS (Cascading Style Sheets) is used to style HTML elements, whereas HTML structures the content.

2.2 Three Ways to Apply CSS
Inline CSS → Applied directly to elements using the style attribute.
<p style="color: red;">This is red text.</p>
Internal CSS → Written inside a <style> tag in the <head>.
<style>
    p { color: blue; }
</style>
External CSS → Linked via a separate .css file.
<link rel="stylesheet" href="style.css">
2.3 CSS Selectors & Types
Selectors are used to target HTML elements.

Types of CSS Selectors:
Element Selector → p {} targets all <p> elements.
Class Selector → .class {} targets elements with class="class".
ID Selector → #id {} targets element with id="id".
Universal Selector → * {} selects all elements.

2.4 Box Model in CSS
The box model defines how elements are displayed.
Components:
Content → The actual text or image inside the box.
Padding → Space between content & border.
Border → Edge surrounding the element.
Margin → Space outside the border separating elements.

3. Responsive Web Design
3.1 What is Responsive Web Design? Why is it Important?
It makes web pages adjust to different screen sizes for better user experience.

3.2 Media Queries in CSS & Example
Media queries apply CSS based on screen size.

Example:
@media (max-width: 600px) {
    body { background-color: lightblue; }
}

3.3 Benefits of Mobile-First Approach
Better performance on small screens.
Improved user experience.
Easier scalability for larger screens.

4. PHP Integration

4.1 How PHP Generates HTML Dynamically?
PHP can embed HTML using echo or print.
Example:
<?php echo "<h1>Welcome</h1>"; ?>
4.2 How to Include CSS in PHP?
Use <link> inside PHP file or inline styles in PHP echo.

Example:
echo '<link rel="stylesheet" href="style.css">';

4.3 Advantages of PHP in Managing HTML Forms
Form validation before submitting.
Data processing on the server.
Security against SQL injection & spam. */

//LAB EXERCISES
//1. Creating a Simple Web Page


?>