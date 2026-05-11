<?php
// 1. Initialize variables para iwas "Undefined Index" error
$name = $email = $gender = $course = $message = "";
$hobbies = [];
$errors = [];
$show_result = false;

// 2. I-process lang ang data KAPAG pinindot na ang Register (POST method)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize Inputs (Lab 5)
    $name = htmlspecialchars(trim($_POST['name'] ?? ""));
    $email = htmlspecialchars(trim($_POST['email'] ?? ""));
    $gender = htmlspecialchars($_POST['gender'] ?? "");
    $course = htmlspecialchars($_POST['course'] ?? "");
    $message = htmlspecialchars(trim($_POST['message'] ?? ""));
    $hobbies = $_POST['hobbies'] ?? [];

    // Validation (Lab 4 & 6)
    if (empty($name)) $errors[] = "Name is required.";
    if (empty($email)) $errors[] = "Email is required.";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format.";
    if (empty($gender)) $errors[] = "Please select gender.";
    if (empty($course)) $errors[] = "Please select a course.";

    // Kung walang error, ipakita ang result
    if (empty($errors)) {
        $show_result = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Complete Registration Form</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body {
            display: flex; justify-content: center; align-items: center; min-height: 100vh;
            background: url('https://images.unsplash.com/photo-1550684848-fac1c5b4e853?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center;
            background-size: cover; flex-direction: column; padding: 40px;
        }

        /* Glassmorphism Wrapper */
        .wrapper {
            width: 450px; background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2); border-radius: 20px;
            backdrop-filter: blur(15px); color: #fff; padding: 30px; margin-bottom: 20px;
        }

        .input-box { position: relative; border-bottom: 2px solid #fff; margin: 20px 0; }
        .input-box input, .input-box select, .input-box textarea {
            width: 100%; background: transparent; border: none; outline: none; color: #fff; padding: 10px;
        }
        .input-box select option { background: #333; }

        .error-msg { background: rgba(255, 0, 0, 0.3); padding: 10px; border-radius: 5px; margin-bottom: 15px; font-size: 0.8em; }

        button { width: 100%; height: 45px; background: #fff; border: none; border-radius: 40px; cursor: pointer; font-weight: 600; transition: .3s; }
        button:hover { background: #ddd; }

        /* Output Box Design */
        .result-box {
            width: 450px; background: rgba(0, 0, 0, 0.8); border-radius: 15px;
            padding: 25px; color: #fff; border: 1px solid #00ff88;
            animation: slideIn 0.5s ease;
        }
        @keyframes slideIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .success-title { color: #00ff88; margin-bottom: 15px; text-align: center; }
        .info-row { margin-bottom: 8px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 5px; }
    </style>
</head>
<body>

    <div class="wrapper">
        <h2 style="text-align: center;">Registration</h2>

        <?php if(!empty($errors)): ?>
            <div class="error-msg">
                <?php foreach($errors as $e) echo "• $e <br>"; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="input-box">
                <input type="text" name="name" placeholder="Full Name" value="<?php echo $name; ?>">
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>">
            </div>
            <div style="margin: 15px 0;">
                <label>Gender: </label>
                <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked";?>> Male
                <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked";?>> Female
            </div>
            <div class="input-box">
                <select name="course">
                    <option value="">-- Select Course --</option>
                    <option value="BSIT" <?php if($course=="BSIT") echo "selected";?>>BSIT</option>
                    <option value="BSCS" <?php if($course=="BSCS") echo "selected";?>>BSCS</option>
                </select>
            </div>
            <div style="margin: 15px 0;">
                <label>Hobbies: </label><br>
                <input type="checkbox" name="hobbies[]" value="Coding" <?php if(in_array("Coding", $hobbies)) echo "checked";?>> Coding
                <input type="checkbox" name="hobbies[]" value="Gaming" <?php if(in_array("Gaming", $hobbies)) echo "checked";?>> Gaming
            </div>
            <div class="input-box">
                <textarea name="message" placeholder="Your Message"><?php echo $message; ?></textarea>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>

    <?php if($show_result): ?>
        <div class="result-box">
            <h3 class="success-title">✅ REGISTRATION SUCCESSFUL</h3>
            <div class="info-row"><strong>Name:</strong> <?php echo $name; ?></div>
            <div class="info-row"><strong>Email:</strong> <?php echo $email; ?></div>
            <div class="info-row"><strong>Gender:</strong> <?php echo $gender; ?></div>
            <div class="info-row"><strong>Course:</strong> <?php echo $course; ?></div>
            <div class="info-row"><strong>Hobbies:</strong> <?php echo implode(", ", $hobbies); ?></div>
            <div class="info-row"><strong>Message:</strong> <?php echo nl2br($message); ?></div>
        </div>
    <?php endif; ?>

</body>
</html>