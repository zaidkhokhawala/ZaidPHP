# Object-Oriented Programming (OOP) aur Uske 4 Principles

## Object-Oriented Programming (OOP) kya hai?

OOP ek programming style hai jisme hum real-world cheezon (objects) ko model karte hain. Isme data aur functions ko ek saath **objects** ke andar rakhte hain. Ye programming ko zyada organized, reusable, aur easy to manage banata hai.

---

## OOP ke 4 main principles:

### 1. Encapsulation

- Matlab data (variables) aur functions (methods) ko ek unit (class/object) me band karna.
- Isse data safe rehta hai, kyunki bahar se directly data ko access nahi kar sakte, sirf class ke methods ke through hi kar sakte hain.
- **Example:** Aap apne phone ke andar data store karte ho, lekin bahar wale sirf buttons daba ke control kar sakte hain, phone ke internal data ko directly chhed nahi sakte.

### 2. Inheritance

- Matlab ek class apni properties aur methods doosri class ko de sakti hai, yani ek class dusri class se traits le sakti hai.
- Isse code reusability badhti hai, naye features easily add kar sakte hain.
- **Example:** Agar "Car" class hai, toh "ElectricCar" class "Car" se properties le sakti hai aur apne special features bhi add kar sakti hai.

### 3. Polymorphism

- Matlab ek function ya method alag-alag tarike se behave kar sakta hai depending on object.
- Simple shabdon me, same naam ke function ke alag implementations ho sakte hain.
- **Example:** "draw()" function ek shape ke liye circle draw karega, aur dusre shape ke liye square. Dono ke function ka naam same hai, lekin kaam alag hai.

### 4. Abstraction

- Matlab unnecessary details ko chhupa ke sirf important cheezein dikhana.
- User ko sirf essential features dikhte hain, andar ka complex logic hide hota hai.
- **Example:** Aap car chala rahe ho, aapko engine kaise kaam karta hai pata nahi, bas steering, accelerator aur brake use karte ho.

# PHP me Class ka Structure

PHP me **Class** ek design hoti hai jisse hum real-world cheezon ko model karte hain. Class ke andar **Properties** (variables) aur **Methods** (functions) hote hain, jo milke object ka data aur kaam define karte hain.

"Class ek design hoti hai jo real world ki cheezon ko program ke andar dikhati hai. Is design ke andar hum properties (jo data hota hai) aur methods (jo kaam hote hain) define karte hain. Jab hum class se object banate hain, to wo us design ka ek alag example hota hai jisme apna alag data hota hai."

---

## Class Structure ke Important Parts:

1. Properties

- Properties wo variables hote hain jo class ke andar banaye jate hain.
- Ye object ke features (data) ko batate hain.
- Properties ke saath access type (jaise `public`, `private`, `protected`) lagate hain jo batata hai ki data ko kaun access kar sakta hai.

2.  Methods

- Methods functions hote hain jo class ke andar likhe jate hain.
- Ye object ke actions (kaam) ko batate hain.
- Methods se hum properties ko badal sakte hain ya koi kaam kar sakte hain.

---

## Example: PHP Class ka Structure

<?php
class Car {
    // Properties: Car ke features
    public $color;
    public $model;

    // Constructor Method: Jab object banta hai to initial value set karta hai
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    // Method: Car ko start karne ka kaam
    public function startEngine() {
        echo "Engine started for " . $this->model . " in " . $this->color . " color.";
    }
}
?>

# Object kya hota hai OOP me? (PHP ke context me)

---

### Object ka matlab:

Object, **OOP (Object-Oriented Programming)** me ek real-world entity ka **specific example** hota hai, jo class ke blueprint se banta hai.  
Matlab, class ek design hoti hai, aur object us design ka ek actual item hota hai jisme apna alag data hota hai.

---

### Object kaise banta hai PHP me?

PHP me jab hum class banate hain, to wo sirf ek design hoti hai. Us class se jab hum **`new` keyword** ka use karke object banate hain, us process ko **instantiation** kehte hain.

````php
<?php
class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function startEngine() {
        echo "Engine started for " . $this->model;
    }
}

// Object banana (Instantiation)
$car1 = new Car("Red", "Honda");
$car2 = new Car("Blue", "Toyota");

// Ab hum $car1 aur $car2 objects ke methods call kar sakte hain
$car1->startEngine();  // Output: Engine started for Honda
$car2->startEngine();  // Output: Engine started for Toyota
?>

# 🧠 THEORY EXERCISE: Inheritance in OOP (PHP)

## 📘 **What is Inheritance?

**Inheritance** ek Object-Oriented Programming (OOP) ka concept hai jisme ek class (called **child** or **subclass**) kisi dusri class (called **parent** or **superclass**) ke properties aur methods ko **inherit** karti hai.

