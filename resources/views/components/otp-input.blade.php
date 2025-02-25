<!-- resources/views/components/otp-input.blade.php -->
@props(['duration' => 60]) <!-- Timer duration in seconds -->

<div class="otp-container">
    <div class="otp-box">
        @for ($i = 0; $i < 6; $i++)
            <input type="text" class="otp-input" maxlength="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57" />
        @endfor
    </div>
    
    <p class="otp-timer" id="otp-timer">Code to expire in <span class="countdown" id="countdown"></span></p>
    <button class="resend-btn d-none" id="resend-btn">Resend OTP</button>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        let timerDuration = {{ $duration }};
        let countdownEl = $('#countdown');
        let resendBtn = $('#resend-btn');
        let interval;

        function startTimer() {
            let timeLeft = timerDuration;
            countdownEl.text(formatTime(timeLeft));
            resendBtn.addClass('d-none');
            interval = setInterval(function() {
                timeLeft--;
                countdownEl.text(formatTime(timeLeft));
                if (timeLeft <= 0) {
                    clearInterval(interval);
                    $('#otp-timer').text('');
                    resendBtn.removeClass('d-none');
                }
            }, 1000);
        }

        function formatTime(seconds) {
            let minutes = Math.floor(seconds / 60);
            let secs = seconds % 60;
            return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
        }

        resendBtn.click(function() {
            startTimer(); // Restart timer
        });

        startTimer(); // Initial timer start

        $('.otp-input').on('input', function() {
            let inputVal = $(this).val();
            if (inputVal.length === 1) {
                $(this).next('.otp-input').focus();
            }
        }).on('keydown', function(e) {
            if (e.key === 'Backspace' && $(this).val() === '') {
                $(this).prev('.otp-input').focus();
            }
        });
    });
</script>

<style>
    .otp-container {
        display: flex;
        flex-direction: column;
        gap: 25px;
    }
    .otp-box {
        display: flex;
        gap: 20px;
        align-items: center;
    }
    .otp-input {
        width: 114px;
        height: 80px;
        font-size: 40px;
        font-weight: bold;
        text-align: center;
        border: none;
        border-bottom: 2px solid #008080;
        background-color: #F7FFFF;
        outline: none;
        font-family: 'Inter', sans-serif;
    }
    .otp-input:focus {
        border-bottom-color:rgb(4, 176, 176);
    }
    .otp-timer {
        color: #2D2727;
        font-size: 12px;
    }
    .countdown {
        color: #E4509A;
    }
    .resend-btn {
        margin-top: 5px;
        background: none;
        border: none;
        color: #E4509A;
        cursor: pointer;
        font-size: 14px;
    }
    .resend-btn:hover {
        text-decoration: underline;
    }
</style>
