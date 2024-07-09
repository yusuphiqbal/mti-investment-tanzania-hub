<!DOCTYPE html>
<html lang="en">

<?php include "includes/head.php" ?>

<body>
    <?php include "includes/navbar.php" ?>

    <header class="bg-cover bg-no-repeat bg-center bg-blend-multiply bg-fixed bg-[#212121]/50" style="background-image: url('/images/header-bg.jpg')">
        <div class="mx-auto w-full px-[15px] min-[576px]:max-w-[540px] min-[768px]:max-w-[720px] min-[992px]:max-w-[960px] min-[1200px]:max-w-[1140px] min-[1400px]:max-w-[1320px]">
            <div class="py-20">
                <h1 class="text-3xl text-center font-bold text-white mb-4">About Us</h1>
                <ul class="flex items-center justify-center">
                    <li class="mr-2"><a class="text-white" href="/">Home</a></li>
                    <li class="mr-2"><i class="bi bi-caret-right-fill text-white"></i></li>
                    <li class="text-white">About Us</li>
                </ul>
            </div>
        </div>
    </header>

    <section class="py-20">
        <div class="mx-auto w-full px-[15px] min-[576px]:max-w-[540px] min-[768px]:max-w-[720px] min-[992px]:max-w-[960px] min-[1200px]:max-w-[1140px] min-[1400px]:max-w-[1320px]">
            <div class="gap-4 lg:flex">
                <div class="flex-1 flex flex-col justify-center">
                    <h3 class="text-primary text-5xl mb-4">Where great ideas come to life!</h3>
                    <p>At MTI Tanzania Hub, we believe in fostering a sense of community and cama- raderie among our members. We encourange you to take advantage of the numerous networking opportunities, events, and resources available to you. Our shared co-working spaces and breakout areas are perfect for connecting with like-minded individuals, exchanging ideas, and exploring potential collaborations.</p>
                </div>
                <div class="flex-1"><img class="mt-8 lg:mt-0" alt="MTI Investment Tanzania Hub" src="/images/header-bg.jpg"></div>
            </div>
            <div class="flex-row-reverse mt-20 gap-4 lg:flex">
                <div class="flex-1 flex flex-col justify-center">
                    <h3 class="text-primary text-5xl mb-4">Join a community of freelancers, remote workers &amp; entreprenuers</h3>
                    <p>Our dedicated team is committed to ensuring that your experience with us is enjoyable and hassle-free. We offer a range of amenities, including high - speed internet, modern office equipment and comfortable workspaces to support your daily work routines. Whether you're a freelancer, a start-up founder, a researcher or part of a large organization, we have flexible membership options to suit your needs.</p>
                </div>
                <div class="flex-1"><img class="mt-8 lg:mt-0" alt="Freelancers" src="/images/EB_00138.jpg"></div>
            </div>
        </div>
    </section>

    <?php include "includes/partners.php" ?>

    <?php include "includes/footer.php" ?>
</body>

</html>