➡️ Iska matlab:
Child class Parent class ke saare functions aur variables ka use kar sakti hai bina dobara likhe.

---

## 🧩 PHP Me Inheritance Kaise Kaam Karta Hai?

PHP me inheritance implement karne ke liye hum `extends` keyword ka use karte hain.

```php
// Parent class
class Animal {
    public function makeSound() {
        echo "Animal sound";
    }
}

// Child class
class Dog extends Animal {
    public function bark() {
        echo "Dog barks";
    }
}

// Object create karte hain
$dog = new Dog();

// Parent class ka method bhi accessible hai
$dog->makeSound(); // Output: Animal sound

// Child class ka method bhi
$dog->bark(); // Output: Dog barks


class Vehicle {
    public function start() {
        echo "Vehicle start ho gaya!";
    }
}

class Car extends Vehicle {
    public function drive() {
        echo "Car ab chal rahi hai!";
    }
}

$myCar = new Car();
$myCar->start();  // Vehicle ka method
$myCar->drive();  // Car ka method

🔁 Isme kya ho raha hai?
Car class ne Vehicle class ko extends kiya, to usne start() method automatically le liya.

Ab Car class ke paas khud ka drive() method hai + start() method bhi mil gaya.

✅ Benefits of Inheritance
Code Reusability: Ek hi code baar baar likhne ki zarurat nahi.

Organized Structure: Parent-child relation easily samajh me aata hai.

Easy Maintenance: Agar parent class me kuch change karo, to child classes automatically update ho jaati hain.

# 🔁 Method Overloading in PHP

---

## 🔹 Method Overloading kya hota hai?

**Method Overloading** ek concept hai jisme **ek hi method ka naam hota hai**, lekin **different number of parameters** ya **type of parameters** ke saath use kiya jaata hai.

Yeh feature Java, C++ jaise languages me directly supported hota hai, lekin **PHP me yeh direct support nahi karta**.

---

## 🤔 PHP me method overloading kaise hoti hai?

PHP me method overloading ko implement karne ke liye **magic methods** ka use hota hai — especially:

- `__call()` → jab non-existing **object method** call hoti hai
- `__callStatic()` → jab non-existing **static method** call hoti hai

> In magic methods ka use karke hum PHP me overloading ka effect create kar sakte hain.

---

## ✅ Example: Method Overloading using `__call()`

```php
class Calculator {
    public function __call($method, $arguments) {
        if ($method == 'add') {
            $count = count($arguments);

            if ($count == 2) {
                return $arguments[0] + $arguments[1];
            } elseif ($count == 3) {
                return $arguments[0] + $arguments[1] + $arguments[2];
            }
        }
    }
}

$calc = new Calculator();
echo $calc->add(5, 10);        // Output: 15
echo $calc->add(1, 2, 3);      // Output: 6

🧠 Abstraction in PHP
Abstraction OOP ka ek important concept hai jiska matlab hota hai:
"Sirf important cheezon ko dikhana aur unnecessary details ko hide karna."

Jaise real life me hum car chalate hain to hume ye nahi pata hota ki engine kaise kaam karta hai — hume sirf start(), accelerate(), aur brake() use karne hote hain. Is tarah se, hum complex logic ko chhupa kar sirf useful functions user ko dete hain — isi process ko abstraction kehte hain.

🔧 PHP me Abstraction kaise implement hota hai?
PHP me abstraction implement karne ke do tareeke hote hain:

Abstract Class

Interface

🔷 Abstract Class
Isme hum abstract methods bana sakte hain — jinka sirf naam hota hai, body nahi hoti.

Jo bhi class is abstract class ko extend karegi, use ye methods implement (define) karne padenge.

Ek abstract class me normal methods aur properties bhi ho sakti hain.

✅ Example:
php

abstract class Animal {
    abstract public function makeSound(); // no body

    public function eat() {
        echo "Eating food";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark";
    }
}
🔷 Interface
Interface ek pure abstraction hota hai.

Isme sirf method ke names (declaration) hote hain — implementation nahi hota.

Jo class interface ko implement karti hai, usse sabhi methods ko define karna mandatory hota hai.

PHP me class multiple interfaces implement kar sakti hai (ye ek tarah ka multiple inheritance bhi hota hai).

✅ Example:
php

interface Shape {
    public function area();
    public function perimeter();
}

class Rectangle implements Shape {
    public function area() {
        echo "Area of rectangle";
    }

    public function perimeter() {
        echo "Perimeter of rectangle";
    }
}
🔑 Difference: Abstract Class vs Interface
Abstract Class	Interface
abstract keyword se banti hai	interface keyword se banta hai
Abstract + normal methods dono ho sakte hain	Sirf method declarations hote hain
Properties bhi define kar sakte hain	Properties allowed nahi hoti
Single inheritance	Multiple interfaces implement kiye ja sakte hain




