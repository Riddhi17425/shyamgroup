<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Widget - Final Corrected Version</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    
    <style>
        /* 1. Main Widget Container */
        #whatsapp-widget {
            position: fixed;
            bottom: 30px;
            left: 30px;
            z-index: 999999;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: auto;
            pointer-events: none; /* CRITICAL: Allows clicks to pass to the gallery behind */
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }

        /* 2. Re-enable clicks only for actual buttons/form */
        #chat-box, #whatsapp-main-btn {
            pointer-events: auto;
        }

        /* Chat Box Styling */
        #chat-box {
            width: 320px;
            max-width: 85vw;
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
            margin-bottom: 20px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(30px) scale(0.9);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            overflow: hidden;
        }

        #chat-box.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
        }

        .chat-header {
            background: #075e54;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chat-header h3 { margin: 0; font-size: 16px; color: white; }
        .close-btn { cursor: pointer; font-size: 22px; }

        .chat-form { padding: 20px; background: #e5ddd5; }
        
        /* Validation Error Styles */
        .error-msg {
            color: #d32f2f;
            font-size: 11px;
            margin-top: -10px;
            margin-bottom: 10px;
            display: none;
            font-weight: bold;
        }

        .iti { width: 100%; margin-bottom: 15px; }
        .chat-form input, .chat-form textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
        }

        .chat-form textarea { height: 80px; resize: none; margin-top: 10px; margin-bottom: 15px; }

        .start-btn {
            background: #25d366;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 10px;
            width: 100%;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .start-btn:disabled {
            background: #9edeb7;
            cursor: not-allowed;
        }

        #whatsapp-main-btn {
            background: #25d366;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

<div id="whatsapp-widget">
    <div id="chat-box">
        <div class="chat-header">
            <h3>Support Chat</h3>
            <span class="close-btn" onclick="toggleChat()">&times;</span>
        </div>

        <div class="chat-form">
            <form id="waForm">
                <label style="font-size: 12px; font-weight: bold; display: block; margin-bottom: 5px;">Phone Number</label>
                <input type="tel" id="user-phone" required>
                <div id="phone-error" class="error-msg">Please enter a valid phone number.</div>

                <textarea id="user-msg" placeholder="How can we help you?" ></textarea>
                <div id="msg-error" class="error-msg">Message must be at least 3 characters.</div>

                <button type="submit" class="start-btn" id="submit-btn">Send to WhatsApp</button>
            </form>
        </div>
    </div>

    <button id="whatsapp-main-btn" onclick="toggleChat()">
        <img src="<?php echo base_url(); ?>images/new_images/WhatsApp-btn.svg" width="35" alt="WA">
    </button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>
// 1. Initialize Phone Input
const phoneInputField = document.querySelector("#user-phone");
const phoneInput = window.intlTelInput(phoneInputField, {
    preferredCountries: ["in", "af", "ae"],
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

function toggleChat() {
    document.getElementById('chat-box').classList.toggle('active');
}

// 2. Handle Form Submission
document.getElementById("waForm").addEventListener("submit", function (e) {
    e.preventDefault();
    
    // Reset Errors
    document.getElementById("phone-error").style.display = "none";
    document.getElementById("msg-error").style.display = "none";

    const fullNumber = phoneInput.getNumber();
    const message = document.getElementById("user-msg").value.trim();
    const btn = document.getElementById("submit-btn");

    // VALIDATION
    let isValid = true;
    if (!phoneInput.isValidNumber()) {
        document.getElementById("phone-error").style.display = "block";
        isValid = false;
    }
    if (message.length < 3) {
        document.getElementById("msg-error").style.display = "block";
        isValid = false;
    }

    if (!isValid) return;

    // --- PROCESSING START ---
    const originalText = btn.innerText; 
    btn.innerText = "Processing...";
    btn.disabled = true;

    const formData = new FormData();
    formData.append('phone', fullNumber);
    formData.append('message', message);

    // Save to Database
    fetch('<?= base_url("whatsapp/inquiry") ?>', {
        method: 'POST',
        body: formData
    })
    .then(() => {
        // Redirection to WhatsApp
        const targetNumber = "918511332200";
        const wpUrl = `https://wa.me/${targetNumber}?text=${encodeURIComponent("Inquiry: " + message + "\nFrom: " + fullNumber)}`;
        window.open(wpUrl, '_blank');
    })
    .catch(err => {
        console.error("DB Error:", err);
        // Fallback: Still open WhatsApp even if DB fails
        window.open(`https://wa.me/918511332200`, '_blank');
    })
    .finally(() => {
        // --- THE FIX: RESET BUTTON ---
        btn.innerText = originalText; // Back to "Send to WhatsApp"
        btn.disabled = false;
        
        // Reset form and close
        document.getElementById("waForm").reset();
        toggleChat(); 
    });
});
</script>

</body>
</html>