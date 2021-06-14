<style>
    body {
  background-color: rgb(228, 229, 247);
}
.social-login img {
  width: 24px;
}
a {
  text-decoration: none;
}

.card {
  font-family: sans-serif;
  width: 300px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 3em;
  margin-bottom:3em;
  border-radius: 10px;
  background-color: #ffff;
  padding: 1.8rem;
  box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.1);
}

.title {
  text-align: center;
  font-weight: bold;
  margin: 0;
}
.subtitle {
  text-align: center;
  font-weight: bold;
}
.btn-text {
  margin: 0;
}

.social-login {
  display: flex;
  justify-content: center;
  gap: 5px;
}

.google-btn {
  background: #fff;
  border: solid 2px rgb(245 239 239);
  border-radius: 8px;
  font-weight: bold;
  display: flex;
  padding: 10px 10px;
  flex: auto;
  align-items: center;
  gap: 5px;
  justify-content: center;
}
.fb-btn {
  background: #fff;
  border: solid 2px rgb(69, 69, 185);
  border-radius: 8px;
  padding: 10px;
  display: flex;
  align-items: center;
}

.or {
  text-align: center;
  font-weight: bold;
  border-bottom: 2px solid rgb(245 239 239);
  line-height: 0.1em;
  margin: 25px 0;
}
.or span {
  background: #fff;
  padding: 0 10px;
}

.email-login {
  display: flex;
  flex-direction: column;
}
.email-login label {
  color: rgb(170 166 166);
}

input[type="text"],
input[type="password"] {
  padding: 15px 20px;
  margin-top: 8px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-sizing: border-box;
}

.cta-btn {
  background-color: rgb(69, 69, 185);
  color: white;
  padding: 18px 20px;
  margin-top: 10px;
  margin-bottom: 20px;
  width: 100%;
  border-radius: 10px;
  border: none;
}

.forget-pass {
  text-align: center;
  display: block;
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="card">
    <?php if(!empty($this->session->flashdata('error'))){ ?>
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <?= $this->session->flashdata('error') ?>
    </div>
    <?php } ?>
    <?php if(!empty($this->session->flashdata('success'))){ ?>
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <?= $this->session->flashdata('success') ?>
    </div>
    <?php } ?>
   <form action="<?= base_url('login'); ?>" method="post">
        <div class="row>">
       <!-- <img class="logo me-auto" style= "width: 100%; height: -50%;" src="<?=base_url()?>assets/img/logo.png"></a> --> 
      <h2 class="title">लॉग इन करें</h2>
      <!-- <p class="subtitle">खाता नहीं है? <a href="#">साइन अप करें</a></p> -->
        </div>
        <p class="or"></p>

      <div class="email-login" style="margin-top: 30px;">
          <label for="email"> <b>यूज़र आईडी</b></label>
          <input type="text" placeholder="उपयोगकर्ता आईडी दर्ज करें" name="username" required>
          <label for="psw"><b>पासवर्ड</b></label>
          <input type="password" placeholder="पासवर्ड दर्ज करें" name="password" required>

          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="captcha">Captcha</label><br>
                      <canvas id="valicode"></canvas>
                      <i id="toggle" class="fa fa-refresh fa-4px refresh-captcha" style="font-size:30px;" aria-hidden="true"></i>
                  </div>
              </div>
          </div>
          
          <input id="valiIpt" type="text" placeholder="CAPTCHA दर्ज करें" name="captcha_code" maxlength="4" autocomplete="off" oninvalid="this.setCustomValidity('कृपया CAPTCHA दर्ज करें')" oninput="this.setCustomValidity('')" pattern="[0-9 .]+" class="form-control mb-0" required="required"> 
          <span class="text-danger fw-bolder"><?= form_error('captcha_code'); ?></span>
          
      </div>
      <button type = "submit" class="cta-btn" id="loginSubmit">लॉग इन करें</button>
      <!-- <a class="forget-pass" href="#">पासवर्ड भूल गए?</a> -->
   </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function createCaptcha() {
        let rightCode = '';
        let valiIpt = document.querySelector('#valiIpt');
        let toggleBtn = document.querySelector('#toggle');
        let submitBtn = document.querySelector('#loginSubmit');
        toggleBtn.addEventListener('click', function() {
            getImgValiCode();
            //console.log('click:' + rightCode);
        }, false);

        $('#loginSubmit').click(function(event) {
            // event.preventDefault(); // cancel default behavior
            if (valiIpt.value === '') {
                alert('Please Enter Captcha');
                return false;
            }
            if (valiIpt.value !== rightCode) {
                alert('Please Enter Valid Captcha');
                return false;
            }
            //valiIpt.value = '';
            return true;
        });

        getImgValiCode();
        //console.log('init:' + rightCode);
        function getImgValiCode() {
            let showNum = [];
            let canvasWinth = 150;
            let canvasHeight = 30;
            let canvas = document.getElementById('valicode');
            let context = canvas.getContext('2d');
            canvas.width = canvasWinth;
            canvas.height = canvasHeight;
            let sCode = '0,1,2,3,4,5,6,7,8,9';
            let saCode = sCode.split(',');
            let saCodeLen = saCode.length;
            for (let i = 0; i <= 3; i++) {
                let sIndex = Math.floor(Math.random() * saCodeLen);
                let sDeg = (Math.random() * 30 * Math.PI) / 180;
                let cTxt = saCode[sIndex];
                showNum[i] = cTxt.toLowerCase();
                let x = 10 + i * 20;
                let y = 20 + Math.random() * 8;
                context.font = 'bold 25px Arial';
                context.translate(x, y);
                context.rotate(sDeg);

                context.fillStyle = randomColor();
                context.fillText(cTxt, 0, 0);

                context.rotate(-sDeg);
                context.translate(-x, -y);
            }
            for (let i = 0; i <= 5; i++) {
                context.strokeStyle = randomColor();
                context.beginPath();
                context.moveTo(
                Math.random() * canvasWinth,
                Math.random() * canvasHeight
                );
                context.lineTo(
                Math.random() * canvasWinth,
                Math.random() * canvasHeight
                );
                context.stroke();
            }
            for (let i = 0; i < 30; i++) {
                context.strokeStyle = randomColor();
                context.beginPath();
                let x = Math.random() * canvasWinth;
                let y = Math.random() * canvasHeight;
                context.moveTo(x, y);
                context.lineTo(x + 1, y + 1);
                context.stroke();
            }
            rightCode = showNum.join('');
        }

        function randomColor() {
            let r = Math.floor(Math.random() * 256);
            let g = Math.floor(Math.random() * 256);
            let b = Math.floor(Math.random() * 256);
            return 'rgb(' + r + ',' + g + ',' + b + ')';
        }
    }
    $(document).ready(function() {
        createCaptcha();
    });
</script>