🔧 Constructor in PHP — Simple Samjhauta
1. Constructor kya hota hai?
Constructor ek special function hai jo class ke andar likha jata hai.

Jab bhi hum us class ka object banate hain, ye function automatic chal jata hai.

Iska kaam hota hai object ko initialize karna, matlab us object ke andar pehle se kuch value ya setting dena.

2. PHP me Constructor ka naam kya hota hai?
PHP me constructor ka naam hota hai: __construct() (do underscore ke saath).

Ye method hamesha wahi naam se likhna padta hai — ye PHP ke rules hain.

3. Constructor ko hum kyu use karte hain?
Jab object banate hain, tab hum us object ko turant kuch values dena chahte hain.

Agar constructor nahi hota, to hume properties ko baad me set karna padta, jo tedious (mehnat wala) hota.

Isse code zyada clean aur efficient ho jata hai.

4. Constructor ka basic syntax
php

class ClassName {
    public function __construct() {
        // Initialization code
    }
}
5. Constructor me parameters ka use
Hum constructor me values bhej sakte hain, taaki object banate hi wo values uske andar store ho jaye.

Isse object ko customize karna easy hota hai.

6. Example ke saath samjho:
php

<?php
class Mobile {
    public $brand;
    public $price;

    // Constructor jo do values lega
    public function __construct($brandName, $mobilePrice) {
        $this->brand = $brandName;   // Object ki property ko value di
        $this->price = $mobilePrice; // Object ki property ko value di
    }

    public function showDetails() {
        echo "Brand: $this->brand, Price: $this->price";
    }
}

// Object banta hi constructor call ho jayega aur properties set ho jayengi
$myMobile = new Mobile("Samsung", 15000);
$myMobile->showDetails();
?>
Output:
Brand: Samsung, Price: 15000
7. Important baatein yaad rakhne layak (Key Points):
Constructor automatic call hota hai jab object banta hai.

Iska naam hamesha __construct() hi hota hai.

Hum constructor me values le sakte hain taaki object create karte hi usme data store ho jaye.

Agar constructor nahi likhenge, to PHP default constructor use karega jo kuch nahi karta.

Constructor me hum public, private, ya protected bhi use kar sakte hain (access modifiers).

# Destructor in PHP -  

---

### Destructor kya hota hai?

Destructor bhi ek special method hota hai jo class ke andar define kiya jata hai. Jab object apna kaam khatam kar leta hai ya program se delete ho jata hai, tab destructor automatically call hota hai.

Iska kaam hota hai **cleanup** karna, jaise memory free karna ya files close karna, ya koi aise kaam jo object ke khatam hone par karna zaroori ho.

---

### PHP me destructor ka naam kya hota hai?

PHP me destructor ka naam `__destruct()` hota hai. Is method ko hum khud define karte hain aur ye bina call kiye automatically chal jata hai jab object destroy hota hai.

---

### Destructor kab call hota hai?

- Jab object ka scope khatam ho jata hai, matlab jab wo object aur use nahi ho raha.
- Jab script ka execution end hota hai.
- Jab hum explicitly `unset()` function se object ko destroy karte hain.

---

### Destructor ka use kyon karte hain?

- Resource ko release karne ke liye, jaise file handles, database connections.
- Memory clean karne ke liye.
- Object ke end me kuch final task karne ke liye.

---

### Example:
```php
class Test {
    public function __construct() {
        echo "Object created<br>";
    }

    public function __destruct() {
        echo "Object destroyed<br>";
    }
}

$obj = new Test();
unset($obj); // Isse object destroy hoga aur destructor call hoga


# Magic Methods in PHP - 

---

### 🔮 Magic Methods kya hote hain?

Magic methods PHP ke special methods hote hain jinke naam double underscore `__` se start hote hain, jaise `__construct()`, `__get()`, `__set()`, etc. Ye methods automatically tab call hote hain jab humari class ke objects par kuch khas operations perform hote hain.

Inka use hum apni class ke behavior ko customize karne ke liye karte hain, bina manually function call kiye.

---

### 🔑 Commonly Used Magic Methods:

1. **`__construct()`**
   Ye constructor method hota hai. Jab bhi class ka object banta hai, ye method automatic call hota hai. Isme hum object ki initialization karte hain.

   ```php
   class Car {
       public $color;

       public function __construct($color) {
           $this->color = $color;
           echo "Car color set to " . $this->color;
       }
   }

   $car1 = new Car("Red");  // Output: Car color set to Red
__get($property)
Jab hum class ke kisi inaccessible (private/protected ya non-existing) property ko access karte hain, to ye method automatic call hota hai. Isse hum custom logic laga sakte hain property ko access karne ke liye.

php

class Person {
    private $data = [];

