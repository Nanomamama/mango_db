<!-- About Us Section -->
<section id="about-us" class="container my-5">
    <div class="aboutcontainer">
        <h1 class="text-center mb-4">
            รายละเอียด
            <br />เศรษฐกิจพอเพียงสวนลุงเผือก
        </h1>
        <p class="text-center">
            สวนลุงเผือกเป็นแหล่งเรียนรู้และจำหน่ายสินค้าเกษตรอินทรีย์ ตั้งอยู่ท่ามกลางธรรมชาติที่เงียบสงบ 
            ที่นี่มีมะม่วงหลากหลายพันธุ์ให้เลือกซื้อ <br> รวมถึงไก่ชี ไก่งวง เป็ด แพะ และผลิตภัณฑ์อินทรีย์ชีวภาพ นอกจากนี้ 
            ลุงเผือกยังดำเนินชีวิตตามแนวทางเศรษฐกิจพอเพียง <br> และเปิดสอนการเรียนรู้ด้านการเกษตรแบบพอเพียงให้กับผู้ที่สนใจอีกด้วย
        </p>
        <div class="text-center">
            <a href="#" class="btn cta-button-1">Get Started</a>
        </div>
    </div>
</section>
<br>
<style>
    :root {
        --green-color: rgb(2, 107, 39);
    }

    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');


    .card-body {
        /* font-family: "Roboto", sans-serif; */
        font-family: "Kanit", sans-serif;
    }

    .naw {
        /* font-family: "Roboto", sans-serif; */
        font-family: "Kanit", sans-serif;
    }

    .aboutcontainer {
        margin-top: 7rem;
    }

    .aboutcontainer h1 {
        font-size: 4rem;
        font-weight: 500;
        color: var(--green-color);
    }

    .aboutcontainer p {
        color: var(--green-color);

    }

    .cta-button-1 {
        border-radius: 20px;
        padding: 0.5rem 1.5rem;
        font-weight: 200;

        background-color: var(--green-color);
        /* พื้นหลังสีขาว */
        color: #fff;
        /* ตัวหนังสือสีดำ */
        border: 1px solid #fff;
        /* ขอบสีดำ */
        transition: 0.5s;
        /* เพิ่มเอฟเฟกต์การเปลี่ยนแปลง */
    }

    .cta-button-1:hover {
        background-color: #fff;
        border: 1px solid rgb(2, 107, 39);
        /* เปลี่ยนเป็นพื้นหลังสีดำเมื่อโฮเวอร์ */
        color: var(--green-color);
        /* ตัวหนังสือสีขาว */
        transition: 0.5s;
        /* เอฟเฟกต์การเปลี่ยนแปลง */
    }
</style>
<section id="gallery" class="container my-5">
    <!-- <h1 class="naw my-2">New</h1> -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="image-container">
                    <img src="./image/image.jpg" class="card-img-top zoom" alt="Cafe Aroma">
                </div>
            </div>
            <div class="card-body">
                <h2 class="card-title">โครงการอบรมศึกษาดูงาน</h2>
                <p class="card-text">โครงการอบรมศึกษาดูงาน”ศูนย์การเรียนรู้เศรษฐกิจพอเพียงสวนลุงเผือก และกลุ่มมะพร้าวแก้วเคียงเลยแม่น้อย</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="image-container">
                    <img src="./image/DSC05016.jpg" class="card-img-top zoom" alt="Coffee Haven">
                </div>

            </div>
            <div class="card-body">
                <h2 class="card-title">Coffee Haven</h2>
                <p class="card-text">Your sanctuary for coffee lovers, offering a wide variety of blends and pastries.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="image-container">
                    <img src="./image/มันทองเอก.jpg1_.jpg.jpg" class="card-img-top zoom" alt="The Java House">
                </div>

            </div>
            <div class="card-body">
                <h2 class="card-title">The Java House</h2>
                <p class="card-text">A perfect blend of coffee culture and art, where every sip tells a story.</p>
            </div>
        </div>
    </div>
</section>

<style>
    .image-container {
        overflow: hidden;
        height: 300px;
        /* กำหนดความสูงที่ต้องการ */
    }

    .image-container img {
        height: 100%;
        /* ทำให้ภาพเต็มความสูงของ container */
        object-fit: cover;
        /* ทำให้รูปภาพถูกครอบให้เหมาะสม */
        transition: transform 0.5s ease;
    }

    .image-container:hover img {
        transform: scale(1.2);
    }

    .card-title {
        font-weight: 400;
    }
</style>