## 1. Client-Side vs. Server-Side Scripting (Hinglish Explanation):

🔹 Client-Side Scripting:
Ye code user ke browser me run hota hai. Example: JavaScript.
Iska kaam hota hai webpage ko dynamic banana, bina server se baar-baar data maange.
Jaise: form validation, animations, button click pe kuch dikhana — sab browser me hota hai.

🔹 Server-Side Scripting:
Ye code server par run hota hai. Example: PHP.
Jab user koi request karta hai (jaise form submit), tab server uss request ko process karta hai, database se data leta hai, aur HTML page ready karke client (browser) ko bhejta hai.
Jaise: login system, database se product list lana, etc.


## 2.PHP kya hai?
PHP ka full form hai Hypertext Preprocessor.
Ye ek server-side scripting language hai, jo web development ke liye use hoti hai.
Isse HTML ke andar jod kar dynamic web pages banaye jaate hain.

## 3. PHP ke Features :
PHP ek free aur easy server-side language hai 
jo sab operating systems par kaam karti hai.
Ye MySQL jaise databases se easily connect hoti hai 
aur beginners ke liye simple hoti hai. Isme bahut saare built-in functions bhi hote hain.

## 4. Echo vs Print :
Echo ek saath kai cheezein print kar sakta hai, fast hai, aur koi value return nahi karta.
Print sirf ek cheez print karta hai, thoda slow hai, aur 1 (true) return karta hai.

## 5. DiƯerence between $ and $$ 
$ : Ye normal variable ko dikhata hai. Example: $var matlab ek variable jiska naam hai var.
$$ : Ye variable variable hota hai. Matlab, ek variable ka value doosre variable ka naam ban jata hai.
example :
                $var = "name";  
                $$var = "Aman";  // Iska matlab hua $name = "Aman";

## 6. Entry Control vs. Exit Control Loop
 # Entry Control Loop:
Condition sabse pehle check hoti hai, uske baad loop chalti hai.
Example: while loop,for loop

 # while loop (Entry Control Loop)
Sabse pehle condition check karta hai.
Agar condition true hai tabhi loop chalega.
agar condition false hai, loop ek baar bhi nahi chalega.
Example:
            $i = 1;
            while ($i <= 3) {
                echo $i;
                $i++;
            }
            // Output: 123

 # for loop (Entry Control Loop)
Mostly tab use hota hai jab loop ka number of iterations pata ho.
Initialization, condition aur increment/decrement ek line me likhe jaate hain.
Condition check karta hai pehle, phir loop chalta hai.
Example:

            for ($i = 1; $i <= 3; $i++) {
             echo $i;
                 }  // Output: 123


# Exit Control Loop:
Loop ek baar zaroor chalti hai, uske baad condition check hoti hai.
Example: do...while loop.

 # do...while loop (Exit Control Loop)
Loop pehle ek baar chalta hai, bina condition check kiye.
Fir condition check karta hai.
Jab tak condition true hai, loop chalti rahegi.

Example : 
             $i = 1;
                   do {
                      echo $i;
                   $i++;
                        } while ($i <= 3);
                            // Output: 123
Agar condition initially false bhi ho, tab bhi loop ek baar chalega.


## $_SERVER
Key
Description
$_SERVER['PHP_SELF']
Current script ka path return karta hai
$_SERVER['HTTP_HOST']
Hostname return karta hai (e.g., localhost)
$_SERVER['REQUEST_METHOD']
Request method return karta hai (GET/POST)
$_SERVER['REMOTE_ADDR']
Client ka IP address return karta hai
$_SERVER['HTTP_USER_AGENT']
User ka browser aur OS details return karta hai

## ### 🔹 1. **$_FILES['file1']['name']**  
| **Key**                          | **Description** |
| `$_FILES['file1']['name']`       | Uploaded file ka naam return karega.
| `$_FILES['file1']['type']`       | File ka **MIME type** return karega. | `$_FILES['file1']['size']`  | File ka **size (bytes me)** return karega. 
| `$_FILES['file1']['tmp_name']`| Temporary file location return karega. |
| `$_FILES['file1']['error']`| Agar upload me koi error hai to uska **error code** return karega. |

 **Yeh uploaded file ka actual naam return karta hai.**  
if(isset($_FILES['file1'])) {
    echo "Uploaded File Name: " . $_FILES['file1']['name'];
}
🖥️ **Output:**Uploaded File Name: my_photo.png

 