    public function __get($name) {
        if(array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return "Property '$name' not found";
    }

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
}

$p = new Person();
$p->name = "Zaid";          // __set() called
echo $p->name;              // __get() called, Output: Zaid
echo $p->age;               // __get() called, Output: Property 'age' not found
__set($property, $value)
Jab hum class ke kisi inaccessible property ko set karte hain, to ye method automatic call hota hai. Isse hum properties ko dynamically set kar sakte hain.

🔥 Other Useful Magic Methods:
__destruct() : Jab object destroy hota hai, ye method call hota hai. (Destructor)

__call($name, $arguments) : Jab koi inaccessible method call hota hai.

__toString() : Jab object ko string me convert karna hota hai.

__isset($name) : Jab isset() function inaccessible property par call hota hai.

__unset($name) : Jab unset() inaccessible property par call hota hai.

# Scope Resolution Operator (::) in PHP - 

---

## Scope Resolution Operator (::) kya hota hai?

**Scope Resolution Operator** ko hum **double colon (::)** kehte hain. PHP me ye operator static properties, static methods, aur constants ko access karne ke liye use hota hai.

Ye operator batata hai ki hum kis class ka koi property ya method use kar rahe hain bina object banaye.

---

## Jab hum use karte hain?

1. **Static properties aur methods ko access karne ke liye**
   Jab koi property ya method `static` declare hota hai, to hum usse directly class ke naam ke saath `::` operator se access karte hain.

2. **Constants ko access karne ke liye**
   Class ke andar defined constants ko bhi `::` se access kiya jaata hai.

3. **Parent class ke methods ko call karne ke liye**
   Agar child class me parent class ke method ko call karna ho, to hum `parent::methodName()` likhte hain.

---

## Simple Example:

```php
class MathHelper {
    public static $pi = 3.14;

    public static function square($num) {
        return $num * $num;
    }

    const VERSION = "1.0";
}

// Static property access
echo MathHelper::$pi;            // Output: 3.14

// Static method call
echo MathHelper::square(5);      // Output: 25

// Constant access
echo MathHelper::VERSION;        // Output: 1.0
Parent class method call karna (Inheritance me):
php

class ParentClass {
    public static function greet() {
        echo "Hello from Parent!";
    }
}

class ChildClass extends ParentClass {
    public static function greet() {
        parent::greet();   // Parent class ka greet method call karega
        echo " And Hello from Child!";
    }
}

ChildClass::greet();
// Output: Hello from Parent! And Hello from Child!




# Traits in PHP - 

---

## Traits kya hote hain?

**Traits** PHP ka ek special feature hain jo code reuse ke liye use hota hai. Jab humare paas kuch methods hote hain jo multiple classes me repeat hone wale hote hain, tab hum un methods ko ek **trait** me likh kar alag se define kar sakte hain. Phir alag-alag classes us trait ko use kar sakti hain bina inheritance ke.

Iska matlab hai, agar aapko ek jaisa code bar-bar likhna hai different classes me, to aap trait banakar wo code ek jagah rakh sakte ho, aur classes usko use kar sakti hain.

---

## Traits ka purpose kya hai?

- Code duplication kam karna
- Multiple inheritance ki tarah kaam karna (PHP me multiple inheritance nahi hota, traits se ye problem solve hoti hai)
- Code ko modular aur clean rakhna

---

## Trait ka basic syntax:

```php
trait Logger {
    public function log($message) {
        echo "Log message: $message";
    }
}

class User {
    use Logger;
}

class Product {
    use Logger;
}

$user = new User();
$user->log("User created");

$product = new Product();
$product->log("Product added");


Visibility in PHP — Simple Explanation (Hinglish)
PHP me 3 tarah ki visibility hoti hai:

Public

Private

Protected

Ye visibility decide karti hai ki koi property ya method kaha se access ho sakta hai.

1. Public
Public ka matlab hai "sab ke liye open."

Jo bhi property ya method public hogi, usko class ke andar, bahar, aur inherited classes (child classes) se bhi access kiya ja sakta hai.

Matlab koi bhi easily isko use kar sakta hai.

Example:

php

class Car {
    public $color;  // Public property
    public function drive() {
        echo "Car chal rahi hai";
    }
}

$obj = new Car();
$obj->color = "red";  // Accessible outside class
$obj->drive();        // Accessible outside class
2. Private
Private ka matlab hai "sirf apni class ke liye."

Private properties aur methods ko sirf wahi class access kar sakti hai jisme wo defined hain.

Inherited classes (child classes) aur bahar se access nahi kar sakte.

Example:

php

class Car {
    private $engineNumber;  // Private property
    private function startEngine() {
        echo "Engine start hua";
    }

