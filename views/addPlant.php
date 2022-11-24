<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>VaVersa | Add A Plant</title>
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
            <button class="text-black text-xl bg-yellow-50 py-2 px-8 mr-14 rounded-full hidden lg:block">Log Out</button>
         </div>
      </nav>
      <!-- end of navbar -->
      <!-- form + image -->
      <div class="lg:flex lg:justify-between">
         <div>
            <div style="border-radius: 20px;" class="bg-yellow-50 px-10 py-6 mx-8 mt-20 lg:w-full lg:ml-28 drop-shadow-lg">
               <div class="flex justify-between">
                  <div>
                     <form>
                        <h1 class="text-black text-2xl mb-2 ml-2">Add a <span class="text-pink-300">Plant</span></h1>
                        <input class="w-full h-10 rounded-lg border-2 border-gray-50 outline-none bg-gray-100 pl-4 mt-2" type="text" placeholder="Plant Name" />
                        <h1 class="text-black text-xl mb-2 mt-4 ml-2">Add a <span class="text-pink-300">Task</span></h1>
                        <select class="w-full h-10 rounded-lg border-2 border-gray-50 outline-none bg-gray-100 pl-4 mt-2">
                           <option value="volvo">Give Water</option>
                           <option value="saab">Cut The Plant</option>
                           <option value="mercedes">Remove The Box</option>
                        </select>
                        <h1 class="text-black text-xl mb-2 mt-4 ml-2">Add to a <span class="text-pink-300">User</span></h1>
                        <select class="w-full h-10 rounded-lg border-2 border-gray-50 outline-none bg-gray-100 pl-4 mt-2">
                           <option value="volvo">Jean</option>
                           <option value="saab">Nathan</option>
                           <option value="mercedes">Bilal</option>
                        </select>
                        <h1 class="text-black text-xl mb-2 mt-4 ml-2">Current  <span class="text-pink-300">Date</span></h1>
                        <p class="pl-4 w-full h-10 bg-gray-100 rounded-lg pt-2">
                           <script> document.write(new Date().toLocaleDateString()); </script>
                        </p>
                        <a href="index_admin.php"><button class="h-10 rounded-lg border-2 border-none bg-pink-300 px-12 block mt-6 text-white hover:bg-pink-400 ease-in-out duration-300">Submit</button></a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <img class="w-80 h-fit mr-24 mt-32 hidden lg:block" src="../images/fotomia.png" alt="" />
      </div>
      </div>
      <!-- end of form + image -->
      <!-- start of overview tab rightside "All Plants" + Go Back button -->
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
      <div class="lg:justify-between lg:flex ">
         <a class="block lg:hidden" href="index_admin.php">
            <div data-aos="fade-right" style="border-radius: 20px;" class="bg-yellow-50 px-10 py-3 mx-8 mt-10 flex justify-center drop-shadow-lg lg:w-4/12">
               <h1 class="text-black text-lg mt-1">Go Back</h1>
            </div>
         </a>
         <!-- start of Total Plants tab -->
         <div style="border-radius: 20px;" class="bg-yellow-50 px-10 py-6 mx-8 mt-10 lg:ml-24 lg:w-4/12 lg:mt-24 lg:mb-24 relative">
            <img style="z-index: -10; top: -30px" class="absolute right-20 mt-12 mr-12 " src="../images/pngtree2.png" alt=""/>
            <div>
               <h1 class="text-black text-2xl mb-2 flex justify-center">
                  Total <span class="text-pink-300">Plants</span>
               </h1>
            </div>
            <div class="flex mt-4 justify-center">
               <div data-aos="fade-right">
                  <h1 class="text-black text-6xl mt-4 mb-12">36</h1>
               </div>
            </div>
         </div>
         <!-- end of all Total Plants tab -->
         <!-- Mobile Go Back Button -->
         <a class="mx-8 mt-10 w-1/3" href="index_admin.php">
            <div data-aos="fade-left" style="border-radius: 20px;" class="bg-yellow-50 px-10 py-3 flex justify-center w-full h-fit hidden lg:flex hover:drop-shadow-xl drop-shadow-lg ease-in-out duration-300">
               <h1 class="text-black text-lg mt-1">Go Back</h1>
            </div>
         </a>
      </div>
      <div data-aos="fade-left" class="flex justify-center lg:hidden">
         <a href="inlog.php" style="border-radius: 20px;" class="bg-yellow-50 px-8 py-3 mx-8 mt-10 mb-24">
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
