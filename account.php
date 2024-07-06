<?php include("inc/header.php");?> 
<style>

.section {
  position: relative;
  z-index: 3;
  padding-top: 50px;
  padding-bottom: 50px;
}

/*.container {*/
/*  max-width: 1080px;*/
/*  margin-left: auto;*/
/*  margin-right: auto;*/
/*  padding-left: 20px;*/
/*  padding-right: 20px;*/
/*}*/

.section-header {
  margin-bottom: 50px;
  text-align: center;
}

.section-header h2 {
  color: #e00e0e;
  font-weight: bold;
  font-size: 3em;
  margin-bottom: 20px;
    margin-top: 50px;
}

.section-header p {
  color: #000000;
}

.row  {
  display: flex;
  flex-wrap: wrap;
 
  justify-content: space-between;
}

.contact-info {
  width: 50%;
}

.contact-info-item {
  display: flex;
  margin-bottom: 30px;
}

.contact-info-icon {
  height: 70px;
  width: 70px;
  background-color: #fff;
  text-align: center;
  border-radius: 50%;
}

.contact-info-icon i {
  font-size: 30px;
  line-height: 70px;
}

.contact-info-content {
  margin-left: 20px;
}

.contact-info-content h4 {
  color: #e00e0e;
  font-size: 1.4em;
  margin-bottom: 5px;
}

.contact-info-content p {
  color: #FFF;
  font-size: 1em;
}

.contact-form {
  background-color: #fff;
  padding: 40px;
  width: 45%;
  padding-bottom: 20px;
  padding-top: 20px;
}

.contact-form h2 {
  font-weight: bold;
  font-size: 2em;
  margin-bottom: 10px;
  color: #333;
}

.contact-form .input-box {
  position: relative;
  width: 100%;
  margin-top: 10px;
}

.contact-form .input-box input,
.contact-form .input-box textarea{
  width: 100%;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  border: none;
  border-bottom: 2px solid #333;
  outline: none;
  resize: none;
}

.contact-form .input-box span {
  position: absolute;
  left: 0;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  pointer-events: none;
  transition: 0.5s;
  color: #666;
}

.contact-form .input-box input:focus ~ span,
.contact-form .input-box textarea:focus ~ span{
  color: #e00e0e;
  font-size: 12px;
  transform: translateY(-20px);
}

.contact-form .input-box input[type="submit"]
{
  width: 100%;
  background: #e00e0e;
  color: #FFF;
  border: none;
  cursor: pointer;
  padding: 10px;
  font-size: 18px;
  border: 1px solid #e00e0e;
  transition: 0.5s;
}

.contact-form .input-box input[type="submit"]:hover
{
  background: #FFF;
  color: #e00e0e;
}

@media (max-width: 991px) {
  section {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  
  .row {
    flex-direction: column;
  }
  
  .contact-info {
    margin-bottom: 40px;
    width: 100%;
  }
  
  .contact-form {
    width: 100%;
  }
}


</style>

        <!-- main-area -->
        <main>
            
           <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(images/17.jpg)">
              
                <div class="container">
                    <div class="row align-items-center">
                        <div class="breadcrumb-wrap2">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                        
                    </div>
                </div>
            </section>
         
    
    <div class="section-header">
      <div class="container">
        <h2>Contact Us</h2>
        <p style="font-weight:bold;">Aligarh Unani Medical College is a distinguished institution for medicine education in the Unani system in the Indian Subcontinent. With a legacy of excellence, it is one of the oldest and most reputable private Unani colleges recognized by the Government of India and the Government of Uttar Pradesh.</p>
      </div>
    </div>
    
    <div class="container">
      <div class="row" style=" align-items: center;">
        
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-home" style="color: #e00e0e"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Address</h4>
               <span style="color:#000000;">Kasimpur Road, ACN City, Aligarh, <br> Uttar Pradesh, India - 202127</span>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone" style="color: #e00e0e"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Phone</h4>
              <span><a href="tel:+919411488834">+91-941-148-8834</a><br><a href="tel:+917055701112">+91-705-570-1112</a></span>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope" style="color: #e00e0e"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Email</h4>
                <span>
                <a href="mailto:auamc@rediffmail.com">auamc@rediffmail.com</a>
                                       </span>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
          <form action="email.php" method="post" id="contact-form" data-animation="fadeInUp" data-delay=".4s">
            <h2>Leave a Message</h2>
            <div class="input-box contact-field p-relative c-name mb-20">
          <input type="text" name="name" id="firstName" placeholder="Full Name" required/>
            </div>
            
            <div class="input-box contact-field p-relative c-name mb-20">
               <input type="number" name="mobile" id="mobile" placeholder="Phone Number" required/>
            </div>
               <div class="input-box contact-field p-relative c-name mb-20">
            <input type="email" name="email" id="emailAddress" placeholder="Email" required />
            </div>
            
            <div class="input-box contact-field p-relative c-name mb-20">
                 <input type="text" name="comment" id="comment" cols="30" rows="10" placeholder="Write Your Message" required/>
            </div>
            
            <div class="input-box">
              <input type="submit" value="Submit" name="" class="btn ss-btn">
            </div>
          </form>
        </div>
        
      </div>
            </div>
                   

<section class="map_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="map_inner">
                        <div class="about-title">
                        <h2><center>Find Us on Google Map</center></h2>
    
                        <div class="map_bind">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d899968.7663399598!2d77.14536730083805!3d28.222408978200296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974af8c42224971%3A0x10baf31225f7b06d!2sAligarh%20Unani%20Medical%20college%20and%20ACN%20Hospital!5e0!3m2!1sen!2sin!4v1686218283417!5m2!1sen!2sin" width="1800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            
                    </main>
        <!-- main-area-end -->
       
<?php include("inc/footer.php");?> 