    public function startCar() {
        $this->startEngine();  // Private method class ke andar se accessible hai
    }
}

$obj = new Car();
// $obj->engineNumber = "123";  // Error: Cannot access private property
$obj->startCar();  // Works, because public method calls private method internally
3. Protected
Protected ka matlab hai "class aur uske children ke liye."

Protected properties aur methods ko wahi class aur uski child classes access kar sakti hain.

Bahar se (outside) direct access nahi hota.

Example:

php

class Car {
    protected $model;
    protected function honk() {
        echo "Car horn baj raha hai";
    }
}

class SportsCar extends Car {
    public function showModel() {
        echo $this->model;  // Child class ke andar protected property accessible
    }

    public function honkHorn() {
        $this->honk();  // Child class ke andar protected method accessible
    }
}

$obj = new SportsCar();
// $obj->model = "Ferrari";  // Error: Cannot access protected property
$obj->showModel();  // Work karega, kyunki protected property child class me accessible hai
Summary Table
Visibility	Access Inside Class	Access in Child Class	Access Outside Class
Public	Yes	Yes	Yes
Private	Yes	No	No
Protected	Yes	Yes	No

Why use visibility?
Encapsulation: Data aur code ko protect karna, sirf zarurat wale jagah access dena.

Security: Sensitive data (jaise passwords) private rakhna.

Code maintainability: Class ke andar ki cheeze safe rakhna, aur bahar ki class users se chhupana.

Example with all 3:
php

class Person {
    public $name;          // Sab access kar sakte hain
    protected $age;        // Sirf class aur child class access kar sakti hai
    private $salary;       // Sirf class ke andar access hota hai

    public function setAge($age) {
        $this->age = $age;
    }

    private function calculateTax() {
        // Private method, sirf class ke andar use hoga
        return $this->salary * 0.1;
    }
}

class Employee extends Person {
    public function showAge() {
        echo $this->age;    // Protected property accessible in child class
    }
}

$emp = new Employee();
$emp->name = "Zaid";     // Public, accessible
$emp->setAge(25);        // Public method sets protected property
$emp->showAge();         // Prints 25
// $emp->salary = 5000;  // Error: private property inaccessible


Type Hinting - Simple Explanation (Hinglish)
Type hinting PHP me ek feature hai jisse hum function ya method ke parameters me specify karte hain ki wo kis type ka data lena chahiye. Matlab, agar hum function me int, string, array, class ya koi specific type specify kar dete hain, to PHP check karta hai ki jab function call ho, tab usko sahi type ka data mile.

Example:
php

function addNumbers(int $a, int $b) {
    return $a + $b;
}

echo addNumbers(5, 10);  // Output: 15
// echo addNumbers("5", "abc");  // Error: Invalid argument
Is example me, addNumbers function sirf integers lega. Agar hum string ya koi aur type pass karenge, to PHP error dega.

Benefits of Type Hinting:
Error ko pehle se pakadna: Galat type ka data agar pass hota hai to error jaldi mil jata hai, runtime me bug kam hota hai.

Code ka samajhna asaan hota hai: Jo bhi function ko call karega, use pata rahega ki kis type ka data dena hai.

Better code quality: Type hinting se code safe aur robust banta hai.

IDE support: Modern IDEs type hinting ke wajah se better suggestions aur error detection kar pate hain.

Final Keyword - Simple Explanation (Hinglish)
PHP me final keyword ka use hota hai classes aur methods ko protect karne ke liye taaki unhe extend (inherit) ya override na kiya ja sake.

1. Final Class:
Agar kisi class ko final declare kar dete hain, to us class ko koi aur class inherit nahi kar sakti. Matlab us class ka koi child class nahi ban sakta.

2. Final Method:
Agar kisi method ko final declare karte hain, to wo method child classes me override nahi ho sakta. Matlab child class us method ko apne hisaab se change nahi kar sakti.

Example:
php

// Final Class Example
final class ParentClass {
    public function show() {
        echo "This is final class method.";
    }
}

// Error: Class ChildClass cannot extend final class ParentClass
// class ChildClass extends ParentClass {}


// Final Method Example
class BaseClass {
    final public function demo() {
        echo "This is a final method.";
    }
}

class ChildClass extends BaseClass {
    // Error: Cannot override final method demo()
    // public function demo() {
    //     echo "Trying to override";
    // }
}
Final Keyword ke Benefits:
Jab aap chahte hain ki koi class ya method change na ho, tab final use karte hain.

Code ko secure aur predictable banata hai.

Frameworks me ye use hota hai taaki core classes/methods accidentally modify na ho jayein.

Email Security Function - Simple Explanation (Hinglish)
Email Security Kya Hai?
Email security ka matlab hota hai email ke zariye bheji gayi information ko safe rakhna. Matlab email me jo message, attachments ya sensitive data hota hai, wo unauthorized logon tak na pahunch sake aur safe rahe.

Kyun Zaroori Hai?
Email me confidential information hoti hai, jaise passwords, personal details, business data.

Agar email secure nahi hai to hackers usse chura sakte hain ya badal bhi sakte hain.

Phishing attacks, malware, spam emails se bachna hota hai.

Secure email transmission business aur personal dono ke liye bohot important hai.

Email Security ke Common Practices:
Encryption
Email ko encrypt karna matlab message ko is tarah se encode karna ki sirf receiver hi usse padh sake. Common encryption protocols hain:

SSL/TLS (Email data ko secure channel se bhejne ke liye)

PGP/GPG (Email content ko encrypt karne ke liye)

Strong Passwords
Apne email account ke liye strong aur unique password use karna chahiye.

Two-Factor Authentication (2FA)
Email account me extra security ke liye 2FA enable karni chahiye. Isme password ke alawa ek aur code phone par milta hai.

Spam Filters Use Karna
Spam emails ko block karne ke liye email providers ke spam filters ka use karna chahiye.

Avoid Clicking Unknown Links
Unknown ya suspicious emails me diye gaye links par click na karein.

Regular Software Updates
Email client ya browser ko update rakhna chahiye taaki latest security patches lage rahe.

Backup Emails
Important emails ka backup rakhna chahiye taaki data loss na ho.

# File Handling in PHP - 

---

## File Handling kya hota hai?

File handling ka matlab hai program ke through files ko **create, open, read, write, update, aur close** karna. PHP me hum files ke sath kaam kar sakte hain jaise hum computer me manually karte hain.

---

## PHP me File Handling ke basic steps:

1. **File Open karna**
   File ko access karne ke liye sabse pehle usse open karna padta hai. PHP me `fopen()` function se file open karte hain. Isme do cheezein chahiye: file ka naam aur mode (jaise read, write, append).

