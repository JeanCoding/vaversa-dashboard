<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>VaVersa | Home</title>
      <script src="https://cdn.tailwindcss.com"></script>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   </head>
   <body class="overflow-x-hidden">
    <!-- start of the navbar -->
      <nav class="flex w-screen">
         <div class="flex drop-shadow-lg lg:justify-between justify-center w-full lg:ml-28 mt-4">
            <div class="bg-yellow-50 py-2 px-8 rounded-full cursor-pointer">
               <img class="w-16" src="../images/vavarsa.png" alt="" />
            </div>
            <a href="login.php" class="text-black text-xl bg-yellow-50 py-2 px-8 mr-14 rounded-full hidden lg:block">Log Out</a>
         </div>
      </nav>
      <!-- end of navbar -->

      <!-- Total Plants + image -->
      <div class="lg:flex lg:justify-between">
         <div>
            <div style="border-radius: 20px;" class="drop-shadow-lg bg-yellow-50 px-10 py-6 mx-8 mt-20 lg:w-full lg:ml-28">
               <div class="flex justify-between">
                  <div>
                     <h1 class="text-black text-2xl mb-2">Goodmorning</h1>
                     <h1 class="text-pink-300 text-2xl">Nathan</h1>
                  </div>
                  <img class="w-16 h-fit ml-6 lg:hidden sm:block" src="../images/icon1.png" alt="" />
               </div>
            </div>
            <div style="border-radius: 20px;" class="drop-shadow-lg bg-yellow-50 px-10 py-6 mx-8 mt-14 lg:w-full lg:ml-28">
               <div>
                  <h1 class="text-black text-2xl mb-2 flex justify-center">
                     How Many <span class="text-pink-300 ml-3"> Plants</span>
                  </h1>
               </div>
               <div class="flex mt-4 justify-center">
                  <div>
                     <h1 class="text-black text-6xl mt-1">36</h1>
                  </div>
               </div>
            </div>
         </div>
         <img class="w-80 h-fit mr-24 mt-16 hidden lg:block" src="../images/fotomia.png" alt="" />
      </div>
    </div>
    <!-- Total Plants + image -->

    <!-- start of overview tab rightside "All Plants" + Add a Plant Code button -->
    <div>
      <div class="lg:flex lg:justify-between lg:mt-24 drop-shadow-lg">
         <img class="lg:ml-32 w-80 h-fit hidden lg:block" src="../images/eettafel.png" alt="">     
         <div style="border-radius: 20px;" class="bg-yellow-50 px-10 py-6 mx-8 mt-14 lg:w-4/12">
            <div>
               <h1 class="text-black text-2xl mb-2">
                  All <span class="text-pink-300">Plants</span>
               </h1>
            </div>
            <div class="flex mt-4">
               <img src="../images/Ellipse 5.png" class="w-16 h-fit relative right-2" alt="" />
               <div>
                  <h1 class="text-black text-lg mt-3">Peterselie</h1>
               </div>
            </div>
            <div class="flex mt-4">
               <img src="../images/Ellipse 5.png" class="w-16 h-fit relative right-2" alt="" />
               <div>
                  <h1 class="text-black text-lg mt-3">Dille</h1>
               </div>
            </div>
            <div class="flex mt-4">
               <img src="../images/Ellipse 9.png" class="w-16 h-fit relative right-2" alt="" />
               <div>
                  <h1 class="text-black text-lg mt-3">Koriander</h1>
               </div>
            </div>
         </div>
      </div>
      <div class="lg:justify-between lg:flex">
         <a class="block lg:hidden" href="addPlant.php">
            <div data-aos="fade-right" style="border-radius: 20px;" class="drop-shadow-lg bg-yellow-50 px-10 py-3 mx-8 mt-10 flex justify-center lg:w-4/12">
               <h1 class="text-black text-lg mt-1">Add a Plant & Task</h1>
            </div>
         </a>
         <!-- end of overview tab rightside "All Plants" + Add a Plant button -->
         <!-- start of all users tab -->
         <div style="border-radius: 20px;" class="bg-yellow-50 px-10 py-6 mx-8 mt-10 lg:ml-24 lg:w-4/12 lg:mt-24 lg:mb-24 relative">
            <img style="z-index: -10; top: -30px" class="absolute right-20 mt-12 mr-12 hidden lg:block" src="../images/pngtree2.png" alt=""/>
            <div>
               <h1 class="text-black text-2xl mb-2">
                  All <span class="text-pink-300">Users</span>
               </h1>
            </div>
            <div class="flex mt-4">
               <img data-aos="fade-right" src="../images/pfp1.png" class="w-16 h-fit relative right-2" alt="" />
               <div data-aos="fade-right">
                  <h1 class="text-black text-lg mt-3">Jean Kalo</h1>
               </div>
            </div>
            <div class="flex mt-4 relative">
               <img data-aos="fade-right" src="../images/pfp2.png" class="w-16 h-fit relative right-2" alt="" />
               <img style="z-index: -10; top: -30px" class="absolute left-12 lg:hidden" src="../images/pngtree.png" alt=""/>
               <div data-aos="fade-right">
                  <h1 class="text-black text-lg mt-3">Jesse Kers</h1>
               </div>
            </div>
         </div>
        <!-- end of all users tab -->
      
        <!-- Web Add a Plant Button -->
        <a class="mx-8 mt-10 w-1/3" href="addPlant.php">
         <div data-aos="fade-right" style="border-radius: 20px;" class="bg-yellow-50 px-10 py-3 flex justify-center w-full h-fit hidden lg:flex hover:drop-shadow-xl drop-shadow-lg ease-in-out duration-300">
            <h1 class="text-black text-lg mt-1">Add a Plant & Task</h1>
            </div>
         </a>
      </div>
      <div data-aos="fade-right" class="flex justify-center lg:hidden">
         <a href="login.php" style="border-radius: 20px;" class="bg-yellow-50 px-8 py-3 mx-8 mt-10 mb-12">
         Log Out
         </a>
      </div>
      <div>
         <img class="hidden lg:block" src="../images/Rectangle 1.png" alt="">
      </div>
   </body>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
      AOS.init();
    </script>
</html>
<style>
   @font-face {
   font-family: laro;
   src: url(../font/Laro-ExtraBold.ttf);
   }
   body {
   font-family: laro;
   background: linear-gradient(122.22deg, #fbfacd 0.49%, #debace 76.69%);
   }
</style>