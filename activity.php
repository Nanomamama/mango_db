<!-- About Us Section -->
<section id="activity" class="container my-5">
    <div class="aboutcontainer">
        <h1 class="text-center mb-4">กิจกรรมที่สวนลุงเผือก</h1>
        <div class="activities text-center">
    <p>เพลิดเพลินกับกิจกรรมหลากหลายที่ให้ทั้งความสนุกและความรู้เกี่ยวกับเกษตรอินทรีย์เก็บผลไม้สดจากสวน เลือกเก็บมะม่วงสด ๆ จากต้น พร้อมชิมรสชาติที่หวานฉ่ำเรียนรู้การทำเกษตรอินทรีย์ <br>
    เรียนรู้เทคนิคการเพาะปลูกแบบปลอดสารเคมีและการทำปุ๋ยหมักปั่นจักรยานชมสวน สัมผัสบรรยากาศธรรมชาติอันร่มรื่นระหว่างทาง <br>
    กิจกรรม DIY งานฝีมือ ทดลองทำของที่ระลึกจากวัสดุธรรมชาติ เช่น สบู่สมุนไพรให้อาหารสัตว์ในฟาร์ม <br>
    สนุกกับการให้อาหารไก่ เป็ด และแพะ พร้อมเรียนรู้เกี่ยวกับวิถีชีวิตสัตว์เลี้ยง
    </p>
</div>

    </div>
</section>

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