   ```php
   $file = fopen("example.txt", "r");  // "r" ka matlab read mode
File Read karna
File ke andar ka data padhna ho to fread() ya fgets() function use karte hain.

php

$content = fread($file, filesize("example.txt"));
echo $content;
File Write karna
File me data likhna ho to fwrite() function ka use karte hain.

php

$file = fopen("example.txt", "w");  // "w" mode se file open karte hain write ke liye
fwrite($file, "Yeh naya data hai file me.");
File Close karna
Jab file ke sath kaam khatam ho jaye to use close karna zaroori hota hai taaki resources free ho jayein. fclose() se file close karte hain.

php

fclose($file);
File Modes (fopen ke liye):
"r": Read-only mode (file exist karni chahiye)

"w": Write mode (agar file nahi hai to banata hai, purana data hata deta hai)

"a": Append mode (file end me naya data add karta hai)

"r+": Read and write dono kar sakte hain

"x": Write mode lekin sirf tabhi jab file exist na kare (new file banata hai)

Simple Example: File me likhna aur padhna
php

// File open karte hain write mode me
$file = fopen("data.txt", "w");

// File me data likhte hain
fwrite($file, "Hello PHP File Handling!");

// File close karte hain
fclose($file);

// File open karte hain read mode me
$file = fopen("data.txt", "r");

// File ka content read karte hain
$content = fread($file, filesize("data.txt"));
echo $content;

// File close karte hain
fclose($file);
Points to Remember:
File handling me error handling important hai, jaise file exist karti hai ya nahi check karna.

Large files ko read karte waqt memory ka dhyan rakho, pura file ek baar me padhna memory heavy ho sakta hai.

File ke permissions bhi sahi hone chahiye warna file open nahi hogi.

# Handling Emails in PHP - 

---

## 📧 PHP me Email Kaise Send Karte Hain?

PHP me email bhejne ke liye `mail()` function ka use hota hai. Ye function simple way hai email bhejne ka bina kisi external library ke.

### `mail()` Function Syntax:
```php
mail(to, subject, message, headers, parameters);
to: Jis email address par email bhejna hai.

subject: Email ka subject line.

message: Email ka main content.

headers: Extra information jaise "From", "Reply-To", "CC", etc.

parameters: Optional command line parameters.

Simple Example:
php

$to = "example@gmail.com";
$subject = "Test Email";
$message = "Hello, ye test email hai.";
$headers = "From: sender@example.com";

if(mail($to, $subject, $message, $headers)){
    echo "Email successfully sent!";
} else {
    echo "Email sending failed.";
}
🔎 Email Validation ka Importance
Email bhejne se pehle hume email address ko validate karna chahiye, matlab check karna chahiye ki email format sahi hai ya nahi. Ye isliye zaroori hai taaki:

Galat email address par email na bhejein.

Spam hone se bachein.

Server errors na aayein.

Data clean rahe.

Validation ke liye PHP me commonly filter_var() function use hota hai:
php

$email = "user@example.com";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Valid Email";
} else {
    echo "Invalid Email";
}

# Handling Emails in PHP -  

---

## 📧 PHP me Email Kaise Bhejte Hain?

