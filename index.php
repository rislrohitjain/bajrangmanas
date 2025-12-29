<?php
// Database Connection
$host = "localhost";
$user = "Admin";
$pass = "Admin@123";
$dbname = "bajrang_manas";

$folder = 'bajrang_manas';

// $domain = 'http://'. $_SERVER["HTTP_HOST"]. $_SERVER["HTTP_HOST"] . '/'. $folder .'/';
$domain =  '/'. $folder .'/';
 
 
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$message_sent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO contact_inquiries (name, phone, message) VALUES ('$name', '$phone', '$msg')";
    if ($conn->query($sql) === TRUE) { $message_sent = true; }
}
?>

<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>श्री बजरंग मानस सेवा मण्डल समिति(Shree Bajrang Manas Seva Mandal Samiti)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="image/jpeg" href="images/loard_hanuman.jpeg">

    <style>
        :root { --saffron: #FF9933; --maroon: #800000; --gold: #FFD700; }
        body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #fffaf0; scroll-behavior: smooth; }
        
        /* Navbar Styling */
        .navbar { background-color: var(--maroon) !important; border-bottom: 3px solid var(--gold); }
        .nav-link { color: white !important; font-weight: 500; margin: 0 10px; }
        .nav-link:hover { color: var(--gold) !important; }

        /* Hero Section */
        .hero-section { 
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://staticimg.amarujala.com/assets/images/2016/10/28/lord-hanuman_1477623675.jpeg?w=674&dpr=1.0&q=80'); 
            background-size: cover; background-position: center; color: white; padding: 120px 0; text-align: center; 
        }
        
        .btn-saffron { background-color: var(--saffron); color: white; font-weight: bold; border: none; padding: 12px 30px; }
        .btn-saffron:hover { background-color: #e68a00; color: white; transform: translateY(-2px); transition: 0.3s; }
        
        .section-title { color: var(--maroon); font-weight: bold; margin-bottom: 30px; text-align: center; position: relative; }
        .section-title::after { content: ''; width: 60px; height: 3px; background: var(--saffron); position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); }

        .gallery-img { width: 100%; height: 250px; object-fit: cover; border-radius: 10px; transition: 0.3s; cursor: pointer; border: 4px solid white; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .gallery-img:hover { transform: scale(1.05); }

        .contact-card { background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .card-header-custom { background: var(--maroon); color: white; padding: 20px; text-align: center; }
    </style>
	<style>
    .custom-bg {
        position: relative;
        padding: 60px 20px;
        color: #fff; /* White text looks better on backgrounds */
        text-align: center;
        overflow: hidden;
        border-radius: 15px;
    }

    .custom-bg::before {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        /* Replace URL with your actual image link */
        background-image: url('images/loard_hanuman.jpeg');
        background-size: cover;
        background-position: center;
        opacity: 0.2; /* Adjust this for transparency (0.1 to 1.0) */
        z-index: -1;
    }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?php echo $domain; ?>">श्री बजरंग मानस</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?php echo $domain; ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="#details">Program Details</a></li>
                <li class="nav-item"><a class="nav-link" href="#booking">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-section custom-bg">
    <div class="container ">
        <h1 class="display-3 fw-bold mb-3">श्री बजरंग मानस सेवा मण्डल समिति</h1>
        <p class="fs-4 mb-4">।। जय बजरंग बली ।।</p>
        <p class="lead mb-5">निःशुल्क संकीर्तन एवं संगीतमय सुन्दरकाण्ड हेतु आज ही सम्पर्क करें।</p>
        <a href="#booking" class="btn btn-saffron btn-lg shadow">Book Now / संपर्क करें</a>
    </div>
</section>

<section id="about" class="py-5">
    <div class="container">
        <h2 class="section-title">About Us (हमारे बारे में)</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="fs-5">
				
				<div class="about-committee">

    <h2>श्री बजरंग मानस सेवा मण्डल समिति, जयपुर</h2>
    <p><strong>"भक्ति, सेवा और समर्पण का संगम"</strong></p>

    <h3>हमारा परिचय</h3>
    <p>
        श्री बजरंग मानस सेवा मण्डल समिति गुलाबी नगरी जयपुर की एक प्रतिष्ठित धार्मिक संस्था है,
        जो प्रभु श्री राम और भक्त शिरोमणि हनुमान जी के चरणों में समर्पित है।
        हमारा मुख्य उद्देश्य संकीर्तन एवं प्रभु भक्ति के माध्यम से समाज में
        आध्यात्मिक ऊर्जा का संचार करना तथा मानवीय मूल्यों को बढ़ावा देना है।
    </p>

    <h3>हमारी प्रमुख सेवाएँ</h3>
    <p>
        हम पूर्णतः <strong>निःशुल्क (Free)</strong> एवं निस्वार्थ भाव से निम्नलिखित सेवाएँ प्रदान करते हैं:
    </p>

    <ul>
        <li>
            <strong>सुन्दरकाण्ड पाठ एवं संकीर्तन:</strong>
            संगीत की मधुर लहरों के साथ भावपूर्ण सुन्दरकाण्ड का पाठ।
        </li>
        <li>
            <strong>राम दरबार झांकी:</strong>
            प्रभु श्री राम, माता सीता, लक्ष्मण जी एवं हनुमान जी की भव्य एवं चित्ताकर्षक झांकी की स्थापना।
        </li>
        <li>
            <strong>साउंड एवं माइक व्यवस्था:</strong>
            कार्यक्रम हेतु उच्च गुणवत्ता की माइक एवं साउंड व्यवस्था की संपूर्ण जिम्मेदारी।
        </li>
        <li>
            <strong>धार्मिक आयोजन:</strong>
            हनुमान चालीसा पाठ, भजन संध्या तथा अन्य धार्मिक उत्सवों का सफल संचालन।
        </li>
    </ul>

    <h3>हमारी विशेषताएँ</h3>
    <ul>
        <li>
            <strong>अनुभव:</strong>
            विगत कई वर्षों से जयपुर एवं आसपास के क्षेत्रों में सैकड़ों सफल आयोजनों का अनुभव।
        </li>
        <li>
            <strong>निःशुल्क भाव:</strong>
            हम किसी भी प्रकार का शुल्क नहीं लेते; हमारी सेवा का आधार केवल श्रद्धा और भक्ति है।
        </li>
        <li>
            <strong>संगठित टीम:</strong>
            भक्ति भाव से ओत-प्रोत अनुभवी गायकों एवं वादकों की समर्पित टीम।
        </li>
    </ul>

    <blockquote>
        <p>
            <em>
                "कलियुग केवल नाम अधारा, सुमिरि सुमिरि नर उतरहिं पारा"
            </em><br>
            (कलियुग में केवल प्रभु का नाम ही आधार है, जिसके सुमिरन से मनुष्य भवसागर से पार उतर जाता है।)
        </p>
    </blockquote>

</div>


 
				
            </div>
            <div class="col-md-6">
                <img src="<?php //echo $domain; ?>images/loard_hanuman.jpeg" class="img-fluid rounded shadow" alt="Religious Activity">
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title">Image Gallery</h2>
        <div class="row g-4 mt-2">
            <div class="col-md-4"><img src="images/Salasar_balaji.jpg" class="gallery-img" alt="Mandir"></div>
            <div class="col-md-4"><img src="images/khatu.jpg" class="gallery-img" alt="Puja"></div>
            <div class="col-md-4"><img src="images/kale-hanuman-ji-temple-story.jpg" class="gallery-img" alt="Devotion"></div>
        </div>
    </div>
</section>

<section id="details" class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <h3 class="text-danger fw-bold border-bottom pb-2 mb-4">विशेष विवरण एवं नियम</h3>
                <div class="bg-white p-4 rounded shadow-sm">
                    <ul class="list-unstyled">
                        <li class="mb-3">🚩 माइक व्यवस्था, राम दरबार एवं वाद्य यंत्र <strong>निःशुल्क</strong> उपलब्ध है।</li>
                        <li class="mb-3">🚩 कार्यक्रम की बुकिंग 30 से 45 दिन पूर्व करवाना अनिवार्य है।</li>
                        <li class="mb-3">🚩 समय: सायं 6.00 बजे से 9.00 बजे तक।</li>
                        <li class="mb-3">🚩 ढोलक एवं हारमोनियम वादक का मेहनताना आयोजक द्वारा देय होगा।</li>
                        <li class="mb-3">🚩 रानी सती नगर से आने-जाने की व्यवस्था पार्टी को करनी होगी।</li>
                    </ul>
                </div>

                <h3 class="text-danger fw-bold border-bottom pb-2 mt-5 mb-4">पूजन सामग्री सूची</h3>
                <div class="bg-white p-4 rounded shadow-sm border-start border-warning border-5">
                    <p>रोली, मोली, चावल, कपूर, जनेऊ-6, नारियल, इत्र, घी, गुड़ व मिश्री, लौंग, काली मिर्च, इलायची, पान बीड़ा-2, पान पत्ते व फल/केले, पुष्पमाला-8, गुलाब की माला-2, खुले पुष्प, रूई, प्रसाद, 2 लोटे, एक थाली, 8-10 कटोरी, तुलसी का गमला।</p>
                </div>
				
				<h3 class="text-danger fw-bold border-bottom pb-2 mt-5 mb-4">लोकेशन</h3>
                <div class="">
                    <p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16884.554802483475!2d75.73669230140374!3d26.886192526345834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db4ec734d668b%3A0xc2fa02ab0cb63da1!2sAastha%20Apartment!5e1!3m2!1sen!2sin!4v1766989289065!5m2!1sen!2sin" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</p>
                </div>
				
            </div>

            <div class="col-lg-5" id="booking">
                <div class="contact-card border-0">
                    <div class="card-header-custom">
                        <h3>बुक करें / संपर्क करें</h3>
                        <small>अपनी जानकारी नीचे भरें</small>
                    </div>
                    <div class="card-body p-4">
                        <?php if($message_sent): ?>
                            <div class="alert alert-success border-0 shadow-sm">धन्यवाद! आपकी बुकिंग जानकारी प्राप्त हो गई है।</div>
                        <?php endif; ?>
                        <form action="#booking" method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-bold">आपका नाम</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">मोबाइल नंबर</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">पता / संदेश</label>
                                <textarea name="message" class="form-control" rows="4" placeholder="Event Date & Address" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-saffron w-100 py-2 fs-5">Form Submit करें</button>
                        </form>
                    </div>
                </div>
                
                <div class="mt-4 p-4 text-center rounded bg-white shadow-sm">
                    <p class="mb-1 fw-bold">📍 कार्यालय:</p>
                    <p class="small">763, आस्था अपार्टमेंट, जनपथ लेन नं. 6, रानी सती नगर, अजमेर रोड़, जयपुर-302019</p>
                    <hr>
                    <p class="mb-0 text-danger fw-bold fs-5">
					📞 093145 27303 <br>
					📞 094132 40425 <br>
					📞 096364 88336 <br>
					📞 095095 35833 <br> 
									
					</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <p class="mb-0">© 2025 श्री बजरंग मानस सेवा मण्डल समिति - जयपुर | Registration No. 182/2011-12</p>
    </div>
</footer>

<?php include 'visiting-card-modal.php'; ?>

<!-- <button type="button" class="btn btn-outline-light btn-lg ms-2 shadow" data-bs-toggle="modal" data-bs-target="#visitingCardModal">
    View Visiting Card
</button> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Using a more robust check to ensure Bootstrap is defined
    window.onload = function() {
        const modalEl = document.getElementById('visitingCardModal');
        
        if (modalEl && typeof bootstrap !== 'undefined') {
            const myModal = new bootstrap.Modal(modalEl, {
                backdrop: true,
                keyboard: true
            });

            // Delayed show to ensure smooth transition
            setTimeout(function() {
                myModal.show();
            }, 500);
        } else {
            console.error("Bootstrap or Modal element not found");
        }
    };
</script>
</body>
</html>