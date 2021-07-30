<?php include_once APPROOT . '/views/inc/header.php'; ?>
<?php include_once APPROOT . '/views/inc/navbar.php'; ?>
<body>
<main>
<!-- header -->
<div class="position-relative bg-second hero-header">
    <div class="div-parent">
        <div class="div-child1 w-50 my-auto">
            <div class="child-1"><h1>An easy way to be healtful</h1></div>
            <div class="child-2"><h3>My mother has <span style="color:#42B130">PHARMA</span> eyes.</h3>
            <h3>we are the future of your health❤.</h3>
            </div>
            <div class="child-3"><button class="btn-card">get started now !</button></div>
        </div>
        <img  class="div-child2" src="<?php echo URLROOT; ?>/assets/img/imgheader.png" alt="imgheader">
    </div>
    <div class="wave position-absolute w-100">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#E8E4E6" fill-opacity="1" d="M0,128L720,320L1440,32L1440,320L720,320L0,320Z"></path>
    </svg>
    </div>
</div>
<!-- what we do? title -->
<h1 class="content  d-flex justify-content-center" style="color:#42B130">What we do ? </h1>
<!-- what we do? cards -->
<div class="content content-p d-flex flex-wrap justify-content-center">
    <div class="pharma-card my-3" >
        <div class="br-50 bg-prime icon-g"><img src="<?php echo URLROOT; ?>/assets/icons/medicine.svg" alt="icon" style="width:70%;height:70%;"></div>
        <div class="content-card">
            <h4>easy to search for meds</h4>
            <p> help you search for the existance of a specific medicament in ourpharmacies.</p>
            <button class="btn-card">let's start !</button>
        </div>
        
    </div>
    <div class="pharma-card my-3" >
        <div class="br-50 bg-prime icon-g"><img src="<?php echo URLROOT; ?>/assets/icons/pharmacy.svg" alt="icon" style="width:70%;height:70%;"></div>
        <h4>gard pharmacies</h4>
        <p>we help you know the available gard pharmaciesevery day.</p>
        <button class="btn-card">let's start !</button>
    </div>
    <div class="pharma-card my-3" >
    <div class="br-50 bg-prime icon-g"><img src="<?php echo URLROOT; ?>/assets/icons/pin.svg" alt="icon" style="width:70%;height:70%;"></div>
        <h4>access to locations</h4>
        <p>we give the exact location of our pharmacies so that youcan easily find them.</p>
        <button class="btn-card">let's start !</button>
    </div>
</div>
</div>
<!--  title  -->
<h1 class="content  d-flex justify-content-center" style="color:#42B130">Our pharmacies </h1>
<!-- affiche pharmacie -->
<div>
    <div class="section-pahrmacie div-parent ">
        <div class="content-p pharma-list">
            <div>
                <h1>Pharmacie Essada</h1>
                <p>6, av AlAhram YOUSSOUFIA</p>
            </div>
            <div>
                <h1>Pharmacie Inas</h1>
                <p>11, bd Damas , q. Salam Youssoufia YOUSSOUFIA</p>
            </div>
            <div>
                <h1>Pharmacie Kachkat</h1>
                <p>9, Rue Imam Malik , 46300 YOUSSOUFIA</p>
            </div>
        </div>
        <!-- img list pharma -->
        <img  class="img-list" src="<?php echo URLROOT; ?>/assets/img/imgpharma.png" alt="imgheader">
    </div>
</div>
<!--  title map  -->
<h1 class="content  d-flex justify-content-center" style="color:#42B130">pharmacies map </h1>
<!-- maps -->
<div class="content div-parent">
    <form  action="">
        <label for="">choose a city:</label>
            <select class="btn" id="cars" name="role">
                <option  class="btn">Youssoufia</option>
                <option >Safi</option>
            </select>
    </form>
    <div class="content-p">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d26997.194401108867!2d-8.537137174499659!3d32.24060811238484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPharmacy!5e0!3m2!1sen!2sma!4v1627231040234!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
</main>
</body>
   

<?php include_once APPROOT . '/views/inc/footer.php'; ?>