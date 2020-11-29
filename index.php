<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>קניית דירה ב 4 צעדים פשוטים</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./assets/css/style.css">

    <?php include "./components/tracking.php"
    ?>
</head>

<body class="lp-body" dir="rtl">
    <div class="container">
        <div class="row justify-content-center pt-4 pt-md-5">
            <div class="col-12">
                <div class="d-flex align-items-center header">
                    <img src="./assets/img/favicon.png" alt="דירה" height="70px">
                    <h3 class="pr-3">
                        ליווי אישי ומקצועי עד קבלת מפתחות הדירה
                    </h3>
                </div>
            </div>
            <h2 class="mt-2 mt-md-5 title">
                מזל טוב :) אם הגעת לדף זה כנראה שאתה בדרך הנכונה לקניית הדירה הבאה שלך
            </h2>
            <p class="services">
                המומחים שלנו ידאגו לך ל:
                <br>

                <span>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                    בחירת דירה
                </span>
                <br>
                <span>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                    ייעוץ עסקי
                </span>
                <br>
                <span>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                    ייעוץ משכנתאות
                </span>
                <br>
                <span>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                    בדיקת חוזה מול העורך דין
                </span>
            </p>


        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="mt-2 mt-md-5 text-center">
                    לפגישת ייעוץ חינם השאר לנו את פרטיך ונחזור אליך בהקדם
                </h4>
                <form id="form-lp" class="mt-4" method="POST">
                    <div class="form-group col-12 col-md-6 mx-auto">
                        <input type="text" class="form-control" id="name" name="name" placeholder="שם">

                        <input type="text" class="form-control mt-4" id="phone" name="phone" placeholder="טלפון">
                        <button id="submit-btn" class="btn btn-primary mt-4 col-12" type="submit">שלח</button>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <!-- loading icon -->
    <div id="loading-gif" class="loading d-none">
        <div class="spinner-wrapper">
            <span class="spinner-text">שולח נתונים</span>
            <span class="spinner"></span>
        </div>
    </div>
    <a target="_blank" href="https://wa.me/972547389772?text=%D7%A9%D7%9C%D7%95%D7%9D%20%D7%90%D7%A0%D7%99%20%D7%9E%D7%A2%D7%95%D7%A0%D7%99%D7%99%D7%9F%20%D7%91%D7%A4%D7%A8%D7%98%D7%99%D7%9D%20%D7%A2%D7%9C%20%D7%A7%D7%A0%D7%99%D7%99%D7%AA%20%D7%93%D7%99%D7%A8%D7%94%20%D7%91%204%20%D7%A9%D7%9C%D7%91%D7%99%D7%9D" class="whatsapp-icon"><i class="fa fa-whatsapp"></i></a>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>