PHP me email bhejne ke liye sabse basic function hai `mail()`. Is function ka use karke hum apne program se kisi ko email bhej sakte hain.

### `mail()` Function ka Basic Syntax:

```php
mail(to, subject, message, headers);
to: Jis email address par aap email bhejna chahte ho.

subject: Email ka title ya topic.

message: Email ka main content, matlab jo aap likhna chahte ho.

headers: Extra information jaise "From" (kaun bhej raha hai), "Reply-To" (reply kis email par jana chahiye) etc.

Example:
php

$to = "friend@example.com";
$subject = "Hello from PHP";
$message = "Yeh ek test email hai.";
$headers = "From: myemail@example.com";

if(mail($to, $subject, $message, $headers)) {
    echo "Email successfully sent!";
} else {
    echo "Email sending failed!";
}
Is example me agar sab sahi hua to email chala jayega, warna error message ayega.

✅ Email Validation Kyu Zaroori Hai?
Email bhejne se pehle hume email address ko check karna chahiye ki wo sahi format me hai ya nahi. Isse hume fayda hota hai:

Galat email address par email nahi bhejna padta.

Server error nahi aata.

Spam hone ke chances kam ho jate hain.

Apka system zyada reliable aur safe banta hai.

Email Validation ka Example:
PHP me email check karne ke liye filter_var() function use hota hai:

php

$email = "user@example.com";

if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email valid hai.";
} else {
    echo "Email invalid hai.";
}
Agar email sahi format me hoga tabhi yeh "valid hai" bolega.

Summary:
PHP me email bhejne ke liye mail() function ka use hota hai.

Email address ko bhejne se pehle validate karna zaroori hota hai.

Validation se aapke email system ki reliability badhti hai aur errors kam hote hain.

# MVC Architecture – 

---

## 📚 MVC kya hai?

**MVC** ka full form hai **Model-View-Controller**. Ye ek design pattern hai jo web development me use hota hai. Iska purpose hota hai code ko organize karna taaki development aur maintenance easy ho jaye.

---

## 🧩 MVC ke 3 parts:

1. **Model**
   - Ye data aur business logic ko handle karta hai.
   - Database se data leta hai, update karta hai, aur application ki main calculations yahi karta hai.

2. **View**
   - Ye user interface ko handle karta hai, yani jo user ko dikhai deta hai.
   - HTML, CSS, aur frontend display yahi hota hai.

3. **Controller**
   - Ye Model aur View ke beech mediator ka kaam karta hai.
   - User ke request leta hai, Model se data leta hai, aur View ko data bhej kar dikhata hai.

---

## 🛠️ MVC kaam kaise karta hai?

- Jab user website pe koi action karta hai (jaise button click), to **Controller** ye request leta hai.
- Controller Model ko kehta hai data process karne ko.
- Model data se related kaam karta hai (jaise DB query).
- Model se data milne ke baad Controller View ko data bhejta hai.
- View user ko data dikhata hai.

---

## ✅ MVC ke advantages:

- **Code Separation:** Model, View, Controller alag-alag hone se code clean aur manageable hota hai.
- **Reusability:** Models aur Views ko alag se reuse kar sakte hain.
- **Easy Maintenance:** Agar kisi ek part me change karna ho, to baaki parts affect nahi hote.
- **Team Work:** Developers alag-alag parts pe ek saath kaam kar sakte hain.
- **Better Organization:** Large applications ke liye best structure hota hai.

---


✅ PHP and MySQL Connection – 
🔷 What is the purpose of connecting PHP to MySQL?
Jab hum dynamic website banate hain (like login, signup, add products), hume data ko store, retrieve, aur update karne ke liye database ki zarurat padti hai.

MySQL ek popular database system hai.

PHP ko MySQL se connect karne ke liye hum mysqli ya PDO ka use karte hain.

🔹 Method 1: MySQLi (MySQL Improved)
➤ Syntax:
php

<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>
✅ MySQLi Features:
Easy to use

Works only with MySQL

Supports object-oriented and procedural style

🔹 Method 2: PDO (PHP Data Objects)
➤ Syntax:
php

<?php
$host = "localhost";
$dbname = "mydatabase";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
✅ PDO Features:
Supports multiple database types (MySQL, PostgreSQL, SQLite, etc.)

Secure (prevents SQL injection)

Uses only object-oriented approach

🔸 Difference Between MySQLi and PDO
Feature	MySQLi	PDO
DB support	Only MySQL	Many databases
Syntax style	Procedural + OOP	OOP only
Security	Secure	More secure
Flexibility	Less flexible	Highly flexible

📘 SQL Injection – Theory ()
🔹 SQL Injection kya hota hai?
SQL Injection ek security vulnerability (suraksha ki kamzori) hoti hai jo tab hoti hai jab user ka input direct SQL query ke andar daal diya jaata hai bina verify kare.

Agar hum input ko sahi se sanitize ya validate nahi karte, to attacker SQL query me apna malicious (dangerous) code daal sakta hai.

🔹 Example se samjhiye:
php

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
Agar koi attacker input me ye daal de:

text

Username: admin
Password: ' OR '1'='1
To query banegi:

sql

SELECT * FROM users WHERE username = 'admin' AND password = '' OR '1'='1';
Iska matlab hota hai:
admin ka password kuch bhi ho, '1'='1' hamesha true hoga, to attacker bina sahi password ke login ho jayega.

🔹 Iska nuksaan kya ho sakta hai?
❌ Unauthorized access (bina username-password ke login)

❌ Data leak (users ka personal data nikal lena)

❌ Database delete ya modify ho sakta hai

❌ Website ka pura control attacker ke haath me aa sakta hai

🔹 SQL Injection se kaise bachein? (Prevention Tips)
✅ Prepared Statements ka use karo (MySQLi ya PDO me)

✅ User input ko validate aur sanitize karo

✅ HTML form me special characters block karo

✅ Error messages me SQL details na dikhayein

✅ Regularly database ko backup lete raho

🔹 Secure Example (Prepared Statement with MySQLi):
php

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
Yahaan ? placeholder hota hai jisme input data safe tareeke se bind hota hai, jisse SQL injection nahi ho sakta.

1. Exception Handling kya hota hai?
Jab program chal raha hota hai, tab kabhi-kabhi kuch error aa sakta hai, jaise database connect nahi ho paana, query fail hona, ya koi aur unexpected problem.

Exception Handling ka matlab hai ki hum in errors ko gracefully handle kar sakein, taaki program crash na ho aur user ko bhi sahi message mile.

PHP me try-catch block use karke hum exceptions ko catch kar sakte hain.

2. Try-Catch Block ka basic structure
php

try {
    // Yeh code aapko try karna hai, jahan error aa sakta hai
} catch (Exception $e) {
    // Agar exception aaye to ye code chalega
    echo "Error: " . $e->getMessage();
}
3. Database Connection me Try-Catch ka use
Database connect karte waqt agar connection fail ho jata hai to exception throw hoti hai.

Hum try block me connection code rakhenge, aur catch me error message show karenge.

php

try {
    $conn = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
    // PDO error mode exception pe set karenge, taaki errors exception banein
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
4. Query execution me Try-Catch ka use
Query chalate waqt bhi errors aa sakte hain. Unhe bhi try-catch me handle karenge.

php

try {
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach($result as $row) {
        echo $row['username'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}
5. Complete example: Connection + Query dono ke liye try-catch
php

try {
    $conn = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach($result as $row) {
        echo $row['username'] . "<br>";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
6. Why try-catch important hai?
Agar connection ya query me problem aayi to user ko friendly error message milega.

Program crash nahi hoga.

Developer ko error ka exact reason pata chalega (error message se).

Secure aur professional coding hoti hai.


Server-side validation ka matlab hota hai ki jab user form submit karta hai, tab server par bhi check karna ki data sahi format mein hai ya nahi — ye important hai security aur data accuracy ke liye. Isme hum regular expressions (regex) ka use karte hain, jo ek tarah ke patterns hote hain input validate karne ke liye.

Server-Side Validation with Regex — Simple Explanation in Hinglish
Server-side validation matlab data ko browser ke alawa server pe bhi check karna. Kyon?

Kyunki client-side (browser) validation ko easily bypass kiya ja sakta hai.

Server validation se hum sure hote hain ki data sahi hai ya nahi.

Regular Expressions (Regex) patterns hote hain jo check karte hain ki input ka format kaisa hai, jaise:

Email valid hai ya nahi

Password mein minimum characters hain ya nahi

Password mein numbers, capital letters hain ya nahi

Example: Registration Form Validation Using Regex (PHP mein)
php

<?php
// Server-side validation example

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Email validation regex
    $email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i";

    // Password validation regex (minimum 8 characters, at least one number and one capital letter)
    $password_pattern = "/^(?=.*[A-Z])(?=.*\d).{8,}$/";

    // Email validation
    if (!preg_match($email_pattern, $email)) {
        echo "Invalid email format!";
    }
    // Password validation
    elseif (!preg_match($password_pattern, $password)) {
        echo "Password must be minimum 8 characters, include at least one uppercase letter and one number.";
    } else {
        echo "Registration data is valid!";
        // Yahan pe aap database me insert kar sakte hain
    }
}
?>
Simple Summary in Hinglish:
Jab form submit hota hai, server check karta hai ki email ka format sahi hai ya nahi.

Password mein kam se kam 8 characters hone chahiye, ek capital letter hona chahiye aur ek number bhi hona chahiye.

Agar input sahi hai to aage badh jaata hai, warna error message dikhata hai.
````
