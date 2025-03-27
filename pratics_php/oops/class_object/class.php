<!--1️⃣ Class Banane Ke Rules
✔ Class ko class keyword se define karte hain.
✔ Class ka naam letter ya underscore (_) se start hona chahiye.
✔ Class ke andar properties (variables) aur methods (functions) hote hain.

2️⃣ Object Banane Ke Rules
✔ Class ka object new keyword se banate hain.
✔ Ek class ke multiple objects ban sakte hain.

3️⃣ Properties (Variables) Ke Rules
✔ Class ke andar properties ko access modifiers (public, private, protected) ke saath declare karte hain.
✔ Agar koi modifier nahi diya, to public by default hota hai.
✔ Object ke through properties ko access karne ke liye -> ka use hota hai.
example : $obj = new Person();
          echo $obj->name; // ✅ Sahi tarika

4️⃣ Methods (Functions) Ke Rules
✔ Class ke andar jo functions hote hain, unhe "methods" kehte hain.
✔ Methods ko bhi public, private, ya protected access modifiers ke saath likhte hain.
✔ Methods ko call karne ke liye object aur -> ka use hota hai.

5️⃣ $this Keyword Ke Rules
✔ $this keyword current object ko refer karta hai.
✔ Class ke andar kisi property ya method ko access karne ke liye $this->property_name ya $this->method_name() use hota hai.
✔ $this sirf class ke andar use hota hai, class ke bahar nahi.

6️⃣ Object Ke Through Data Access Rules
✔ Object ke through sirf public properties aur methods access kar sakte hain.
✔ Agar property private ya protected hai, to direct access nahi hoga. 
-->
<?php 
class abc {
    public $name = "zaid";

    function fname(){
        echo "khokhawala";
    }
    function lname(){
        echo $this->name;
    }
}
$obj = new abc();
echo $obj->name;
$obj->fname();
$obj->lname();
?>